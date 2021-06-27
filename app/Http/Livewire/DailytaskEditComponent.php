<?php

namespace App\Http\Livewire;

use App\Models\AddTask;
use App\Models\Task;
use Livewire\Component;
use Livewire\WithPagination;


class DailytaskEditComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $tasks=addTask::paginate(10);
        return view('livewire.dailytask-edit-component',['tasks'=>$tasks])->layout('layouts.base');
    }
    public function edit($id)
    {
        $task = Task::findOrFail($id);
        $statuses = [
            [
                'label' => 'Todo',
                'value' => 'Todo',
            ],
            [
                'label' => 'Done',
                'value' => 'Done',
            ]
        ];
        return view('edit', compact('statuses', 'task'));
    }

}
