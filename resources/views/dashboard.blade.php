<x-app-layout>
    <div class="text-h4 mb-8">Сводка</div>
    <div class="d-sm-flex mb-7">
        <div class="btn-group"><button
                class="btn btn-small btn--fill btn--primary px-0 px-sm-3 flex-grow"><span
                    class="text-small text--bold">Сегодня</span></button> <button
                class="btn btn-small btn--contur btn--primary bd-light px-0 px-sm-3 flex-grow"><span
                    class="text-small text--bold color-text">Вчера</span></button> <button
                class="btn btn-small btn--contur btn--primary bd-light px-0 px-sm-3 flex-grow"><span
                    class="text-small text--bold color-text">Неделя</span></button> <button
                class="btn btn-small btn--contur btn--primary bd-light px-0 px-sm-3 flex-grow"><span
                    class="text-small text--bold color-text">Месяц</span></button> <button
                class="btn btn-small btn--contur btn--primary bd-light px-0 px-sm-3 flex-grow"><span
                    class="text-small text--bold color-text">Год</span></button></div><label
            class="form-field ml-sm-2 mt-2 mt-sm-0">
            <div class="form-input-cover"><input
                    class="form-input form-input-small pl-9 pr-1 text-small text--bold" data-datepicker
                    readonly="readonly">
                <div class="form-input-start pl-2"><svg class="icon text-subtitle-2 fade-60">
                        <use xlink:href="img/icons.svg#calendar" />
                    </svg></div>
            </div>
        </label>
    </div>
    <div class="project-table">
        <div class="d-none d-lg-block">
            <div class="project-row mb-3">
                <div class="text-small fade-60">Проект</div>
                <div class="text-small fade-60">Баланс</div>
                <div class="text-small fade-60 text--center">Расход Яндекс Директ</div>
                <div class="text-small fade-60 text--center">Посетители на сайте</div>
                <div class="text-small fade-60 text--center">Количество продаж</div>
                <div class="text-small fade-60 text--center">Сумма оплат ( в т.ч. наложка)</div>
            </div>
        </div><a href="javascript:;" class="project-row project-item waved card card-action">
            <div class="project-item__title flex flex-align-center"><img src="img/test-3.jpg"
                    alt="" class="icon text-h5 mr-3">
                <div class="text-body-2 text--demibold">dirijer-sada.ru</div>
            </div>
            <div class="project-item__cost project-item__cost--green">10 020 ₽</div>
            <div class="text-body-2 text--demibold text-lg--center">
                <div class="text-small fade-60 d-lg-none">Расход Яндекс Директ</div>11 312 ₽
            </div>
            <div class="text-body-2 text--demibold text-lg--center">
                <div class="text-small fade-60 d-lg-none">Посетители на сайте</div>12 122
            </div>
            <div class="text-body-2 text--demibold text-lg--center">
                <div class="text-small fade-60 d-lg-none">Количество продаж</div>12 732
            </div>
            <div class="text-body-2 text--demibold text-lg--center">
                <div class="text-small fade-60 d-lg-none">Сумма оплат ( в т.ч. наложка)</div>11 123 763 ₽
            </div>
        </a><a href="javascript:;" class="project-row project-item waved card card-action">
            <div class="project-item__title flex flex-align-center"><img src="img/test-3.jpg"
                    alt="" class="icon text-h5 mr-3">
                <div class="text-body-2 text--demibold">dirijer-sada.ru</div>
            </div>
            <div class="project-item__cost project-item__cost--red">10 020 ₽</div>
            <div class="text-body-2 text--demibold text-lg--center">
                <div class="text-small fade-60 d-lg-none">Расход Яндекс Директ</div>11 312 ₽
            </div>
            <div class="text-body-2 text--demibold text-lg--center">
                <div class="text-small fade-60 d-lg-none">Посетители на сайте</div>12 122
            </div>
            <div class="text-body-2 text--demibold text-lg--center">
                <div class="text-small fade-60 d-lg-none">Количество продаж</div>12 732
            </div>
            <div class="text-body-2 text--demibold text-lg--center">
                <div class="text-small fade-60 d-lg-none">Сумма оплат ( в т.ч. наложка)</div>11 123 763 ₽
            </div>
        </a>
    </div>
    <div class="my-10"></div>
    <div class="project-table">
        <div class="d-none d-lg-block">
            <div class="project-row project-row--min mb-3">
                <div class="text-small fade-60">Проект</div>
                <div class="text-small fade-60 text--center">Количество продаж</div>
                <div class="text-small fade-60 text--center">Сумма оплат ( в т.ч. наложка)</div>
            </div>
        </div><a href="javascript:;"
            class="project-row project-row--min project-item waved card card-action">
            <div class="project-item__title flex flex-align-center"><img src="img/test-3.jpg"
                    alt="" class="icon text-h5 mr-3">
                <div class="text-body-2 text--demibold">dirijer-sada.ru</div>
            </div>
            <div class="text-body-2 text--demibold text-lg--center">
                <div class="text-small fade-60 d-lg-none">Количество продаж</div>12 732
            </div>
            <div class="text-body-2 text--demibold text-lg--center">
                <div class="text-small fade-60 d-lg-none">Сумма оплат ( в т.ч. наложка)</div>11 123 763 ₽
            </div>
        </a>
    </div>
</x-app-layout>
