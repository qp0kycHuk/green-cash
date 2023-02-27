<?php

namespace App\Http\Livewire\Project;

use App\Models\User;
use Livewire\Component;

class Access extends Component
{
    public $visible = false;
    public $project;
    public $users;

    protected $listeners = ['projectAccessVisible', 'projectAccessHydrate' => 'hydrate'];

    public function render()
    {
        $this->users = User::get()->except(auth()->id());

        return view('livewire.project.access');
    }

    public function projectAccessVisible($project)
    {
        $this->visible = true;
        $this->project = $project;
    }

    public function finish()
    {
        $this->visible = false;
    }

    public function access($userId)
    {
        $this->emit('projectUserUpdate', $userId);
    }

    public function hydrate() {
        //
    }
}
