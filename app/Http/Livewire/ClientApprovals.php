<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Approvals as LivewireApprovals;
use Livewire\Component;
use App\Models\approvals;

class ClientApprovals extends Component
{
    public $approvals;
    public $approval_name;

    public function mount($approval_name)
    {
        $this->approval = $approval_name;
        return view('livewire.client-approvals');
    }
}
