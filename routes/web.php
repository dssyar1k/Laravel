<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/news', function () {
    return view('news');
});
/*Route::get('/', [
    'uses' => 'HomeController@index'
]);*/
Route::get('/news', [
    'uses' => 'NewsController@category'
]);
Route::get('/news/{id}', [
    'uses' => 'NewsController@newsOne'
]);