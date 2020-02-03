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

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::group(['prefix' =>'task'], function (){
    Route::get('/', 'TaskController@index')->name('tasks.index');
    Route::get('/create', 'TaskController@create')->name('tasks.create');
    Route::post('/store', 'TaskController@store')->name('tasks.store');
    Route::get('delete/{id}', 'TaskController@destroy')->name('tasks.delete');
    Route::get('edit/{id}', 'TaskController@edit')->name('tasks.edit');
    Route::post('edit/{id}', 'TaskController@update')->name('tasks.update');
    Route::post('show', 'TaskController@show')->name('task.show');

});
