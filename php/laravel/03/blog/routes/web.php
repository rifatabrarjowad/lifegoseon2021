<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\PhotoController;

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
Route::group(['prefix' => 'account'], function () {
    Route::get('/user', function () {
        return "<h1>User</h1>";
    });
    Route::get('/login', function () {
        return "<h1>login</h1>";
    });
    Route::get('/sign', function () {
        return "<h1>SignUp</h1>";
    });
});

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/photo', PhotoController::class );
Route::get('/name/{nameValue}',[ViewController::class, 'MyName']);
Route::get('/demo/{firstName}/{lastName}/',[DemoController::class, 'DemoName']);