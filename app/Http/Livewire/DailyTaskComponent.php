<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\AddTask;

class DailyTaskComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $usertask=AddTask::paginate(10);
        return view('livewire.daily-task-component',['usertask'=>$usertask])->layout('layouts.base');

    }
}
