<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DailyTaskComponent extends Component
{
    public function render()
    {
        return view('livewire.daily-task-component')->layout('layouts.base');
    }
}
