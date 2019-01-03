<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'auth'], function () {

    Route::get('/','todoListController@index');

    Route::get('/create',['as' => 'createTask','uses'=>'todoListController@create']);

    Route::post('/store',['as' => 'storeTask','uses'=>'todoListController@store']);

    Route::get('/edit/{todo}',['as' => 'editTask','uses'=>'todoListController@editTask']);

    Route::post('/update/{todo}',['as' => 'updateTask','uses'=>'todoListController@updateTask']);
    
    Route::get('/delete/{todo}',['as' => 'deleteTask','uses'=>'todoListController@deleteTask']);

    Route::post('/destroy',['as' => 'destroyTask','uses'=>'todoListController@destroyTask']);

});
    

Auth::routes();

