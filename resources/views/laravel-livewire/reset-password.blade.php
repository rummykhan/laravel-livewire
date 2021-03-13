@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-12">

            <a href="{{ url('/') }}">Back to home</a>

            <div class="alert alert-success">
                Reset password functionality using laravel livewire, Reset password is one of the most common used functionality you can transition to livewire.
            </div>

        </div>
    </div>


    <div class="row">
        <div class="col-sm-12">
            <div class="card">

                <div class="card-header bg-primary text-white">
                    Reset Password
                </div>

                <div class="card-body">

                    <livewire:reset-password token="some-reset-password-token" email="john.doe@gmail.com"/>

                </div>
            </div>
        </div>
    </div>


@endsection
