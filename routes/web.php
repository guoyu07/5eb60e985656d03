<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
	return 'welcome to storage world';
    // return $app->version();
});

$app->get('test/code', 'TestController@code');

// $app->get('image/pull', 'ImagesController@pull');
// $app->get('image/makedir', 'ImagesController@makeDir');
$app->post('image/download', 'ImagesController@download');
