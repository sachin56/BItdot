<?php

namespace App\Http\Livewire\User;

use App\Models\AddTask;
use App\Models\Attendent;
use Livewire\Component;

class UserAttendentComponent extends Component
{
    public $emp_id;
    public $name;

    public function addattendent()
    {
        $task=new Attendent();
        $task->emp_id=$this->emp_id;
        $task->name=$this->name;
        $task->save();
        session()->flash('message','Attendent added Successfully');
    }
    public function render()
    {
        return view('livewire.user.user-attendent-component')->layout('layouts.user');
    }
}
