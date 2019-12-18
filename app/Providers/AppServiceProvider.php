<?php

namespace App\Providers;

use App\Contracts\Importer;
use App\Services\JsonImporterService;
use App\Repositories\PlayerRepository;
use Illuminate\Support\ServiceProvider;
use App\Services\NativeHttpClientService;

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
            
            return new JsonImporterService(
                new NativeHttpClientService($source),
                new PlayerRepository
            );
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
