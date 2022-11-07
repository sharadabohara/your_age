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
    return view('php.welcome');
});
Route::get('/scope', function () {
return view('php.variablescope');
});

Route::get('/string', function () {
return view('php.phpstring');
});

Route::get('/constant', function () {
return view('php.phpconstant');
});

Route::get('/operator', function () {
return view('php.phpoperators');
});

Route::get('/currentage', function () {
return view('php.currentage');
});

