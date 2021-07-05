<?php

namespace App\Http\Livewire\Admin;

use App\Models\AddTask;
use Livewire\Component;
use Livewire\WithPagination;

class AdminTaskComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $addtask=AddTask::paginate(10);
        return view('livewire.admin.admin-task-component',['addtask'=>$addtask])->layout('layouts.admin');
    }
}
