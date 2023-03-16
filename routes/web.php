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

//sleep for 10min
// sleep(1800);

Route::get('/', function () {
    
    echo "Hello! Welcome to 2023-9, today's time is " . date("h:i:sa") . "(UTC) and the date is " . date("d-m-Y") . ". Also not to forgot, it is a " . date("l") . ".";
});
