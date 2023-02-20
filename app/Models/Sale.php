<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'payment_100_quanity',
        'payment_100_sum',
        'payment_50_quanity',
        'payment_50_sum',
        'preorder_quanity',
        'preorder_sum',
        'total_sales',
        'received',
        'pending',
        'check',
        'preorder_for',
        'preorder_for_quanity',
        'preorder_for_sum'
    ];
}
