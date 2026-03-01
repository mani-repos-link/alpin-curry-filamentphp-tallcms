<?php

namespace App\Filament\Resources\FoodMenuItems\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\CheckboxList;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class FoodMenuItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('General Information')
                    ->schema([
                        Select::make('food_menu_category_id')
                            ->relationship('category', 'name')
                            ->required()
                            ->searchable()
                            ->preload(),
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('price')
                            ->required()
                            ->default('0.00'),
                        TextInput::make('status')
                            ->required()
                            ->default('active'),
                        TextInput::make('order')
                            ->required()
                            ->numeric()
                            ->default(5),
                    ])->columns(2),

                Section::make('Descriptions')
                    ->schema([
                        Textarea::make('description_en')
                            ->columnSpanFull(),
                        Textarea::make('description_it')
                            ->columnSpanFull(),
                        Textarea::make('description_de')
                            ->columnSpanFull(),
                    ]),

                Section::make('Dietary Information')
                    ->schema([
                        CheckboxList::make('foodIngredients')
                            ->relationship('foodIngredients', 'name')
                            ->columns(3),
                        CheckboxList::make('foodAllergies')
                            ->relationship('foodAllergies', 'name')
                            ->columns(3),
                        CheckboxList::make('foodIntolerances')
                            ->relationship('foodIntolerances', 'name')
                            ->columns(3),
                    ]),
            ]);
    }
}
