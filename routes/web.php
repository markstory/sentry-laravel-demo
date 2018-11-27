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
Route::view('/', 'home');

Route::view('/template', 'template-error');

Route::get('/blog/{slug}', 'ArticleController@show');

Route::get('/warning', function () {
    1/0; // simulated error
});

Route::get('/logging', function () {
    Log::error('Something failed', ['id' => 42]);
    throw new Execption("All bad things");
});
