<label class="form-field mt-4">
    <div class="text-body-2 text--demibold mb-2">Пароль</div>
    <div class="form-input-cover">
        <input type="password" name="password" required class="form-input" id="password">
        <div class="form-input-end pr-1">
            <button class="btn btn--primary btn-small btn-icon" data-show-pass="password">
                <svg class="icon text-h6 active-disabled color-text fade-60">
                    <use xlink:href="{{ asset('img/icons.svg#eye') }}" />
                </svg>
                <svg class="icon text-h6 active-enabled color-text fade-60">
                    <use xlink:href="{{ asset('img/icons.svg#eye-hiden') }}" />
                </svg>
            </button>
        </div>
    </div>
</label>