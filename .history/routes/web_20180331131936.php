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
    return view('pages/index')->with(['page' => 'index']);
});
Route::get('asdasdasdasdasdasdasd/asdasda/sdas/da/sd/asd/a/sd/as/d/as/da/sd/a/sd/as/d', function () {
    return view('pages/articles')->with(['page' => 'articles']);
});
Route::get('/article', function () {
    return view('pages/article')->with(['page' => 'articles']);
});

Route::get('/chat', function () {
    return view('pages/chat')->with(['page' => 'chat']);
});
Route::get('/about_us', function () {
    return view('pages/about_us')->with(['page' => 'about_us']);
});

Route::get('/registration', function () {
    return view('pages/registration')->with(['page' => 'registration']);
});
Route::post('/registration', 'AccountController@storeUser');

// Route::post('/chat/save-message', 'AccountController@saveChatMessage');