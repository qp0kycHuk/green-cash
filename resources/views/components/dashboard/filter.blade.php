<div class="d-sm-flex mb-7">
    <div class="btn-group d-sm-flex d-none">
        <x-dashboard.filter-button :name="'Вчера'" :type="'yesterday'" :filter="$filter" />
        <x-dashboard.filter-button :name="'Неделя'" :type="'week'" :filter="$filter" />
        <x-dashboard.filter-button :name="'Месяц'" :type="'month'" :filter="$filter" />
        <x-dashboard.filter-button :name="'Год'" :type="'year'" :filter="$filter" />
    </div>
    <x-dashboard.filter-select :filter="$filter" />
    <x-dashboard.filter-datepicker />
</div>