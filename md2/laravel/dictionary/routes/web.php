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

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dictionary');
});

Route::post('/', function (Request $request) {
    $array = ['Hello' => 'Xin chào', 'Bye' => 'Tạm biệt'];
        if(in_array($request->input('input'), array_keys($array))){
        $result = 'Kết quả tương ứng là ' . $array[$request->input];
    }
    else{
        $result = 'Không có kết quả!';
    }
   return redirect()->back()->with('result', $result);
})->name('post');

Route::get('/customer', 'CustomerController@index')->name('customer.index');
