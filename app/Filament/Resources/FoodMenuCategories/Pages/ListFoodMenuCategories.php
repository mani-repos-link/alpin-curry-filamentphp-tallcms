<?php

namespace App\Filament\Resources\FoodMenuCategories\Pages;

use App\Filament\Resources\FoodMenuCategories\FoodMenuCategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFoodMenuCategories extends ListRecords
{
    protected static string $resource = FoodMenuCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
