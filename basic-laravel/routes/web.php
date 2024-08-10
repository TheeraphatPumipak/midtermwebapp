<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/hello', function () {
    return "<h1>Hello world</h1><a href='".route('login')."'>login</a>";
});
Route::get('/admin/user', function () {
    return "<h1></h1>";
    
})->name('login');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
 