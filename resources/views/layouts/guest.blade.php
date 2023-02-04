<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/scss/index.scss', 'resources/js/index.js'])
</head>

<body>
    <header class="header bg-l3">
        <button class="btn btn-icon btn-small btn--primary mr-auto header-burger" data-toggle-link="mobile-menu">
            <svg class="icon color-text">
                <use xlink:href="{{ asset('img/icons.svg#menu') }}" />
            </svg>
        </button>
        <div class="flex flex-align-center">
            <x-application-logo />
            <div class="mx-5 bd-left py-3 d-none d-md-block"></div>
            <div class="text-body-2 fade-60 lh-1 d-none d-md-block">Пользователь</div>
        </div>

        <div class="header-user ml-auto">
            <button class="header-user__btn btn btn--primary btn--white-bg btn--rounded pl-1 pr-1 pr-sm-3">
                <div class="image image--round icon text-h2 text-md-h0 mr-sm-4">
                    <img src="{{ asset('img/test-1.jpg') }}" alt="">
                </div>
                <span class="lh-1 color-text d-none d-sm-block">Александр</span>
                <svg class="icon ml-4 color-text fade-80 text-small d-none d-sm-block">
                    <use xlink:href="{{ asset('img/icons.svg#to-right') }}" />
                </svg>
            </button>
        </div>
    </header>
    {{ $slot }}
</body>

</html>
