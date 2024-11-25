<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\TeamRequest;
use App\Models\Team;

class TeamController extends Controller
{

    public function index()
    {
        $data['teams']= Team::where(['type'=>auth()->guard('admin')->user()->type])->latest()->get();

        return view('Dashboard.Teams.index', $data);
    }

    public function create()
    {
        $data['latest_teams'] = Team::where(['type'=>auth()->guard('admin')->user()->type])->orderBy('id', 'desc')->take(5)->get();

        return view('Dashboard.Teams.create', $data);
    }


    public function store(TeamRequest $request)
    {
        $request_data = $request->except(['image']);
        if ($request->image) $request_data['image'] = uploaded($request->image, 'team');

            Team::create($request_data+['type'=>auth()->guard('admin')->user()->type]);

        return redirect()->route('teams.index')->with('class', 'success')->with('message', trans('back.messages.added_successfully'));
    }


    public function show($id)
    {
        if (!Team::find($id)) {
            return redirect()->route('teams.index')->with('class', 'danger')->with('message', trans('dash.messages.try_2_access_not_found_content'));
        }
        $data['team'] = Team::find($id);
        return view('Dashboard.Teams.show', $data);
    }


    public function edit($id)
    {
        if (!Team::find($id)) {
            return redirect()->route('teams.index')->with('class', 'danger')->with('message', trans('back.messages.try_2_access_not_found_content'));
        }
        $data['latest_teams'] = Team::orderBy('id', 'desc')->take(5)->get();
        $data['team'] = Team::find($id);
        return view('Dashboard.Teams.edit', $data);
    }


    public function update(TeamRequest $request, Team $team)
    {
        $request_data = $request->except('image');

        if ($request->hasFile('image')) {

            if (!is_null($team->image)) unlink('uploads/teams/' . $team->image);
            $request_data['image'] = uploaded($request->image, 'team');
        }
        $team->update($request_data);

        return redirect()->route('teams.index')->with('message', trans('back.messages.updated_successfully'));
    }


    public function destroy($id)
    {
        if (!$team =Team::find($id)) {
            $response = ['status' => 'false', 'message' => trans('dash.messages.try_2_access_not_found_content')];
            return $response;
        }

        if (!is_null($team->image)) unlink('uploads/teams/' . $team->image);
        $team->delete();
        return ['status' => 'true', 'message' => trans('back.messages.deleted_successfully')];
    }

}
