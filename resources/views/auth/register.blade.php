<x-guest-layout>
    <x-auth-wrap title="Регистрация">

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <!-- Name -->
                <x-input.name />

                <!-- Phone -->
                <x-input.phone />

                <!-- Password -->
                <x-input.password />

                <!-- Password Confirm -->
                <x-input.password-confirm />
            </div>

            <x-notice-password />

            <x-button-auth>Зарегистрироваться</x-button-auth>
        </form>

        @if (Route::has('login'))
            <div class="flex flex-col flex-align-center mt-5">
                <div class="text-dark text-opacity-60">Уже есть аккаунт?</div>
                <a class="btn btn--link btn--primary" href="{{ route('login') }}">Войти</a>
            </div>
        @endif

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    </x-auth-wrap>
</x-guest-layout>
