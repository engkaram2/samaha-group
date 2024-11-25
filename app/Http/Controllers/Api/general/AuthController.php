<?php

namespace App\Http\Controllers\Api\general;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ForgetPasswordRequest;
use App\Http\Requests\Api\LoginRequest;
use App\Http\Requests\Api\RegisterUserRequest;
use App\Http\Requests\Api\ResetPasswordRequest;
use App\Http\Requests\Api\UpdateUserProfileRequest;
use App\Http\Requests\Api\VerficationCodeRequest;
use App\Http\Resources\Api\AuthResource;
use App\Http\Resources\Api\UserResource;
use App\Mail\ConfirmCode;
use App\Models\Token;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{

    public function register(RegisterUserRequest $request)
    {
        $code = random_int(0000, 9999);

        DB::beginTransaction();
        try {
            $request_data = $request->except(['image','passport_image','password_confirmation']);

            if ($request->image) $request_data['image'] = uploaded($request->image, 'user');

            if ($request->passport_image) $request_data['passport_image'] = uploaded($request->passport_image, 'user');

            $user = User::create($request_data);

            if ($user) {
                $jwt_token = JWTAuth::fromUser($user);
                Token::create(['jwt' => $jwt_token, 'user_id' => $user->id]);
            }

            DB::commit();
            return responseJson(true, trans('api.messages.register_user_successfully'),$code); //OK
        } catch (\Exception $e) {
            return responseJson(false, $e->getMessage());
        }
    }

    public function userProfile()
    {
        $user = auth()->user();
        if (!$user) {
            return responseJson(false, trans('api.page_not_found'), null); //
        }
        return responseJson(true, trans('api.my_profile'), new UserResource($user));  //OK
    }

    public function updateUserProfile(UpdateUserProfileRequest $request)
    {
        $user = auth()->user();
        if (!$user) {
            return responseJson(false, trans('api.page_not_found'), null); //
        }
        $request_data = $request->except(['image','passport_image']);
        if ($request->image) {
            $request_data['image']  = uploaded($request->image, 'user');
        }
        if ($request->passport_image) $request_data['passport_image'] = uploaded($request->passport_image, 'user');

        $user->update($request_data);
        return responseJson(true, trans('api.messages.request_done_successfully'), new UserResource($user)); //ACCEPTED
    }


    public function Login(LoginRequest $request)
    {
        try {
            if (!$token = JWTAuth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return responseJson(false, trans('api.sorry_invalid_email_or_password'), null);
            }
            $user = auth()->user();

            $user->token->update(['jwt' => $token, 'fcm' => $request->fcm]);

            return responseJson(true, trans('api.messages.login_successfully'), new AuthResource($user));  //OK

        } catch (\Exception $e) {
            return responseJson('500', $e->getMessage(), null);
        }
    }

    public function applyNotify(Request $request)
    {
        auth()->user()->token->update(['fcm' => $request->fcm]);

        return responseJson(true, trans('api.messages.request_done_successfully'), null); //OK
    }


    public function logout(Request $request)
    {
        auth()->user()->token->update(['jwt' => '', 'fcm' =>null]);
        auth()->logout();
        return responseJson(true, trans('api.messages.logout_successfully'), null); //OK
    }

    public function deleteAccount(Request $request)
    {
        $user =  auth()->user();
        if (!$user) {
            return responseJson(false, trans('api.messages.The user has not found '), null);//NOT_FOUND
        }
//        auth()->user()->delete();
        $user->update(['is_want_delete_account' => 1]);
        auth()->user()->token->update(['jwt' => '', 'fcm' =>null]);
        auth()->logout();
        return responseJson(true, trans('api.messages.request_done_successfully'), null); //OK
    }







    // ====================== forget_password ============================
    public function forget_password(ForgetPasswordRequest $request)
    {
        $user = User::where('email', $request->email)->first();
        $code = create_rand_numbers();
        $user->update(['activation_code' => $code]);
        Mail::to($request->email)->send(new ConfirmCode($code));
        return responseJson(true, trans('api.messages.send_confirmation_code'), $code); //
    }


    public function verify(VerficationCodeRequest $request)
    {

        if ($user = User::where('activation_code', $request->code)->first()) {
            auth()->login($user);
            return responseJson(true, trans('api.messages.confirm_successfully'), null); //
        }
        return responseJson(false, trans('api.messages.wrong_code'), null); //
    }


    public function passwordReset(ResetPasswordRequest $request)
    {
        $user = User::where('email', $request['email'])->first();
        $user->update(['password' => $request['password']]);

        return responseJson(true, trans('api.messages.updated_successfully'), null); //

    }


}
