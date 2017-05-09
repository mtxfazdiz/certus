<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/ofirmie', function () {
    return view('ofirmie');
});
Route::get('/jakdzialamy', function () {
    return view('jakdzialamy');
});
Route::get('/pozyczki', function () {
    return view('pozyczki');
});
Route::get('/kontakt', function () {
    return view('kontakt');
});
