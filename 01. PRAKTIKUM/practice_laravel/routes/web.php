<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;

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
    return view('welcome');
});

// akses url beranda
// diarahkan ke myController -> function index
// Route::get('beranda', 'myController@index');
// Route::get('/beranda', [myController::class, 'index']);

// langsung ke view
Route::view('/beranda', 'beranda');
