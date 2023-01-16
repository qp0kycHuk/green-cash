@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="text-body-2 text--center mt-8 color-red">
            @foreach ($errors->all() as $error)
                {!! $error !!}<br>
            @endforeach
        </div>
    </div>
@endif
