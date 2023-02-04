<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yandex extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'yandex';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'consumption',
        'visits_total',
        'visits_new',
        'sales_quanity',
        'sales_amount',
        'sales_check',
        'ROMI',
        'CPS',
        'CRS'
    ];
}
