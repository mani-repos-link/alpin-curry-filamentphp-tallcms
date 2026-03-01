<?php

namespace App\Filament\Resources\FoodAllergies\Pages;

use App\Filament\Resources\FoodAllergies\FoodAllergyResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditFoodAllergy extends EditRecord
{
    protected static string $resource = FoodAllergyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
