<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD

=======
use App\Http\Controllers\SettingsController;

// Public Routes
>>>>>>> 3bb7f1c28387ed92257d37211ee6515a239a34d1
Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
// Login Routes
=======
// Authentication Routes
>>>>>>> 3bb7f1c28387ed92257d37211ee6515a239a34d1
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

<<<<<<< HEAD
Route::post('/login', function () {
    return redirect('/dashboard');
})->name('login.post');

// Register Route
=======
>>>>>>> 3bb7f1c28387ed92257d37211ee6515a239a34d1
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

<<<<<<< HEAD
// Forgot Password Route
=======
>>>>>>> 3bb7f1c28387ed92257d37211ee6515a239a34d1
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');

<<<<<<< HEAD
// Dashboard Route
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
=======
Route::get('/logout', function () {
    Auth::logout();
    Session::flush();
    return redirect('/login');
})->name('logout');

// Auth Routes
Route::post('/login-submit', function () {
    return redirect('/dashboard');
})->name('login.post');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
});

// Documents
Route::get('/documents', function () {
    return view('documents.index');
});

Route::get('/documents/pending', function () {
    return view('documents.pending');
});

// Users
Route::get('/users', function () {
    return view('users.index');
});

// Reports
Route::get('/reports', function () {
    return view('reports.index');
});

// Settings Routes
Route::get('/settings', function () {
    return view('settings.index');
})->name('settings');

Route::post('/settings/profile', [SettingsController::class, 'updateProfile'])->name('settings.profile.update');
Route::post('/settings/password', [SettingsController::class, 'updatePassword'])->name('settings.password.update');
Route::post('/settings/notifications', [SettingsController::class, 'updateNotifications'])->name('settings.notifications.update');
>>>>>>> 3bb7f1c28387ed92257d37211ee6515a239a34d1


