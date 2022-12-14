<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Interfaces\Services\AuthServiceInterface;
use App\Interfaces\Services\UsersServiceInterface;
use App\Services\AuthService;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }



    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(AuthServiceInterface::class, function ($app) {
            return new AuthService($app->make(UsersServiceInterface::class));
        });
    }


}
