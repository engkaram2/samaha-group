<?php

use App\Http\Controllers\Api\general\GeneralController;
use App\Http\Controllers\Api\general\IssueController;
use App\Http\Controllers\Api\general\MeetingController;
use App\Http\Controllers\Api\general\NotificationController;

use App\Http\Controllers\Api\general\TranslationController;
use App\Http\Controllers\Api\Translations\ContactController;
use App\Http\Controllers\Api\Translations\HomeController;
use App\Http\Controllers\Api\Translations\SettingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'translation_api'], function () {

    //=========== general ============
    Route::get('home', [HomeController::class, 'home']);

    Route::get('our_teams', [HomeController::class, 'ourTeams']);
    Route::get('our_services', [HomeController::class, 'ourServices']);
    Route::get('our_blogs', [HomeController::class, 'ourBlogs']);
    Route::get('our_offices_countries', [HomeController::class, 'ourOfficesCountries']);

    Route::get('about_app', [SettingController::class, 'aboutApp']);
    Route::get('conditions_and_terms', [SettingController::class, 'conditionsAndTerms']);
    Route::any('not_auth_contact_us', [ContactController::class, 'NotAuthContactUs']);

    // ========================== for authentication ============================
    Route::group(['middleware' => 'jwt.auth'], function () {

        //=========== notifications ============
        Route::get('my_notifications', [NotificationController::class, 'translationNotifications']);
        Route::get('my_meetings', [MeetingController::class, 'translationMeetings']);
        Route::post('make_appointment', [MeetingController::class, 'translationMakeAppointment']);
        Route::get('my_issues', [IssueController::class, 'translationIssues']);
        Route::get('my_translations', [TranslationController::class, 'translationTranslations']);

    });

});

