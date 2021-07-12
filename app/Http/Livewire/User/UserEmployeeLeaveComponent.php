<?php

namespace App\Http\Livewire\User;


use App\Models\EmployeeLeave;
use Livewire\Component;
use Livewire\WithPagination;

class UserEmployeeLeaveComponent extends Component
{
    public $employee_id;
    public $description;
    public $status;

    public function mount()
    {
        $this->status='Pending';
    }
    public function addleave()
    {
        $task=new EmployeeLeave();
        $task->employee_id=$this->employee_id;
        $task->description=$this->description;
        $task->status=$this->status;
        $task->save();
        session()->flash('message','Leave added Successfully');
    }

    public function render()
    {

        return view('livewire.user.user-employee-leave-component')->layout('layouts.user');
    }
}
