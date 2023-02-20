<div>
    @if ($visible)
        <div class="dialog-shadow"></div>
        <div class="dialog-wrapper">
            <div class="dialog-content">
                <div class="dialog-form">
                    <div class="dialog-form-head">
                        <div class="text-h6 text-md-h4 text--center">Заполнить показатели</div>
                    </div>
                    <div class="dialog-form-content">
                        <div class="grid flex-align-center mb-6">
                            <div class="grid-col-sm-4">
                                <div class="text-body-2">Оплачено 100%</div>
                            </div>
                            <div class="grid-col-11 grid-col-sm-7">
                                <div class="form-field">
                                    @error('payment_100_quanity')
                                        <span class="error">{!! $message !!}</span>
                                    @enderror
                                    <div class="form-input-cover">
                                        <input wire:model="payment_100_quanity" type="text" class="form-input form-input-xsmall text--center"
                                            placeholder="0">
                                    </div>
                                </div>
                            </div>
                            <div class="grid-col-1">
                                <div class="text-body-2 fade-60">шт</div>
                            </div>
                        </div>
                        <div class="grid flex-align-center mb-6">
                            <div class="grid-col-sm-4">
                                <div class="text-body-2">Оплачено 100%</div>
                            </div>
                            <div class="grid-col-11 grid-col-sm-7">
                                <div class="form-field">
                                    @error('payment_100_sum')
                                        <span class="error">{!! $message !!}</span>
                                    @enderror
                                    <div class="form-input-cover">
                                        <input wire:model="payment_100_sum" type="text" class="form-input form-input-xsmall text--center"
                                            placeholder="0">
                                    </div>
                                </div>
                            </div>
                            <div class="grid-col-1">
                                <div class="text-body-2 fade-60">@ccy</div>
                            </div>
                        </div>
                        <div class="grid flex-align-center mb-6">
                            <div class="grid-col-sm-4">
                                <div class="text-body-2">Оплачено 50/50</div>
                            </div>
                            <div class="grid-col-11 grid-col-sm-7">
                                <div class="form-field">
                                    @error('payment_50_quanity')
                                        <span class="error">{!! $message !!}</span>
                                    @enderror
                                    <div class="form-input-cover">
                                        <input wire:model="payment_50_quanity" type="text" class="form-input form-input-xsmall text--center"
                                            placeholder="0">
                                    </div>
                                </div>
                            </div>
                            <div class="grid-col-1">
                                <div class="text-body-2 fade-60">шт</div>
                            </div>
                        </div>
                        <div class="grid flex-align-center mb-6">
                            <div class="grid-col-sm-4">
                                <div class="text-body-2">Оплачено 50/50</div>
                            </div>
                            <div class="grid-col-11 grid-col-sm-7">
                                <div class="form-field">
                                    @error('payment_50_sum')
                                        <span class="error">{!! $message !!}</span>
                                    @enderror
                                    <div class="form-input-cover">
                                        <input wire:model="payment_50_sum" type="text" class="form-input form-input-xsmall text--center"
                                            placeholder="0">
                                    </div>
                                </div>
                            </div>
                            <div class="grid-col-1">
                                <div class="text-body-2 fade-60">@ccy</div>
                            </div>
                        </div>
                        <div class="grid flex-align-center mb-10">
                            <div class="grid-col-sm-4">
                                <div class="text-body-2">Предзаказ</div>
                            </div>
                            <div class="grid-col-11 grid-col-sm-7">
                                <div class="form-field">
                                    @error('preorder_quanity')
                                        <span class="error">{!! $message !!}</span>
                                    @enderror
                                    <div class="form-input-cover">
                                        <input wire:model="preorder_quanity" type="text" class="form-input form-input-xsmall text--center"
                                            placeholder="0">
                                    </div>
                                </div>
                            </div>
                            <div class="grid-col-1">
                                <div class="text-body-2 fade-60">шт</div>
                            </div>
                        </div>
                        <div class="grid flex-align-center mb-10">
                            <div class="grid-col-sm-4">
                                <div class="text-body-2">Предзаказ</div>
                            </div>
                            <div class="grid-col-11 grid-col-sm-7">
                                <div class="form-field">
                                    @error('preorder_sum')
                                        <span class="error">{!! $message !!}</span>
                                    @enderror
                                    <div class="form-input-cover">
                                        <input wire:model="preorder_sum" type="text" class="form-input form-input-xsmall text--center"
                                            placeholder="0">
                                    </div>
                                </div>
                            </div>
                            <div class="grid-col-1">
                                <div class="text-body-2 fade-60">@ccy</div>
                            </div>
                        </div>
                        <div class="grid flex-align-center mb-6">
                            <div class="grid-col-sm-4">
                                <div class="text-body-2">Предзаказ на</div>
                            </div>
                            <div class="grid-col-11 grid-col-sm-7">
                                <div class="form-field">
                                    @error('preorder_for')
                                        <span class="error">{!! $message !!}</span>
                                    @enderror
                                    <div class="form-input-cover">
                                        <select
                                            wire:model="preorder_for"
                                            class="form-input form-input-xsmall text--center text-body-2">
                                            <option selected disabled>Выберите время года</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                        </select>
                                        <div class="form-input-end pr-2">
                                            <svg class="icon text-small fade-60">
                                                <use xlink:href="img/icons.svg#to-right" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-col-1">
                                <div class="text-body-2 fade-60">₽</div>
                            </div>
                        </div>
                        <div class="grid flex-align-center mb-6">
                            <div class="grid-col-sm-4">
                                <div class="text-body-2">Количество</div>
                            </div>
                            <div class="grid-col-11 grid-col-sm-7">
                                <div class="form-field">
                                    @error('preorder_for_quanity')
                                        <span class="error">{!! $message !!}</span>
                                    @enderror
                                    <div class="form-input-cover">
                                        <input wire:model="preorder_for_quanity" type="text" class="form-input form-input-xsmall text--center" placeholder="0">
                                    </div>
                                </div>
                            </div>
                            <div class="grid-col-1">
                                <div class="text-body-2 fade-60">шт</div>
                            </div>
                        </div>
                        <div class="grid flex-align-center mb-6">
                            <div class="grid-col-sm-4">
                                <div class="text-body-2">Сумма </div>
                            </div>
                            <div class="grid-col-11 grid-col-sm-7">
                                <div class="form-field">
                                    @error('preorder_for_sum')
                                        <span class="error">{!! $message !!}</span>
                                    @enderror
                                    <div class="form-input-cover">
                                        <input wire:model="preorder_for_sum" type="text" class="form-input form-input-xsmall text--center" placeholder="0">
                                    </div>
                                </div>
                            </div>
                            <div class="grid-col-1">
                                <div class="text-body-2 fade-60">₽</div>
                            </div>
                        </div>
                        <div class="flex mt-10">
                            <button wire:click="submit" class="btn btn--primary btn--fill">Сохранить</button>
                            <button wire:click="cancel" class="btn btn--primary btn--light ml-2 ml-sm-4" type="button"
                                data-fancybox-close>Отмена</button>
                        </div>
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
