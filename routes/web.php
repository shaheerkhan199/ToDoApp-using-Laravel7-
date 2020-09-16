<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/ToDo', 'TaskController@index')->name('todo'); #showing todo form
Route::get('/show', 'TaskController@show')->name('todo.show'); #showing all data to screen view
Route::post('/ToDo', 'TaskController@store')->name('todo.store'); #storing data in database
Route::get('/edit/{task}', 'TaskController@edit')->name('todo.edit'); # showing editing data in a form
Route::post('/update/{task}', 'TaskController@update')->name('todo.update'); # updating data in database
Route::get('/delete/{task}', 'TaskController@destroy')->name('todo.delete'); # updating data in database
