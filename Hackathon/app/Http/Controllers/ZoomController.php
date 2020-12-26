<?php
namespace App\Http\Controllers;
require('../vendor/autoload.php');

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use GuzzleHttp\Client;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\Signer\Key;
use Lcobucci\JWT\Builder;

const BASE_URI = 'https://api.zoom.us/v2/';

class ZoomController extends Controller
{
  public function createJwtToken()
  {
      $api_key = '4XMkOXvIS1e43F9VQ41m8A';
      $api_secret = 'nG5AbTJghR8XrqTU3eGivY1ykIIuC6MoWZP3';
      $signer = new Sha256;
      // $key = new Key($api_secret);
      $time = time();
      // $jwt_token = (new Builder())->setIssuer($api_key)
      //                         ->expiresAt($time + 3600)
      //                         // ->sign($signer, $key)
      //                         ->sign($signer, 'testing')
      //                         ->getToken();
      // return $jwt_token;
      return "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJhdWQiOm51bGwsImlzcyI6IjRYTWtPWHZJUzFlNDNGOVZRNDFtOEEiLCJleHAiOjE2MDk1OTg1NTksImlhdCI6MTYwODk5Mzc1OX0.ZGnBn4TBcdIxBSkFyqO85TcDtQiP153GlyXIAC2rr4I";
  }

  public function getUserId() 
  {
      $method = 'GET';
      $path = 'users';
      $client_params = [
        'base_uri' => BASE_URI,
      ];
      $result = $this -> sendRequest($method, $path, $client_params);
      $user_id = $result['users'][0]['id'];
      return $user_id;
  }

  public function createMeeting(String $date,Int $time) 
  {
    // echo $date.'T'.$time.':00:00Z'; 
      $user_id = $this -> getUserId();
      $params = [
        'topic' => '模擬面接',
        'type' => 2,
        'time_zone' => 'Asia/Tokyo',
        'start_time' => $date.'T'.$time.':00:00Z',
        'agenda' => '模擬面接',
        'settings' => [
          'host_video' => true,
          'participant_video' => true,
          'approval_type' => 0,
          'audio' => 'both',
          'enforce_login' => false,
          'waiting_room' => false,
          'registrants_email_notification' => false
        ]
      ];
      $method = 'POST';
      $path = 'users/'. $user_id .'/meetings';
      $client_params = [
        'base_uri' => BASE_URI,
        'json' => $params
      ];
      $result = $this -> sendRequest($method, $path, $client_params);
      return $result;
  }

  public function sendRequest($method, $path, $client_params)
  {
      $client = new Client($client_params);
      $jwt_token = $this -> createJwtToken();
      $response = $client->request($method, 
                      $path, 
                      [
                        'headers' => [
                          'Content-Type' => 'application/json',
                          'Authorization' => 'Bearer ' . $jwt_token,
                        ]
                      ]);
      $result_json = $response->getBody()->getContents();
      $result = json_decode($result_json, true);
      return $result;
  }

  // $meeting = createMeeting();

}