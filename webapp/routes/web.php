<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateCustomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/createcustomer', CreateCustomerController::class);
