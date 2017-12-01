<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', 'Testcontroller@index');

//Dasboard
Route::get('/admin', 'DasboardController@index');

//main status done Kimchhoin
Route::get ( '/main/status.html',['uses' => 'StatusMainController@index'  ]);
Route::get ( '/main/status/create.html', ['uses' => 'StatusMainController@create' ]);
Route::post ( '/main/status/store', ['uses' => 'StatusMainController@store' ]);
Route::get ( '/main/status/show/{id}', ['uses' => 'StatusMainController@show' ]);
Route::get ( '/main/status/edit/{id}', ['uses' => 'StatusMainController@edit' ]);
Route::post ( '/main/status/update', ['uses' => 'StatusMainController@update' ]);
Route::get ( '/main/status/delete/{id}',['uses' => 'StatusMainController@destroy' ]);
Route::get ( '/main/status/search', ['uses' => 'StatusMainController@search' ]);


