<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/info', function () {
    return view('info');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/insert', [ItemController::class, 'index']);
Route::get('/', function () {
    return view('index');
});
Route::get('/search', function () {
    return view('search');
});