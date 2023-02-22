<button
    wire:click="filter('{{ $type }}')"
    @class([
        'btn btn-small btn--primary px-0 px-sm-3 flex-grow',
        'btn--fill' => $filter === $type,
        'btn--contur bd-light' => $filter !== $type,

    ])>
    <span class="text-small text--bold">{{ $name }}</span>
</button>