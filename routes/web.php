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

Route::group(['middleware'=>'auth'], function(){

    Route::get('/', function(){
        return view('frontpage');
    });

    // Route::get('/notebooks', 'NotebooksController@index')->name('notebooks.indexkk');
    Route::get('/notebooks', ['as'=>'notebooks.index',
                              'uses'=>'NotebooksController@index']);

    Route::post('/notebooks', 'NotebooksController@store');
    Route::get('/notebooks/create', 'NotebooksController@create');
    Route::get('/notebooks/{notebooks}', 'NotebooksController@edit');
    Route::put('/notebooks/{notebooks}', 'NotebooksController@update');
    Route::delete('/notebooks/{notebooks}', 'NotebooksController@destroy');

});


Auth::routes();

Route::get('/home', 'HomeController@index');
