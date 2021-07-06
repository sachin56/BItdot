<?php

namespace App\Http\Livewire\Admin;

use App\Models\EmployeeLeave;
use Livewire\Component;
use Livewire\WithPagination;

class AdminleaveEditComponent extends Component
{
    use WithPagination;
    public $employee_id;
    public $leave_id;
    public $idl;
    public $status;
    public $description;

    public function mount($leave_id)
    {
        $this->leave_id=$leave_id;
        $leave=EmployeeLeave::where('id', $leave_id)->first();
        $this->employee_id=$leave->employee_id;
        $this->description=$leave->description;
        $this->status=$leave->status;
        $this->idl=$leave->id;
    }
    public function update()
    {
        $leave=EmployeeLeave::find($this->idl);
        $leave->employee_id=$this->employee_id;
        $leave->description=$this->description;
        $leave->status=$this->status;
        $leave->save();
        session()->flash('message','Task was Update Successfully');
    }
    public function render()
    {
        return view('livewire.admin.adminleave-edit-component')->layout('layouts.base');
    }
}
