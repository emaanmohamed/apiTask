<?php

use Illuminate\Http\Request;

//Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function()
//{

//hna lazm el user ykon admin w authenticated

    Route::get('users', 'usersController@index');
    Route::get('users/{id}', 'usersController@show');
    Route::put('users/{user}', 'usersController@update');
    Route::post('users', 'usersController@store');
    Route::delete('users/{user}', 'usersController@delete');

//});
//hna ay 7ad y2dar y update w add (y3ny la admin wala authenticated)

Route::put('documents/{document}', 'documentsController@update');
Route::post('documents', 'documentsController@store');
// hna lazm ykon admin w authenticated
Route::get('documents/{id}', 'documentsController@show');

