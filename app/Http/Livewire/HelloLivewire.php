<?php

namespace App\Http\Livewire;

use Faker\Factory;
use Livewire\Component;

class HelloLivewire extends Component
{
    public $phrase;

    public function mount()
    {
        $this->phrase = Factory::create()->catchPhrase;
    }

    public function render()
    {
        return view('livewire.hello-livewire');
    }

    public function updatePhrase()
    {
        $this->phrase = Factory::create()->catchPhrase;
    }
}
