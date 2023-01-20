<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class Show extends Component
{
    protected $listeners = [
        'userShowCreate',
        'userShowUpdate',
        'userShowDelete',
        'userShowSubmit',
        'userShowCancel'
    ];

    public function render()
    {
        $users = User::orderBy('id', 'desc')->get();
        return view('livewire.user.show', compact('users'));
    }

    public function userShowSubmit($data)
    {
        User::findOrFail($data['user']['id'])->update(['role' => $data['role'], 'status' => 1]);
    }

    public function userShowCancel($data)
    {
        User::findOrFail($data['user']['id'])->update(['status' => 0]);
    }

    public function userShowCreate($data)
    {
        User::create($data);
    }

    public function userShowUpdate($data)
    {
        User::findOrFail($data['id'])->update($data);
    }

    public function userShowDelete($user_id)
    {
        User::findOrFail($user_id)->delete();
    }
}
