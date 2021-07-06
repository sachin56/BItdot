<?php

namespace App\Http\Livewire\Admin;

use App\Models\Attendent;
use Livewire\Component;
use Livewire\WithPagination;

class AdminAttendentComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $leave=Attendent::paginate(10);
        return view('livewire.admin.admin-attendent-component',['leave'=>$leave])->layout('layouts.base');
    }
    public function getdates()
    {
        return array('created_at','updated_at','deleted_at','taken');
    }
}
