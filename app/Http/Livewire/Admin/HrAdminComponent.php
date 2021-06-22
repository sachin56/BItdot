<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class HrAdminComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.hr-admin-component')->layout('layouts.admin');
    }
}
