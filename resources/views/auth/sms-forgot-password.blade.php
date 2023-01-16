<x-guest-layout>
    <x-auth-wrap title="Смена пароля">
        <form method="POST" action="{{ route('password.sms.storephone') }}">
            @csrf

            <!-- Phone -->
            <x-input.phone />

            <x-button-auth>Восстановить</x-button-auth>
        </form>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    </x-auth-wrap>
</x-guest-layout>
