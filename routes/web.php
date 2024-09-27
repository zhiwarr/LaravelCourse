<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return "this is about page";
});
Route::get('/user/{id}',function($id){
    return "this is user page with id: $id";
});