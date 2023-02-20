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
    public function detail($id){
        $task = Task::find($id);
        return view('task.detail', compact('task'));
    }
    public function delete($id){
        $data = Task::find($id);
        $data->delete();
        return back();
    }

    public function edit($id){
        $task = Task::find($id);
        return view('task.edit', compact('task'));
        
    }
    public function update(Request $request, $id){
        $task = Task::find($id);
        $input = $request->all();
        $task->update($input);
        return redirect('/task');
    }
}
