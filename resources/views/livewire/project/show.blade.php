<!-- content !-->
<div class="content-inner">
    <div class="tab-buttons mt-lg-10 mb-6">
        <button class="tab-buttons-item waved active">Реклама в
            Яндекс</button>
        <button class="tab-buttons-item waved">Продажи</button>
    </div>
    <div class="text-body-1 text-md-subtitle-2 text--bold mb-6">
        @if($amount)
            Баланс: <span class="color-green"> {{ $amount }} ₽</span>
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
        <div class="table-row"><button class="table-cell table-cell-lg bg-l3 btn btn--primary">
                <div class="text-small text--demibold py-1 color-text">Январь</div>
                <div class="form-input-end pr-2"><svg class="icon text-small fade-60 color-text">
                        <use xlink:href="{{ asset('img/icons.svg#to-right') }}" />
                    </svg></div>
            </button>
            <div class="table-cell bg-l3">
                <div class="text-small py-1">674 585 ₽</div>
            </div>
            <div class="table-cell-group flex">
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
            </div>
            <div class="table-cell-group flex">
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
            </div>
            <div class="table-cell bg-l3">
                <div class="text-small py-1">674 585 ₽</div>
            </div>
            <div class="table-cell bg-l3">
                <div class="text-small py-1">674 585 ₽</div>
            </div>
            <div class="table-cell bg-l3">
                <div class="text-small py-1">674 585 ₽</div>
            </div>
        </div>
        <div class="table-row"><button class="table-cell active table-cell-lg bg-l3 btn btn--primary btn--fill">
                <div class="text-small text--demibold py-1">Январь</div>
                <div class="form-input-end pr-2"><svg class="icon text-small fade-60"
                        style="transform: rotateZ(-90deg);">
                        <use xlink:href="{{ asset('img/icons.svg#to-right') }}" />
                    </svg></div>
            </button>
            <div class="table-cell active bg-l3">
                <div class="text-small py-1">674 585 ₽</div>
            </div>
            <div class="table-cell-group flex">
                <div class="table-cell active bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell active bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
            </div>
            <div class="table-cell-group flex">
                <div class="table-cell active bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell active bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell active bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
            </div>
            <div class="table-cell active bg-l3">
                <div class="text-small py-1">674 585 ₽</div>
            </div>
            <div class="table-cell active bg-l3">
                <div class="text-small py-1">674 585 ₽</div>
            </div>
            <div class="table-cell active bg-l3">
                <div class="text-small py-1">674 585 ₽</div>
            </div>
        </div>
        <div class="table-row-group">
            <div class="table-row">
                <div class="table-cell table-cell-lg bg-l2">
                    <div class="text-small py-1">1.12.2022</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell-group flex">
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                </div>
                <div class="table-cell-group flex">
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
            </div>
            <div class="table-row">
                <div class="table-cell table-cell-lg bg-l2">
                    <div class="text-small py-1">1.12.2022</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell-group flex">
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                </div>
                <div class="table-cell-group flex">
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
            </div>
            <div class="table-row">
                <div class="table-cell table-cell-lg bg-l2">
                    <div class="text-small py-1">1.12.2022</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell-group flex">
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                </div>
                <div class="table-cell-group flex">
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
            </div>
            <div class="table-row">
                <div class="table-cell table-cell-lg bg-l2">
                    <div class="text-small py-1">1.12.2022</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell-group flex">
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                </div>
                <div class="table-cell-group flex">
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
            </div>
            <div class="table-row">
                <div class="table-cell table-cell-lg bg-l2">
                    <div class="text-small py-1">1.12.2022</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell-group flex">
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                </div>
                <div class="table-cell-group flex">
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
            </div>
            <div class="table-row">
                <div class="table-cell table-cell-lg bg-l2">
                    <div class="text-small py-1">1.12.2022</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell-group flex">
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                </div>
                <div class="table-cell-group flex">
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
            </div>
            <div class="table-row">
                <div class="table-cell table-cell-lg bg-l2">
                    <div class="text-small py-1">1.12.2022</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell-group flex">
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                </div>
                <div class="table-cell-group flex">
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
            </div>
            <div class="table-row">
                <div class="table-cell table-cell-lg bg-l2">
                    <div class="text-small py-1">1.12.2022</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell-group flex">
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                </div>
                <div class="table-cell-group flex">
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
            </div>
            <div class="table-row">
                <div class="table-cell table-cell-lg bg-l2">
                    <div class="text-small py-1">1.12.2022</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell-group flex">
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                </div>
                <div class="table-cell-group flex">
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
            </div>
            <div class="table-row">
                <div class="table-cell table-cell-lg bg-l2">
                    <div class="text-small py-1">1.12.2022</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell-group flex">
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                </div>
                <div class="table-cell-group flex">
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
            </div>
            <div class="table-row">
                <div class="table-cell table-cell-lg bg-l2">
                    <div class="text-small py-1">1.12.2022</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell-group flex">
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                </div>
                <div class="table-cell-group flex">
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
            </div>
            <div class="table-row">
                <div class="table-cell table-cell-lg bg-l2">
                    <div class="text-small py-1">1.12.2022</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell-group flex">
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                </div>
                <div class="table-cell-group flex">
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                    <div class="table-cell bg-l3">
                        <div class="text-small py-1">674 585 ₽</div>
                    </div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
                <div class="table-cell bg-l3">
                    <div class="text-small py-1">674 585 ₽</div>
                </div>
            </div>
        </div>
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
