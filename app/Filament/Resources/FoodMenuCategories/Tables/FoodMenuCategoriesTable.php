<?php

namespace App\Filament\Resources\FoodMenuCategories\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;

class FoodMenuCategoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('type')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'food' => 'warning',
                        'drink' => 'info',
                        default => 'gray',
                    })
                    ->sortable(),
                TextColumn::make('display_type')
                    ->badge()
                    ->sortable(),
                TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'active' => 'success',
                        'inactive' => 'danger',
                        default => 'gray',
                    }),
                TextColumn::make('order')
                    ->sortable(),
                TextColumn::make('food_menu_items_count')
                    ->counts('foodMenuItems')
                    ->label('Items'),
            ])
            ->filters([
                SelectFilter::make('type')
                    ->options([
                        'food' => 'Food',
                        'drink' => 'Drink',
                    ]),
                SelectFilter::make('status')
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                    ]),
                SelectFilter::make('display_type')
                    ->options([
                        'off' => 'Off',
                        'single' => 'Single View',
                        'dual' => 'Dual View',
                    ]),
            ]);
    }
}
