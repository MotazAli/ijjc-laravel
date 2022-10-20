<?php

namespace App\Providers;

use App\Interfaces\Repositories\UsersRepositoryInterface;
use App\Interfaces\Services\UsersServiceInterface;
use App\Repositories\UsersRepository;
use App\Services\UsersService;
use Illuminate\Support\ServiceProvider;

class UsersServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //

        $this->app->singleton(UsersRepositoryInterface::class, function ($app) {
            return new UsersRepository();
            //return new Transistor($app->make(PodcastParser::class));
        });


        $this->app->singleton(UsersServiceInterface::class, function ($app) {
            return new UsersService($app->make(UsersRepositoryInterface::class));
            //return new Transistor($app->make(PodcastParser::class));
        });
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
}
