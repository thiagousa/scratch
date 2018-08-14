<?php



Route::get('/task','TaskController@index');
Route::get('/task/{task}','TaskController@show');