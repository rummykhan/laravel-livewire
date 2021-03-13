<?php

namespace App\Http\Livewire;

use Livewire\Component;

class IndexComponent extends Component
{
    public $list = [
    ];

    public function mount()
    {
        $this->boot();
    }

    protected function boot()
    {
        $this->list = config('livewire-components.index');
    }

    public function render()
    {

        return view('livewire.index-component');
    }
}
