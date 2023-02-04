<div>
    @if ($visible)
        <div class="dialog-shadow"></div>
        <div class="dialog-wrapper">
            <div class="dialog-content">
                <div class="dialog-form">
                    <div class="dialog-form-head">
                        <div class="text-h6 text-md-h4 text--center">Доступ к разделу</div>
                    </div>
                    <div class="dialog-form-content">
                        @foreach ($users as $user)
                            <label class="form-field form-checkbox mb-4">
                                <input wire:change="access({{ $user->id }})" @checked(in_array($project['slug'], $user->access ?? [])) type="checkbox" class="form-input-checkbox">
                                <div class="form-checkbox-target">
                                    <svg class="icon">
                                        <use xlink:href="{{ asset('img/icons.svg#gal-ochka') }}" />
                                    </svg>
                                </div>
                                @if ($user->photo)
                                    <div class="image image--round image--box icon text-h0 ml-3">
                                        <img src="{{ asset($user->photo) }}" alt="">
                                    </div>
                                @else
                                    <div class="image  ml-3 bg-l1 image--round icon text-h0 avatar-item">
                                        <svg class="icon text-h6 color-white m-auto form-avatar-field-placeholder">
                                            <use xlink:href="{{ asset('img/icons.svg#user') }}"></use>
                                        </svg>
                                    </div>
                                @endif
                                <div class="text-body-2 ml-2">
                                    {{ $user->last_name }}
                                    {{ $user->first_name }}
                                    {{ $user->patronymic }}
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="dialog-close">
                <button wire:click="finish" class="btn btn--primary btn-large btn-icon">
                    <svg class="icon text-body-0 ">
                        <use xlink:href="{{ asset('img/icons.svg#cross') }}" />
                    </svg>
                </button>
            </div>
        </div>
    @endif
</div>
