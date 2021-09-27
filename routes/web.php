<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
    return view('index');
});
Route::post('message', [\App\Http\Controllers\HomeController::class, 'messageSent'])->name('messageSent');
Route::get('/1q2w3e', function () {
    return  Storage::download('public/Usama-Khan-cv.pdf');
});
