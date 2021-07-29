<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\TaskController;
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

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/person', PersonController::class);
    ///person/balance/{person}
    Route::get('/balance', [PersonController::class,'balance'])->name('person.balance');
    Route::post('/balance/{person}', [PersonController::class,'addBalance'])->name('person.addBalance');
    Route::resource('/company', CompanyController::class);
    Route::resource('/tasks', TaskController::class);
    Route::resource('/users', UserController::class);
});
