<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class Add extends Component
{
    use WithFileUploads;

    public $visible = false;
    public $projects;

    public $first_name;
    public $last_name;
    public $patronymic;
    public $phone;
    public $photo;
    public $role = 'manager';
    public $position;
    public $access = [];

    protected $listeners = ['userAddVisible'];

    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'phone' => 'required|numeric|unique:users',
    ];

    public function mount()
    {
        $this->projects = Project::get();
    }

    public function render()
    {
        return view('livewire.user.add');
    }

    public function userAddVisible()
    {
        $this->visible = !$this->visible;
    }

    public function create()
    {
        $validatedData = $this->validate();

        $validatedData['patronymic'] = $this->patronymic;
        $validatedData['role'] = $this->role;
        $validatedData['position'] = $this->position;
        $validatedData['access'] = $this->access;
        $validatedData['password'] = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password

        if ($this->photo) {
            $validatedData['photo'] = $this->photo?->store('img');
        }

        $this->emit('userShowCreate', $validatedData);

        session()->flash('message', 'Пользователь успешно добавлен');

        $this->visible = false;
    }

    public function cancel()
    {
        $this->visible = false;
    }

    public function deletePhoto()
    {
        $this->photo = null;
    }
}
