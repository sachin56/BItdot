<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Task;

class ProductivityComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $tasks=Task::paginate(10);
        return view('livewire.productivity-component',['tasks'=>$tasks])->layout('layouts.base');

    }
}
