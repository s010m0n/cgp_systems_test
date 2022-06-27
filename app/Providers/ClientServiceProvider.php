<?php

namespace App\Providers;

use App\Contracts\Repositories\ClientRepositoryContract;
use App\Contracts\Services\ClientServiceContract;
use App\Repositories\ClientRepository;
use App\Services\ClientService;
use Illuminate\Support\ServiceProvider;

class ClientServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerContracts();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    private function registerContracts(){
        $this->app->singleton(ClientServiceContract::class, ClientService::class);
        $this->app->singleton(ClientRepositoryContract::class, ClientRepository::class);
    }
}
