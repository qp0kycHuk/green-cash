<x-app-layout>
    <div class="flex flex-align-center mb-8">
        <div class="text-h4">Пользователи</div><button
            class="btn btn--primary btn--fill btn-icon btn-large ml-auto" data-fancybox-modal
            data-src="dialog-user-edit.html" data-type="ajax"><svg class="icon">
                <use xlink:href="img/icons.svg#user-plus" />
            </svg></button>
    </div>
    <div class="project-table">
        <div class="d-none d-lg-block">
            <div class="user-row mb-3">
                <div class="flex flex-align-center user-row-info">
                    <div class="text-small fade-60 user-row-toggle">Актив...</div>
                    <div class="user-row-avatar"></div>
                    <div class="text-small fade-60">ФИО</div>
                </div>
                <div class="text-small fade-60">Телефон</div>
                <div class="text-small fade-60">Должность</div>
                <div class="text-small fade-60">Группа</div>
                <div class="text-small fade-60">Доступные разделы</div>
                <div class="text-small fade-60">Доступные проекты</div>
            </div>
        </div>
        <div class="user-row project-item card">
            <div class="flex flex-align-center user-row-info">
                <div class="user-row-toggle"><label class="form-field form-checkbox"><input type="checkbox"
                            class="form-input-checkbox">
                        <div class="form-toggle-target"></div>
                    </label></div>
                <div class="user-row-avatar">
                    <div class="image image--box image--round mx-auto" style="width:26px"><img
                            src="img/test-3.jpg" alt="" class="icon text-h5 mr-3"></div>
                </div>
                <div>
                    <div class="text-small text-sm-body-2 text--demibold text-lg--regular">Загребельный
                        Роман Алексеевич</div>
                    <div class="text-small text-sm-body-2 d-lg-none">+7 (918) 000-00-00</div>
                </div><button
                    class="btn btn--primary btn--light btn-icon btn-small user-row-edit d-md-none ml-auto"><svg
                        class="icon">
                        <use xlink:href="img/icons.svg#edit" />
                    </svg></button>
            </div>
            <div class="text-body-2 d-none d-lg-block">+7 (918) 000-00-00</div>
            <div class="text-body-2">
                <div class="text-small fade-60 d-lg-none">Должность</div>
                <div class="text-small text-sm-body-2">Менеджер по продажам</div>
            </div>
            <div class="text-body-2">
                <div class="text-small fade-60 d-lg-none">Группа</div>
                <div class="text-small text-sm-body-2">Менеджер</div>
            </div>
            <div>
                <div class="text-small fade-60 d-lg-none mb-1">Доступные разделы</div>
                <div class="avatar-list">
                    <div class="image image--round image--box icon text-h1 avatar-item"><img
                            src="img/test-3.jpg" alt=""></div>
                    <div class="image image--round image--box icon text-h1 avatar-item"><img
                            src="img/test-1.jpg" alt=""></div>
                    <div class="image image--round image--box icon text-h1 avatar-item"><img
                            src="img/test-4.jpg" alt=""></div>
                    <div class="image image--round icon text-h1 avatar-item bg-primary">
                        <div class="text-body-2 text--demibold color-white">+3</div>
                    </div>
                </div>
            </div>
            <div>
                <div class="text-small fade-60 d-lg-none mb-1">Доступные проекты</div>
                <div class="avatar-list">
                    <div class="image image--round icon text-h1 avatar-item bg-l1"></div>
                    <div class="image image--round icon text-h1 avatar-item bg-l1"></div>
                    <div class="image image--round icon text-h1 avatar-item bg-l1"></div>
                </div>
            </div><button
                class="btn btn--primary btn--light btn-icon btn-small user-row-edit d-none d-md-flex"><svg
                    class="icon">
                    <use xlink:href="img/icons.svg#edit" />
                </svg></button>
        </div>
    </div>
</x-app-layout>
