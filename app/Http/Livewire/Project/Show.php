<?php

namespace App\Http\Livewire\Project;

use App\Models\Sale;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Show extends Component
{
    public $project;
    public $balance;
    public $visibleYandex;
    public $visibleSales;
    public $buttonYandex = true;
    public $yandex;
    public $sales;
    public $month;

    protected $listeners = ['projectShowUpdate' => 'update'];

    public function mount()
    {
        if (auth()->user()->hasRole(['manager'])) {
            $this->visibleYandex = false;
            $this->visibleSales = true;
            $this->buttonYandex = false;
        } else {
            $this->visibleYandex = true;
            $this->visibleSales = false;
        }

        $this->yandex = $this->yandex();
        $this->sales = $this->sales();
    }

    public function render()
    {
        return view('livewire.project.show');
    }

    public function yandex()
    {
        return DB::select(DB::raw("
            select y.created_at,
            sum(y.spending) as spending,
            sum(y.visits_total) as visits_total,
            sum(y.visits_new) as visits_new,
            sum(y.sales_quanity) as sales_quanity,
            sum(y.sales_sum) as sales_sum,
            sum(y.sales_check) as sales_check,
            sum(y.ROMI) as ROMI,
            sum(y.CPS) as CPS,
            sum(y.CRS) as CRS
            from yandex y
            join project_yandex py 
            on y.id = py.yandex_id
            join projects p 
            on p.id = py.project_id
            where p.id = {$this->project->id}
            group by month(y.created_at)
            order by y.created_at desc
        "));
    }

    public function sales()
    {
        return DB::select(DB::raw("
            select s.created_at,
            sum(s.payment_100_quanity) as payment_100_quanity,
            sum(s.payment_100_sum) as payment_100_sum,
            sum(s.payment_50_quanity) as payment_50_quanity,
            sum(s.payment_50_sum) as payment_50_sum,
            sum(s.preorder_quanity) as preorder_quanity,
            sum(s.preorder_sum) as preorder_sum,
            sum(s.total_sales) as total_sales,
            sum(s.received) as received,
            sum(s.pending) as pending,
            sum(s.check) as `check`
            from sales s
            join project_sale ps 
            on s.id = ps.sale_id
            join projects p 
            on p.id = ps.project_id
            where p.id = {$this->project->id}
            group by month(s.created_at)
            order by s.created_at desc
        "));
    }

    public function showYandex()
    {
        $this->visibleYandex = true;
        $this->visibleSales = false;
    }

    public function showSales()
    {
        $this->visibleYandex = false;
        $this->visibleSales = true;
    }

    public function update($item)
    {
        $sale = tap(Sale::findOrFail($item['id']))->update($item);
        $this->month = $sale->created_at->format('F');

        $yandex = $this->project->yandex()
            ->where('created_at', 'like', $sale->created_at->format('Y-m-d') . '%')
            ->get()->first();

        $salesQuanity = $sale->total_sales;
        $salesSum = ($sale->received + $sale->pending);

        if ($salesQuanity && $salesSum) {
            $yandexData = [
                'sales_quanity' => $salesQuanity,
                'sales_sum' => $salesSum,
                'sales_check' => ($salesSum / $salesQuanity),
                'ROMI' => (($salesSum - $yandex->spending) / $yandex->spending * 100),
                'CPS' => ($yandex->spending / $salesQuanity),
                'CRS' => ($salesQuanity / $yandex->visits_total * 100),
            ];

            $yandex->update($yandexData);
        }

        $this->yandex = $this->yandex();
        $this->sales = $this->sales();
    }
}
