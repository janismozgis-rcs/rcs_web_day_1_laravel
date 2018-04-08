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

Route::get('/articles', function() {
    return 'articles page';
});

Route::get('/article/{id}', function($id) {
    return 'article page with ID = '. $id;
});


Route::get('/registration', function() {
    return 'registration page';
});