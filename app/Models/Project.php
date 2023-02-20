<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /**
     * Get the yandex rows associated with the project.
     *
     * @return BelongsToMany
     */
    public function yandex()
    {
        return $this->belongsToMany(Yandex::class);
    }

    /**
     * Get the sales rows associated with the project.
     *
     * @return BelongsToMany
     */
    public function sales()
    {
        return $this->belongsToMany(Sale::class);
    }

    /**
     * Scope a query to get yandex rows by direct_key
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeYandexByDirectKey($query, $key)
    {
        return $query->where('direct_key', $key)->first()->yandex();
    }

    /**
     * Scope a query to get yandex rows by counter_id
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeYandexByCounterId($query, $key)
    {
        return $query->where('counter_id', $key)->first()->yandex();
    }

    /**
     * Scope a query to get sale rows by counter_id
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeSaleByCounterId($query, $key)
    {
        return $query->where('counter_id', $key)->first()->sales();
    }
}
