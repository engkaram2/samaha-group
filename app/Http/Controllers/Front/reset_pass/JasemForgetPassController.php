<?php

namespace App\Http\Controllers\Front\reset_pass;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\ForgetPassRequest;
use App\Http\Requests\Front\resetPasswordRequest;
use App\Mail\ConfirmCode;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class JasemForgetPassController extends Controller
{
// =========== reset password ===========================
    public function forget_pass(ForgetPassRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error', trans('back.messages.invalid_email'));
        }
        $code = random_int(0000, 9999);

        $user->update(['activation_code' => $code]);
        Mail::to($request->email)->send(new ConfirmCode($code));
//        Mail::to('elshenaweymona92@gmail.com')->send(new TestMail());

        return redirect()->route('front.jasem-confirm-code-page', $request->email);
    }



    public function confirmCodePage($email)
    {
        return view('Front.Jasem.Auth_pages.confirm_code_page', compact('email'));
    }


    public function checkConfirmCode(Request $request)
    {

        if ($request->code1 == null || $request->code2 == null || $request->code3 == null || $request->code4 == null)
            return back()->with('error', 'عفوا كود التفعيل مطلوب');

        $activation_code = $request->code1 . $request->code2 . $request->code3 . $request->code4;
        $user = User::where('activation_code', $activation_code)->first();

        if (!$user) return back()->with('error', 'عفوا كود التحقق غير صحيح');

        $user->update(['activation_code' => null]);
        Auth::guard('web')->login($user);

        return redirect()->route('front.jasem-change-password-page');

    }


    public function changePasswordPage()
    {
        return view('Front.Jasem.Auth_pages.new_password_page');
    }


    public function resetPassword(resetPasswordRequest $request)
    {
        $user = Auth::guard('web')->user();
        $user->update(['password' => $request->password]);

//        Auth::guard('web')->logout();

        return redirect()->route('front.jasem-home');
    }
}


//"aws/aws-sdk-php": "^3.241",
