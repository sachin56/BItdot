<?php

namespace App\Http\Livewire\Admin;

use App\Models\EmployeeLeave;
use Livewire\Component;
use Livewire\WithPagination;

class HrAdminComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $hr=EmployeeLeave::paginate(10);
        return view('livewire.admin.hr-admin-component',['hr'=>$hr])->layout('layouts.admin');
    }
}
