<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel Debugging') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel debugging') }}
                </a>
            </div>

            <ul class="nav navbar-nav">
                <li><a href="{{ route('manufacturers.index') }}">Manufacturers</a></li>
                <li><a href="{{ route('car-models.index') }}">Car models</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @if(session()->has('flash_message'))
            <div class="alert alert-{{ session()->get('flash_message')['level'] }}">
                {{ session()->get('flash_message')['message'] }}
            </div>
        @endif

        @yield('content')
    </div>

</div>

</body>
</html>
