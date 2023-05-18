<?php

namespace DMO\SavingsBond\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;


class SavingsBondEventServiceProvider extends ServiceProvider
{

    protected $listen = [
        // OrganizationCreatedEvent::class => [
        //     OrganizationCreatedListener::class,
        // ]
    ];

    public function boot()
    {
        parent::boot();
    }
}