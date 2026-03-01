<?php

namespace App\Filament\Resources\FoodIngredients\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class FoodIngredientForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('status')
                    ->required()
                    ->default('active'),
                TextInput::make('order')
                    ->required()
                    ->numeric()
                    ->default(5),
                Textarea::make('description_en')
                    ->columnSpanFull(),
                Textarea::make('description_it')
                    ->columnSpanFull(),
                Textarea::make('description_de')
                    ->columnSpanFull(),
            ]);
    }
}
