<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('course-access', function ($user)
        {
            return count(array_intersect(['PESERTA', 'ADMIN'], json_decode($user->roles)));
        });
        Gate::define('admin-access', function($user){
            return count(array_intersect(['ADMIN'], json_decode($user->roles)));
        });
    }
}
