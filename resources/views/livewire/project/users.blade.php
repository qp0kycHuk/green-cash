<div x-data="{ avatarListActive: false }" class="mx-auto progect-header-users flex flex-align-center">
    <div class="avatar-list">
        @foreach ($users->slice(0, 3) as $user)
            @if ($user->photo)
                <div class="image image--round icon text-h1 avatar-item">
                    <img src="{{ asset($user->photo) }}" alt="">
                </div>
            @else
                <div class="image bg-l1 image--round icon text-h1 avatar-item">
                    <svg class="icon text-h6 color-white m-auto form-avatar-field-placeholder">
                        <use xlink:href="{{ asset('img/icons.svg#user') }}"></use>
                    </svg>
                </div>
            @endif
        @endforeach

        @if ($users->slice(3)->count())
            <button x-on:click="avatarListActive = !avatarListActive"
                class="image image--round icon text-h1 avatar-item bg-primary btn btn-icon btn--primary btn--fill">
                <div class="text-body-2 text--demibold color-white">+{{ $users->slice(3)->count() }}</div>
            </button>
        @endif

        <div class="avatar-list-tooltip" :class="{ 'toggle-active': avatarListActive }">
            @foreach ($users->slice(3) as $user)
                <div class="flex flex-align-center mb-2">
                    @if ($user->photo)
                        <div class="image image--round icon text-h1 avatar-item">
                            <img src="{{ asset($user->photo) }}" alt="">
                        </div>
                    @else
                        <div class="image bg-l1 image--round icon text-h1 avatar-item">
                            <svg class="icon text-h6 color-white m-auto form-avatar-field-placeholder">
                                <use xlink:href="http://127.0.0.1:8000/img/icons.svg#user"></use>
                            </svg>
                        </div>
                    @endif

                    <div class="text-body-2 ml-2">
                        {{ $user->last_name }}
                        {{ $user->first_name }}
                        {{ $user->patronymic }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="ml-6">
        <div class="text-body-2">Доступно: {{ $users->count() }} пользователям</div>
        <button wire:click="edit" class="btn btn--primary btn--link text-body-2 text--demibold">Редактировать</button>
    </div>
</div>
