<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('products','ProductController');

Route::group(['prefix'=>'products'],function (){
    Route::resource('{products}/reviews','ReviewController');
});
