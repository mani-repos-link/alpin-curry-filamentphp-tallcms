<?php

namespace App\Providers;

use App\Services\RestaurantProfileService;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $profile = app(RestaurantProfileService::class);

        View::share('restaurantProfile', $profile->profile());
        View::share('restaurantName', $profile->name());
        View::share('restaurantLegalName', $profile->legalName());
        View::share('restaurantBrand', $profile->brand());
        View::share('restaurantContact', $profile->contact());
        View::share('restaurantAddress', $profile->address());
        View::share('restaurantLegal', $profile->legal());
        View::share('restaurantAddressLine', $profile->fullAddressLine());
        View::share('restaurantPhoneHref', $profile->phoneHref());
        View::share('restaurantWhatsappUrl', $profile->whatsappUrl());
        View::share('restaurantMapEmbedUrl', $profile->mapEmbedUrl());
    }
}
