<?php

namespace App\Providers;

use App\Contracts\Repositories\CompanyRepositoryContract;
use App\Contracts\Services\Api\CompanyApiServiceContract;
use App\Contracts\Services\CompanyServiceContract;
use App\Repositories\CompanyRepository;
use App\Services\Api\CompanyApiApiService;
use App\Services\CompanyService;
use Illuminate\Support\ServiceProvider;

class CompanyServiceProvider extends ServiceProvider
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
        $this->app->singleton(CompanyApiServiceContract::class, CompanyApiApiService::class);
        $this->app->singleton(CompanyServiceContract::class, CompanyService::class);
        $this->app->singleton(CompanyRepositoryContract::class,CompanyRepository::class);
    }
}
