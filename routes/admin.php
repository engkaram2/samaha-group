<?php

use App\Http\Controllers\AgoraMeetingController;
use App\Http\Controllers\AgoraUserMeetingController;
use App\Http\Controllers\Dashboard\ActivityController;
use App\Http\Controllers\Dashboard\AppointmentController;
use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\ChatController;
use App\Http\Controllers\Dashboard\CityController;
use App\Http\Controllers\Dashboard\ContactController;
use App\Http\Controllers\Dashboard\CountryController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\IssueController;
use App\Http\Controllers\Dashboard\MeetingController;
use App\Http\Controllers\Dashboard\NationalityController;
use App\Http\Controllers\Dashboard\BlogController;
use App\Http\Controllers\Dashboard\NotificationController;
use App\Http\Controllers\Dashboard\OfficeController;
use App\Http\Controllers\Dashboard\ReviewController;
use App\Http\Controllers\Dashboard\ServiceController;
use App\Http\Controllers\Dashboard\Settings\JasemSettingController;
use App\Http\Controllers\Dashboard\Settings\LegalSettingController;
use App\Http\Controllers\Dashboard\Settings\SectionController;
use App\Http\Controllers\Dashboard\Settings\ServicesSettingController;
use App\Http\Controllers\Dashboard\Settings\ShaabanSettingController;
use App\Http\Controllers\Dashboard\Settings\TranslationSettingController;
use App\Http\Controllers\Dashboard\SliderController;
use App\Http\Controllers\Dashboard\TeamController;
use App\Http\Controllers\Dashboard\TranslationController;
use App\Http\Controllers\Dashboard\UserController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
//use Google\Cloud\Firestore\FirestoreClient;
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {

    Route::group(['prefix' => 'dashboard'], function () {

        Route::get('/show_login', [AuthController::class, 'loginView'])->name('admin.show_login');
        Route::post('/legal_login', [AuthController::class, 'legalLogin'])->name('admin.legal_login');
        Route::post('/translation_login', [AuthController::class, 'translationLogin'])->name('admin.translation_login');
        Route::post('/services_login', [AuthController::class, 'servicesLogin'])->name('admin.services_login');
        Route::post('/shaaban_login', [AuthController::class, 'shaabanLogin'])->name('admin.shaaban_login');
        Route::post('/jasem_login', [AuthController::class, 'jasemLogin'])->name('admin.jasem_login');

        Route::group(['middleware' => 'CheckAuthAdmin'], function () {


            Route::any('/logout', [AuthController::class, 'logout'])->name('admin.logout');

            //=================== Home ==========================
            Route::get('legal_home', [HomeController::class, 'legal_home'])->name('admin.legal_home');
            Route::get('translation_home', [HomeController::class, 'translation_home'])->name('admin.translation_home');
            Route::get('services_home', [HomeController::class, 'services_home'])->name('admin.services_home');
            Route::get('shaaban_home', [HomeController::class, 'shaaban_home'])->name('admin.shaaban_home');
            Route::get('jasem_home', [HomeController::class, 'jasem_home'])->name('admin.jasem_home');


            Route::get('showProfile', [AuthController::class, 'showProfile'])->name('admin.showProfile');
            Route::put('updateProfile/{admin}', [AuthController::class, 'updateProfile'])->name('admin.updateProfile');

            Route::resources([
                'nationalities'   => NationalityController::class,
                'countries'       => CountryController::class,
                'cities'          => CityController::class,
                'offices'         => OfficeController::class,
                'activities'      => ActivityController::class,
                'services'        => ServiceController::class,
                'contacts'        => ContactController::class,
                'teams'           => TeamController::class,
                'users'           => UserController::class,
                'reviews'         => ReviewController::class,
                'issues'          => IssueController::class,
                'blogs'           => BlogController::class,
                'appointments'    => AppointmentController::class,
                'meetings'        => MeetingController::class,
                'agora_meetings'  => AgoraMeetingController::class,
                'translations'    => TranslationController::class,
                'sliders'         => SliderController::class,
                'sections'         => SectionController::class,
                'chats'           => ChatController::class,
            ]);


            Route::get('user_chat/{id?}/{ticket?}', [ChatController::class, 'user_chat'])->name('user_chat');

            Route::delete('/ajax-delete-issue_file', [IssueController::class, 'deleteIssueFile'])->name('ajax-delete-issue_file');
            Route::post('/addIssueFile', [IssueController::class, 'addIssueFile'])->name('addIssueFile');

            Route::get('view/{id?}', [IssueController::class, 'view'])->name('view');
            Route::get('view_file/{id?}', [TranslationController::class, 'view_file'])->name('view_file');
            Route::get('view_file_translation/{id?}', [TranslationController::class, 'view_file_translation'])->name('view_file_translation');

            Route::post('translation/{id}/add_translation', [TranslationController::class, 'add_translation'])->name('translation/add_translation');

            Route::get('online_appointments', [AppointmentController::class, 'online_appointments'])->name('online_appointments');
            Route::get('appointment/{id}/approve', [AppointmentController::class, 'approve'])->name('appointment/approve');
            Route::get('appointment/{id}/done', [AppointmentController::class, 'done'])->name('appointment/done');


            //================================== Agraa =========================
            Route::get('/show-create-meeting/{id}', [AgoraUserMeetingController::class, 'showCreateMeeting'])->name('show-create-meeting');
            Route::get('/createUserMeeting/{id}', [AgoraUserMeetingController::class, 'createUserMeeting'])->name('createUserMeeting');
            Route::get('/joinUserMeeting/{url?}', [AgoraUserMeetingController::class, 'joinUserMeeting'])->name('joinUserMeeting');
//====================================================================================


            Route::any('send-meeting-notify/{meeting_id}', [NotificationController::class, 'sendMeetingNotify'])->name('send-meeting-notify');

//            Route::any('sendAgoraMeetingNotify/{meeting_id}', [NotificationController::class, 'sendAgoraMeetingNotify'])->name('sendAgoraMeetingNotify');


            //=================== Settings ==========================
            Route::get('legal_settings', [LegalSettingController::class, 'index'])->name('legal_settings.index');
            Route::put('legal_settings/update', [LegalSettingController::class, 'update'])->name('legal_settings.update');

            Route::get('show-about-app', [LegalSettingController::class, 'showAboutApp'])->name('show-about-app');
            Route::put('about/update', [LegalSettingController::class, 'aboutUpdate'])->name('about.update');


            Route::get('translation_settings', [TranslationSettingController::class, 'index'])->name('translation_settings.index');
            Route::put('translation_settings/update', [TranslationSettingController::class, 'update'])->name('translation_settings.update');

            Route::get('services_settings', [ServicesSettingController::class, 'index'])->name('services_settings.index');
            Route::put('services_settings/update', [ServicesSettingController::class, 'update'])->name('services_settings.update');

            Route::get('shaaban_settings', [ShaabanSettingController::class, 'index'])->name('shaaban_settings.index');
            Route::put('shaaban_settings/update', [ShaabanSettingController::class, 'update'])->name('shaaban_settings.update');

            Route::get('jasem_settings', [JasemSettingController::class, 'index'])->name('jasem_settings.index');
            Route::put('jasem_settings/update', [JasemSettingController::class, 'update'])->name('jasem_settings.update');

            Route::post('/ajax-change-status-service', [ServiceController::class, 'ChangeStatus'])->name('ajax-change-status-service');  //appear-course
        });
    });
});





////================================== Agraa =========================
//Route::get('/show-create-meeting', [AgoraMeetingController::class, 'showCreateMeeting'])->name('show-create-meeting');
//Route::get('/createMeeting', [AgoraMeetingController::class, 'createMeeting'])->name('createMeeting');
//Route::get('/joinMeeting/{url?}', [AgoraMeetingController::class, 'joinMeeting'])->name('joinMeeting');
////====================================================================================




//https://console.firebase.google.com/u/1/project/samaha-d3211/settings/serviceaccounts/adminsdk

// https://www.google.com/search?q=how+to+access+database+in+firestore+in+laravel+8&rlz=1C1CHBD_enEG1018EG1018&oq=&gs_lcrp=EgZjaHJvbWUqCQgAECMYJxjqAjIJCAAQIxgnGOoCMg8IARAuGCcYxwEY6gIY0QMyCQgCECMYJxjqAjIJCAMQIxgnGOoCMgkIBBAjGCcY6gIyCQgFECMYJxjqAjIJCAYQIxgnGOoCMgkIBxAjGCcY6gLSAQkxMTU2MWowajeoAgiwAgE&sourceid=chrome&ie=UTF-8#fpstate=ive&vld=cid:e8541064,vid:iIvXPTI5olw

// https://github.com/suhasrkms/laravel-with-firestore/blob/main/routes/web.php

//https://github.com/kreait/laravel-firebase



// https://www.cometchat.com/tutorials/how-to-build-a-chat-app-with-firebase

//https://hiranlowe.medium.com/how-to-create-a-real-time-chat-using-laravel-and-firebase-eabaa8e06c5c
// https://github.com/suhasrkms/laravel-with-firestore/blob/main/app/Http/Controllers/CrudController.php




//{
//    "type": "service_account",
//    "project_id": "test-chat-c2970",
//    "private_key_id": "626946815ed563289a42696a83d0e3cae01667f4",
//    "private_key": "-----BEGIN PRIVATE KEY-----\nMIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQDASgcArgWus3Ju\nKzv0xoVXHqVFvx3AvY2fJkyP2EDKIVCoNCQrg6zujCd0epK6CDq/gDXwoQN5HcEv\nnFc/14T6zrpxqoV17Wkz7EdBgsvgk0Tjda+2kK1FAn5fx0+gbi5CJ5CgRkmyyLa7\nRQIqECn3BiZEElzcj2Uq1FS6FJDCe9iIUYECi6tDlAI6Q43bqQf4hwIZkjvRWb+i\nTV/NvabkypDZHnbuc37faIwmfq+fHpqjh77K37xo7aECwsZGa0A6YgP+1pRpR9Br\nUP8NvSRT1EmjIDX72fc1veaSwXpP+ATsEY810cqm4nNvRzDQMJ0V7hbnuyK/ugeP\nrFc5viyrAgMBAAECggEAEhhFQsKdhUbyBeeqoN+iQkRU1X86a7NKuvHDMvwXfg3s\nME/rzBkm3QcyWqCC4zUNYOJN8SLDGBLSkEo8NE/x0xpAwEaFgEdC5vXH73nBTr+n\ntBHp4u+yu8jpdIDl1Nkuyt88mbXTj0VFBigPH+ndJmzyjTr/IxWZYGeSa4pY5FF9\nDqUvCKlirV59HOJo15pLdkXLMl45QjPsWlReDzMM/Ew9wZ6YNIAlSxm/aZjaGcBP\n5Y4djfxCfHYmF2+SJzbLkr2Ygs4GS06Oj3ICga399PKE83ic6jD8lDm7awySfasN\nzUhaH4gwEK2Yn8RaT/aq/3XFyYlN/d6fOookO8V0wQKBgQDn7wp/cv49IG3oF/Ve\njYFn6VhHWhkuPHwMbQ9d7LmCtEZrfwbuLLZiryom/5sKzZFahOxrKQj4v64Nu/ws\nc/k/AD/ByR9H6bCQl9pWUE48OJ8jb7tzE2EZhVl1pLrToHkjhY3gCtbn/L8gfK16\nVthqfSCkngMLtp7PINfmg6qXawKBgQDUPePDASQzpxwQdeKaEaJcc0fS2gkmeErl\npy9y5P1ai+JrjSYQKLCooLh/Jo9c9AscKdd2oogTedhWXR2GvkRBb1Q4MHMdQorg\nvXJGX7JK8AKoBi3x7Sx9aw63enuePfhuKwtydQq+w45mlm9egDjhPRTgCO6JSrxv\nUsnIFjhPwQKBgGRIroBXB2kEyaDuIxEkHE0Cz0Hiyjp8uqJg0aEqBzhlnIFEZom7\nWY0n8hD0umQcaHn8OYFIN/HeZ3LW0n2iE6ZTBD5VKSpd+BM9JZHmnT1auiyHVkS2\nn2h6iSjd9k4k99wNFkBGT4/1b+qrHhNk06SPv/qNvAFnkBk9OT0ZtzxLAoGAGUbJ\noka3hgNH31n6w7iH6pS8IAthfZhj6xfPGdLVrXvtWju0JcaCy4JglpwEBOD3lcIR\n7AoNRKyFLDvosUxlmplkoVB71SdAnOVS/7iT5kLRPiuGO0KwwrsGRKmsoTrmJFCy\nC06PGgr2IZeW6d1BaOm6W7gUmHszF9r3NwIWcMECgYAY8VdEM7MFIRsnMTWL/i0Y\nPY19NwS5U9gRW4XHJI5L8s+q5LzUilqU4rhUHXQr6TjOBaZoRDRFfxOE6Uc30G8E\nA+JRUij4C4oztI8jZj5+7TkP7BQgRTEZkSPRJrDFja0OEThjopA93fzARB/3NkxT\nZlNM2IeWr8fkgDyXoBEA8A==\n-----END PRIVATE KEY-----\n",
//    "client_email": "firebase-adminsdk-43lub@test-chat-c2970.iam.gserviceaccount.com",
//    "client_id": "104649211069553581316",
//    "auth_uri": "https://accounts.google.com/o/oauth2/auth",
//    "token_uri": "https://oauth2.googleapis.com/token",
//    "auth_provider_x509_cert_url": "https://www.googleapis.com/oauth2/v1/certs",
//    "client_x509_cert_url": "https://www.googleapis.com/robot/v1/metadata/x509/firebase-adminsdk-43lub%40test-chat-c2970.iam.gserviceaccount.com",
//    "universe_domain": "googleapis.com"
//}



//https://github.com/kreait/laravel-firebase

//# You can find the database URL for your project at
//# https://console.firebase.google.com/project/_/database
//FIREBASE_DATABASE_URL=https://<your-project>.firebaseio.com

//https://stackoverflow.com/questions/71575679/how-to-add-content-from-laravel-to-firestore




// teeeeeest firebase ==========================================================================
//Route::get('/insert', function() {
////dd(app('firebase.firestore'));
////            $firestore = new FirestoreClient();
////            $batch = $firestore->bulkWriter();
//
//    $stuRef = app('firebase.firestore')->database()->collection('User')->newDocument();
//    $stuRef->set([
//        'firstname' => 'mona',
//        'lastname' => 'monaaa',
//        'age'    => 50
//    ]);
//    echo "<h1>".'test inserted'."</h1>";
//});
//
//Route::get('/display', function(){
//    $student = app('firebase.firestore')->database()->collection('User')->document('166f34ea1c9641dab0a0')->snapshot();
//    print_r('Student ID ='.$student->id());
//    print_r("<br>". 'Student Name = '.$student->data()['firstname']);
//    print_r("<br>".'Student Age = '.$student->data()['age']);
//});
