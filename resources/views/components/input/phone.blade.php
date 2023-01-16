<label class="form-field mt-4">

    <div class="text-body-2 text--demibold mb-2">Телефон</div>
    <div class="form-input-cover">
        <input type="tel" class="form-input" name="phone" value="+{{ old('phone') }}" required placeholder="+7">
    </div>

    @if (session('status') == 'user-not-found')
        <x-input-auth-error error="Неверный логин. Попробуйте снова." />
    @endif

    @if (session('status') == 'phone-not-found')
        <x-input-auth-error error="Номер не найден." />
    @endif
</label>