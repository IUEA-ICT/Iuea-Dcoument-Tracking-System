<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Login Routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function () {
    return redirect('/dashboard');
})->name('login.post');

// Register Route
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Forgot Password Route
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');

// Dashboard Route
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


