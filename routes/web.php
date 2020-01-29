<?php

   Route::get('/', function () {
      return view('welcome');
   });

   Auth::routes();

   Route::get('/home', 'HomeController@index')->name('home');

   Auth::routes();

   Route::get('/home', 'HomeController@index')->name('home');

   Route::post('post', 'PostController@all_post');


// Route::get('/{anypath}', 'HomeController@index')->where('path','.*');
