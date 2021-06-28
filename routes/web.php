<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Latihan1;
use App\Http\Controllers\HomeController;

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

Route::get('/Home',[HomeController::class, 'index']);

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/sam', function () {
    return 'Hello Haisyam';
});

Route::get('/biodata', function () {
    return view('latihan1', 
    	['name' => 'Haisyam', 
    	'kelas' => 'IK19B', 
    	'hobi' => 'Ngoding', 
    	'cita2' => 'Programmer']);
});


Route::get('/test1', [Latihan1::class, 'biodata']);

Route::get('/tes', function () {
    return GeneralHelper::getMenu();
});