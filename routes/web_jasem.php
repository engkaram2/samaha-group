<?php

use App\Http\Controllers\Front\AppointmentController;
use App\Http\Controllers\Front\auth\JasemAuthController;
use App\Http\Controllers\Front\GeneralController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\NotificationController;
use App\Http\Controllers\Front\reset_pass\JasemForgetPassController;
use App\Http\Controllers\Front\SearchController;
use App\Http\Controllers\Front\ServiceController;
use App\Http\Controllers\Front\TeamController;
use App\Http\Controllers\Front\ViewFilesController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {


//    Route::domain('services.samaha.localhost')->group(function () {
    Route::domain('jasem.sm.'. env('MAIN_URL'))->group(function () {
        Route::get('/', [HomeController::class, 'jasemHome'])->name('front.jasem-home');

        Route::get('jasem-show-register', [JasemAuthController::class, 'ShowRegister'])->name('front.jasem-show-register');
        Route::post('jasem-register', [JasemAuthController::class, 'register'])->name('front.jasem-register');
        Route::get('jasem-show-login', [JasemAuthController::class, 'showLogin'])->name('front.jasem-show-login');
        Route::post('jasem-login', [JasemAuthController::class, 'login'])->name('front.jasem-login');

        Route::post('jasem-forget-pass', [JasemForgetPassController::class, 'forget_pass'])->name('front.jasem-forget-pass');
        Route::get('jasem-confirm-code-page/{email}', [JasemForgetPassController::class, 'confirmCodePage'])->name('front.jasem-confirm-code-page');

        Route::any('jasem-check-confirm-code', [JasemForgetPassController::class, 'checkConfirmCode'])->name('front.jasem-check-confirm-code');

        Route::get('jasem-change-password-page', [JasemForgetPassController::class, 'changePasswordPage'])->name('front.jasem-change-password-page');
        Route::post('jasem-resetPassword', [JasemForgetPassController::class, 'resetPassword'])->name('front.jasem-resetPassword');




        Route::get('jasem-show-search', [SearchController::class, 'jasemShowSearch'])->name('front.jasem-show-search');
        Route::get('jasem-search', [SearchController::class, 'jasemSearch'])->name('front.jasem-search');


        Route::get('jasem-services', [ServiceController::class, 'jasemServices'])->name('front.jasem-services');
        Route::get('jasem-service-details/{service_id}', [ServiceController::class, 'jasemServiceDetails'])->name('front.jasem-service-details');

        Route::get('jasem-teams', [TeamController::class, 'jasemTeams'])->name('front.jasem-teams');

        Route::get('jasem-about-app', [GeneralController::class, 'jasemAboutApp'])->name('front.jasem-about-app');
        Route::get('jasem-terms', [GeneralController::class, 'jasemTerms'])->name('front.jasem-terms');

        Route::get('show-jasem-contact-us', [GeneralController::class, 'showJasemContactUs'])->name('front.show-jasem-contact-us');
        Route::post('jasem-contact-us', [GeneralController::class, 'jasemContactUs'])->name('front.jasem-contact-us');

        //=========== /notifications ============
        Route::get('jasem-notification', [NotificationController::class, 'jasemNotifications'])->name('front.jasem-notifications');



        Route::group(['middleware' => 'checkUserAuth'], function () {
            Route::any('/jasem-logout', [JasemAuthController::class, 'logout'])->name('front.jasem-logout');
            Route::any('jasem-profile', [JasemAuthController::class, 'jasemProfile'])->name('front.jasem-profile');
            Route::any('jasem-edit-profile/{user}', [JasemAuthController::class, 'jasemEditProfile'])->name('front.jasem-edit-profile');
            Route::any('jasem-issues', [JasemAuthController::class, 'jasemIssues'])->name('front.jasem-issues');

            Route::post('jasem-make-appointment', [AppointmentController::class, 'jasemMakeAppointment'])->name('front.jasem-make-appointment');

            Route::get('jasem-view/{id?}', [ViewFilesController::class, 'view'])->name('jasem-view');

            //=========== /notifications ============
            Route::get('jasem-notification', [NotificationController::class, 'jasemNotifications'])->name('front.jasem-notifications');
            Route::get('jasem-notification-details/{id}', [NotificationController::class, 'jasemNotificationDetails'])->name('front.jasem-notification-details');
        });




    });


});
//Route::get('/', function () {
////    return view('welcome');
//    return view('samaha');
//});
