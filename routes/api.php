<?php

use Illuminate\Http\Request;

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

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', [
    'namespace' => 'App\Http\Controllers',
], function ($api) {
    $api->post('login', 'AuthController@login');
    $api->post('logout', 'AuthController@logout');
    $api->post('refresh', 'AuthController@refresh');
    $api->post('me', 'AuthController@me');

    $api->get('/', 'Api\TestController@index');

    $api->group(['middleware' => 'auth:api'], function ($api) {
        // 论坛
        $api->group(['namespace' => 'Api\Forum'], function($api){
            $api->get('forum', 'ForumController@index');
        });
    });
});