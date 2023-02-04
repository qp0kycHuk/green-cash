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
}
