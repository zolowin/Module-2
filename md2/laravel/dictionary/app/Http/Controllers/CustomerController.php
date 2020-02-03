<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    function index(){
        $customer = DB::select('select * from customers');
        return view('customer.index')->with('customer', $customer);
    }
}
