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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'RegisterController@register');
Route::post('login', 'RegisterController@login');

Route::apiResource('/discussion','DiscussionController');

Route::group(['prefix' => 'discussion'],function(){

  Route::apiResource('/{discussion}/discussion_group','DiscussionGroupController');

});

Route::group(['prefix' => 'discussion'],function(){

    Route::apiResource('/{discussion}/comments','CommentController');
  
  });

Route::group(['prefix' => 'user'],function(){

  Route::apiResource('/{user}/report','ReportController');

});

Route::group(['prefix' => 'user'],function(){

  Route::apiResource('/{user}/transaction','TransactionController');

});
