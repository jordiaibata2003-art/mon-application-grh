<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Définir le rate limiter pour l'API (60 requêtes par minute)
        RateLimiter::for('api', function ($job) {
            return Limit::perMinute(60)->by($job->user()?->id ?: $job->ip());
        });
    }
}