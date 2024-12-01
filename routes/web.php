<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test1', function() {
    return 'Welcome';
});

Route::get('/test2/{id}', function($id) {
    return $id;
}) ->name ('a');

Route::get('/test3/{id?}', function() {
    return 'Welcome';
}) -> name ('b');