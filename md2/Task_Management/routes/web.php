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

Route::get('/', function () {
    return view('welcome');
})->name('task');

// Tạo 1 nhóm route với tiền tố customer
Route::prefix('customer')->group(function () {

    Route::get('/tasks', 'CustomerController@index')->name('task.index');

    Route::get('/tasks/create', 'CustomerController@create')->name('task.create');

    Route::post('/tasks	', 'CustomerController@store')->name('task.store');

    Route::get('/tasks/{taskId}	', 'CustomerController@show')->name('task.show');

    Route::get('/tasks/{taskId}/edit', 'CustomerController@edit')->name('task.edit');

    Route::patch('/tasks/{taskId}', 'CustomerController@update')->name('task.update');

    Route::delete('/tasks/{photo}', 'CustomerController@destroy')->name('task.destroy');

});




