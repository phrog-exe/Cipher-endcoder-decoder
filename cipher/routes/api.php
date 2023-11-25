<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
$settings = array(
    'oauth_access_token' => "1540707982505148421-dl9BDtV0eB5uNYvy99xIWX0d9bWrZ5",
    'oauth_access_token_secret' => "ipceghC9twgJA9UV7N7tRr4uUExeYjbe2Wd1h9AM49NpP",
    'consumer_key' => "Xx2QqQnRwKxbhJ9zKNb7P0qGY",
    'consumer_secret' => "chPkjuL0pSGESzQDRPlOOFh2E7sPoNvKgFv2YfPqwwUJMUQoV0"
);

$url = 'https://api.twitter.com/1.1/blocks/create.json';
$requestMethod = 'POST';

$postfields = array(
    'screen_name' => 'usernameToBlock',
    'skip_status' => '1'
);


$twitter = new TwitterAPIExchange($settings);
echo $twitter->buildOauth($url, $requestMethod)
    ->setPostfields($postfields)
    ->performRequest();
