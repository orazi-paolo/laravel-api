<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\TypeController as GuestTypeController;
use App\Http\Controllers\Admin\TypeController as AdminTypeController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Admin\TechnologyController as AdminTechnologyController;
use App\Http\Controllers\Guest\ProjectController as GuestProjectController;
use App\Http\Controllers\Guest\TechnologyController as GuestTechnologyController;

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

Route::get('/', [GuestProjectController::class, 'index']);

Route::name('guest.')->group(function () {
    Route::resource('projects', GuestProjectController::class)->only(['index', 'show']);
    Route::resource('types', GuestTypeController::class)->only(['index', 'show']);
    Route::resource('technologies', GuestTechnologyController::class)->only(['index', 'show']);
});


Auth::routes();

Route::middleware('auth')->name('admin.')->prefix('admin')->group(function () {
    Route::resource('projects', AdminProjectController::class);
    Route::resource('types', AdminTypeController::class);
    Route::resource('technologies', AdminTechnologyController::class);
});