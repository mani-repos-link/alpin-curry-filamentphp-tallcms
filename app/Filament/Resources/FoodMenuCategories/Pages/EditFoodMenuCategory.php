<?php

namespace App\Filament\Resources\FoodMenuCategories\Pages;

use App\Filament\Resources\FoodMenuCategories\FoodMenuCategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditFoodMenuCategory extends EditRecord
{
    protected static string $resource = FoodMenuCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
