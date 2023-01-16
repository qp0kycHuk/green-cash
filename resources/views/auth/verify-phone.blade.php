<x-guest-layout>
    <x-auth-wrap title="Подтвердите регистрацию">

        <form method="POST" action="{{ route('verification.phone.send') }}">
            @csrf

            <!-- Code -->
            <x-input.code />
            
            <x-button-auth>Отправить</x-button-auth>
        </form>

        <form method="POST" action="{{ route('verification.phone.resend') }}">
            @csrf

            <button type="submit" class="btn btn--link btn--primary mt-5">
                Выслать другой код
            </button>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="btn btn--link btn--primary mt-2">
                Выйти
            </button>
        </form>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    </x-auth-wrap>
</x-shop-layout>
