<?php

use Illuminate\Support\Facades\Route;

//Controllers
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TechnoController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WrongUrlController;

use App\Http\Controllers\UsersController;

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

Route::get('/', [HomeController::class, 'show']);
Route::get('welcome', [WelcomeController::class, 'show']);
Route::get('about', [AboutController::class, 'show']);
Route::get('techno', [TechnoController::class, 'show']);
Route::get('contact', [ContactController::class, 'getFormulary']);
Route::post('contact', [ContactController::class, 'postMessage']);

Route::get('users', [UsersController::class, 'getInfos']);
Route::post('users', [UsersController::class, 'postInfos']);
Route::get('{n}', [WrongUrlController::class, 'show']);

