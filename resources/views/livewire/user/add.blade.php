<div>
    @if ($visible)
        <div class="dialog-shadow"></div>
        <div class="dialog-wrapper">
            <div class="dialog-content">
                <div class="dialog-form">
                    <div class="dialog-form-head">
                        <div class="text-h6 text-md-h4 text--center">Добавить</div>
                    </div>
                    <div class="dialog-form-content">
                        <label class="form-avatar-field">
                            <input wire:model="photo" type="file" hidden accept="image/*">
                            <div class="image image--round icon text-h1 bg-l1 d-flex">
                                <div class="form-avatar-field-edit">
                                    <svg class="icon">
                                        <use xlink:href="{{ asset('img/icons.svg#edit') }}" />
                                    </svg>
                                </div>
                                @if ($photo)
                                    <img src="{{ $photo->temporaryUrl() }}" alt="">
                                @endif
                                <svg class="icon text-h6 color-white m-auto form-avatar-field-placeholder">
                                    <use xlink:href="{{ asset('img/icons.svg#user') }}" />
                                </svg>
                            </div>

                            <button wire:click="deletePhoto"
                                class="btn btn--red btn--link ml-auto text-small text--demibold" data-remove>Удалить
                                фото</button>
                        </label>
                        <label class="form-field mt-5">
                            @error('phone')
                                <span class="error">{!! $message !!}</span>
                            @enderror
                            <div class="text-body-2 text--demibold mb-2">Телефон</div>
                            <div class="form-input-cover">
                                <input wire:model="phone" type="tel" class="form-input">
                            </div>
                        </label>
                        <label class="form-field mt-4">
                            @error('last_name')
                                <span class="error">{!! $message !!}</span>
                            @enderror
                            <div class="text-body-2 text--demibold mb-2">Фамилия</div>
                            <div class="form-input-cover">
                                <input wire:model="last_name" type="text" class="form-input">
                            </div>
                        </label>
                        <label class="form-field mt-4">
                            @error('first_name')
                                <span class="error">{!! $message !!}</span>
                            @enderror
                            <div class="text-body-2 text--demibold mb-2">Имя</div>
                            <div class="form-input-cover">
                                <input wire:model="first_name" type="text" class="form-input">
                            </div>
                        </label>
                        <label class="form-field mt-4">
                            @error('patronymic')
                                <span class="error">{!! $message !!}</span>
                            @enderror
                            <div class="text-body-2 text--demibold mb-2">Отчество</div>
                            <div class="form-input-cover">
                                <input wire:model="patronymic" type="text" class="form-input">
                            </div>
                        </label>
                        <label class="form-field mt-4">
                            @error('role')
                                <span class="error">{!! $message !!}</span>
                            @enderror
                            <div class="text-body-2 text--demibold mb-2">Группа</div>
                            <div class="form-input-cover">
                                <select wire:model="role" class="form-input">
                                    <option value="">Отсутствует</option>
                                    @foreach (trans('user') as $en => $ru)
                                        <option value="{{ $en }}">{{ $ru }}</option>
                                    @endforeach
                                </select>
                                <div class="form-input-end pe-none pr-3">
                                    <svg class="icon fade-80">
                                        <use xlink:href="{{ asset('img/icons.svg#to-right') }}" />
                                    </svg>
                                </div>
                            </div>
                        </label>
                        <label class="form-field mt-4">
                            @error('position')
                                <span class="error">{!! $message !!}</span>
                            @enderror
                            <div class="text-body-2 text--demibold mb-2">Должность</div>
                            <div class="form-input-cover">
                                <input wire:model="position" type="text" class="form-input">
                            </div>
                        </label>

                        <div class="mt-5"></div>
                        <div class="grid">
                            <div class="grid-col-sm-6">
                                <div class="text-body-2 text--medium mb-5">Доступы к проектам</div>
                                @foreach ($projects as $project)
                                    <label class="form-field form-checkbox mb-4">
                                        <input wire:model="access" value="{{ $project->slug }}" type="checkbox"
                                            class="form-input-checkbox">
                                        <div class="form-checkbox-target">
                                            <svg class="icon">
                                                <use xlink:href="{{ asset('img/icons.svg#gal-ochka') }}" />
                                            </svg>
                                        </div>
                                        <div class="image image--round image--box icon text-subtitle-2 ml-3">
                                            <img src="{{ asset('img/'.$project->image.'.jpg') }}" alt="">
                                        </div>
                                        <div class="text-body-2 ml-1">{{ $project->name }}</div>
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        <div class="flex mt-10">
                            <button wire:click="create" class="btn btn--primary btn--fill">Сохранить</button>
                            <button wire:click="cancel" class="btn btn--primary btn--light ml-2 ml-sm-4" type="button"
                                data-fancybox-close>Отмена</button>
                        </div>

                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="dialog-close">
                <button wire:click="cancel" class="btn btn--primary btn-large btn-icon">
                    <svg class="icon text-body-0 ">
                        <use xlink:href="{{ asset('img/icons.svg#cross') }}" />
                    </svg>
                </button>
            </div>
        </div>
    @endif
</div>
