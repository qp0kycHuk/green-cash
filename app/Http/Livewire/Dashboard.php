<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class Dashboard extends Component
{
    public $projects;
    public $filter = 'yesterday';
    public $specificDateMin;
    public $specificDateMax;

    protected $listeners = ['specificDateMin', 'specificDateMax'];

    public function mount()
    {
        $this->projects();
    }

    public function render()
    {
        return view('livewire.dashboard');
    }

    public function filter($type)
    {
        $this->filter = $type;
        $this->projects();
    }

    public function projects()
    {
        $this->projects = Project
            ::withSum(['yandex' => fn ($query) => $this->specificWhere($query)], 'spending')
            ->withSum(['yandex' => fn ($query) => $this->specificWhere($query)], 'visits_total')
            ->withSum(['yandex' => fn ($query) => $this->specificWhere($query)], 'sales_sum')
            ->withSum(['sales' => fn ($query) => $this->specificWhere($query)], 'received')
            ->withSum(['sales' => fn ($query) => $this->specificWhere($query)], 'pending')
            ->withSum(['sales' => fn ($query) => $this->specificWhere($query)], 'total_sales')
            ->with(['yandex' => fn ($query) => $this->specificWhere($query)])
            ->get();
    }

    public function specificWhere($query)
    {
        switch ($this->filter) {
            case 'week':
                $this->dispatchBrowserEvent('datepicker-reset');
                return $query
                    ->whereDate('created_at', '>=', now()->startOfWeek())
                    ->whereDate('created_at', '<=', now()->endOfWeek());
            case 'month':
                $this->dispatchBrowserEvent('datepicker-reset');
                return $query
                    ->whereDate('created_at', '>=', now()->startOfMonth())
                    ->whereDate('created_at', '<=', now()->endOfMonth());
            case 'year':
                $this->dispatchBrowserEvent('datepicker-reset');
                return $query
                    ->whereDate('created_at', '>=', now()->startOfYear())
                    ->whereDate('created_at', '<=', now()->endOfYear());
            case 'specific':
                return $query
                    ->whereDate('created_at', '>=', now()->create($this->specificDateMin))
                    ->whereDate('created_at', '<=', now()->create($this->specificDateMax));
            default:
                $this->dispatchBrowserEvent('datepicker-reset');
                return $query->whereDay('created_at', today());
        }
    }

    public function specificDateMin($date)
    {
        $this->specificDateMin = $date;
        $this->filter('specific');
    }

    public function specificDateMax($date)
    {
        $this->specificDateMax = $date;
        $this->filter('specific');
    }
}
