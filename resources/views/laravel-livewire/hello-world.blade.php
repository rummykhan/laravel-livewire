@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-12">

            <a href="{{ url('/') }}">Back to home</a>

            <div class="alert alert-success">
                Just play with different controls to see how reactive is this!
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">

                <div class="card-header bg-primary text-white">
                    1. Hello livewire
                </div>

                <div class="card-body">

                    <livewire:hello-livewire />

                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-sm-12">
            <div class="card">

                <div class="card-header bg-secondary text-white">
                    2. Hello livewire Input
                </div>

                <div class="card-body">

                    <livewire:hello-livewire-input />

                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-sm-12">
            <div class="card">

                <div class="card-header bg-secondary text-white">
                    3. Hello livewire Comment
                </div>

                <div class="card-body">

                    <livewire:hello-livewire-comment />

                </div>
            </div>
        </div>
    </div>


@endsection
