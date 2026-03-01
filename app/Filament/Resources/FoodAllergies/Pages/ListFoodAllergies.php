<?php

namespace App\Filament\Resources\FoodAllergies\Pages;

use App\Filament\Resources\FoodAllergies\FoodAllergyResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFoodAllergies extends ListRecords
{
    protected static string $resource = FoodAllergyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
