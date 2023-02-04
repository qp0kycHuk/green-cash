<?php

namespace App\Http\Livewire\User\Show;

use App\Models\Project;
use Livewire\Component;

class Card extends Component
{
    public $user;
    public $projects;

    protected $rules = [
        'user.status' => 'boolean',
    ];

    public function mount()
    {
        $this->projects =  Project::whereIn('slug', $this->user->access ?? [])->get();
    }

    public function render()
    {
        return view('livewire.user.show.card');
    }

    public function updated()
    {
        switch (true) {
            case ($this->user->status && !$this->user->role):
                $this->emit('userActivateVisible', $this);
                break;
            case ($this->user->status && $this->user->role):
                $this->user->save();
                break;
            default:
                $this->user->save();
                break;
        }
    }

    public function edit()
    {
        $this->emit('userEditVisible', $this);
    }
}
