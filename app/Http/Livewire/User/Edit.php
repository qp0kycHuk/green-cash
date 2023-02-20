<?php

namespace App\Http\Livewire\User;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;

class Edit extends Component
{
    use WithFileUploads;

    public $visible = false;
    public $projects;
    public $tmp_photo;

    public $user_id;
    public $first_name;
    public $last_name;
    public $patronymic;
    public $phone;
    public $photo;
    public $role;
    public $position;
    public $access;

    protected $listeners = ['userEditVisible'];

    public function mount()
    {
        $this->projects = Project::get();
    }

    public function render()
    {
        return view('livewire.user.edit');
    }

    public function userEditVisible($user)
    {
        $this->visible = true;

        $this->user_id = $user['user']['id'];
        $this->first_name = $user['user']['first_name'];
        $this->last_name = $user['user']['last_name'];
        $this->patronymic = $user['user']['patronymic'];
        $this->phone = $user['user']['phone'];
        $this->photo = $user['user']['photo'];
        $this->tmp_photo = null;
        $this->role = $user['user']['role'];
        $this->position = $user['user']['position'];
        $this->access = $user['user']['access'] ?? [];
    }

    public function update()
    {
        $validatedData = $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'tmp_photo' => 'nullable|image|max:2048', // 1MB Max
            'phone' => [
                'required',
                'numeric',
                Rule::unique('users')->ignore($this->user_id, 'id')
            ]
        ]);

        $validatedData['id'] = $this->user_id;
        $validatedData['patronymic'] = $this->patronymic;
        $validatedData['role'] = $this->role;
        $validatedData['position'] = $this->position;
        $validatedData['access'] = $this->access;

        if ($this->tmp_photo || !$this->photo) {
            $validatedData['photo'] = $this->tmp_photo?->store('img');
        }

        $this->emit('userShowUpdate', $validatedData);

        session()->flash('message', 'Пользователь успешно обновлен');

        $this->visible = false;
    }

    public function delete()
    {
        $this->emit('userShowDelete', $this->user_id);

        session()->flash('message', 'Пользователь успешно удален');

        $this->visible = false;
    }

    public function cancel()
    {
        $this->visible = false;
    }

    public function deletePhoto()
    {
        $this->tmp_photo = null;
        $this->photo = null;
    }
}
