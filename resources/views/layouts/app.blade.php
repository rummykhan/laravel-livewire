<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

    @livewireStyles
</head>
<body class="antialiased">

<div class="row" style="margin-top:5rem;">
    <div class="col-6 offset-3">

        <h3 class="text-center my-3">
            Laravel / Livewire
        </h3>

        @yield('content')

    </div>
</div>


@livewireScripts
</body>
</html>
