<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\dahsboardController;
use App\Models\Role;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;     

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

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::group(['middleware' => 'auth','gate'], function () {

    Route::resource('/person', PersonController::class);
    Route::get('/person/{id}/balance', [PersonController::class,'balance'])->name('person.balance');

    //dashboard
    Route::get('/dashboard', [dahsboardController::class,'dashboard'])->name('dashboard');
    
    Route::patch('/person/balance/{id}', [PersonController::class,'updateBalance'])->name('person.updateBalance');
    Route::resource('/company', CompanyController::class);
    Route::resource('/tasks', TaskController::class);
    Route::resource('/users', UserController::class);
});
