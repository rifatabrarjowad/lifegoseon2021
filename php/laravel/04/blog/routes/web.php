<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;


Route::get('/', [SiteController::class, 'showHome']);
Route::get('/about', [SiteController::class, 'showAbout']);
Route::get('/service', [SiteController::class, 'showService']);
Route::get('/portfolio', [SiteController::class, 'showPortfolio']);