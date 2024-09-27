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
Route::group(['prefix'=>'blog','as'=>'blog.'],function(){
    Route::get('/create',function(){
        return "this is create blog page";
    });
    Route::get('/edit/{id}',function($id){
        return "this is edit blog page with id: $id";
    });
});
// Route::get('/get');
// Route::post('/post');
// Route::put('/put');
// Route::patch('/patch');
// Route::delete('/delete');

Route::view('/contact','contact.index');

Route::fallback(function(){
    return "this is not found page";
});