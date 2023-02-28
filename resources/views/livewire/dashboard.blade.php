<div>
    <div class="content-inner">
        <div class="text-h4 mb-8">Сводка</div>
        <div class="d-md-flex">
            <div class="bd-right pr-3 mr-3 svodka-left-column">
                <div class="svodka-left-column-sign">
                    <div class="text-body-2 text--demibold mb-3">Баланс</div>
                    <div class="text-small fade-40">
                        Обновлено: <br>
                        13:00
                    </div>
                </div>

                <div class="svodka-left-column-cost">
                    <div class="project-item__cost project-item__cost--green">
                        0 ₽
                    </div>
                </div>
                <div class="svodka-left-column-cost">
                    <div class="project-item__cost project-item__cost--green">
                        20 ₽
                    </div>
                </div>
                <div class="svodka-left-column-cost">
                    <div class="project-item__cost project-item__cost--green">
                        330 ₽
                    </div>
                </div>
                <div class="svodka-left-column-cost">
                    <div class="project-item__cost project-item__cost--green">
                        1230 ₽
                    </div>
                </div>
                <div class="svodka-left-column-cost">
                    <div class="project-item__cost project-item__cost--green">
                        32131230 ₽
                    </div>
                </div>
            </div>
            <div>
                <x-dashboard.filter :filter="$filter" />
                <x-dashboard.table :projects="$projects" />
            </div>
        </div>
    </div>
</div>