<?php

namespace App\Http\Livewire\Project\Show;

use Livewire\Component;

class Yandex extends Component
{
    public $balance;
    public $project;
    public $yandex;

    public function render()
    {
        return view('livewire.project.show.yandex');
    }
}
