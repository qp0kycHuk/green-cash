<div class="progect-btns flex">
        <a href="{{ route('projects.show', $project['slug']) }}" class="btn btn-xsmall text-small btn--primary btn--fill btn--rounded">
            {{ $project['name'] }}
        </a>
    @foreach ($projects as $project)
        <a href="{{ route('projects.show', $project['slug']) }}" class="btn btn-xsmall text-small btn--primary btn--light btn--rounded ml-2 color-text">
            {{ $project['name'] }}
        </a>
    @endforeach
</div>
