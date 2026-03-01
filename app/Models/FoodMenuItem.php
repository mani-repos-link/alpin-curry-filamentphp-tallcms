<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class FoodMenuItem extends Model
{
    protected $fillable = [
        'food_menu_category_id',
        'name',
        'description_en',
        'description_it',
        'description_de',
        'price',
        'status',
        'order',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(FoodMenuCategory::class, 'food_menu_category_id');
    }

    public function foodIngredients(): BelongsToMany
    {
        return $this->belongsToMany(FoodIngredient::class, 'food_ingredient_food_menu_item');
    }

    public function foodAllergies(): BelongsToMany
    {
        return $this->belongsToMany(FoodAllergy::class, 'food_allergy_food_menu_item');
    }

    public function foodIntolerances(): BelongsToMany
    {
        return $this->belongsToMany(FoodIntolerance::class, 'food_intolerance_food_menu_item');
    }
}
