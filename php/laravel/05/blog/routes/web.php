<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SelectController;
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

Route::get('/', [SelectController::class, 'SelectData']);
Route::post('/insertData', [SelectController::class, 'InsertData']);
Route::post('/deleteData', [SelectController::class, 'DeleteData']);
Route::get('/insert', function () {
    return view('insert');
});