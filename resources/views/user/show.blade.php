<x-app-layout>
    <div class="flex flex-align-center mb-8">
        <div class="text-h4">Пользователи</div>
        <button
            x-data="{add() {Livewire.emit('userAddVisible')}}"
            x-on:click="add"
            class="btn btn--primary btn--fill btn-icon btn-large ml-auto">
            <svg class="icon">
                <use xlink:href="img/icons.svg#user-plus" />
            </svg>
        </button>
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
        <livewire:user.show />
    </div>
</x-app-layout>
