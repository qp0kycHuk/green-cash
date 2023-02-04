<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;

class Show extends Component
{
    public $project;
    public $amount;

    public function render()
    {
        return view('livewire.project.show');
    }
}
