<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\AdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('Dashboard.auth.show_login');
    }


    public function legalLogin(Request $request)
    {
        $request->validate(['email' => 'required', 'password' => 'required']);

        $remember = isset($request['remember']) ? $request['remember'] : false;
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password, 'type' => $request->type], $remember) && $request->type == 'legal') {

            return redirect()->route('admin.legal_home')->with('success', trans('back.messages.Admin Login Successfully'));
        }
        return back()->with('error', trans('back.messages.sorry_invalid_email_or_password'))->with('class', 'alert-danger');
    }


    public function translationLogin(Request $request)
    {
        $request->validate(['email' => 'required', 'password' => 'required']);

        $remember = isset($request['remember']) ? $request['remember'] : false;
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password, 'type' => $request->type], $remember) && $request->type == 'translation') {

            return redirect()->route('admin.translation_home')->with('success', trans('back.messages.Admin Login Successfully'));
        }
        return back()->with('error', trans('back.messages.sorry_invalid_email_or_password'))->with('class', 'alert-danger');
    }


    public function servicesLogin(Request $request)
    {
        $request->validate(['email' => 'required', 'password' => 'required']);

        $remember = isset($request['remember']) ? $request['remember'] : false;
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password, 'type' => $request->type], $remember) && $request->type == 'services') {

            return redirect()->route('admin.services_home')->with('success', trans('back.messages.Admin Login Successfully'));
        }
        return back()->with('error', trans('back.messages.sorry_invalid_email_or_password'))->with('class', 'alert-danger');
    }



    public function shaabanLogin(Request $request)
    {
        $request->validate(['email' => 'required', 'password' => 'required']);

        $remember = isset($request['remember']) ? $request['remember'] : false;
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password, 'type' => $request->type], $remember) && $request->type == 'shaaban') {

            return redirect()->route('admin.shaaban_home')->with('success', trans('back.messages.Admin Login Successfully'));
        }
        return back()->with('error', trans('back.messages.sorry_invalid_email_or_password'))->with('class', 'alert-danger');
    }


    public function jasemLogin(Request $request)
    {
        $request->validate(['email' => 'required', 'password' => 'required']);

        $remember = isset($request['remember']) ? $request['remember'] : false;
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password, 'type' => $request->type], $remember) && $request->type == 'jasem') {

            return redirect()->route('admin.jasem_home')->with('success', trans('back.messages.Admin Login Successfully'));
        }
        return back()->with('error', trans('back.messages.sorry_invalid_email_or_password'))->with('class', 'alert-danger');
    }


    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect(route('admin.show_login'));
    }


//========= legal Profile ====================

    public function showProfile()
    {
        $data['admin'] = Admin::where('id', Auth::guard('admin')->user()->id)->first();
        return view('Dashboard.auth.show_profile', $data);
    }


    public function UpdateProfile(AdminRequest $request, $id)
    {
        $request_data = $request->except(['password', 'password_confirmation', 'image', 'submit']);

        if ($request->hasFile('image')) {
//            File::delete('uploads/admins/' . $request->image);
            $request_data['image'] = uploaded($request->image, 'admin');
        }

        if (!is_null($request->password)) {
            $request_data['password'] = $request->password;
        }
        $admin = Admin::find($id)->update($request_data);
        return redirect()->route('admin.showProfile')->with('success', 'تم تعديل بنجاح');
    }
}
