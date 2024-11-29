<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Pagination\Paginator;

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
        // Allow the data schema to create freely database table
        Schema::defaultStringLength(191);

        //Use the bootstrap pagination ui button
        Paginator::useBootstrapFive();

        //format the return data in resource collection
        JsonResource::withoutWrapping();
    }
}
