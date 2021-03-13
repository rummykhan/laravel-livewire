<?php

namespace App\Http\Livewire;

use Faker\Factory;
use Livewire\Component;

class HelloLivewireComment extends Component
{
    public $comments = [
    ];

    public $titleList = [
        'Mr',
        'Miss',
        'Sir',
        'Madam',
    ];

    public $selectedTitle = 'Mr';

    public $name = 'Rehan';

    public $comment = 'Hi, how are you';

    protected $rules = [
        'selectedTitle' => 'required',
        'name' => 'required',
        'comment' => 'required',
    ];


    public function mount()
    {
        $this->comments = $this->getComments();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.hello-livewire-comment');
    }

    protected function getComments()
    {
        $generator = Factory::create();

        $comments = [];
        for ($i = 0; $i < 3; $i++) {

            $comments[] = [
                'user' => $generator->name,
                'title' => $generator->title,
                'comment' => $generator->text(50),
                'image' => $generator->imageUrl(64, 64),
            ];
        }

        return $comments;
    }

    public function postComment()
    {
        $data = $this->validate();

        $this->comments[] = [
            'user' => $data['name'],
            'title' => $data['selectedTitle'],
            'comment' => $data['comment'],
            'image' => Factory::create()->imageUrl(64, 64),
        ];
    }
}
