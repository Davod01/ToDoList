<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class todoListController extends Controller
{
    public function index(){

        return view('index');
    }
}
