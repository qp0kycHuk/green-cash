<div class="table">
    <div class="table-row table-head">
        <div class="table-cell table-cell-lg bg-l1 brs-2 brs-t">
            <div class="text-body-2 text--medium py-1">Дата</div>
        </div>
        <div class="table-cell-group">
            <div class="table-cell table-cell-full bg-l1 brs-2 brs-t">
                <div class="text-body-2 text--medium py-1">Оплата 100%</div>
            </div>
            <div class="table-row">
                <div class="table-cell-group flex">
                    <div class="table-cell bg-l1">
                        <div class="text-body-2 text--medium py-1">Кол-во</div>
                    </div>
                    <div class="table-cell bg-l1">
                        <div class="text-body-2 text--medium py-1">Сумма</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-cell-group">
            <div class="table-cell table-cell-full bg-l1 brs-2 brs-t">
                <div class="text-body-2 text--medium py-1">Оплата 50/50</div>
            </div>
            <div class="table-row">
                <div class="table-cell-group flex">
                    <div class="table-cell bg-l1">
                        <div class="text-body-2 text--medium py-1">Кол-во</div>
                    </div>
                    <div class="table-cell bg-l1">
                        <div class="text-body-2 text--medium py-1">Сумма</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-cell-group">
            <div class="table-cell table-cell-full bg-l1 brs-2 brs-t">
                <div class="text-body-2 text--medium py-1">Предзаказ</div>
            </div>
            <div class="table-row">
                <div class="table-cell-group flex">
                    <div class="table-cell bg-l1">
                        <div class="text-body-2 text--medium py-1">Кол-во</div>
                    </div>
                    <div class="table-cell bg-l1">
                        <div class="text-body-2 text--medium py-1">Сумма</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-cell table-cell-lg bg-l1 brs-2 brs-t">
            <div class="text-body-2 text--medium py-1 text--center">Общее кол-во продаж</div>
        </div>
        <div class="table-cell table-cell-lg bg-l1 cursor-pointer brs-2 brs-t" id="tooltip-cps">
            <div class="text-body-2 text--medium py-1">₽ поступило</div>
            <div class="table-cell-note"><svg class="icon">
                    <use xlink:href="{{ asset('img/icons.svg#i') }}" />
                </svg></div>
        </div>
        <div class="table-cell table-cell-lg bg-l1 brs-2 brs-t">
            <div class="text-body-2 text--medium py-1">₽ поступит</div>
        </div>
        <div class="table-cell bg-l1 brs-2 brs-t">
            <div class="text-body-2 text--medium py-1">Ср-й чек</div>
        </div>
    </div>

    @foreach ($sales as $row)
        <livewire:project.show.sales.item :month="$month" :row="collect($row)" :project="$project" />
    @endforeach
</div>
