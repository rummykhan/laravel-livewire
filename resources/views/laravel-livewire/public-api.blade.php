@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-12">

            <a href="{{ url('/') }}">Back to home</a>

        </div>
    </div>

    <div class="card">

        <div class="card-header">
            Public API
        </div>

        <div class="card-body">

            <livewire:public-api />

        </div>
    </div>


@endsection
