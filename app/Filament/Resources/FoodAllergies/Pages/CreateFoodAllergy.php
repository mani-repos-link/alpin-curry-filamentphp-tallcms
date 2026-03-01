<?php

namespace App\Filament\Resources\FoodAllergies\Pages;

use App\Filament\Resources\FoodAllergies\FoodAllergyResource;
use Filament\Resources\Pages\CreateRecord;

class CreateFoodAllergy extends CreateRecord
{
    protected static string $resource = FoodAllergyResource::class;
}
