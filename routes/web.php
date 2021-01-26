<?php

use App\Http\Controllers\CashController;
use App\Http\Controllers\MeController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ProfileController;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware('auth')->group(function () {
    Route::get('/test', function () {
        return view('test');
    });

    Route::get('/password/edit', [PasswordController::class, 'edit']);
    Route::patch('/password/update', [PasswordController::class, 'update']);

    Route::get('/me', MeController::class)->name('me');

    Route::prefix('cash')->group(function () {
        Route::get('', [CashController::class, 'index']);
        Route::get('create', [CashController::class, 'create']);
        Route::post('store', [CashController::class, 'store']);
        Route::get('show/{cash:slug}', [CashController::class, 'show']);
    });
    
    Route::get('/profile/show/{user:id}', [ProfileController::class, 'show']);
    Route::get('/profile/edit/{user:id}', [ProfileController::class, 'edit']);
    Route::patch('/profile/update/{user:id}', [ProfileController::class, 'update']);
});

