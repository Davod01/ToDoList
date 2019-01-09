<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

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
            return view('response.newTaskResponse',compact('task','todoid'));
        }
        else{
            return 'access denied';
        }
        
    }

    public function updateTask(Request $request,Task $task){
        $task->completed_at = $request->completed == "true" ? Carbon::now() : NULL ;
        $task->update();
        return ['completed' => $request->completed];
    }

    public function updateAllTask(Request $request,TodoList $todo){
        if($request->completed == "false"){
            Task::where('todo_list_id',$todo->id)->update(['completed_at'=>NULL]);
        }
        else{
            Task::where('todo_list_id',$todo->id)->update(['completed_at'=>Carbon::now()]);
        }
        
        return 'complete';
    }

    public function destroyTask(Task $task){
        $todo =TodoList::findOrFail($task->todo_list_id);
        if(! Auth::user()->owns($todo) ){
            return 'access denied';
        }
        $task->delete();
        return 'successfuly';
    }
}
