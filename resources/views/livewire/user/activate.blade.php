<div>
    @if ($visible)
        <div class="dialog-form">
            <div class="dialog-form-head">
                <div class="text-h6 text-md-h4 text--center">Назначьте группу</div>
            </div>
            <div class="dialog-form-content">
                <label class="form-field mt-4">
                    @error('role')
                        <span class="error">{!! $message !!}</span>
                    @enderror
                    <div class="text-body-2 text--demibold mb-2">Группа</div>
                    <div class="form-input-cover">
                        <select wire:model="role"class="form-input">
                            @foreach (trans('user') as $en => $ru)
                                <option value="{{ $en }}">{{ $ru }}</option>
                            @endforeach
                        </select>
                        <div class="form-input-end pe-none pr-3">
                            <svg class="icon fade-80">
                                <use xlink:href="img/icons.svg#to-right" />
                            </svg>
                        </div>
                    </div>
                </label>

                <div class="flex mt-10">
                    <button wire:click="submit" class="btn btn--primary btn--fill">Сохранить</button>
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
    @endif
</div>
