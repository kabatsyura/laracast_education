<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome', ['greeting' => 'Helloooooooo!!!!']);
Route::view('/contact', 'contact', ['greeting' => 'Информация обо мне']);
Route::resource('jobs', JobController::class);
