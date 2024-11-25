<?php

namespace App\Http\Controllers\Front\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\EditProfileRequest;
use App\Http\Requests\Front\LoginRequest;
use App\Http\Requests\Front\RegisterRequest;
use App\Models\Country;
use App\Models\Nationality;
use App\Models\Token;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function legalProfile()
    {
        $data['user'] = User::where('id', Auth::user()->id)->first();

        return view('Front.Legal.Auth_pages.profile',$data);
    }

    public function legalIssues()
    {
        $data['user'] = User::where('id', Auth::user()->id)->first();

        return view('Front.Legal.Auth_pages.issues',$data);
    }

    public function ShowRegister()
    {
        $data['nationalities'] = Nationality::all();

        return view('Front.Legal.Auth_pages.register',$data);
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
            return redirect()->route('front.home')->with('message',trans('back.messages.register_success_welcome_in_our_website'));

//            return redirect()->route('front.home');
        } catch (\Exception $e) {
            return back();
        }
    }


    public function showLogin()
    {
        $data['countries'] = Country::all();
        return view('Front.Legal.Auth_pages.login', $data);
    }

    public function legalEditProfile(EditProfileRequest $request, $id)
    {
        $request_data = $request->except(['password', 'password_confirmation', 'image', 'submit']);

        if ($request->hasFile('image')) {
            $request_data['image'] = uploaded($request->image, 'user');
        }

        if (!is_null($request->password)) {
            $request_data['password'] = $request->password;
        }

        $user = User::find($id)->update($request_data);
        return redirect()->route('front.legal-profile')->with('success', 'تم تعديل بنجاح');
    }



    public function login(LoginRequest $request)
    {
        $col = self::is_email($request->email) ? 'email' : 'mobile';

        Auth::attempt([$col => $request->email, 'password' => $request->password]);

        if (!auth()->user()) return back()
            ->with('error', trans('back.sorry_invalid_email_or_password'));

        $user = auth()->user();

        $jwt_token = JWTAuth::fromUser($user);
        auth()->user()->token->update(['jwt' => $jwt_token, 'fcm_web_token' => $request->fcm_web_token ?? 'none']);
        return redirect()->route('front.home')->with('message',trans('back.messages.login_successfully'));
    }


    public function logout()
    {
        auth()->user()->token->update(['jwt' => '', 'fcm_web_token' =>null]);
        Auth::logout();
        return redirect()->route('front.home')->with('message',trans('back.messages.logout_successfully'));
    }
    public function is_email($value)
    {
//        return preg_match('/^([a-zA-Z0-9_.]*)@.*\.com$/i', $value);
        return preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i', $value);
    }

}
