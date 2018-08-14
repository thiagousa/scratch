<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
   
   public function __construct( Task $task)
   {

       $this->task =   $task;
       
   }


    public function index()
    {
        $tasks = $this->task->all();

return view('tasks.index',compact('tasks'));
    }

   
    public function show( Task $task)
    {
         
    
    return view('tasks.show',compact('tasks'));
    }

   
}
