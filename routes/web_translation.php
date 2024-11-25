<?php

use App\Http\Controllers\Front\AppointmentController;
use App\Http\Controllers\Front\auth\TranslationAuthController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\GeneralController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\NotificationController;
use App\Http\Controllers\Front\OfficeController;
use App\Http\Controllers\Front\reset_pass\TranslationForgetPassController;
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


//    Route::domain('translation.samaha.localhost')->group(function () {
//    Route::domain('translation.samaha.'. env('MAIN_URL'))->group(function () {
    Route::domain('tr.sm.'. env('MAIN_URL'))->group(function () {
        Route::get('/', [HomeController::class, 'translation_home'])->name('front.translation-home');


        Route::get('translation-show-register', [TranslationAuthController::class, 'ShowRegister'])->name('front.translation-show-register');
        Route::post('translation-register', [TranslationAuthController::class, 'register'])->name('front.translation-register');
        Route::get('translation-show-login', [TranslationAuthController::class, 'showLogin'])->name('front.translation-show-login');
        Route::post('translation-login', [TranslationAuthController::class, 'login'])->name('front.translation-login');


        Route::post('translation-forget-pass', [TranslationForgetPassController::class, 'forget_pass'])->name('front.translation-forget-pass');
        Route::get('translation-confirm-code-page/{email}', [TranslationForgetPassController::class, 'confirmCodePage'])->name('front.translation-confirm-code-page');
        Route::any('translation-check-confirm-code', [TranslationForgetPassController::class, 'checkConfirmCode'])->name('front.translation-check-confirm-code');
        Route::get('translation-change-password-page', [TranslationForgetPassController::class, 'changePasswordPage'])->name('front.translation-change-password-page');
        Route::post('translation-resetPassword', [TranslationForgetPassController::class, 'resetPassword'])->name('front.translation-resetPassword');


        Route::get('translation-show-search', [SearchController::class, 'translationShowSearch'])->name('front.translation-show-search');
        Route::get('translation-search', [SearchController::class, 'translationSearch'])->name('front.translation-search');


        Route::get('translation-news', [BlogController::class, 'translationNews'])->name('front.translation-news');
        Route::get('translation-news-details/{new_id}', [BlogController::class, 'translationNewsDetails'])->name('front.translation-news-details');

        Route::get('translation-services', [ServiceController::class, 'translationServices'])->name('front.translation-services');
        Route::get('translation-service-details/{service_id}', [ServiceController::class, 'translationServiceDetails'])->name('front.translation-service-details');

        Route::get('translation-offices', [OfficeController::class, 'translationOffices'])->name('front.translation-offices');
        Route::get('translation-location-offices/{country_id}', [OfficeController::class, 'translationLocationOffices'])->name('front.translation-location-offices');

        Route::get('translation-about-app', [GeneralController::class, 'translationAboutApp'])->name('front.translation-about-app');
        Route::get('translation-terms', [GeneralController::class, 'translationTerms'])->name('front.translation-terms');


        Route::get('show-translation-contact-us', [GeneralController::class, 'showTranslationContactUs'])->name('front.show-translation-contact-us');
        Route::post('translation-contact-us', [GeneralController::class, 'translationContactUs'])->name('front.translation-contact-us');

        //=========== /notifications ============
        Route::get('translation-notification', [NotificationController::class, 'translationNotifications'])->name('front.translation-notifications');


        Route::group(['middleware' => 'checkUserAuth'], function () {
            Route::any('/translation-logout', [TranslationAuthController::class, 'logout'])->name('front.translation-logout');
            Route::any('translation-profile', [TranslationAuthController::class, 'translationProfile'])->name('front.translation-profile');
            Route::any('translation-edit-profile/{user}', [TranslationAuthController::class, 'translationEditProfile'])->name('front.translation-edit-profile');
            Route::any('translation-translations', [TranslationAuthController::class, 'translationTranslation'])->name('front.translation-translations');

            Route::post('translation-make-appointment', [AppointmentController::class, 'translationMakeAppointment'])->name('front.translation-make-appointment');

            Route::get('translation-view-file/{id?}', [ViewFilesController::class, 'view_file'])->name('translation-view-file');
            Route::get('translation-view-file-translation/{id?}', [ViewFilesController::class, 'view_file_translation'])->name('translation-view-file-translation');


            //=========== /notifications ============
            Route::get('translation-notification', [NotificationController::class, 'translationNotifications'])->name('front.translation-notifications');
            Route::get('translation-notification-details/{id}', [NotificationController::class, 'translationNotificationDetails'])->name('front.translation-notification-details');
        });
    });
});
