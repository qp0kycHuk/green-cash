<?php

namespace App\Http\Livewire\Project\Show\Yandex;

use Livewire\Component;
use Illuminate\Support\Carbon;

class Item extends Component
{
    public $project;
    public $row;
    public $visible = false;

    public function render()
    {
        $rows = $this->project
            ->yandex()
            ->where('created_at', 'like', Carbon::create($this->row['created_at'])->format('Y-m') . '%')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('livewire.project.show.yandex.item', compact('rows'));
    }

    public function visible()
    {
        $this->visible = !$this->visible;
    }
}
