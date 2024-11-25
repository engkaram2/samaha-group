<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\UserRequest;
use App\Models\Nationality;
use App\Models\User;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class UserController extends Controller
{

    public function index()
    {
        $data['users']= User::latest()->get();
        $data['nationalities']= Nationality::get();
        return view('Dashboard.Users.index', $data);
    }

    public function store(UserRequest $request)
    {
        $request_data = $request->except(['image','passport_image','password_confirmation']);
        if ($request->image) $request_data['image'] = uploaded($request->image, 'user');
        if ($request->hasFile('passport_image')) {
            $request_data['passport_image'] = uploaded($request->passport_image, 'user');
        }
            User::create($request_data);

        return redirect()->route('users.index')->with('class', 'success')->with('message', trans('back.messages.added_successfully'));
    }


    public function edit($id)
    {
        if (!User::find($id)) {
            return redirect()->route('users.index')->with('class', 'danger')->with('message', trans('back.messages.try_2_access_not_found_content'));
        }
        $data['latest_users'] = User::orderBy('id', 'desc')->take(5)->get();
        $data['user'] = User::find($id);
        return view('Dashboard.Users.edit', $data);
    }


    public function update(UserRequest $request, User $user)
    {
        $request_data = $request->except('image','passport_image');

        if ($request->hasFile('image')) {
            if (!is_null($user->image)) unlink('uploads/users/' . $user->image);
            $request_data['image'] = uploaded($request->image, 'user');
        }

        if ($request->hasFile('passport_image')) {
            if (!is_null($user->passport_image)) unlink('uploads/users/' . $user->passport_image);
            $request_data['passport_image'] = uploaded($request->passport_image, 'user');
        }

        $user->update($request_data);

        return redirect()->route('users.index')->with('success', trans('back.messages.updated_successfully'));
    }

    public function show($id)
    {
        if (!User::find($id)) {
            return redirect()->route('users.index')->with('class', 'danger')->with('message', trans('dash.messages.try_2_access_not_found_content'));
        }
        $data['user'] = User::find($id);
        return view('Dashboard.Users.show', $data);
    }
    public function destroy($id)
    {
        if (!$user =User::find($id)) {
            $response = ['status' => 'false', 'message' => trans('dash.messages.try_2_access_not_found_content')];
            return $response;
        }

        if (!is_null($user->image)) unlink('uploads/users/' . $user->image);
        if (!is_null($user->passport_image)) unlink('uploads/users/' . $user->passport_image);

        $user->delete();
        return ['status' => 'true', 'message' => trans('back.messages.deleted_successfully')];
    }

}
