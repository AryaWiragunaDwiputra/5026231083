<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('frontend', function () {
    return view('frontend');
});

Route::get('bootstrap1', function () {
    return view('bootstrap1');
});

Route::get('bootstrap2', function () {
    return view('bootstrap2');
});

Route::get('learnjs1', function () {
    return view('learnjs1');
});

Route::get('learnjs2', function () {
    return view('learnjs2');
});

Route::get('linktree', function () {
    return view('linktree');
});

Route::get('new', function () {
    return view('new');
});
