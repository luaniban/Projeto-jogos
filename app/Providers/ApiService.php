<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class ApiService extends ServiceProvider
{




    static function fetchAll() {
        return Http::get('https://www.freetogame.com/api/games?limit=2$skip=2')->json();
    }
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
