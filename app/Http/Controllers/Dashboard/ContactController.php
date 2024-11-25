<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
//        $this->data['contacts'] = Contact::when($request->status,function($q) use($request) {
//            $q->where('read_at', null);
//        })->latest()->get();

//        $data['contacts'] = Contact::latest()->get();
        $data['contacts']= Contact::where(['type'=>auth()->guard('admin')->user()->type])->latest()->get();

        return view('Dashboard.Contacts.index', $data);
    }

    public function show($id)
    {
        if (!Contact::find($id)) {
            return redirect()->route('contacts.index')->with('class', 'danger')->with('message', trans('dash.messages.try_2_access_not_found_content'));
        }
        $this->data['contact'] = Contact::find($id);
        $this->data['contact']->update(['read_at' => now()]);
        return view('Dashboard.Contacts.show', $this->data);
    }



    public function destroy($id)
    {
        if (!$contact=Contact::find($id)) {
            $response = ['status' => 'false', 'message' => trans('dash.messages.try_2_access_not_found_content')];
            return $response;
        }
        $contact->delete();
        return ['status' => 'true', 'message' => trans('back.messages.deleted_successfully')];
    }
}
