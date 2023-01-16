<x-guest-layout>
    <x-auth-wrap title="Смена пароля">
        @if (session('status') == 'phone-session-error')
            Сессия истекла, начните процедуру восстановления заново.
            <a class="btn btn--primary btn--fill mt-7 w-100" href="{{ route('password.sms.phone') }}">Восстановить доступ</a>
        @else
            <div class="text-center text-sm text-dark text-opacity-50 mb-5">
                На ваш телефон отправили код подтверждения, введите его нижу, чтобы изменить пароль
            </div>

            <form method="POST" action="{{ route('password.sms.storecode') }}">
                @csrf

                <!-- Code -->
                <x-input.code />

                <x-button-auth>Восстановить</x-button-auth>
            </form>
            <form method="POST" action="{{ route('password.sms.resend') }}">
                @csrf

                <div class="flex flex-col items-center mt-5">
                    <button
                        class="transition text-dark font-semibold border-dark border-b border-dashed active:translate-y-0.5">
                        Получить еще один код
                    </button>
                </div>
            </form>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
        @endif
    </x-auth-wrap>
</x-guest-layout>
