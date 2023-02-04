<div class="sidebar card">
    <a href="{{ route('dashboard') }}" class="btn btn--primary color-text px-2 mb-1">
        <svg class="icon mr-2 text-h6 fade-60">
            <use xlink:href="{{ asset('img/icons.svg#chart') }}" />
        </svg>
        <span class="fade-80 mr-auto text-body-2 text--demibold lh-1">Сводка</span>
    </a>
    <a href="#" class="btn btn--primary color-text px-2 mb-1">
        <svg class="icon mr-2 text-h6 fade-80 color-primary">
            <use xlink:href="{{ asset('img/icons.svg#columns') }}" />
        </svg>
        <span class="mr-auto text-body-2 text--demibold lh-1">Реклама и продажи</span>
        <svg class="icon text-small fade-40">
            <use xlink:href="{{ asset('img/icons.svg#to-right') }}" />
        </svg>
    </a>
    <x-project-links />
    <a href="{{ route('users') }}" class="btn btn--primary color-text px-2 mb-1">
        <svg class="icon mr-2 text-h6 fade-80 color-primary">
            <use xlink:href="{{ asset('img/icons.svg#users') }}" />
        </svg>
        <span class="mr-auto text-body-2 text--demibold lh-1">Пользователи</span>
        <svg class="icon text-small fade-40">
            <use xlink:href="{{ asset('img/icons.svg#to-right') }}" />
        </svg>
    </a>
</div>
