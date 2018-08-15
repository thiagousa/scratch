<?php



Route::get('/task','TaskController@index');
Route::get('/task/{task}','TaskController@show');


Route::get('/posts','PostController@index')->name('posts.index');
Route::get('/posts/{post}','PostController@show')->name('posts.show');