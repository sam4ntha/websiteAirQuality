<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
     return view('dashboard');
    });

// Route::get('/login', [LoginController::class, 'index'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);

// Route::get('/register', function () {
//     return view('register');
// });

// Route::group(['middleware' =>['auth']], function(){
//     Route::get('/', function () {
//         return view('dashboard');
//     });

//     Route::get('/profile', function () {
//         return view('profile');
//     });
    
// });



