@foreach ($projects as $project)
    <a href="{{ route('projects.show', $project->slug) }}" class="btn btn--primary color-text px-2 mb-1 sidebar-project btn-small">
        <div class="sidebar-project-icon mr-2">
            <svg class="icon text-h6 fade-40">
                <use xlink:href="{{ asset('img/icons.svg#grip-horizontal') }}" />
            </svg>
        </div>
        <span class="mr-auto text-body-2 lh-1 fade-80">{{ $project->name }}</span>
    </a>
@endforeach
