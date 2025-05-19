<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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

// Show the booking form
Route::get('/', [BookingController::class, 'create'])
    ->name('booking.create');

// Handle form submission
Route::post('/', [BookingController::class, 'store'])
    ->name('booking.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/users', [AdminController::class, 'index'])->name('admin.users');
});

// Ensure the 'admin' middleware is correctly defined in your application
// and the authenticated user has the 'admin' role.
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware(['guest']);