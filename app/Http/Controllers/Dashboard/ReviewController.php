<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ReviewRequest;
use App\Models\Review;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ReviewController extends Controller
{

    public function index()
    {
        $data['reviews']= Review::where(['type'=>auth()->guard('admin')->user()->type])->latest()->get();
        return view('Dashboard.Reviews.index', $data);
    }

    public function store(ReviewRequest $request)
    {

        $request_data = $request->except(['image','client_image']);
        if ($request->image) $request_data['image'] = uploaded($request->image, 'review');
        if ($request->hasFile('client_image')) {
            $request_data['client_image'] = uploaded($request->client_image, 'review');
        }
            Review::create($request_data+['type'=>auth()->guard('admin')->user()->type]);

        return redirect()->route('reviews.index')->with('class', 'success')->with('message', trans('back.messages.added_successfully'));
    }


    public function edit($id)
    {
        if (!Review::find($id)) {
            return redirect()->route('reviews.index')->with('class', 'danger')->with('message', trans('back.messages.try_2_access_not_found_content'));
        }
        $data['latest_reviews'] = Review::orderBy('id', 'desc')->take(5)->get();
        $data['review'] = Review::find($id);
        return view('Dashboard.Reviews.edit', $data);
    }


    public function update(ReviewRequest $request, Review $review)
    {
        $request_data = $request->except('image','client_image');

        if ($request->hasFile('image')) {
            if (!is_null($review->image)) unlink('uploads/reviews/' . $review->image);
            $request_data['image'] = uploaded($request->image, 'review');
        }

        if ($request->hasFile('client_image')) {
            if (!is_null($review->client_image)) unlink('uploads/reviews/' . $review->client_image);
            $request_data['client_image'] = uploaded($request->client_image, 'review');
        }

        $review->update($request_data);

        return redirect()->route('reviews.index')->with('success', trans('back.messages.updated_successfully'));
    }


    public function destroy($id)
    {
        if (!$review =Review::find($id)) {
            $response = ['status' => 'false', 'message' => trans('dash.messages.try_2_access_not_found_content')];
            return $response;
        }

        if (!is_null($review->image)) unlink('uploads/reviews/' . $review->image);
        if (!is_null($review->client_image)) unlink('uploads/reviews/' . $review->client_image);

        $review->delete();
        return ['status' => 'true', 'message' => trans('back.messages.deleted_successfully')];
    }

}
