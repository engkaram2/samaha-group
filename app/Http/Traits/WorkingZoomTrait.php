<?php

namespace App\Http\Traits;
use App\Http\Controllers\ZoomController;
use GuzzleHttp\Client;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
trait WorkingZoomTrait
{
    public $client;
    public $jwt;
    public $headers;

    public function __construct()
    {
        $this->client = new Client();
        $this->jwt = $this->generateZoomToken();
        $this->headers = [
            'Authorization' => 'Bearer '.$this->jwt,
            'Content-Type'  => 'application/json',
            'Accept'        => 'application/json',
        ];
    }
    public function generateZoomToken()
    {
        $key = env('ZOOM_CLIENT_KEY', '');
        $secret = env('ZOOM_CLIENT_SECRET', '');
        $payload = [
            'iss' => $key,
            'exp' => strtotime('+1 minute'),
        ];

        return \Firebase\JWT\JWT::encode($payload, $secret, 'HS256');
    }

    private function retrieveZoomUrl()
    {
        return env('ZOOM_API_URL', '');
    }

    public function toZoomTimeFormat(string $dateTime)
    {
        try {
            $date = new \DateTime($dateTime);

            return $date->format('Y-m-d\TH:i:s');
        } catch (\Exception $e) {
            Log::error('ZoomJWT->toZoomTimeFormat : '.$e->getMessage());

            return '';
        }
    }

    public function createZoomUser($data)
    {
        $path = 'users/';
        $url = $this->retrieveZoomUrl();

        $body = [
            'headers' => $this->headers,
            'body'    => json_encode([
                'action'      => "create",
                'user_info'   => [
                    "email"       =>  $data['email'],
                    "type"        =>  1,
                    "first_name"  =>$data['name'],
                    "last_name"   =>$data['name']
                ]
            ]),
        ];

        $response =  $this->client->post($url.$path, $body);

        return [
            'success' => $response->getStatusCode() === 201,
            'data'    => json_decode($response->getBody(), true),
        ];
    }
    public function create($data)
    {
        $zoom_user_id=$data['zoom_user_id'];
        $path = "users/me/meetings";
        $url  = $this->retrieveZoomUrl();

        $body = [
            'headers' => $this->headers,
            'body'    => json_encode([
                'topic'      => $data['topic'],
                'type'       => self::MEETING_TYPE_SCHEDULE,
                'start_time' => $this->toZoomTimeFormat($data['start_time']),
                'password'   => Str::random(6),
                'duration'   => $data['duration'],
                'agenda'     => (! empty($data['agenda'])) ? $data['agenda'] : null,
                'timezone'   => 'Africa/Cairo',
                'settings'   => [
                    'host_video'        => (isset($data['host_video'])&&$data['host_video'] == "1") ? true : false,
                    'participant_video' => (isset($data['participant_video'])&&$data['participant_video'] == "1") ? true : false,
                    'waiting_room'      => true,
                ],
            ]),
        ];
        try {
            $response = $this->client->post($url . $path, $body);
        }catch(\Exception $exception){
            echo $exception->getMessage();
            die();
        }
        return [
            'success' => $response->getStatusCode() === 201,
            'data'    => json_decode($response->getBody(), true),
        ];
    }

    public function update($id, $data)
    {
        $path = 'meetings/'.$id;
        $url = $this->retrieveZoomUrl();

        $body = [
            'headers' => $this->headers,
            'body'    => json_encode([
                'topic'      => $data['topic'],
                'type'       => self::MEETING_TYPE_SCHEDULE,
                'start_time' => $this->toZoomTimeFormat($data['start_time']),
                'duration'   => $data['duration'],
                'agenda'     => (! empty($data['agenda'])) ? $data['agenda'] : null,
                'timezone'   => 'Africa/Cairo',

            ]),
        ];
        $response =  $this->client->patch($url.$path, $body);

        return [
            'success' => $response->getStatusCode() === 204,
            'data'    => json_decode($response->getBody(), true),
        ];
    }

    public function get($id)
    {
        $path = 'meetings/'.$id;
        $url = $this->retrieveZoomUrl();
        $this->jwt = $this->generateZoomToken();
        $body = [
            'headers' => $this->headers,
            'body'    => json_encode([]),
        ];

        $response =  $this->client->get($url.$path, $body);

        return [
            'success' => $response->getStatusCode() === 204,
            'data'    => json_decode($response->getBody(), true),
        ];
    }

    /**
     * @param string $id
     *
     * @return bool[]
     */
    public function delete($id)
    {
        $path = 'meetings/'.$id;
        $url = $this->retrieveZoomUrl();
        $body = [
            'headers' => $this->headers,
            'body'    => json_encode([]),
        ];

        $response =  $this->client->delete($url.$path, $body);
        return $response->getStatusCode() ;
        return [
            'success' => $response->getStatusCode() === 204,
        ];
    }
    public static function recordingList($meeting_id){
        //$path = 'users/me/recordings';
        $zoomController=new ZoomController();
        $path = "meetings/$meeting_id/recordings";
        $url = $zoomController->retrieveZoomUrl();
        $body = [
            'headers' => $zoomController->headers,
        ];
        try {
            $response =  $zoomController->client->get($url.$path, $body);
        }catch(\Exception $e){
            echo $e->getMessage();
            die();
        }
        $response=json_decode($response->getBody()->getContents());

        return $file_url=$response->recording_files[0];//->download_url;
    }
    function curl_get_contents($url)
    {
        $opts = array(
            'http'=>array(
                'method'=>"GET",
                'header'=>"User-Agent: lashaparesha api script\r\n"
            ));

        $context = stream_context_create($opts);

        return file_get_contents($url, false, $context);
    }
}
