<?php



Route::get('/task','TaskController@index');
Route::get('/task/{task}','TaskController@show');


Route::get('/post','PostController@index')->name('post.index');