<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\TodoList;

class todoListController extends Controller
{
    public function index(){


        return view('index');
    }

    public function create(){
        return view('form.newTaskForm');
    }

    public function store(Request $request){
        $this->validate($request,[
            'title' => 'required|string|min:3',
            'description' => 'required|string|min:3'
        ]);

        $Todo = new TodoList;
        $Todo->title = $request->title;
        $Todo->description = $request->description;
        $Todo->user_id = Auth::user()->id;
        $Todo->save();

        return $this->myConvertToString($Todo);
        
    }




    public function b(){
        $Todo = new TodoList;
        $Todo->title = 'Hello';
        $Todo->description = 'Helloooooooooooooooooooooo';
        $Todo->user_id = 1;
        
        return $this->myConvertToString($Todo);
    }

}
