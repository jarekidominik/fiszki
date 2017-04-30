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

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/idioms/list', 'IdiomsController@getList');

Route::get('/idioms/add', 'IdiomsController@newIdiom');
Route::post('/idioms/add','IdiomsController@newIdiomSave');

Route::get('/idioms/learn', 'IdiomsController@showIdiom');

Route::get('/exams', 'ExamsController@view');
Route::post('/exams/start','ExamsController@newExam');
Route::post('/exams/end','ExamsController@endExam');
Route::post('/exams/check','ExamsController@checkExam');

Route::get('/rank', 'ExamsController@viewRanking');
Route::get('/rank', 'ExamsController@getRanking');