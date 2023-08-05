<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Managers\UserManager;
use App\Managers\EventManager;
use App\Managers\ProcessManager;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->share([
            'UserService' => app()->make(UserManager::class),
            'EventService' => app()->make(EventManager::class),
            'ProcessService' => app()->make(ProcessManager::class),
        ]);
    }
}
