<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function(){
	return view('index');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['prefix' => 'api'], function () {
    Route::resource('authenticate', 'AuthenticateController', ['only' => ['index']]);
    Route::post('authenticate', 'AuthenticateController@authenticate');   
    Route::post('register','AuthenticateController@register');
    Route::get('authenticate/user', 'AuthenticateController@getAuthenticatedUser');

    Route::get('lokasi/{search?}', 'AnggotaController@getLokasi');
    Route::get('profesi', 'AnggotaController@getProfesi');
    Route::post('addanggota', 'AnggotaController@addAnggotaOrari');
    Route::get('daftaranggota', 'AnggotaController@daftarAnggotaOrari');
    Route::get('anggota/{id}', 'AnggotaController@getAnggotaById');
    Route::post('deleteanggota', 'AnggotaController@deleteAnggota');
});

