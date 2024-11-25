<?php

use App\Http\Controllers\Front\AppointmentController;
use App\Http\Controllers\Front\auth\ShaabanAuthController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\GeneralController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\NotificationController;
use App\Http\Controllers\Front\reset_pass\ShaabanForgetPassController;
use App\Http\Controllers\Front\SearchController;
use App\Http\Controllers\Front\ServiceController;
use App\Http\Controllers\Front\ViewFilesController;
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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {


//    Route::domain('services.samaha.localhost')->group(function () {
    Route::domain('shaaban.sm.'. env('MAIN_URL'))->group(function () {
        Route::get('/', [HomeController::class, 'shaabanHome'])->name('front.shaaban-home');

        Route::get('shaaban-show-register', [ShaabanAuthController::class, 'ShowRegister'])->name('front.shaaban-show-register');
        Route::post('shaaban-register', [ShaabanAuthController::class, 'register'])->name('front.shaaban-register');
        Route::get('shaaban-show-login', [ShaabanAuthController::class, 'showLogin'])->name('front.shaaban-show-login');
        Route::post('shaaban-login', [ShaabanAuthController::class, 'login'])->name('front.shaaban-login');

        Route::post('shaaban-forget-pass', [ShaabanForgetPassController::class, 'forget_pass'])->name('front.shaaban-forget-pass');
        Route::get('shaaban-confirm-code-page/{email}', [ShaabanForgetPassController::class, 'confirmCodePage'])->name('front.shaaban-confirm-code-page');
        Route::any('shaaban-check-confirm-code', [ShaabanForgetPassController::class, 'checkConfirmCode'])->name('front.shaaban-check-confirm-code');
        Route::get('shaaban-change-password-page', [ShaabanForgetPassController::class, 'changePasswordPage'])->name('front.shaaban-change-password-page');
        Route::post('shaaban-resetPassword', [ShaabanForgetPassController::class, 'resetPassword'])->name('front.shaaban-resetPassword');



        Route::get('shaaban-show-search', [SearchController::class, 'shaabanShowSearch'])->name('front.shaaban-show-search');
        Route::get('shaaban-search', [SearchController::class, 'shaabanSearch'])->name('front.shaaban-search');


        Route::get('shaaban-service-details/{service_id}', [ServiceController::class, 'shaabanServiceDetails'])->name('front.shaaban-service-details');

        Route::get('shaaban-knowledge', [BlogController::class, 'shaabanKnowledge'])->name('front.shaaban-knowledge');
        Route::get('shaaban-blogs', [BlogController::class, 'shaabanBlogs'])->name('front.shaaban-blogs');
        Route::get('shaaban-blog-details/{blog_id}', [BlogController::class, 'shaabanBlogDetails'])->name('front.shaaban-blog-details');

        Route::get('shaaban-about-app', [GeneralController::class, 'shaabanAboutApp'])->name('front.shaaban-about-app');
        Route::get('shaaban-terms', [GeneralController::class, 'shaabanTerms'])->name('front.shaaban-terms');

        Route::get('show-shaaban-contact-us', [GeneralController::class, 'showShaabanContactUs'])->name('front.show-shaaban-contact-us');
        Route::post('shaaban-contact-us', [GeneralController::class, 'shaabanContactUs'])->name('front.shaaban-contact-us');

        //=========== /notifications ============
        Route::get('shaaban-notification', [NotificationController::class, 'shaabanNotifications'])->name('front.shaaban-notifications');


        Route::group(['middleware' => 'checkUserAuth'], function () {
            Route::any('/shaaban-logout', [ShaabanAuthController::class, 'logout'])->name('front.shaaban-logout');
            Route::any('shaaban-profile', [ShaabanAuthController::class, 'shaabanProfile'])->name('front.shaaban-profile');
            Route::any('shaaban-edit-profile/{user}', [ShaabanAuthController::class, 'shaabanEditProfile'])->name('front.shaaban-edit-profile');
            Route::any('shaaban-issues', [ShaabanAuthController::class, 'shaabanIssues'])->name('front.shaaban-issues');

            Route::post('shaaban-make-appointment', [AppointmentController::class, 'shaabanMakeAppointment'])->name('front.shaaban-make-appointment');
            Route::get('shaaban-view/{id?}', [ViewFilesController::class, 'view'])->name('shaaban-view');

            //=========== /notifications ============
            Route::get('shaaban-notification', [NotificationController::class, 'shaabanNotifications'])->name('front.shaaban-notifications');
            Route::get('shaaban-notification-details/{id}', [NotificationController::class, 'shaabanNotificationDetails'])->name('front.shaaban-notification-details');
        });

    });
});
