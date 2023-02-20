<?php

namespace App\Http\Livewire\Project\Show;

use Livewire\Component;

class Sales extends Component
{
    public $project;
    public $sales;
    public $month;

    public function render()
    {
        return view('livewire.project.show.sales');
    }
}
