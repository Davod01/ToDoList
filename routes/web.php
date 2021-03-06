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

    Route::get('/get',['as' => 'getTodoList','uses'=>'todoListController@getTodoList']);

    Route::post('/store',['as' => 'storeTodoList','uses'=>'todoListController@storeTodoList']);

    Route::get('/edit/{todo}',['as' => 'editTodoList','uses'=>'todoListController@editTodoList']);

    Route::post('/update/{todo}',['as' => 'updateTodoList','uses'=>'todoListController@updateTodoList']);
    
    Route::get('/delete/{todo}',['as' => 'deleteTodoList','uses'=>'todoListController@deleteTodoList']);

    Route::post('/destroy',['as' => 'destroyTodoList','uses'=>'todoListController@destroyTodoList']);

    Route::get('/task/{todo}',['as' => 'getTask','uses'=>'todoListController@getTask']);

    Route::post('/createTask/{todoid}',['as' => 'createTask','uses'=>'tasksController@createTask']);

    Route::PUT('/updateTask/{task}',['as' => 'updateTask','uses'=>'tasksController@updateTask']);

    Route::PUT('/updateAllTask/{todo}',['as' => 'updateAllTask','uses'=>'tasksController@updateAllTask']);

    Route::delete('/destroyTask/{task}',['as' => 'destroyTask','uses'=>'tasksController@destroyTask']);

});
    

Auth::routes();

