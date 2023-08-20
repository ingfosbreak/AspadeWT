<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Managers\UserManager;
use App\Managers\EventManager;
use App\Managers\ProcessManager;
use App\Models\Event;
use App\Models\User;
use App\Models\Process;
use App\Models\UserToken;
use App\Models\RequestCreateEvent;
use Carbon\Carbon;


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
            'time' => Carbon::today()->toFormattedDateString(),
            'AllEvents' => RequestCreateEvent::get()->count(),
            'AllUsers' => User::get()->count(),
            'AllProcesses' => Process::get()->count(),
            'AllTokens' => UserToken::get()->count(),
        ]);
    }
}
