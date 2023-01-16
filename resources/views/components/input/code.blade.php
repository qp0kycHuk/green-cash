<label class="form-field">
    <div class="text-body-2 text--demibold mb-2">Код</div>
    <div class="form-input-cover">
        <input name="code" required autofocus class="form-input">
    </div>

    @if (session('status') == 'verification-code-error')
        <x-input-auth-error error="Неверный код." />
    @endif
</label>
