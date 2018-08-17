<?php



Route::get('/task','TaskController@index');
Route::get('/task/{task}','TaskController@show');



// Primeiro padrão de rotar por grupo

//Route::group(['prefix' => 'posts'], function (){

  // Novo padrão de rotar por grupo
  //Rotas

  Route::prefix('posts')->group(function(){


   // Rota index
    Route::get('/','PostController@index')->name('posts.index');
   // Rota Criar
    Route::get('/create','PostController@create')->name('posts.create');
  // Rota Salvar
    Route::post('/','PostController@store')->name('posts.store');
  // Rota Show
    Route::get('/{post}','PostController@show')->name('posts.show');
  // Rota Editar
    Route::get('/{post}/edit','PostController@edit')->name('posts.edit');
  // Rota Update
    Route::put('/{post}','PostController@update')->name('posts.update');
  // Rota Delete
    Route::delete('/{post}','PostController@destroy')->name('posts.destroy');


});


