<?php
/**
 * Created by PhpStorm.
 * User: edmund
 * Date: 28/11/15
 * Time: 2:56 AM
 */

namespace Brogrammers\Eventful\Api;


use Illuminate\Support\ServiceProvider;

class EventfulApiServiceProvider extends ServiceProvider
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
        $this->app->singleton(EventfulApiClient::class, function () {
            return new EventfulApiClient([
                'authType' => 'basic',
                'apiKey'   => env('EVENTFUL_API_KEY', null),
                'debug'    => env('EVENTFUL_API_DEBUG', false)
            ]);
        });

        $this->app->singleton(EventfulApiRepository::class, function () {
            return new EventfulApiRepository($this->app[EventfulApiClient::class]);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [EventfulApiClient::class, EventfulApiRepository::class];
    }
}