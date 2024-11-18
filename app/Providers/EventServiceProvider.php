<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        // Registre seus eventos e ouvintes aqui
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }
}