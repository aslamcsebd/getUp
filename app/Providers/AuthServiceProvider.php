<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('manage-all-content', function ($user) {
            return $user->roles->contains('name', 'Admin');
        });

        Gate::define('update-articles', function ($user) {
            return $user->roles->contains('name', 'Admin') || $user->roles->contains('name', 'Editor');
        });
    }
}
