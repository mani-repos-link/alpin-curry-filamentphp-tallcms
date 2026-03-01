<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class FoodIngredient extends Model
{
    protected $fillable = [
        'name',
        'description_en',
        'description_it',
        'description_de',
        'status',
        'order',
    ];

    public function foodMenuItems(): BelongsToMany
    {
        return $this->belongsToMany(FoodMenuItem::class, 'food_ingredient_food_menu_item');
    }
}
