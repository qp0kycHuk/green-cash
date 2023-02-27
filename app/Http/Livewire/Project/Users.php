<?php

namespace App\Http\Livewire\Project;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public $project;
    public $users;

    protected $listeners = ['projectUserUpdate'];

    public function render()
    {
        $this->users = User::where('access', 'like', '%' . $this->project->slug . '%')->get();

        return view('livewire.project.users');
    }

    public function edit()
    {
        $this->emit('projectAccessVisible', $this->project);
    }

    public function projectUserUpdate($userId)
    {
        $user = User::find($userId);

        if (in_array($this->project['slug'], $user->access ?? [])) {
            $access = array_diff($user->access, [$this->project['slug']]);
            $user->access = array_merge($access);
            $user->save();
        } else {
            $access = $user->access;
            $access[] = $this->project['slug'];
            $user->access = $access;
            $user->save();
        }

        $this->emit('projectAccessHydrate');
    }
}
