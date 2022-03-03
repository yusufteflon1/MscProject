<?php

namespace App\Http\Livewire\Admin\Department;

use App\Models\Department;
use Livewire\Component;

class Single extends Component
{

    public $department;

    public function mount(Department $department){
        $this->department = $department;
    }

    public function delete()
    {
        $this->department->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Department') ]) ]);
        $this->emit('departmentDeleted');
    }

    public function render()
    {
        return view('livewire.admin.department.single')
            ->layout('admin::layouts.app');
    }
}
