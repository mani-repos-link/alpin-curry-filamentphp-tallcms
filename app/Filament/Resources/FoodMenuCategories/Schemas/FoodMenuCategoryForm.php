<?php

namespace App\Filament\Resources\FoodMenuCategories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class FoodMenuCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Select::make('type')
                    ->options([
                        'food' => 'Food',
                        'drink' => 'Drink',
                    ])
                    ->required()
                    ->default('food'),
                Select::make('display_type')
                    ->options([
                        'off' => 'Off',
                        'single' => 'Single View',
                        'dual' => 'Dual View',
                    ])
                    ->required()
                    ->default('off'),
                Select::make('status')
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                    ])
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
