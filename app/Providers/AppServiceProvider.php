<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        Paginator::useBootstrap();
        // Define the mail component hint path
        Blade::component('mail::message', 'mail.message');
        Blade::component('mail::button', 'mail.button');
        Blade::component('mail::panel', 'mail.panel');
        Blade::component('mail::table', 'mail.table');
    }
}
