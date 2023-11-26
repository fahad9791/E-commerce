<?php

use App\Http\Controllers\PagesController;
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
    return view('welcome');
});

// -------------get request----------------

Route::get('/login', [PagesController::class, 'login'])->name('login');
Route::get('/registration', [PagesController::class, 'registration'])->name('registration');


// -------------post request----------------

Route::post('/login_submit', [PagesController::class, 'login_submit'])->name('login_submit');
Route::post('/registration_submit', [PagesController::class, 'registration_submit'])->name('registration_submit');