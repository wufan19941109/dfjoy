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


//小程序 接口
Route::group(['namespace'=>'api','prefix'=>'mini'],function (){
    Route::get('/newsApi','MiniController@newsApi');
    Route::get('/caseApi','MiniController@caseApi');
    Route::get('/reservation','MiniController@reservation');
    Route::get('/newsDetail/{id}','MiniController@newsDetail');
    Route::get('/caseDetail/{id}','MiniController@caseDetail');
    Route::get('/newHot','MiniController@newHot');
    Route::get('/caseHot','MiniController@caseHot');
    Route::post('/indexServer','MiniController@indexServer');
});

