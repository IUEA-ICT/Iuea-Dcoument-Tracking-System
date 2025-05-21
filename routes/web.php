<?php

use Illuminate\Support\Facades\Route;

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


