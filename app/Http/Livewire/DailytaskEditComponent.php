<?php

namespace App\Http\Livewire;

use App\Models\AddTask;
use App\Models\Task;
use Livewire\Component;
use Livewire\WithPagination;


class DailytaskEditComponent extends Component
{
    use WithPagination;
    public $status;
    public $task_id;
    public $ids;
    public $title;
    public $description;


    public function mount($task_id)
    {
        $this->task_id=$task_id;
        $Task=AddTask::where('id',$task_id)->first();
        $this->status = $Task->status;
        $this->title = $Task->title;
        $this->description = $Task->description;
        $this->ids = $Task->id;

    }

    public function update(){
        $task=AddTask::find($this->ids);
        $task->status=$this->status;
        $task->title=$this->title;
        $task->description=$this->description;
        $task->save();
        session()->flash('message','Task was Update Successfully');
    }
    public function render()
    {

        return view('livewire.dailytask-edit-component')->layout('layouts.user');
    }



}
