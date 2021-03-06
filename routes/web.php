<?php

   Route::get('/', function () {
      return view('welcome');
   });

   Auth::routes();

   Route::get('/home', 'HomeController@index')->name('home');

   Auth::routes();

   Route::get('/home', 'HomeController@index')->name('home');

   // Category //

   Route::post('/add-category', 'CategoryController@add_category');
   Route::get('/category', 'CategoryController@all_category');
   Route::get('/category/{id}', 'CategoryController@delete_category');
   Route::get('/editcategory/{id}', 'CategoryController@edit_category');
   Route::post('/update-category/{id}', 'CategoryController@update_category');
