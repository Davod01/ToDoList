<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Task;
use App\TodoList;

class tasksController extends Controller
{
    public function createTask(Request $request,TodoList $todoid)
    {
        $this->validate($request,[
            'title' => 'string|min:3|max:150'
        ]);
        if( Auth::user()->owns($todoid) ){
            $task=new Task;
            $task->title = $request->title;
            $task->todo_list_id = $todoid->id;
            $task->save();
            return view('response.newTaskResponse',compact('task'));
        }
        else{
            return 'access denied';
        }
        
    }

    public function updateTask(){

    }

    public function destroyTask(){

    }
}
