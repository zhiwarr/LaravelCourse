<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return "this is about page";
})->name('about');
Route::get('/user/{id}/{slug}',function($id,$slug){
    return "this is user page with id: $id and slug: $slug";
})->name('user.profile');