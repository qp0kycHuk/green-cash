@if (auth()->user()->hasRole(['manager']))
    <div class="project-table">
        <div class="d-none d-lg-block">
            <div class="project-row project-row--min mb-3">
                <div class="text-small fade-60">Проект</div>
                <div class="text-small fade-60 text--center">Количество продаж</div>
                <div class="text-small fade-60 text--center">Сумма оплат ( в т.ч. наложка)</div>
            </div>
        </div>
        @foreach ($projects as $project)
            <a href="javascript:;" class="project-row project-row--min project-item waved card card-action">
                <div class="project-item__title flex flex-align-center">
                    <img src="{{ asset('img/'.$project->image.'.jpg') }}" alt="" class="icon text-h5 mr-3">
                    <div class="text-body-2 text--demibold">{{ $project->name }}</div>
                </div>
                <div class="text-body-2 text--demibold text-lg--center">
                    <div class="text-small fade-60 d-lg-none">Количество продаж</div>{{ price($project->sales_sum_total_sales) }}
                </div>
                <div class="text-body-2 text--demibold text-lg--center">
                    <div class="text-small fade-60 d-lg-none">Сумма оплат ( в т.ч. наложка)</div>{{ price($project->yandex_sum_sales_sum) }} ₽
                </div>
            </a>
        @endforeach
    </div>
@else
    <div class="project-table">
        <div class="d-none d-lg-block">
            <div class="project-row mb-3">
                <div class="text-small fade-60">Проект</div>
                <div class="text-small fade-60 text--center">Расход Яндекс Директ</div>
                <div class="text-small fade-60 text--center">Посетители на сайте</div>
                <div class="text-small fade-60 text--center">Количество продаж</div>
                <div class="text-small fade-60 text--center">Предоплата</div>
                <div class="text-small fade-60 text--center">Постоплата</div>
                <div class="text-small fade-60 text--center">Сумма оплат ( в т.ч. наложка)</div>
            </div>
        </div>

        @foreach ($projects as $project)
            <a class="project-row project-item waved card card-action">
                <div class="project-item__title flex flex-align-center">
                    <img src="{{ asset('img/'.$project->image.'.jpg') }}" alt="" class="icon text-h5 mr-3">
                    <div class="text-body-2 text--demibold">{{ $project->name }}</div>
                </div>
                <div class="project-item__cost project-item__cost--green d-md-none">
                    {{ price($project->balance) }} @ccy
                    <div class="text-small color-text fade-40">
                        Обновлено: 13:00
                    </div>
                </div>
                <div class="text-body-2 text--demibold text-lg--center">
                    <div class="text-small fade-60 d-lg-none">Расход Яндекс Директ</div>{{ price($project->yandex_sum_spending )}} @ccy
                </div>
                <div class="text-body-2 text--demibold text-lg--center">
                    <div class="text-small fade-60 d-lg-none">Посетители на сайте</div>{{ price($project->yandex_sum_visits_total) }}
                </div>
                <div class="text-body-2 text--demibold text-lg--center">
                    <div class="text-small fade-60 d-lg-none">Количество продаж</div>{{ price($project->sales_sum_total_sales) }}
                </div>
                <div class="text-body-2 text--demibold text-lg--center">
                    <div class="text-small fade-60 d-lg-none">Предоплата</div>{{ price($project->sales_sum_received) }} @ccy
                </div>
                <div class="text-body-2 text--demibold text-lg--center">
                    <div class="text-small fade-60 d-lg-none">Постоплата</div>{{ price($project->sales_sum_pending) }} @ccy
                </div>
                <div class="text-body-2 text--demibold text-lg--center">
                    <div class="text-small fade-60 d-lg-none">Сумма оплат ( в т.ч. наложка)</div>{{ price($project->yandex_sum_sales_sum) }} ₽
                </div>
            </a>
        @endforeach
    </div>
@endif