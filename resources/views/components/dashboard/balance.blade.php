<div class="bd-right pr-3 mr-3 svodka-left-column">
    <div class="svodka-left-column-sign">
        <div class="text-body-2 text--demibold mb-3">Баланс</div>
        <div class="text-small fade-40">
            Обновлено: <br>
            {{ now()->add(3, 'hours')->format('H:00') }}
        </div>
    </div>

    @foreach ($projects as $project)
        <div class="svodka-left-column-cost">
            <div class="project-item__cost project-item__cost--green">
                {{ price($project->balance) }} @ccy
            </div>
        </div>
    @endforeach
</div>
