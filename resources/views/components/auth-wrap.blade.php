<div class="mobile-menu -menu-" id="mobile-menu">
    <header class="mobile-menu-header header bg-l3">
        <button class="btn btn-icon btn-small btn--primary mr-2 header-burger"
            data-toggle-link="mobile-menu">
            <svg class="icon color-text">
                <use xlink:href="{{ asset('img/icons.svg#cross') }}" />
            </svg>
        </button>
        <div class="flex flex-align-center">
            <x-application-logo />
        </div>
    </header>
    <div class="mobile-menu-content">
        <button class="btn btn--primary color-text px-2 mb-1">
            <svg
                class="icon mr-2 text-h6 fade-60">
                <use xlink:href="{{ asset('img/icons.svg#chart') }}" />
            </svg>
            <span class="fade-80 mr-auto text-body-2 text--demibold lh-1">Сводка</span>
        </button>
        <button
            class="btn btn--primary color-text px-2 mb-1">
            <svg class="icon mr-2 text-h6 fade-80 color-primary">
                <use xlink:href="{{ asset('img/icons.svg#columns') }}" />
            </svg>
            <span class="mr-auto text-body-2 text--demibold lh-1">Реклама и продажи</span>
            <svg
                class="icon text-small fade-40">
                <use xlink:href="{{ asset('img/icons.svg#to-right') }}" />
            </svg>
        </button>
        <button class="btn btn--primary color-text px-2 mb-1 sidebar-project btn-small">
            <div class="sidebar-project-icon mr-2">
                <svg class="icon text-h6 fade-40">
                    <use xlink:href="{{ asset('img/icons.svg#grip-horizontal') }}" />
                </svg>
            </div>
            <span class="mr-auto text-body-2 lh-1 fade-80">oazis-roz.ru</span>
        </button>
        <button class="btn btn--primary color-text px-2 mb-1 sidebar-project btn-small">
            <div class="sidebar-project-icon mr-2">
                <svg class="icon text-h6 fade-40">
                    <use xlink:href="{{ asset('img/icons.svg#grip-horizontal') }}" />
                </svg>
            </div>
            <span class="mr-auto text-body-2 lh-1 fade-80">dirijer-sada.ru</span> <svg
                class="icon text-body-0 color-red fade-80">
                <use xlink:href="{{ asset('img/icons.svg#rub-circle') }}" />
            </svg>
        </button> <button class="btn btn--primary color-text px-2 mb-1 sidebar-project btn-small">
            <div class="sidebar-project-icon mr-2"><svg class="icon text-h6 fade-40">
                    <use xlink:href="{{ asset('img/icons.svg#grip-horizontal') }}" />
                </svg></div><span class="mr-auto text-body-2 lh-1 fade-80">garden-class.ru</span>
        </button>
        <div class="bd-top mt-10 mb-6"></div><button class="btn btn--primary"><svg class="icon text-h6 mr-4">
                <use xlink:href="{{ asset('img/icons.svg#plus') }}" />
            </svg>
            <div class="mr-auto">Добавить проект</div>
        </button> <label class="form-field form-checkbox p-4 w-100 mt-auto"><input type="checkbox"
                class="form-input-checkbox -theme-changer-">
            <div class="form-toggle-target"></div>
            <div class="text-body-2 ml-2">Темная тема</div>
        </label>
    </div>
</div>
<div class="mobile-menu-shadow" data-toggle-link="mobile-menu"></div>
<section class="auth-page flex-grow">
    <div class="auth-page__background"><img src="{{ asset('img/auth-background.jpg') }}" alt=""></div>
    <div class="auth-page__form px-4 px-sm-8 py-10">
        <div class="text-h5 text--center mb-10">{{ $title }}</div>
        {{ $slot }}
    </div>
</section>
