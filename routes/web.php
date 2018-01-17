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

Auth::routes();
Route::group(['middleware'=>'auth'],function(){
	Route::get('/', function () {
    return view('notebookapp');
	});
	Route::resource('notebooks','NotebooksController');
	Route::get('notebooks/{id}/createNote',['as'=>'createNote','uses'=>'NotesController@createNote']);
	Route::resource('notes','NotesController');
});
Route::get('/home', 'HomeController@index');
