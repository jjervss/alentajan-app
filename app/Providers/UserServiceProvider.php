<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\UserService;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
    $this->app->singleton(UserService::class, function ($app) {
        $users = [
            [
                'name' => 'Erick Delen',
                'gender' => 'Male'
            ],
            [
                'name' => 'Daniel Marie',
                'gender' => 'Female'
            ]
            ];
            return new UserService($users);
    });
    

    /**
     * Bootstrap services.
     */
   // public function boot(): void
    {
        //
    }
}
}
