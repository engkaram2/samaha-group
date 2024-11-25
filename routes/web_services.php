<?php

use App\Http\Controllers\Front\AppointmentController;
use App\Http\Controllers\Front\auth\ServicesAuthController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\GeneralController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\NotificationController;
use App\Http\Controllers\Front\reset_pass\ServicesForgetPassController;
use App\Http\Controllers\Front\SearchController;
use App\Http\Controllers\Front\ServiceController;
use App\Http\Controllers\Front\TeamController;
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
//    Route::domain('services.samaha.'. env('MAIN_URL'))->group(function () {
    Route::domain('services.sm.'. env('MAIN_URL'))->group(function () {
        Route::get('/', [HomeController::class, 'servicesHome'])->name('front.services-home');

        Route::get('services-show-register', [ServicesAuthController::class, 'ShowRegister'])->name('front.services-show-register');
        Route::post('services-register', [ServicesAuthController::class, 'register'])->name('front.services-register');
        Route::get('services-show-login', [ServicesAuthController::class, 'showLogin'])->name('front.services-show-login');
        Route::post('services-login', [ServicesAuthController::class, 'login'])->name('front.services-login');

        Route::post('services-forget-pass', [ServicesForgetPassController::class, 'forget_pass'])->name('front.services-forget-pass');
        Route::get('services-confirm-code-page/{email}', [ServicesForgetPassController::class, 'confirmCodePage'])->name('front.services-confirm-code-page');
        Route::any('services-check-confirm-code', [ServicesForgetPassController::class, 'checkConfirmCode'])->name('front.services-check-confirm-code');
        Route::get('services-change-password-page', [ServicesForgetPassController::class, 'changePasswordPage'])->name('front.services-change-password-page');
        Route::post('services-resetPassword', [ServicesForgetPassController::class, 'resetPassword'])->name('front.services-resetPassword');



        Route::get('services-show-search', [SearchController::class, 'servicesShowSearch'])->name('front.services-show-search');
        Route::get('services-search', [SearchController::class, 'servicesSearch'])->name('front.services-search');

        Route::get('services-services', [ServiceController::class, 'servicesServices'])->name('front.services-services');
        Route::get('services-service-details/{service_id}', [ServiceController::class, 'servicesServiceDetails'])->name('front.services-service-details');

        Route::get('services-news', [BlogController::class, 'servicesNews'])->name('front.services-news');
        Route::get('services-news-details/{new_id}', [BlogController::class, 'servicesNewsDetails'])->name('front.services-news-details');


        Route::get('services-teams', [TeamController::class, 'servicesTeams'])->name('front.services-teams');

        Route::get('services-about-app', [GeneralController::class, 'servicesAboutApp'])->name('front.services-about-app');
        Route::get('services-terms', [GeneralController::class, 'servicesTerms'])->name('front.services-terms');

        Route::get('show-services-contact-us', [GeneralController::class, 'showServicesContactUs'])->name('front.show-services-contact-us');
        Route::post('services-contact-us', [GeneralController::class, 'servicesContactUs'])->name('front.services-contact-us');


        Route::group(['middleware' => 'checkUserAuth'], function () {
            Route::any('/services-logout', [ServicesAuthController::class, 'logout'])->name('front.services-logout');
            Route::any('services-profile', [ServicesAuthController::class, 'servicesProfile'])->name('front.services-profile');
            Route::any('services-edit-profile/{user}', [ServicesAuthController::class, 'servicesEditProfile'])->name('front.services-edit-profile');
            Route::any('services-issues', [ServicesAuthController::class, 'servicesIssues'])->name('front.services-issues');

            Route::post('services-make-appointment', [AppointmentController::class, 'servicesMakeAppointment'])->name('front.services-make-appointment');
            Route::get('services-view/{id?}', [ViewFilesController::class, 'view'])->name('services-view');

            //=========== /notifications ============
            Route::get('services-notification', [NotificationController::class, 'servicesNotifications'])->name('front.services-notifications');
            Route::get('services-notification-details/{id}', [NotificationController::class, 'servicesNotificationDetails'])->name('front.services-notification-details');
        });
    });
});
