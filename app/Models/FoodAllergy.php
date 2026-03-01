<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class FoodAllergy extends Model
{
    protected $fillable = [
        'name',
        'key',
        'description_en',
        'description_it',
        'description_de',
        'status',
        'order',
    ];

    public function foodMenuItems(): BelongsToMany
    {
        return $this->belongsToMany(FoodMenuItem::class, 'food_allergy_food_menu_item');
    }
}
