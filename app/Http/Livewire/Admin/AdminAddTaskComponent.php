<?php

namespace App\Http\Livewire\Admin;

use App\Models\AddTask;
use Livewire\Component;

class AdminAddTaskComponent extends Component
{
    public $title;
    public $description;
    public $status;

    public function mount()
    {
        $this->status='Done';

    }
    public function addtask()
    {
        $task=new addTask();
        $task->title=$this->title;
        $task->description=$this->description;
        $task->status=$this->status;
        $task->save();
        session()->flash('message','Task was added Successfully');
    }
    public function render()
    {



        return view('livewire.admin.admin-add-task-component')->layout('layouts.admin');
    }
}
