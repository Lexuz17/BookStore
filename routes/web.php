<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/login', [LoginController::class, 'redirectLogin'])->name('redLogin');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/register', [UserController::class, 'redRegister'])->name('redRegister')->middleware('guest');
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('detail/{id}', [HomeController::class, 'showDetail'])->name('details')->middleware('auth');

Route::get('/add', [NavController::class, 'redAdd'])->name('redBook')->middleware('auth');
Route::post('/add', [NavController::class, 'add'])->name('addBook');
