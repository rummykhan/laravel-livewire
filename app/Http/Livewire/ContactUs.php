<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactUs extends Component
{
    public $firstName;
    public $lastName;
    public $email;
    public $phone;
    public $message;

    public $rules = [
        'firstName' => 'required',
        'lastName' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'required|min:5',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.contact-us');
    }

    public function submitForm()
    {
        $data = $this->validate();

        Mail::to($data['email'])
            ->send(new \App\Mail\ContactUs($data));
    }
}
