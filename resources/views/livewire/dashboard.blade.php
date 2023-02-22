<div>
    <div class="content-inner">
        <div class="text-h4 mb-8">Сводка</div>
        <x-dashboard.filter :filter="$filter" />
        <x-dashboard.table :projects="$projects" />
    </div>
</div>
