<?php

use App\Http\Controllers\Api\general\IssueController;
use App\Http\Controllers\Api\general\MeetingController;
use App\Http\Controllers\Api\general\NotificationController;
use App\Http\Controllers\Api\Shaaban\ContactController;
use App\Http\Controllers\Api\Shaaban\HomeController;
use App\Http\Controllers\Api\Shaaban\SettingController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'shaaban_api'], function () {

    //=========== general ============
    Route::get('home', [HomeController::class, 'home']);
    Route::get('our_services', [HomeController::class, 'ourServices']);
    Route::get('our_blogs', [HomeController::class, 'ourBlogs']);

//    Route::get('about_app', [SettingController::class, 'aboutApp']);
    Route::get('conditions_and_terms', [SettingController::class, 'conditionsAndTerms']);
    Route::any('not_auth_contact_us', [ContactController::class, 'NotAuthContactUs']);

    // ========================== for authentication ============================
    Route::group(['middleware' => 'jwt.auth'], function () {

        //=========== notifications ============
        Route::get('my_notifications', [NotificationController::class, 'shaabanNotifications']);
        Route::get('my_meetings', [MeetingController::class, 'shaabanMeetings']);
        Route::post('make_appointment', [MeetingController::class, 'shaabanMakeAppointment']);
        Route::get('my_issues', [IssueController::class, 'shaabanIssues']);

    });

});
