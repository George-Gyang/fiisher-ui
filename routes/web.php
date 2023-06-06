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
    return view('profile-info');
});

Route::get('/contact-info', function () {
    return view('contact-infor');
});

Route::get('/match-info', function () {
    return view('match-info');
});
Route::get('/empty', function () {
    return view('empty-match');
});
Route::get('/partial', function () {
    return view('partial-match');
});
Route::get('/request', function () {
    return view('request-match');
});
Route::get('/basic', function () {
    return view('basic-card');
});
Route::get('/popular', function () {
    return view('popular-card');
});
Route::get('/special', function () {
    return view('special-card');
});
Route::get('/ultimate', function () {
    return view('ultimate-card');
});
Route::get('/match-check', function () {
    return view('match-check');
});
Route::get('/location-check', function () {
    return view('location-check');
});
Route::get('/datetime', function () {
    return view('datetime');
});
Route::get('/reservation', function () {
    return view('reservation');
});
Route::get('/confirmation', function () {
    return view('confirmation');
});
Route::get('/recent', function () {
    return view('recent');
});
Route::get('/choose', function () {
    return view('choose');
});
Route::get('/empty-location', function () {
    return view('empty-location');
});
Route::get('/date-reservation', function () {
    return view('date-reservation');
});
Route::get('/schedule', function () {
    return view('date-schedule');
});

Route::get('/empty-schedule', function () {
    return view('empty-schedule');
});
Route::get('/support', function () {
    return view('support');
});
Route::get('/feedback', function () {
    return view('feedback');
});
Route::get('/payment', function () {
    return view('payment');
});
