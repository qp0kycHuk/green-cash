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
    @vite(['resources/scss/index.scss', 'resources/js/index.js', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    <header class="header bg-l3"><button class="btn btn-icon btn-small btn--primary mr-auto header-burger"
            data-toggle-link="mobile-menu"><svg class="icon color-text">
                <use xlink:href="img/icons.svg#menu" />
            </svg></button>
        <div class="flex flex-align-center"><svg class="header-logo">
                <use xlink:href="img/icons.svg#logo" />
            </svg>
            <div class="mx-5 bd-left py-3 d-none d-md-block"></div>
            <div class="text-body-2 fade-60 lh-1 d-none d-md-block">Пользователь</div>
        </div>
        <div class="header-user ml-auto" data-toggle-cover><button
                class="header-user__btn btn btn--primary btn--white-bg btn--rounded pl-1 pr-1 pr-sm-3" data-toggle-link>
                <div class="image image--round icon text-h2 text-md-h0 mr-sm-4"><img src="img/test-1.jpg"
                        alt=""></div>
                <span
                    class="lh-1 color-text text-body-2 text--demibold d-none d-sm-block">{{ Auth::user()->first_name }}</span>
                <svg class="icon header-user__btn-arrow ml-4 color-text fade-80 text-small d-none d-sm-block">
                    <use xlink:href="img/icons.svg#to-right" />
                </svg>
            </button>
            <div class="header-user-tooltip" data-toggle-content>
                <div class="text-small text--demibold mb-2">
                    {{ Auth::user()->last_name }}
                    {{ Auth::user()->first_name }}
                    {{ Auth::user()->patronymic }}
                </div>
                <div class="text-small mb-4">{{ phone(Auth::user()->phone) }}</div>
                <button class="btn btn--primary btn--light w-100 btn-small">
                    <div class="text-small text--demibold">Редактировать</div>
                </button>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn btn--red mt-2 btn--fill w-100 btn-small">
                        <div class="text-small text--demibold">Выйти</div>
                    </button>
                </form>
            </div>
        </div>
    </header>
    <x-mobile-menu />
    <section class="flex flex-align-start">
        <x-sidebar />
        <div class="content flex-grow p-10 card">
            <div class="content-inner">
                {{ $slot }}
            </div>
        </div>
    </section>
    <livewire:user.edit />
    <livewire:user.add />
    <livewire:user.activate />
    @livewireScripts
</body>

</html>
