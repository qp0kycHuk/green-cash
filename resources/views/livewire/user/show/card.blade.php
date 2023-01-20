<div class="user-row project-item card">
    <div class="flex flex-align-center user-row-info">
        <div class="user-row-toggle">
            <label class="form-field form-checkbox">
                <input wire:model="user.status" type="checkbox" class="form-input-checkbox">
                <div class="form-toggle-target"></div>
            </label>
        </div>
        <div class="user-row-avatar">
            <div class="image image--box image--round mx-auto" style="width:32px">
                <img src="{{ $user->photo }}" alt="" class="icon text-h5 mr-3">
            </div>
        </div>
        <div>
            <div class="text-small text-sm-body-2 text--demibold text-lg--regular">
                {{ $user->last_name }}
                {{ $user->first_name }}
                {{ $user->patronymic }}
            </div>
            <div class="text-small text-sm-body-2 d-lg-none">{{ phone($user->phone) }}</div>
        </div>
        <button class="btn btn--primary btn--light btn-icon btn-small user-row-edit d-md-none ml-auto"><svg
                class="icon">
                <use xlink:href="img/icons.svg#edit" />
            </svg>
        </button>
    </div>
    <div class="text-body-2 d-none d-lg-block">{{ phone($user->phone) }}</div>
    <div class="text-body-2">
        <div class="text-small fade-60 d-lg-none">Должность</div>
        <div class="text-small text-sm-body-2">{{ $user->position }}</div>
    </div>
    <div class="text-body-2">
        <div class="text-small fade-60 d-lg-none">Группа</div>
        @if (trans()->has("user.{$user->role}"))
            <div class="text-small text-sm-body-2">{{ __("user.{$user->role}") }}</div>
        @endif
    </div>
    <div>
        <div class="text-small fade-60 d-lg-none mb-1">Доступные разделы</div>
        <div class="avatar-list">
            <div class="image image--round icon text-h1 avatar-item bg-l1"></div>
            <div class="image image--round icon text-h1 avatar-item bg-l1"></div>
            <div class="image image--round icon text-h1 avatar-item bg-l1"></div>
        </div>
    </div>
    <div>
        <div class="text-small fade-60 d-lg-none mb-1">Доступные проекты</div>
        <div class="avatar-list">
            @if ($projects->count())
                @foreach ($projects->slice(0, 3) as $project)
                    <div class="image image--round image--box icon text-h1 avatar-item">
                        <img src="img/{{ $project->image }}.jpg" alt="">
                    </div>
                @endforeach
                @if ($projects->slice(3)->count())
                    <div class="image image--round icon text-h1 avatar-item bg-primary">
                        <div class="text-body-2 text--demibold color-white">+{{ $projects->slice(3)->count() }}</div>
                    </div>
                @endif
            @endif
        </div>
    </div>
    <button wire:click="edit" class="btn btn--primary btn--light btn-icon btn-small user-row-edit d-none d-md-flex">
        <svg class="icon">
            <use xlink:href="img/icons.svg#edit" />
        </svg>
    </button>
</div>
