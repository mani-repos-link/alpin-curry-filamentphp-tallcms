<?php

namespace App\Providers;

use App\Services\RestaurantProfileService;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    { }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        $this->configureSecureUrls();

        RateLimiter::for('reservation-submissions', function (Request $request): array {
            $email = Str::lower(trim((string) $request->input('email')));
            $emailKey = $email !== '' ? $email : 'guest';

            return [
                Limit::perMinutes(10, 5)
                    ->by('reservation:ip-email:'.$request->ip().':'.$emailKey)
                    ->response(function (Request $request, array $headers) {
                        return redirect()
                            ->back()
                            ->withInput($request->except(['reservation_website']))
                            ->withErrors(['form' => __('site.forms.rate_limited_reservation')], 'reservation')
                            ->withHeaders($headers)
                            ->setStatusCode(429);
                    }),
                Limit::perMinutes(10, 12)
                    ->by('reservation:ip:'.$request->ip())
                    ->response(function (Request $request, array $headers) {
                        return redirect()
                            ->back()
                            ->withInput($request->except(['reservation_website']))
                            ->withErrors(['form' => __('site.forms.rate_limited_reservation')], 'reservation')
                            ->withHeaders($headers)
                            ->setStatusCode(429);
                    }),
            ];
        });

        RateLimiter::for('contact-submissions', function (Request $request): array {
            $email = Str::lower(trim((string) $request->input('contact_email')));
            $emailKey = $email !== '' ? $email : 'guest';

            return [
                Limit::perMinutes(10, 4)
                    ->by('contact:ip-email:'.$request->ip().':'.$emailKey)
                    ->response(function (Request $request, array $headers) {
                        return redirect()
                            ->back()
                            ->withInput($request->except(['contact_website']))
                            ->withErrors(['form' => __('site.forms.rate_limited_contact')], 'contact')
                            ->withHeaders($headers)
                            ->setStatusCode(429);
                    }),
                Limit::perMinutes(10, 10)
                    ->by('contact:ip:'.$request->ip())
                    ->response(function (Request $request, array $headers) {
                        return redirect()
                            ->back()
                            ->withInput($request->except(['contact_website']))
                            ->withErrors(['form' => __('site.forms.rate_limited_contact')], 'contact')
                            ->withHeaders($headers)
                            ->setStatusCode(429);
                    }),
            ];
        });

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

    protected function configureSecureUrls()
    {
        // Determine if HTTPS should be enforced
        $enforceHttps = $this->app->environment(['production', 'staging'])
            && !$this->app->runningUnitTests();
 
        // Force HTTPS for all generated URLs
        URL::forceHttps($enforceHttps);
 
        // Ensure proper server variable is set
        /*if ($enforceHttps) {
            $this->app['request']->server->set('HTTPS', 'on');
        }
 
        // Set up global middleware for security headers
        if ($enforceHttps) {
            $this->app['router']->pushMiddlewareToGroup('web', function ($request, $next){
                $response = $next($request);
 
                return $response->withHeaders([
                    'Strict-Transport-Security' => 'max-age=31536000; includeSubDomains',
                    'Content-Security-Policy' => "upgrade-insecure-requests",
                    'X-Content-Type-Options' => 'nosniff'
                ]);
            });
        }*/
    }

}
