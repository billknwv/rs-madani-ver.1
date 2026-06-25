<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // Baris ini ditambahkan

class AppServiceProvider extends ServiceProvider
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
        // Memaksa semua URL aset dan rute menggunakan HTTPS di Vercel (Production)
        if (config('app.env') === 'production' || env('VERCEL_ENV')) {
            URL::forceScheme('https');
        }
    }
}
