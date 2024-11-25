<?php

use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


function responseJson($status, $message, $data = null)
{
    $response = ['status' => $status, 'message' => $message, 'data' => $data,];
    return response()->json($response);
}

function translated($type, $obj)
{
    return trans('back.'.$type.'-done',['var'=>trans('back.'.$obj. '.'.$obj)]);
}
function direction() { return app()->isLocale('ar') ? 'rtl' : 'ltr'; }
function floating($right, $left){
    return app()->isLocale('ar') ? $right : $left;
}

function isLocalized($lang) { return LaravelLocalization::getLocalizedURL($lang); }
function isLocalised($lang) { return LaravelLocalization::getLocalizedURL($lang); }


function str(){ return new \Illuminate\Support\Str(); }
function isNullable($text){ return (!isset($text) || $text == null || $text == '') ? trans('back.no_value') : ucwords($text); }


function checkIsUserAccept($category)
{
    return DB::table('user_interests')->where(['user_id' => auth()->guard('user')->user()->id, 'category_id' => $category->id]);
}

function checkIsUserSave($course)
{
    return DB::table('saved_courses')->where(['user_id' => auth()->guard('user')->user()->id, 'course_id' => $course->id]);
}


function checkIsUserWatched($video)
{
    return DB::table('watched_videos')->where(['user_id' => auth()->guard('user')->user()->id, 'video_id' => $video->id]);
}



function create_rand_numbers($digits = 6): int
{
    return rand(pow(10, $digits - 1), pow(10, $digits) - 1);
}



function cruds()
{
    return ['persons','companies','categories','cities','admins','auctions','permissions','contacts','transactions','advertisements'];
}

function model_count($model, $withDeleted = false)
{
    if($model == 'company') return \App\Models\User::where('is_company', 'company')->count();
    elseif ($model == 'nationality') return \App\Models\Nationality::count();
//    elseif ($model == 'person') return \App\Models\User::where('is_company', 'person')->count();
    elseif ($model == 'question') return \App\Models\CommonQuestion::count();
        else
    $mo = "App\\Models\\".ucwords($model);
    return $mo::where('type',auth()->guard('admin')->user()->type)->count();
}

function checkIfHasRole($role, $crud, $type)
{
    if($type == 'delete') return in_array('ajax-delete-'.str()->singular($crud), $role->permissions_arr);
    return in_array($crud.'.'.$type, $role->permissions_arr);
}

function uploaded($img, $model)
{
    $filename =  $model . '-' . Str::random(12) . '-' . date('Y-m-d') . '.' . strtolower($img->getClientOriginalExtension());
    if (!file_exists(public_path('uploads/'.Str::plural($model).'/')))
        mkdir(public_path('uploads/'.Str::plural($model).'/'), 0777, true);
    $path = public_path('uploads/'.Str::plural($model).'/');
    $img = Image::make($img)->save($path . $filename);
    return $filename;
}

function uploaded_file($file,$model)
{
    $filename = time() . '_' . $file->getClientOriginalName();
    $file->move('uploads/'.Str::plural($model),$filename);
    return $filename;
}

function legalsettings($param)
{
    return App\Models\LegalSetting::where('key', $param)->first()->value;
}
function translationsettings($param)
{
    return App\Models\TranslationSetting::where('key', $param)->first()->value;
}
function servicessettings($param)
{
    return App\Models\ServiceSetting::where('key', $param)->first()->value;
}
function shaabansettings($param)
{
    return App\Models\ShabaanSetting::where('key', $param)->first()->value;
}

function jasemsettings($param)
{
    return App\Models\JasemSetting::where('key', $param)->first()->value;
}

//function settings($param)
//{
//    return App\Models\Setting::where('key', $param)->first()->value;
//}


function updateStatus($data, $model)
{
    $value = $data['value'];
    // if the value comes with checked that mean we want the reverse value of it;
    return ($value == 'checked') ? $model->update(['status' => 0]) : $model->update(['status' => 1]);
}

function updateStatus1($data, $model)
{
    $value = $data['value'];
    // if the value comes with checked that mean we want the reverse value of it;
    return ($value == 'checked') ? $model->update(['is_unique' => 0]) : $model->update(['is_unique' => 1]);
}

function accept($data, $model)
{
    $value = $data['value'];
    return ($value == 'checked') ? $model->update(['is_accepted' => 'not_accepted']) : $model->update(['is_accepted' => 'accepted']);
}

function models($withColors = false)
{
    if($withColors)
    {
        return [
            'teal'    => 'service',
//            'grey'    => 'category',
//            'blue'    => 'course',
            'green'   => 'issue',
//            'violet'  => 'user',
//            'orange'  => 'question',
            'danger'  => 'nationality',
//            'orange'  => 'country',
            'indigo'  => 'blog',
            'pink'    => 'contact',
        ];
    }

//    function toastr(string $message = null, string $type = 'success', string $title = '', array $options = []): Toastr
//    {
//        if (is_null($message)) {
//            return app('toastr');
//        }
//
//        return app('toastr')->addNotification($type, $message, $title, $options);
//    }
}



//===================================== Agoraa ===================================

function prx($arr){
    echo"<pre>";print_r($arr);die();
}

function cretaAgoraProject($name)
{
// Customer ID
    $customerKey = env('agoraCustomerKey');
// Customer secret
    $customerSecret = env('agoraCustomerSecret');
// Concatenate customer key and customer secret
    $credentials = $customerKey . ":" . $customerSecret;

// Encode with base64
    $base64Credentials = base64_encode($credentials);
// Create authorization header
    $arr_header = "Authorization: Basic " . $base64Credentials;

    $curl = curl_init();


    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.agora.io/dev/v1/project',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => '{"name": "' . $name . '",
  "enable_sign_key": true
 }',
        CURLOPT_HTTPHEADER => array(
            $arr_header,
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
// prx($response);
    $result = json_decode($response);
    // prx($result);
    return $result;
}

function createToken($appId , $appCertificate,$channelName)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://mehandrucompany.com/agoraToken/sample/RtcTokenBuilderSample.php',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('appId' => $appId, 'appCertificate' => $appCertificate, 'channelName' => $channelName),
    ));


    $response = curl_exec($curl);

    curl_close($curl);
    return $response;
}

function generateRandomString($length = 7)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}



//public function getName($n)
//{
//    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
//    $randomString = '';
//    $n = 10;
//    for ($i = 0; $i < $n; $i++) {
//        $index = rand(0, strlen($characters) - 1);
//        $randomString .= $characters[$index];
//    }
//
//    return $randomString;
//}
