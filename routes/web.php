<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\taskManager;
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
    return view('task');
});

Route::post('/store',[taskManager::class,'store']);
Route::post('/create',[taskManager::class,'create']);
Route::post('/edit',taskManager::class,'edit');
Route::post('/mark',taskManager::class,'mark');
Route::post('/store',taskManager::class,'store');

//Userauthentication
Route::get('/login', [LoginController::class,'login']);
Route::get('/register', [LoginController::class,'register'])->name('register');
Route::post('/registerUser', [LoginController::class, 'registerUser'])->name('registerUser');
Route::post('/loginUser', [LoginController::class, 'loginUser'])->name('loginUser');
Route::get('/dashboard', [LoginController::class, 'Authdashboard'])->name('dashboard');
// Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');