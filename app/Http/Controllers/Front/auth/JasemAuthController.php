<?php

namespace App\Http\Controllers\Front\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\EditProfileRequest;
use App\Http\Requests\Front\LoginRequest;
use App\Http\Requests\Front\RegisterRequest;
use App\Models\Appointment;
use App\Models\Issue;
use App\Models\Nationality;
use App\Models\Token;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Facades\JWTAuth;


class JasemAuthController extends Controller
{
    public function jasemProfile()
    {
        $data['user'] = User::where('id', Auth::user()->id)->first();

        return view('Front.Jasem.Auth_pages.profile',$data);
    }

    public function jasemIssues()
    {
        $data['user'] = User::where('id', Auth::user()->id)->first();
        $data['my_issues'] = Issue::where(['user_id'=> Auth::user()->id,'type'=>'jasem'])->get();
        $data['my_appointments'] = Appointment::where(['user_id'=> Auth::user()->id,'type'=>'jasem'])->get();

        return view('Front.Jasem.Auth_pages.issues',$data);
    }

    public function ShowRegister()
    {
        $data['nationalities'] = Nationality::all();

        return view('Front.Jasem.Auth_pages.register',$data);
    }

    public function register(RegisterRequest $request)
    {
        DB::beginTransaction();
        try {
            $request_data = $request->except(['passport_image','password_confirmation']);

            if ($request->hasFile('passport_image')) $request_data['passport_image'] = uploaded($request->passport_image, 'user');

            $user = User::create($request_data);
            if ($user) {
                $jwt_token = JWTAuth::fromUser($user);
                Token::create(['jwt' => $jwt_token, 'user_id' => $user->id,]);
            }
            DB::commit();
            return redirect()->route('front.jasem-home')->with('message',trans('back.messages.register_success_welcome_in_our_website'));

        } catch (\Exception $e) {
            return back();
        }
    }


    public function showLogin()
    {
        return view('Front.Jasem.Auth_pages.login');
    }

    public function jasemEditProfile(EditProfileRequest $request, $id)
    {
        $request_data = $request->except(['password', 'password_confirmation', 'image', 'submit']);

        if ($request->hasFile('image')) {
            $request_data['image'] = uploaded($request->image, 'user');
        }

        if (!is_null($request->password)) {
            $request_data['password'] = $request->password;
        }

        $user = User::find($id)->update($request_data);
        return redirect()->route('front.jasem-profile')->with('success', 'تم تعديل بنجاح');
    }



    public function login(LoginRequest $request)
    {
        $col = self::is_email($request->email) ? 'email' : 'mobile';

        Auth::attempt([$col => $request->email, 'password' => $request->password]);

        if (!auth()->user()) return back()
            ->with('error', trans('back.messages.sorry_invalid_email_or_password'));

        $user = auth()->user();

        $jwt_token = JWTAuth::fromUser($user);
        auth()->user()->token->update(['jwt' => $jwt_token, 'fcm_web_token' => $request->fcm_web_token ?? 'none']);
        return redirect()->route('front.jasem-home')->with('message',trans('back.messages.login_successfully'));
    }


    public function logout()
    {
        auth()->user()->token->update(['jwt' => '', 'fcm_web_token' =>null]);
        Auth::logout();
        return redirect()->route('front.jasem-home')->with('message',trans('back.messages.logout_successfully'));
    }

    public function is_email($value)
    {
        return preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i', $value);
    }

}
