@php
    use App\Services\GradientService;

    $active = $visible ? 'active' : '';
@endphp
<div class="mb-2">
    <div class="table-row">
        <button
            wire:click="visible"
            @class([
                'table-cell table-cell-lg bg-l3 btn btn--primary',
                'active btn--fill' => $visible])>
            <div
                @class([
                    'text-small text--demibold py-1',
                    'color-text' => !$visible])>
                {{ Str::ucfirst(Carbon\Carbon::create($row['created_at'])->translatedFormat('F')) }}</div>
            <div class="form-input-end pr-2">
                <svg
                    @class([
                        'icon text-small fade-60',
                        'color-text' => !$visible
                    ])
                    style="{{ !$visible ?: 'transform: rotateZ(-90deg)' }}">
                    <use xlink:href="{{ asset('img/icons.svg#to-right') }}" />
                </svg>
            </div>
        </button>
        <div class="table-cell bg-l3 {{ $active }}">
            <div class="text-small py-1">{{ price($row['spending']) }} @ccy</div>
        </div>
        <div class="table-cell-group flex">
            <div class="table-cell bg-l3 {{ $active }}">
                <div class="text-small py-1">{{ $row['visits_total'] }}</div>
            </div>
            <div class="table-cell bg-l3 {{ $active }}">
                <div class="text-small py-1">{{ $row['visits_new'] }}</div>
            </div>
        </div>
        <div class="table-cell-group flex">
            <div class="table-cell bg-l3 {{ $active }}">
                <div class="text-small py-1">{{ price($row['sales_quanity']) }}</div>
            </div>
            <div class="table-cell bg-l3 {{ $active }}">
                <div class="text-small py-1">{{ price($row['sales_sum']) }} @ccy</div>
            </div>
            <div class="table-cell bg-l3 {{ $active }}">
                <div class="text-small py-1">{{ price($row['sales_check']) }} @ccy</div>
            </div>
        </div>
        <div class="table-cell bg-l3 {{ $active }}">
            <div class="text-small py-1">{{ $row['ROMI'] }}</div>
        </div>
        <div class="table-cell bg-l3 {{ $active }}">
            <div class="text-small py-1">{{ $row['CPS'] }}</div>
        </div>
        <div class="table-cell bg-l3 {{ $active }}">
            <div class="text-small py-1">{{ crs($row['CRS']) }}</div>
        </div>
    </div>
    @if ($visible)
        <div class="table-row-group">
            @foreach ($rows as $item)
                <div class="table-row">
                    <div
                        style="background: {{ GradientService::weekend($item['created_at']->format('d.m.Y')) }}"
                        class="table-cell table-cell-lg bg-l2">
                        <div class="text-small py-1">{{ $item['created_at']->format('d.m.Y') }}</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">{{ price($item['spending']) }} @ccy</div>
                    </div>
                    <div class="table-cell-group flex">
                        <div class="table-cell bg-l3">
                            <div class="text-small py-1">{{ $item['visits_total'] }}</div>
                        </div>
                        <div class="table-cell bg-l3">
                            <div class="text-small py-1">{{ $item['visits_new'] }}</div>
                        </div>
                    </div>
                    <div class="table-cell-group flex">
                        <div class="table-cell bg-l3">
                            <div class="text-small py-1">{{ price($item['sales_quanity']) }} @ccy</div>
                        </div>
                        <div class="table-cell bg-l3">
                            <div class="text-small py-1">{{ price($item['sales_sum']) }} @ccy</div>
                        </div>
                        <div class="table-cell bg-l3">
                            <div class="text-small py-1">{{ price($item['sales_check']) }} @ccy</div>
                        </div>
                    </div>
                    <div
                        style="background: {{ GradientService::ROMI($item['ROMI']) }}"
                        class="table-cell bg-l3">
                        <div class="text-small py-1">{{ $item['ROMI'] }}</div>
                    </div>
                    <div
                        style="background: {{ GradientService::CPS($item['CPS']) }}"
                        class="table-cell bg-l3">
                        <div class="text-small py-1">{{ $item['CPS'] }}</div>
                    </div>
                    <div
                        style="background: {{ GradientService::CRS(crs($item['CRS'])) }}"
                        class="table-cell bg-l3">
                        <div class="text-small py-1">{{ crs($item['CRS']) }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
