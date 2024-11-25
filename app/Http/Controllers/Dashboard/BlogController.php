<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class BlogController extends Controller
{

    public function index()
    {
        $data['blogs']= Blog::where(['type'=>auth()->guard('admin')->user()->type])->latest()->get();
        return view('Dashboard.Blogs.index', $data);
    }

    public function create()
    {
        $data['latest_blogs'] = Blog::where(['type'=>auth()->guard('admin')->user()->type])->orderBy('id', 'desc')->take(5)->get();
        return view('Dashboard.Blogs.create', $data);
    }


    public function store(BlogRequest $request)
    {
        $request_data = $request->except(['image','page_image']);
        if ($request->image) $request_data['image'] = uploaded($request->image, 'blog');
        if ($request->hasFile('page_image')) {
            $request_data['page_image'] = uploaded($request->page_image, 'blog');
        }
            Blog::create($request_data+['type'=>auth()->guard('admin')->user()->type]);

        return redirect()->route('blogs.index')->with('class', 'success')->with('message', trans('back.messages.added_successfully'));
    }


    public function show($id)
    {
        if (!Blog::find($id)) {
            return redirect()->route('blogs.index')->with('class', 'danger')->with('message', trans('dash.messages.try_2_access_not_found_content'));
        }
        $data['blog'] = Blog::find($id);
        $data['blog_details'] = Blog::where('id', $data['blog']->id)->first();
        $data['related_blogs'] = Blog::where(['type'=>auth()->guard('admin')->user()->type])->latest()->take(3)->get();
        return view('Dashboard.Blogs.show', $data);
    }


    public function edit($id)
    {
        if (!Blog::find($id)) {
            return redirect()->route('blogs.index')->with('class', 'danger')->with('message', trans('back.messages.try_2_access_not_found_content'));
        }
        $data['latest_blogs'] = Blog::orderBy('id', 'desc')->take(5)->get();
        $data['blog'] = Blog::find($id);
        return view('Dashboard.Blogs.edit', $data);
    }


    public function update(BlogRequest $request, Blog $blog)
    {
        $request_data = $request->except('image','page_image');

        if ($request->hasFile('image')) {
            if (!is_null($blog->image)) unlink('uploads/blogs/' . $blog->image);
            $request_data['image'] = uploaded($request->image, 'blog');
        }

        if ($request->hasFile('page_image')) {
            if (!is_null($blog->page_image)) unlink('uploads/blogs/' . $blog->page_image);
            $request_data['page_image'] = uploaded($request->page_image, 'blog');
        }

        $blog->update($request_data);

        return redirect()->route('blogs.index')->with('success', trans('back.messages.updated_successfully'));
    }


    public function destroy($id)
    {
        if (!$blog =Blog::find($id)) {
            $response = ['status' => 'false', 'message' => trans('dash.messages.try_2_access_not_found_content')];
            return $response;
        }

        if (!is_null($blog->image)) unlink('uploads/blogs/' . $blog->image);
        if (!is_null($blog->page_image)) unlink('uploads/blogs/' . $blog->page_image);

        $blog->delete();
        return ['status' => 'true', 'message' => trans('back.messages.deleted_successfully')];
    }


    public function ChangeStatus(Request $request)
    {
        $data = $request->all();

        $currentModel = Blog::find($request->id);

        if (!$updateStatus = updateStatus($data, $currentModel))
            return response()->json(['requestStatus' => false, 'message' => trans('api.server-internal-error')]);

        return response()->json(['requestStatus' => true, 'message' => trans('back.edit-status')]);
    }




}
