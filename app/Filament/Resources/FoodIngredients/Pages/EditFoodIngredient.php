<?php

namespace App\Filament\Resources\FoodIngredients\Pages;

use App\Filament\Resources\FoodIngredients\FoodIngredientResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditFoodIngredient extends EditRecord
{
    protected static string $resource = FoodIngredientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
