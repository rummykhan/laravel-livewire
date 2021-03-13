<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ResetPassword extends Component
{
    public $email;
    public $token;

    public $password;
    public $passwordConfirmation;

    public $successMessage;

    protected $rules = [
        'passwordConfirmation' => [
            'same:password'
        ],
        'password' => [
            'required',
            'min:6',
        ],
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function render()
    {
        return view('livewire.reset-password');
    }

    public function setNewPassword()
    {
        $this->validate();

        $this->successMessage = 'Password reset was successful!';

        $this->resetForm();

    }

    protected function resetForm()
    {
        $this->password = '';
        $this->passwordConfirmation = '';
    }

    public function closeSuccessMessage()
    {
        $this->successMessage = '';
    }
}
