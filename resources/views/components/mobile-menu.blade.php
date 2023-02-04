<div class="mobile-menu -menu-" id="mobile-menu">
    <header class="mobile-menu-header header bg-l3">
        <button class="btn btn-icon btn-small btn--primary mr-2 header-burger" data-toggle-link="mobile-menu">
            <svg class="icon color-text">
                <use xlink:href="{{ asset('img/icons.svg#cross') }}" />
            </svg>
        </button>
        <div class="flex flex-align-center">
            <svg class="header-logo">
                <use xlink:href="{{ asset('img/icons.svg#logo') }}" />
            </svg>
        </div>
    </header>
    <div class="mobile-menu-content">
        <a href="#" class="btn btn--primary color-text px-2 mb-1">
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
        <div class="bd-top mt-10 mb-6"></div>
        <a href="#" class="btn btn--primary">
            <svg class="icon text-h6 mr-4">
                <use xlink:href="{{ asset('img/icons.svg#plus') }}" />
            </svg>
            <div class="mr-auto">Добавить проект</div>
        </a>
        <label class="form-field form-checkbox p-4 w-100 mt-auto">
            <input type="checkbox" class="form-input-checkbox -theme-changer-">
            <div class="form-toggle-target"></div>
            <div class="text-body-2 ml-2">Темная тема</div>
        </label>
    </div>
</div>
<div class="mobile-menu-shadow" data-toggle-link="mobile-menu"></div>
