<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class PublicApi extends Component
{
    public $search;
    public $searchResults = [];

    public function updatedSearch()
    {
        $response = Http::get("https://api.github.com/search/users?q={$this->search}");

        $responseJson = json_decode($response->body(), true);

        $this->searchResults = $responseJson['items'];
    }

    public function render()
    {
        return view('livewire.public-api');
    }
}
