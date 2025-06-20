<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ReportExportController;
use App\Http\Controllers\ActivityController;

// Public Routes
Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');

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
    return view('dashboard.dashboard');
})->name('dashboard');

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

Route::get('/reports/export/{type}', [ReportExportController::class, 'export'])->name('reports.export');

// Settings Routes
Route::get('/settings', function () {
    return view('settings.index');
})->name('settings');

Route::post('/settings/profile', [SettingsController::class, 'updateProfile'])->name('settings.profile.update');
Route::post('/settings/password', [SettingsController::class, 'updatePassword'])->name('settings.password.update');
Route::post('/settings/notifications', [SettingsController::class, 'updateNotifications'])->name('settings.notifications.update');

// Activity
Route::get('/activity', [ActivityController::class, 'index'])->name('activity');

// Role Management Route
Route::get('/roles/manage', function () {
    return view('roles.manage');
})->name('roles.manage');


