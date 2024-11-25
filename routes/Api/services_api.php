<?php

use App\Http\Controllers\Api\general\GeneralController;
use App\Http\Controllers\Api\general\IssueController;
use App\Http\Controllers\Api\general\MeetingController;
use App\Http\Controllers\Api\general\NotificationController;
use App\Http\Controllers\Api\Services\ContactController;
use App\Http\Controllers\Api\Services\HomeController;
use App\Http\Controllers\Api\Services\SettingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Services_api'], function () {

    //=========== general ============
    Route::get('home', [HomeController::class, 'home']);

    Route::get('our_teams', [HomeController::class, 'ourTeams']);
    Route::get('our_services', [HomeController::class, 'ourServices']);
    Route::get('our_blogs', [HomeController::class, 'ourBlogs']);

    Route::get('about_app', [SettingController::class, 'aboutApp']);
    Route::get('conditions_and_terms', [SettingController::class, 'conditionsAndTerms']);
    Route::any('not_auth_contact_us', [ContactController::class, 'NotAuthContactUs']);

    // ========================== for authentication ============================
    Route::group(['middleware' => 'jwt.auth'], function () {

        //=========== notifications ============
        Route::get('my_notifications', [NotificationController::class, 'servicesNotifications']);
        Route::get('my_meetings', [MeetingController::class, 'servicesMeetings']);
        Route::post('make_appointment', [MeetingController::class, 'servicesMakeAppointment']);
        Route::get('my_issues', [IssueController::class, 'servicesIssues']);

    });

});

