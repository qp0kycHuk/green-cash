<x-guest-layout>
    <x-auth-wrap title="Смена пароля">

        <form method="POST" action="{{ route('password.sms.update') }}">
            @csrf

            <div>
                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
            </div>

            <div class="space-y-4">
                <!-- Password -->
                <x-input.password />

                <!-- Password Confirm -->
                <x-input.password-confirm />
            </div>

            <x-notice-password />

            <x-button-auth>Изменить</x-button-auth>
        </form>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    </x-auth-wrap>
</x-guest-layout>
