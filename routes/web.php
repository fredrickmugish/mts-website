<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/redirects', [HomeController::class, 'redirects']);

Route::get('/contact', [HomeController::class, 'contact']);

Route::post('/contactupload', [HomeController::class, 'contactupload']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/services', [HomeController::class, 'services']);

Route::get('/portfolio', [HomeController::class, 'portfolio']);

Route::get('/customers', [AdminController::class, 'customers']);

Route::get('/hero', [AdminController::class, 'hero']);

Route::post('/hero_section', [AdminController::class, 'hero_section']);

Route::get('/delete_hero/{id}', [AdminController::class, 'delete_hero']);

Route::get('/update_hero/{id}', [AdminController::class, 'update_hero']);

Route::post('/updatehero/{id}', [AdminController::class, 'updatehero']);

Route::get('/aboutsect', [AdminController::class, 'aboutsect']);

Route::post('/about_sect', [AdminController::class, 'about_sect']);

Route::get('/delete_about/{id}', [AdminController::class, 'delete_about']);

Route::get('/update_about/{id}', [AdminController::class, 'update_about']);

Route::post('/updateabout/{id}', [AdminController::class, 'updateabout']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
