<?php

namespace App\Filament\Pages;

use App\Models\FoodMenuItem;
use Filament\Pages\Page;
use Filament\Support\Icons\Heroicon;
use Illuminate\Support\Facades\Schema;

class MenuGenerator extends Page
{
    protected string $view = 'filament.pages.menu-generator';

    protected static string|\BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentText;

    protected static string|\UnitEnum|null $navigationGroup = 'Menu';

    protected static ?string $navigationLabel = 'Menu Generator';

    protected static ?int $navigationSort = 99;

    protected static ?string $title = 'Menu Generator';

    public function mount(): void
    {
        $this->restaurantName = (string) config('restaurant.name', 'Alpin Curry');
        $this->restaurantSubtitle = 'Authentic Indian Cuisine';
    }

    public string $restaurantName = 'Alpin Curry';

    public string $restaurantSubtitle = 'Authentic Indian Cuisine';

    public static function getNavigationBadge(): ?string
    {
        if (! Schema::hasTable('food_menu_items')) {
            return null;
        }

        $count = FoodMenuItem::query()->where('status', 'active')->count();

        return $count > 0 ? (string) $count : null;
    }
}
