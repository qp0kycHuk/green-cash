<div class="content-inner">
    <div class="tab-buttons mt-lg-10 mb-6">
        @if ($this->buttonYandex)
            <button
                wire:click="showYandex"
                @class([
                    'tab-buttons-item waved',
                    'active' => $visibleYandex
                ])>Реклама в Яндекс</button>
        @endif
        <button
            wire:click="showSales"
            @class([
                'tab-buttons-item waved',
                'active' => $visibleSales
            ])>Продажи</button>
    </div>
    @if ($visibleYandex)
        <livewire:project.show.yandex :balance="$balance" :project="$project" :yandex="$yandex" />
    @endif
    @if ($visibleSales)
        <livewire:project.show.sales key="{{ now() }}" :month="$month"  :project="$project" :sales="$sales" />
    @endif
</div>
