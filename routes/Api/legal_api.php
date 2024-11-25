<?php

use App\Http\Controllers\Api\general\AuthController;
use App\Http\Controllers\Api\general\FilterController;
use App\Http\Controllers\Api\general\GeneralController;
use App\Http\Controllers\Api\general\IssueController;
use App\Http\Controllers\Api\general\MeetingController;
use App\Http\Controllers\Api\general\NotificationController;
use App\Http\Controllers\Api\Legal\ContactController;
use App\Http\Controllers\Api\Legal\HomeController;
use App\Http\Controllers\Api\Legal\SettingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Legal_api'], function () {

    //=========== auth ============
    Route::post('register', [AuthController::class, 'register']);
    Route::any('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout'])->middleware('jwt.auth');


    Route::post('forget_password', [AuthController::class, 'forget_password']);
    Route::post('password_verify_code', [AuthController::class, 'verify']);
    Route::post('password_reset', [AuthController::class, 'passwordReset']);



    //=========== general ============
    Route::get('home', [HomeController::class, 'home']);
    Route::get('create_ticket_id', [HomeController::class, 'create_ticket_id']);
    Route::get('all_nationalities', [HomeController::class, 'allNationalities']);
    Route::any('filter', [FilterController::class, 'filter']);
    Route::any('get_categories_of_subdomains', [FilterController::class, 'get_categories_of_subdomains']);

    Route::any('our_teams', [HomeController::class, 'ourTeams']);
    Route::any('our_services', [HomeController::class, 'ourServices']);
    Route::any('our_blogs', [HomeController::class, 'ourBlogs']);
    Route::any('our_offices_countries', [HomeController::class, 'ourOfficesCountries']);
    Route::any('our_cities/{country_id}', [HomeController::class, 'ourCities']);

    Route::get('blog/{id}', [GeneralController::class, 'blogDetails']);
    Route::get('team/{id}', [GeneralController::class, 'teamDetails']);
    Route::get('service/{id}', [GeneralController::class, 'serviceDetails']);
    Route::get('office_details/{id}', [GeneralController::class, 'officeDetails']);

    Route::get('about_app', [SettingController::class, 'aboutApp']);
    Route::get('conditions_and_terms', [SettingController::class, 'conditionsAndTerms']);
    Route::any('not_auth_contact_us', [ContactController::class, 'NotAuthContactUs']);

// ========================== for authentication ============================
    Route::group(['middleware' => 'jwt.auth'], function () {
        //========== User_profile ============
        Route::get('user_profile', [AuthController::class, 'userProfile']);
        Route::post('update_user_profile', [AuthController::class, 'updateUserProfile']);
        Route::any('apply_notify', [AuthController::class, 'applyNotify']);

        //=========== notifications ============
        Route::get('my_notifications', [NotificationController::class, 'legalNotifications']);

        Route::get('my_meetings', [MeetingController::class, 'myMeetings']);
        Route::post('make_appointment', [MeetingController::class, 'makeAppointment']);
        Route::get('my_issues', [IssueController::class, 'myIssues']);
        Route::get('issue/{id}', [GeneralController::class, 'issueDetails']);
        Route::any('delete_account', [AuthController::class,'deleteAccount']);

    });
});

