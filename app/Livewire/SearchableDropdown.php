<?php

namespace App\Livewire;

use Livewire\Component;

class SearchableDropdown extends Component
{
    public $options;

    public $property;

    public $childProperty;

    public $search;

    public $value;

    public function mount($value = null)
    {
        $this->value = $value;
    }

    public function render()
    {
        return view('components.searchable-dropdown');
    }
}
