@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-12">

            <a href="{{ url('/') }}">Back to home</a>

        </div>
    </div>

    <div class="card">

        <div class="card-header">
            Contact Us form
        </div>

        <div class="card-body">
            <livewire:contact-us />
        </div>
    </div>


@endsection
