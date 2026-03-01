<?php

namespace App\Filament\Resources\FoodIngredients\Pages;

use App\Filament\Resources\FoodIngredients\FoodIngredientResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFoodIngredients extends ListRecords
{
    protected static string $resource = FoodIngredientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
