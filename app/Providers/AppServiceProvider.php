<?php

namespace App\Providers;

use App\Contracts\Importer;
use App\Services\JsonImporterService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Importer::class, function() {
            $source = config('importer.source');
            
            return new JsonImporterService($source);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
