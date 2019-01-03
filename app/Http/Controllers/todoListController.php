<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\taskRequest;

use App\TodoList;

class todoListController extends Controller
{
    public function index(){


        return view('index');
    }

    public function create(){
        return view('response.newTodoListForm');
    }

    public function store(taskRequest $request){
        
        $todo = new TodoList;
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->user_id = Auth::user()->id;
        $todo->save();
        $id = $todo->id;
        return  view('response.taskListItem',compact('todo') );
        
    }


    public function editTask(TodoList $todo)
    {
        return view('response.editTodoListForm',compact('todo') );
    }

    public function updateTask(taskRequest $request,TodoList $todo)
    {
        $todo->title =$request->title;
        $todo->description =$request->description;

        $todo->update();
        return view('response.taskListItem',compact('todo'));
    }

    public function deleteTask(TodoList $todo)
    {
        return view('response.deleteTodoListForm',compact('todo') );
    }

    public function destroyTask(Request $request)
    {
        $this->validate($request,[
            'id' => 'integer'
        ]);
        $todo = TodoList::findOrFail($request->id);
        if(! Auth::user()->owns($todo) ){
            return "Access denied";
        }
        $todo->delete();
        return $todo;
    }


}
