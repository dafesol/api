<?php

namespace App\Api\Sync\Provider;

use App\Console\Commands\SyncEtlCommand;
use Illuminate\Support\ServiceProvider;

class ApiServiceProvider extends ServiceProvider
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
        $this->commands([
            SyncEtlCommand::class
        ]);
    }
}
