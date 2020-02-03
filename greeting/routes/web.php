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

    return view('home');
});

Route::get('/greeting/{name?}', function ($name = null) {
    if($name) {
        echo 'Hello '.$name.'!';
    } else {
        echo 'Hello World!';
    }
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/yield', function () {
    return view('welcome_admin');
});


Route::post('/login', function (Illuminate\Http\Request $request) {
    if ($request->username == 'admin'
        && $request->password == 'admin') {
        return view('welcome_admin');
    }

    return view('login_error');
});

Route::get('/calculator', function () {
    return view('discount_calculator');
});

Route::post('/calculator', function (Illuminate\Http\Request $request) {
        $descriptionErr = $discount_percentErr = $priceErr = "";
        $description = $discount_percent = $price = "";
        if (isEmpty($_POST['description'])) {
            $descriptionErr = "description is required";
        } else {
            $description = $_POST["description"];
        }

        if (isEmpty($_POST['price'])) {
            $priceErr = "price is required";
        } else {
            $price = $_POST["price"];
        }

        if (isEmpty($_POST['discount_percent'])) {
            $discount_percentErr = "discount_percent is required";
        } else {
            $discount_percent = $_POST["discount_percent"];
        }

        $discount_amount = $price * $discount_percent / 100;
        $discount_price = $price - $discount_amount;

        return view('discount_calclator',['description'=>$description, 'price' => $price, 'discount_percent' => $discount_percent,
            'descriptionErr' => $descriptionErr, 'priceErr' => $priceErr, 'discount_percentErr' => $discount_percentErr,
            'discount_amount'=> $discount_amount, 'discount_price' => $discount_price]);
});
