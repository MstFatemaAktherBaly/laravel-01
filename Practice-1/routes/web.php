<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontendController;
use League\CommonMark\Extension\FrontMatter\FrontMatterParser;

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

Route::get('/home', [FrontendController::class, 'homepage'])->name('home');

Route::get('/about-us', [FrontendController::class, 'aboutpage'])->name(('about'));

Route::get('/user/{name}', [UserController::class, 'getUser'])->name('user');