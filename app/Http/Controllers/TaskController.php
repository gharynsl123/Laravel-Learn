<?php

namespace App\Http\Controllers;
use App\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $task = Task::all();
        return view('task.index', compact('task'));
    }
    public function create(){
        return view('task.create');
    }
    public function store(Request $request){
        $input = $request->all();
        Task::create($input);
        // dd($input);
        return redirect('/task');
    }
}
