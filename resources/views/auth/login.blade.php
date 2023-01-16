<x-guest-layout>
    <x-auth-wrap title="Войти">

        @if (session('status') == 'password-changed-successfully')
            <div class="text-center text-sm text-dark text-opacity-50 mb-5">
                Теперь вы можете зайти используя новый пароль.
            </div>
        @endif
        @if (session('status') !== 'phone-is-valid')
            <form method="POST" action="{{ route('check-phone') }}">
                @csrf
                <!-- Phone -->
                <x-input.phone />

                <x-button-auth>Войти</x-button-auth>
            </form>
        @else
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Phone -->
                <x-input type="hidden" name="phone" :value="session('phone')" required />

                <!-- Password -->
                <x-input.password />

                <!-- Remember Me -->
                <x-input.remember />

                @if (Route::has('password.sms.phone'))
                    <a href="{{ route('password.sms.phone') }}" class="btn btn--link btn--primary mt-4">
                        Забыли пароль? Нажмите сюда!
                    </a>
                @endif

                <x-button-auth>Войти</x-button-auth>
            </form>
        @endif

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    </x-auth-wrap>
</x-guest-layout>
