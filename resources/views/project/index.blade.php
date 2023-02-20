<x-app-layout>
    <x-project-btns />
    <div class="flex flex-align-center progect-header mb-6 mb-lg-0">
        <div class="flex">
            <div class="progect-header-logo mr-4 mr-md-8"><img src="{{ asset('img/test-1.jpg') }}" alt=""></div>
            <div class="">
                <div class="text-subtitle-1 text-md-h4">{{ $project->name }}</div>
                <div class="text-small text-md-body-2 fade-60">{{ $project->description }}</div>
            </div>
        </div>
        @if (!auth()->user()->hasRole(['manager']))
            <livewire:project.users :project="$project" />
        @endif
        <div class="ml-auto">
            <button class="btn btn--primary btn--white-bg btn-icon btn-md-large">
                <svg class="icon text-h6 color-text fade-60">
                    <use xlink:href="{{ asset('img/icons.svg#settings') }}" />
                </svg>
            </button>
        </div>
    </div>

    <livewire:project.show :project="$project" :balance="$balance" />
</x-app-layout>
