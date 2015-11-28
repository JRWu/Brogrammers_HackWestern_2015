<?php
/**
 * Created by PhpStorm.
 * User: edmund
 * Date: 28/11/15
 * Time: 3:42 PM
 */

namespace Brogrammers\Events\LogicEngine;


use Brogrammers\Events\Eventful\Api\EventfulApiRepository;
use Brogrammers\Events\GooglePlaces\Api\GooglePlacesApiRepository;
use Illuminate\Support\ServiceProvider;

class EventLogicEngineServiceProvider extends ServiceProvider
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
        $this->app->singleton(EventLogicEngine::class, function () {
            return new EventLogicEngine(
                $this->app[GooglePlacesApiRepository::class],
                $this->app[EventfulApiRepository::class]
            );
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [EventLogicEngine::class];
    }
}