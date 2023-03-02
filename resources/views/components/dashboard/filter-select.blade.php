<label class="form-field ml-sm-2 mt-2 mt-sm-0 w-100 d-sm-none">
    <div class="form-input-cover">
        <select wire:model="filter" class="form-input form-input-small" id="">
            <option value="yesterday">Вчера</option>
            <option value="week">Неделя</option>
            <option value="month">Месяц</option>
            <option value="year">Год</option>
        </select>
        <div class="form-input-end pr-2">
            <svg class="icon text-body-2 fade-60">
                <use xlink:href="{{ asset('img/icons.svg#to-right') }}" />
            </svg>
        </div>
    </div>
</label>