<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('About');
})
     ->name('about');

Route::get('/zodiac', [\App\Http\Controllers\ZodiacController::class, 'main']);
Route::post('/zodiac', [\App\Http\Controllers\ZodiacController::class, 'getZodiac']);

Route::get('/name', [\App\Http\Controllers\NameController::class, 'main']);
Route::post('/name', [\App\Http\Controllers\NameController::class, 'getChineseName']);

Route::get('/map', [\App\Http\Controllers\MapController::class, 'main']);
