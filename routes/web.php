<?php

use App\Task;

Route::get('/task', function () {
    
$tasks = task::all();

return view('tasks.index',compact('tasks'));

});

Route::get('/task/{task}', function ($id) {
    
    $tasks = task::find($id);
    
    return view('tasks.show',compact('tasks'));
    });
