<?php

namespace App\Http\Livewire\Project\Show\Sales;

use Livewire\Component;

class Edit extends Component
{
    public $visible = false;

    public $item_id;
    public $payment_100_quanity;
    public $payment_100_sum;
    public $payment_50_quanity;
    public $payment_50_sum;
    public $preorder_quanity;
    public $preorder_sum;
    public $total_sales;
    public $received;
    public $pending;
    public $check;
    public $preorder_for = '2023';
    public $preorder_for_quanity;
    public $preorder_for_sum;

    protected $listeners = ['projectShowSalesEditVisible'];

    protected $rules = [
        'payment_100_quanity' => 'nullable|numeric',
        'payment_100_sum' => 'nullable|numeric',
        'payment_50_quanity' => 'nullable|numeric',
        'payment_50_sum' => 'nullable|numeric',
        'preorder_quanity' => 'nullable|numeric',
        'preorder_sum' => 'nullable|numeric',
        'preorder_for' => 'nullable|numeric',
        'preorder_for_quanity' => 'nullable|numeric',
        'preorder_for_sum' => 'nullable|numeric',
    ];

    public function render()
    {
        return view('livewire.project.show.sales.edit');
    }

    public function projectShowSalesEditVisible($item)
    {
        $this->visible = true;

        $this->item_id = $item['id'];
        $this->payment_100_quanity = $item['payment_100_quanity'];
        $this->payment_100_sum = $item['payment_100_sum'];
        $this->payment_50_quanity = $item['payment_50_quanity'];
        $this->payment_50_sum = $item['payment_50_sum'];
        $this->preorder_quanity = $item['preorder_quanity'];
        $this->preorder_sum = $item['preorder_sum'];
    }

    public function submit()
    {
        $this->visible = false;

        $validatedData = $this->validate();

        $validatedData['id'] = $this->item_id;
        $validatedData['total_sales'] = $this->total_sales;
        $validatedData['received'] = $this->received;
        $validatedData['pending'] = $this->pending;
        $validatedData['check'] = $this->check;
        $validatedData['preorder_for'] = $this->preorder_for;
        $validatedData['preorder_for_quanity'] = $this->preorder_for_quanity;
        $validatedData['preorder_for_sum'] = $this->preorder_for_sum;

        $this->emit('projectShowUpdate', $validatedData);

        session()->flash('message', 'Запись успешно обновлена');
    }

    public function cancel()
    {
        $this->visible = false;
    }

    public function hydrate()
    {
        // Общее количество продаж = Оплата 100% + Оплата 50/50 + Предзаказ
        if ($this->payment_100_quanity && $this->payment_50_quanity && $this->preorder_quanity) {
            $this->total_sales = $this->payment_100_quanity + $this->payment_50_quanity + $this->preorder_quanity;
        } else {
            $this->total_sales = 0;
        }

        // Р поступило = сумма Оплата 100% + сумма Оплата 50/50
        if ($this->payment_100_sum && $this->payment_50_sum) {
            $this->received = $this->payment_100_sum + $this->payment_50_sum;
        } else {
            $this->received = 0;
        }

        // Р поступит = сумма Оплата 50/50 +сумма Предзаказа
        if ($this->payment_50_sum && $this->preorder_sum) {
            $this->pending = $this->payment_50_sum + $this->preorder_sum;
        } else {
            $this->pending = 0;
        }

        // Средний чек = ( Р поступило + Р поступит ) / Общее кол-во продаж
        if ($this->total_sales && $this->received && $this->pending) {
            $this->check = ($this->received + $this->pending) / $this->total_sales;
        } else {
            $this->check = 0;
        }
    }
}
