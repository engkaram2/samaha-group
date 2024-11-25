<?php

use App\Http\Controllers\AgoraMeetingController;
use App\Http\Controllers\AgoraUserMeetingController;
use App\Http\Controllers\Front\AppointmentController;
use App\Http\Controllers\Front\auth\AuthController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\GeneralController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\NotificationController;
use App\Http\Controllers\Front\OfficeController;
use App\Http\Controllers\Front\reset_pass\LegalForgetPassController;
use App\Http\Controllers\Front\SearchController;
use App\Http\Controllers\Front\ServiceController;
use App\Http\Controllers\Front\ViewFilesController;
use App\Http\Controllers\ZoomController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/get-user-token',[\App\Http\Controllers\Dashboard\MeetingController::class,'getUserToken'])->name('get.user.zak.token');

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {

//    Route::domain('samaha.localhost')->group(function () {
    Route::domain('sm.' . env('MAIN_URL'))->group(function () {

        /*Route::get('zoom/new', function () {
            return view('zoom_vue');
        });*/
        Route::get('zoom/start', [ZoomController::class, 'start'])->name('zoom.start');
        Route::get('zoom/meeting', [ZoomController::class, 'meeting'])->name('zoom.meeting');

        Route::get('/joinMeeting/{url?}', [AgoraMeetingController::class, 'joinMeeting'])->name('joinMeeting');

        Route::get('/webJoinUserMeeting/{url?}', [AgoraUserMeetingController::class, 'joinUserMeeting'])->name('webJoinUserMeeting');


        Route::get('/', [HomeController::class, 'home'])->name('front.home');
        Route::get('show-chat', [HomeController::class, 'showChat'])->name('front.show-chat');

        Route::get('show-register', [AuthController::class, 'ShowRegister'])->name('front.show-register');
        Route::post('register', [AuthController::class, 'register'])->name('front.register');
        Route::get('show-login', [AuthController::class, 'showLogin'])->name('front.show-login');
        Route::post('login', [AuthController::class, 'login'])->name('front.login');


        Route::post('legal-forget-pass', [LegalForgetPassController::class, 'forget_pass'])->name('front.legal-forget-pass');
        Route::get('legal-confirm-code-page/{email}', [LegalForgetPassController::class, 'confirmCodePage'])->name('front.legal-confirm-code-page');
        Route::any('legal-check-confirm-code', [LegalForgetPassController::class, 'checkConfirmCode'])->name('front.legal-check-confirm-code');
        Route::get('legal-change-password-page', [LegalForgetPassController::class, 'changePasswordPage'])->name('front.legal-change-password-page');
        Route::post('legal-resetPassword', [LegalForgetPassController::class, 'resetPassword'])->name('front.legal-resetPassword');



        Route::get('show-search', [SearchController::class, 'showSearch'])->name('front.legal-show-search');
        Route::get('search', [SearchController::class, 'search'])->name('front.legal-search');

        Route::get('legal-services', [ServiceController::class, 'legalServices'])->name('front.legal-services');
        Route::get('legal-service-details/{service_id}', [ServiceController::class, 'legalServiceDetails'])->name('front.legal-service-details');

        Route::get('legal-news', [BlogController::class, 'legalNews'])->name('front.legal-news');
        Route::get('legal-low-update-news', [BlogController::class, 'legalLowUpdateNews'])->name('front.legal-low-update-news');
        Route::get('legal-latest-update-news', [BlogController::class, 'legalLatestUpdateNews'])->name('front.legal-latest-update-news');
        Route::get('legal-publication-news', [BlogController::class, 'legalPublicationNews'])->name('front.legal-publication-news');

        Route::get('legal-news-details/{new_id}', [BlogController::class, 'legalNewsDetails'])->name('front.legal-news-details');


        Route::get('legal-offices', [OfficeController::class, 'legalOffices'])->name('front.legal-offices');
        Route::get('legal-location-offices/{country_id}', [OfficeController::class, 'legalLocationOffices'])->name('front.legal-location-offices');

        Route::get('legal-about-app', [GeneralController::class, 'legalAboutApp'])->name('front.legal-about-app');
        Route::get('legal-terms', [GeneralController::class, 'legalTerms'])->name('front.legal-terms');

        Route::get('show-legal-contact-us', [GeneralController::class, 'showLegalContactUs'])->name('front.show-legal-contact-us');
        Route::post('legal-contact-us', [GeneralController::class, 'legalContactUs'])->name('front.legal-contact-us');

        Route::group(['middleware' => 'checkUserAuth'], function () {
            Route::any('/logout', [AuthController::class, 'logout'])->name('front.logout');
            Route::any('legal-profile', [AuthController::class, 'legalProfile'])->name('front.legal-profile');
            Route::any('legal-edit-profile/{user}', [AuthController::class, 'legalEditProfile'])->name('front.legal-edit-profile');
            Route::any('legal-issues', [AuthController::class, 'legalIssues'])->name('front.legal-issues');
//            Route::post('auth-contact', [GeneralController::class, 'auth_contact'])->name('front.auth_contact');

            Route::post('legal-make-appointment', [AppointmentController::class, 'legalMakeAppointment'])->name('front.legal-make-appointment');

            Route::get('legal-view/{id?}', [ViewFilesController::class, 'view'])->name('legal-view');

            //=========== /notifications ============
            Route::get('legal-notification', [NotificationController::class, 'legalNotifications'])->name('front.legal-notifications');
            Route::get('legal-notification-details/{id}', [NotificationController::class, 'legalNotificationDetails'])->name('front.legal-notification-details');

        });
    });
});




// open this URL
// http://localhost/samaha/public/zoom/start?meeting_id=85709966712&password=916746&name=tarek&mn=85709966712&email=tarek@gm.com


//http://localhost/samaha/public/zoom/meeting?name=dGFyZWtAZ20uY29t&mn=85353188348&email=dGFyZWtAZ20uY29t&pwd=cHV5c3BXNE9KM05POXR5VHU5dVREZz09&role=0&lang=en-US&signature=SHpFMTN4SFlUbC1UX0MzeWJFalpQUS44NTcwOTk2NjcxMi4xNjg1MTgxNzk5OTcxLjEuRUh0WVV6dGRUeXhiZG94TUpmdXRxb2hSV2NYTytMb0FkQkthbllGSTVYdz0&china=0

//https://us05web.zoom.us/j/85353188348?pwd=cHV5c3BXNE9KM05POXR5VHU5dVREZz09


//// ============ for authentication ================

//    Route::get('show-activation/{mobile}', [AuthController::class, 'show_activation'])->name('front.show_activation');
//    Route::post('check-code', [AuthController::class, 'checkCode'])->name('front.check_code');
//    Route::get('resend-sms/{mobile}', [AuthController::class, 'resendSms'])->name('front.resend-sms');
////    Route::post('resend-code', [AuthController::class, 'resendCode'])->name('front.resend-code');
//    Route::post('forget-pass', [JasemForgetPassController::class, 'forget_pass'])->name('front.forget_pass');
//    Route::get('reset-code-page/{email}', [JasemForgetPassController::class, 'resetCodePage'])->name('front.reset-code-page');
//    Route::post('check-reset-code', [JasemForgetPassController::class, 'checkResetCode'])->name('front.check-reset-code');
//    Route::get('change-password-page', [JasemForgetPassController::class, 'changePasswordPage'])->name('front.change-password-page');
//    Route::post('resetPassword', [JasemForgetPassController::class, 'resetPassword'])->name('front.resetPassword');
//// ============ // auth ================


//<li class="nav-item"><a class="nav-link {{(Route::currentRouteName() == 'front.show-blogs') ? 'active' : '' }}" href="{{route('front.show-blogs')}}">{{trans('back.nav.blogs')}}</a></li>


//https://tr.sm.connectegy.com/ar/dashboard/show_login
//https://tr.sm.connectegy.com/ar

// for sub doamains ==> https://www.educative.io/answers/how-to-create-and-manage-subdomains-in-laravel-applications

//https://marketplace.zoom.us/develop/apps/httXczAeQeGQRqYi-8M0VA/sdkoauthcredentials?check=true


// chat =====> https://socket.io/get-started/chat/



//https://www.youtube.com/watch?v=BOsdWgBjg8o&list=PL7osxfy1esdgi4q-iLPO6XkNuYIU-ncEx&index=10  ==>agora list

//https://www.agora.io/en/blog/build-a-scalable-video-chat-app-with-agora-laravel/   ==>agora laravel doc



//extension=grpc.so

//  "google/cloud-firestore": "^1.4"
///"google/cloud-firestore": "^1.37",  ====>update
