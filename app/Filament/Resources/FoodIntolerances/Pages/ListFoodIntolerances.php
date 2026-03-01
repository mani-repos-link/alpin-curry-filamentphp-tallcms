<?php

namespace App\Filament\Resources\FoodIntolerances\Pages;

use App\Filament\Resources\FoodIntolerances\FoodIntoleranceResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFoodIntolerances extends ListRecords
{
    protected static string $resource = FoodIntoleranceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
