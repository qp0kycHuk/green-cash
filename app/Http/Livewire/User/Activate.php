<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class Activate extends Component
{
    public $visible = false;

    public $role = 'manager';
    public $user;

    protected $listeners = ['userActivateVisible'];

    public function render()
    {
        return view('livewire.user.activate');
    }

    public function userActivateVisible($user)
    {
        $this->visible = true;
        $this->user = $user['user'];
    }

    public function submit()
    {
        $this->visible = false;
        $this->emit('userShowSubmit', ['user' => $this->user, 'role' => $this->role]);
    }

    public function cancel()
    {
        $this->visible = false;
        $this->emit('userShowCancel', ['user' => $this->user]);
    }
}
