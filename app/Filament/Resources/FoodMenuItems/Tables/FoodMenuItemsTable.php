<?php

namespace App\Filament\Resources\FoodMenuItems\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Illuminate\Database\Eloquent\Builder;

class FoodMenuItemsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('category.name')
                    ->sortable(),
                TextColumn::make('category.type')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'food' => 'warning',
                        'drink' => 'info',
                        default => 'gray',
                    })
                    ->sortable(),
                TextColumn::make('price')
                    ->money('EUR')
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
            ])
            ->filtersLayout(FiltersLayout::AboveContent)
            ->filters([
                SelectFilter::make('type')
                    ->options([
                        'food' => 'Food',
                        'drink' => 'Drink',
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query->when(
                            $data['value'],
                            fn (Builder $query, $value): Builder => $query->whereHas('category', fn($q) => $q->where('type', $value))
                        );
                    }),

                SelectFilter::make('category')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload(),

                SelectFilter::make('status')
                    ->default('active')
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                    ]),

                Filter::make('price_range')
                    ->form([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('price_from')
                                    ->numeric()
                                    ->placeholder('Min'),
                                TextInput::make('price_to')
                                    ->numeric()
                                    ->placeholder('Max'),
                            ]),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['price_from'] ?? null,
                                fn (Builder $query): Builder => $query->where('price', '>=', $data['price_from']),
                            )
                            ->when(
                                $data['price_to'] ?? null,
                                fn (Builder $query): Builder => $query->where('price', '<=', $data['price_to']),
                            );
                    }),

                SelectFilter::make('foodAllergies')
                    ->relationship('foodAllergies', 'name')
                    ->multiple()
                    ->preload(),

                SelectFilter::make('foodIntolerances')
                    ->relationship('foodIntolerances', 'name')
                    ->multiple()
                    ->preload(),
            ])
            ->recordActions([
                //
            ])
            ->toolbarActions([
                //
            ]);
    }
}
