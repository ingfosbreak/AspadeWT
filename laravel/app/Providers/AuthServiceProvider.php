<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use App\Models\Event;
use App\Policies\EventPolicy;
use App\Models\EventUser;
use App\Policies\EventUserPolicy;
use App\Models\RequestJoinEvent;
use App\Policies\RequestJoinEventPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Event::class => EventPolicy::class,
        EventUser::class => EventUserPolicy::class,
        RequestJoinEvent::class => RequestJoinEventPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('manageEvent', [EventPolicy::class, 'manageEvent']);
    }
}
