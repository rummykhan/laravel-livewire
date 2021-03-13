<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaravelLivewireController extends Controller
{
    public function helloWorld()
    {
        return view("laravel-livewire.hello-world");
    }

    public function resetPassword()
    {
        return view("laravel-livewire.reset-password");
    }
}
