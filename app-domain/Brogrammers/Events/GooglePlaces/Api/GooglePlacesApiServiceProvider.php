<?php
/**
 * Created by PhpStorm.
 * User: edmund
 * Date: 28/11/15
 * Time: 2:56 AM
 */

namespace Brogrammers\Events\GooglePlaces\Api;

use Illuminate\Support\ServiceProvider;

class GooglePlacesApiServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(GooglePlacesApiClient::class, function () {
            return new GooglePlacesApiClient([
                'authType' => 'basic',
                'apiKey'   => env('GOOGLE_PLACES_API_KEY', null),
                'debug'    => env('GOOGLE_PLACES_API_DEBUG', false)
            ]);
        });

        $this->app->singleton(GooglePlacesApiRepository::class, function () {
            return new GooglePlacesApiRepository($this->app[GooglePlacesApiClient::class]);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [GooglePlacesApiClient::class, GooglePlacesApiRepository::class];
    }
}