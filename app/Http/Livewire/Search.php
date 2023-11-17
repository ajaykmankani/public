<?php

namespace App\Http\Livewire;

use App\Models\Enquiry;
use Livewire\Component;

class Search extends Component
{
    public $search = '';

    public function render()
    {
        $enquiries = Enquiry::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('phone', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->orWhere('investment', 'like', '%' . $this->search . '%')
            ->orWhere('state', 'like', '%' . $this->search . '%')
            ->orderBy('id', 'desc')
            ->get();

        return view('livewire.search', compact('enquiries'));
    }
}
