<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function store(Request $request){
        $task=new Task;

        $this->validate($request,[
            'task'=>'required|max:100|min:5',
        ]);

        $task->task=$request->task;
        $task->save();
        $data=Task::all();
        return redirect()->back();
        
        
    }

    public function UpdateTaskAsCompleted($id){
        $task=Task::find($id);
        $task->iscompleted=1;
        $task->save();
        return redirect()->back();
    }

    public function UpdateTaskAsNotCompleted($id){
        $task=Task::find($id);
        $task->iscompleted=0;
        $task->save();
        return redirect()->back();
    }

    public function deletetask($id){
        $task=Task::find($id);
        $task->delete();
        return redirect()->back();
    }

    public function updatetaskview($id){
        $task=Task::find($id);
        
        return view('livewire.user-update-component')->with('taskdata',$task);;
    }

    public function updatetask(Request $request){

        $id=$request->id;
        $task=$request->task;
        $data=Task::find($id);
        $data->task=$task;
        $data->save();
        $data=Task::all();
        return view('livewire.productivity-component')->with('tasks' , $data);

    }
}
