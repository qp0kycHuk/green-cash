<div class="d-sm-flex mb-7">
    <div class="btn-group d-sm-flex d-none">
        <x-dashboard.filter-button :name="'Вчера'" :type="'yesterday'" :filter="$filter" />
        <x-dashboard.filter-button :name="'Неделя'" :type="'week'" :filter="$filter" />
        <x-dashboard.filter-button :name="'Месяц'" :type="'month'" :filter="$filter" />
        <x-dashboard.filter-button :name="'Год'" :type="'year'" :filter="$filter" />
    </div>
    <label class="form-field ml-sm-2 mt-2 mt-sm-0 w-100 d-sm-none">
        <div class="form-input-cover">
            <select name="" class="form-input form-input-small" id="">
                <option value="">Сегодня</option>
                <option value="">Вчера</option>
                <option value="">Неделя</option>
                <option value="">Месяц</option>
                <option value="">Год</option>
            </select>
            <div class="form-input-end pr-2">
                <svg class="icon text-body-2 fade-60">
                    <use xlink:href="{{ asset('img/icons.svg#to-right') }}" />
                </svg>
            </div>
        </div>
    </label>
    <div class="flex flex-align-center" data-datepicker-cover>
        
        <label class="form-field ml-sm-2 mt-2 mt-sm-0 flex-grow">
            <div class="form-input-cover">
                <input class="form-input form-input-small pl-9 pr-1 text-small text--bold" data-datepicker-min readonly="readonly">
                <div class="form-input-start pl-2">
                    <svg class="icon text-subtitle-2 fade-60">
                        <use xlink:href="{{ asset('img/icons.svg#calendar') }}" />
                    </svg>
                </div>
            </div>
        </label>
        <div class="mx-5">-</div>
        <label class="form-field ml-sm-2 mt-2 mt-sm-0 flex-grow">
            <div class="form-input-cover">
                <input class="form-input form-input-small pl-9 pr-1 text-small text--bold" data-datepicker-max readonly="readonly">
                <div class="form-input-start pl-2">
                    <svg class="icon text-subtitle-2 fade-60">
                        <use xlink:href="{{ asset('img/icons.svg#calendar') }}" />
                    </svg>
                </div>
            </div>
        </label>
    </div>
</div>