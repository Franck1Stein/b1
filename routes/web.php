<?php

   Route::get('/', function () {
      return view('public/index');
   });

   Auth::routes();

   Route::get('/home', 'HomeController@index')->name('home');

   Auth::routes();

   Route::get('/home', 'HomeController@index')->name('home');

   Route::group (['middleware' => ['auth']], function() {
     // Category //

     Route::post('/add-category', 'CategoryController@add_category');
     Route::get('/category', 'CategoryController@all_category');
     Route::get('/category/{id}', 'CategoryController@delete_category');
     Route::get('/editcategory/{id}', 'CategoryController@edit_category');
     Route::post('/update-category/{id}', 'CategoryController@update_category');

     // Post //
     Route::get('/post', 'PostController@all_post');
     Route::post('/savepost', 'PostController@save_post');
     Route::get('/delete/{id}', 'PostController@delete_post');
     Route::get('/post/{id}', 'PostController@edit_post');
     Route::post('/update/{id}', 'PostController@update_post');
   });

   Route::get('/blogpost', 'BlogController@get_all_blog_post');
   Route::get('/singlepost/{id}', 'BlogController@get_post_by_id');
   Route::get('/allcategories', 'BlogController@get_all_category');
