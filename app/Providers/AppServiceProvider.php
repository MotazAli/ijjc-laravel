<?php

namespace App\Providers;

use App\Interfaces\Repositories\AcademiesRepositoryInterface;
use App\Interfaces\Repositories\UsersRepositoryInterface;
use App\Interfaces\Services\AcademiesServiceInterface;
use App\Interfaces\Services\UsersServiceInterface;
use App\Repositories\AcademiesRepository;
use App\Repositories\UsersRepository;
use App\Services\AcademiesService;
use App\Services\UsersService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
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


        $this->app->singleton(AcademiesRepositoryInterface::class, function ($app) {
            return new AcademiesRepository();
            //return new Transistor($app->make(PodcastParser::class));
        });


        $this->app->singleton(AcademiesServiceInterface::class, function ($app) {
            return new AcademiesService($app->make(AcademiesRepositoryInterface::class));
            //return new Transistor($app->make(PodcastParser::class));
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
