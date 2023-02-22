<div class="d-sm-flex mb-7">
    <div class="btn-group">
        <x-dashboard.filter-button :name="'Вчера'" :type="'yesterday'" :filter="$filter" />
        <x-dashboard.filter-button :name="'Неделя'" :type="'week'" :filter="$filter" />
        <x-dashboard.filter-button :name="'Месяц'" :type="'month'" :filter="$filter" />
        <x-dashboard.filter-button :name="'Год'" :type="'year'" :filter="$filter" />
    </div>
    <label class="form-field ml-sm-2 mt-2 mt-sm-0">
        <div class="form-input-cover">
            <input class="form-input form-input-small pl-9 pr-1 text-small text--bold" data-datepicker
                readonly="readonly">
            <div class="form-input-start pl-2">
                <svg class="icon text-subtitle-2 fade-60">
                    <use xlink:href="{{ asset('img/icons.svg#calendar') }}" />
                </svg>
            </div>
        </div>
    </label>
</div>
