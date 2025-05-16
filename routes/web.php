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
    // Handle login form submission
    return redirect('/dashboard');
})->name('login.submit');

// Register Route
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Forgot Password Route
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');


