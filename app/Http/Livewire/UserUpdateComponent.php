<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;
use App\Models\Task;

use Livewire\Component;

class UserUpdateComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $updatetask=Task::paginate(10);
        return view('livewire.user-update-component', ['updatetask' => $data])->layout('layouts.user');

    }

}
