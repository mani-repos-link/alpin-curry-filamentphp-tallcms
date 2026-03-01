<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FoodMenuCategory extends Model
{
    protected $fillable = [
        'name',
        'type',
        'description_en',
        'description_it',
        'description_de',
        'display_type',
        'status',
        'order',
    ];

    public function foodMenuItems(): HasMany
    {
        return $this->hasMany(FoodMenuItem::class)->orderBy('order');
    }
}
