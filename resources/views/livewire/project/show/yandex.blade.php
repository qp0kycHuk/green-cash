<div>
    <div class="text-body-1 text-md-subtitle-2 text--bold mb-6">
        @if($balance)
            Баланс: <span class="color-green"> {{ price($balance) }} ₽</span>
        @else
            Данные по балансу отсутствуют
        @endif
    </div>
    <div class="table">
        <div class="table-row table-head">
            <div class="table-cell table-cell-lg bg-l1 brs-2 brs-t">
                <div class="text-body-2 text--medium py-1">Дата</div>
            </div>
            <div class="table-cell bg-l1 brs-2 brs-t">
                <div class="text-body-2 text--medium py-1">Расход</div>
            </div>
            <div class="table-cell-group">
                <div class="table-cell table-cell-full bg-l1 brs-2 brs-t">
                    <div class="text-body-2 text--medium py-1">Посетители</div>
                </div>
                <div class="table-row">
                    <div class="table-cell-group flex">
                        <div class="table-cell bg-l1">
                            <div class="text-body-2 text--medium py-1">Всего</div>
                        </div>
                        <div class="table-cell bg-l1">
                            <div class="text-body-2 text--medium py-1">Новые</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-cell-group">
                <div class="table-cell table-cell-full bg-l1 brs-2 brs-t">
                    <div class="text-body-2 text--medium py-1">Продажи</div>
                </div>
                <div class="table-row">
                    <div class="table-cell-group flex">
                        <div class="table-cell bg-l1">
                            <div class="text-body-2 text--medium py-1">Кол-во</div>
                        </div>
                        <div class="table-cell bg-l1">
                            <div class="text-body-2 text--medium py-1">Сумма</div>
                        </div>
                        <div class="table-cell bg-l1">
                            <div class="text-body-2 text--medium py-1">Ср-й чек</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-cell bg-l1 cursor-pointer brs-2 brs-t" id="tooltip-romi">
                <div class="text-body-2 text--medium py-1">ROMI %</div>
                <div class="table-cell-note"><svg class="icon">
                        <use xlink:href="{{ asset('img/icons.svg#i') }}" />
                    </svg></div>
            </div>
            <div class="table-cell bg-l1 cursor-pointer brs-2 brs-t" id="tooltip-cps">
                <div class="text-body-2 text--medium py-1">CPS</div>
                <div class="table-cell-note"><svg class="icon">
                        <use xlink:href="{{ asset('img/icons.svg#i') }}" />
                    </svg></div>
            </div>
            <div class="table-cell bg-l1 cursor-pointer brs-2 brs-t" id="tooltip-crs">
                <div class="text-body-2 text--medium py-1">CRS</div>
                <div class="table-cell-note"><svg class="icon">
                        <use xlink:href="{{ asset('img/icons.svg#i') }}" />
                    </svg></div>
            </div>
        </div>
        @foreach ($yandex as $row)
            <livewire:project.show.yandex.item :row="collect($row)" :project="$project" />
        @endforeach
    </div>
    <div class="btn-group mt-8">
        <button class="btn btn-small btn--fill btn--primary">
            <span class="text-small text--bold">2022 г.</span>
        </button>
        <button class="btn btn-small btn--contur btn--primary bd-light">
            <span class="text-small text--bold color-text">2021 г.</span>
        </button>
        <button class="btn btn-small btn--contur btn--primary bd-light">
            <span class="text-small text--bold color-text">2020 г.</span>
        </button>
    </div>
</div>