<?php

namespace App\Http\Livewire\User;

use App\Models\EmployeeLeave;
use Livewire\Component;
use Livewire\WithPagination;

class UserEmployeeLeavetableComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $leavetable=EmployeeLeave::paginate(10);
        return view('livewire.user.user-employee-leavetable-component',['leavetable'=>$leavetable])->layout('layouts.user');
    }
}
