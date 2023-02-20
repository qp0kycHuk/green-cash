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
        <div class="table-cell-group flex">
            <div class="table-cell bg-l3 {{ $active }}">
                <div class="text-small py-1">{{ price($row['payment_100_quanity']) }}</div>
            </div>
            <div class="table-cell bg-l3 {{ $active }}">
                <div class="text-small py-1">{{ price($row['payment_100_sum']) }} @ccy</div>
            </div>
        </div>
        <div class="table-cell-group flex">
            <div class="table-cell bg-l3 {{ $active }}">
                <div class="text-small py-1">{{ price($row['payment_50_quanity']) }}</div>
            </div>
            <div class="table-cell bg-l3 {{ $active }}">
                <div class="text-small py-1">{{ price($row['payment_50_sum']) }} @ccy</div>
            </div>
        </div>
        <div class="table-cell-group flex">
            <div class="table-cell bg-l3 {{ $active }}">
                <div class="text-small py-1">{{ price($row['preorder_quanity']) }}</div>
            </div>
            <div class="table-cell bg-l3 {{ $active }}">
                <div class="text-small py-1">{{ price($row['preorder_sum']) }} @ccy</div>
            </div>
        </div>
        <div class="table-cell table-cell-lg bg-l3 {{ $active }}">
            <div class="text-small py-1">{{ $row['total_sales'] }}</div>
        </div>
        <div class="table-cell table-cell-lg bg-l3 {{ $active }}">
            <div class="text-small py-1">{{ price($row['received']) }} @ccy</div>
        </div>
        <div class="table-cell table-cell-lg bg-l3 {{ $active }}">
            <div class="text-small py-1">{{ price($row['pending']) }} @ccy</div>
        </div>
        <div class="table-cell bg-l3 {{ $active }}">
            <div class="text-small py-1">{{ price($row['check']) }} @ccy</div>
        </div>
    </div>
    @if ($visible)
        <div class="table-row-group">
            @foreach ($rows as $item)
                <button wire:click="edit({{ $item }})" class="table-row table-row--edit">
                    <div
                        style="background: {{ GradientService::weekend($item['created_at']->format('d.m.Y')) }}"
                        class="table-cell table-cell-lg bg-l2">
                        <div class="form-input-start pl-2">
                            <svg class="icon color-primary">
                                <use xlink:href="{{ asset('img/icons.svg#edit') }}" />
                            </svg>
                        </div>
                        <div class="text-small py-1">{{ $item['created_at']->format('d.m.Y') }}</div>
                    </div>
                    <div class="table-cell-group flex">
                        <div class="table-cell bg-l3">
                            <div class="text-small py-1">{{ price($item['payment_100_quanity']) }} @ccy</div>
                        </div>
                        <div class="table-cell bg-l3">
                            <div class="text-small py-1">{{ price($item['payment_100_sum']) }} @ccy</div>
                        </div>
                    </div>
                    <div class="table-cell-group flex">
                        <div class="table-cell bg-l3">
                            <div class="text-small py-1">{{ price($item['payment_50_quanity']) }} @ccy</div>
                        </div>
                        <div class="table-cell bg-l3">
                            <div class="text-small py-1">{{ price($item['payment_50_sum']) }} @ccy</div>
                        </div>
                    </div>
                    <div class="table-cell-group flex">
                        <div class="table-cell bg-l3">
                            <div class="text-small py-1">{{ price($item['preorder_quanity']) }} @ccy</div>
                        </div>
                        <div class="table-cell bg-l3">
                            <div class="text-small py-1">{{ price($item['preorder_sum']) }} @ccy</div>
                        </div>
                    </div>
                    <div class="table-cell table-cell-lg bg-l3">
                        <div class="text-small py-1">{{ $item['total_sales'] ?? 0 }}</div>
                    </div>
                    <div class="table-cell table-cell-lg bg-l3">
                        <div class="text-small py-1">{{ price($item['received']) }} @ccy</div>
                    </div>
                    <div class="table-cell table-cell-lg bg-l3">
                        <div class="text-small py-1">{{ price($item['pending']) }} @ccy</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">{{ price($item['check']) }} @ccy</div>
                    </div>
                </button>
            @endforeach
        </div>
    @endif
</div>
