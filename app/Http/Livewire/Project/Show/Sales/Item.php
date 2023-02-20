<?php

namespace App\Http\Livewire\Project\Show\Sales;

use App\Models\Sale;
use Livewire\Component;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Item extends Component
{
    public $project;
    public $row;
    public $visible = false;
    public $month;

    protected $listeners = ['projectShowSalesItem' => 'open'];

    public function mount()
    {
        if (Carbon::create($this->row['created_at'])->format('F') == $this->month) {
            $this->visible = true;
        }
    }

    public function render()
    {
        $rows = $this->project
            ->sales()
            ->where('created_at', 'like', Carbon::create($this->row['created_at'])->format('Y-m') . '%')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('livewire.project.show.sales.item', compact('rows'));
    }

    public function visible()
    {
        $this->visible = !$this->visible;
    }

    public function edit($item)
    {
        $this->emit('projectShowSalesEditVisible', $item);
    }
}
