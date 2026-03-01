<?php

namespace App\Filament\Resources\FoodIntolerances\Pages;

use App\Filament\Resources\FoodIntolerances\FoodIntoleranceResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditFoodIntolerance extends EditRecord
{
    protected static string $resource = FoodIntoleranceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
