<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloLivewireInput extends Component
{
    public $titleList = [
        'Mr',
        'Miss',
        'Sir',
        'Madam',
    ];

    public $selectedTitle = 'Mr';

    public $name = 'Rehan';

    public function render()
    {
        return view('livewire.hello-livewire-input');
    }
}
