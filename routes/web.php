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

Route::get('/servicesect', [AdminController::class, 'servicesect']);

Route::post('/service_sect', [AdminController::class, 'service_sect']);

Route::post('/service_sect1', [AdminController::class, 'service_sect1']);

Route::get('/portfoliosect', [AdminController::class, 'portfoliosect']);

Route::post('/portfolio_sect1', [AdminController::class, 'portfolio_sect1']);

Route::post('/portfolio_sect', [AdminController::class, 'portfolio_sect']);

Route::get('/testmonialsect', [AdminController::class, 'testmonialsect']);

Route::post('/testmonial_sect1', [AdminController::class, 'testmonial_sect1']);

Route::post('/testmonial_sect', [AdminController::class, 'testmonial_sect']);

Route::get('/update_service/{id}', [AdminController::class, 'update_service']);

Route::post('/updateservice/{id}', [AdminController::class, 'updateservice']);

Route::get('/delete_service/{id}', [AdminController::class, 'delete_service']);

Route::get('/update_testmonial/{id}', [AdminController::class, 'update_testmonial']);

Route::post('/updatestmonial/{id}', [AdminController::class, 'updatestmonial']);

Route::get('/delete_testmonial/{id}', [AdminController::class, 'delete_testmonial']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
