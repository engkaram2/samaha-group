<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

//require "/C:/xampp/htdocs/samaha/firebase-credentials.json";
//require '../vendor/autoload.php';
use App\Models\Slider;

//use Illuminate\Http\Client\Factory;
use Illuminate\Http\Request;


use Kreait\Laravel\Firebase\Facades\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;

//use Kreait\Firebase\Firestore;
//require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Contract\Firestore;


use Google\Cloud\Firestore\FirestoreClient;
Use Google\Cloud\Firestore\BulkWriter;
//require 'vendor/autoload.php';
//ini_set("display_errors", 1);
//ini_set("track_errors", 1);
//ini_set("html_errors", 1);
//error_reporting(E_ALL);
//initialize();

class TestFirebaseChatController extends Controller
{


//    function index()
//    {
//
////dd(app('firebase.firestore'));
////dd(Firebase::firestore());
//        // Create the Cloud Firestore client
//        $db = new FirestoreClient();
//        printf('Created Cloud Firestore client with default project ID.' . PHP_EOL);
//
//    }


    public function index()
    {
        $postData = [
            'name' => 'll',
            'iD' => 1,
        ];
//        $postRef = app('firebase.firestore')->database()->collection('tester')->newDocument()->set($postData);
//
        //$postRef = $factory->database()->collection('tester')->newDocument()->set($postData);


//        $students = app('firebase.firestore')->database()->collection('User')->documents();
//dd($students);

        // $defaultAuth = Firebase::auth();
//
//        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebase-credentials.json');
//dd($serviceAccount);


        //        $factory = (new Factory)->withServiceAccount('\firebase-credentials.json');

//        $factory = (new Factory)->withServiceAccount(__DIR__.'\firebase-credentials.json');
//        $factory = (new Factory)->withServiceAccount(["type" => "service_account",
//                "project_id" => "samaha-d3211",
//                "private_key_id" => "1fc28ce46cb8dd67e9facb92e3186082bf774f51",
//                "client_email" => "firebase-adminsdk-z3ofi@samaha-d3211.iam.gserviceaccount.com",
//                "client_id" => "105790990307676553950",
//                "auth_uri" => "https://accounts.google.com/o/oauth2/auth",
//                "token_uri" => "https://oauth2.googleapis.com/token",
//                "auth_provider_x509_cert_url" => "https://www.googleapis.com/oauth2/v1/certs",
//                "client_x509_cert_url" => "https://www.googleapis.com/robot/v1/metadata/x509/firebase-adminsdk-z3ofi%40samaha-d3211.iam.gserviceaccount.com",
//                "universe_domain" => "googleapis.com"
//            ]
//        );

//        $factory = (new Factory())->withServiceAccount(config('firebase.config'));
//
//        $database = $factory->createFirestore()->database();
//        $usersRef = $database->collection('users');
//        dd($usersRef);
//        $snapshot = $usersRef->documents();
//        foreach ($snapshot as $user) {
//            $age = array("uid" => $user['userId'], "email" => $user['email']);
//            $data[] = $age;
//        }
//
//        echo json_encode($data);

//        $data['Chats'] = Chat::latest()->get();
        return view('Dashboard.Chats.index');
    }


}
