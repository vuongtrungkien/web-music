<?php

namespace App\Providers;

use App\Http\Controllers\RoleConst;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;


class AuthServiceProvider extends ServiceProvider implements RoleConst
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

        Gate::define('view-page-admin', function ($user) {

            if ($user->role == RoleConst::ADMIN) {

                return true;

            }

            return false;

        });


        Gate::define('view-page-guest', function ($user) {

            if ( $user->role == RoleConst::USER) {

                return true;

            }

            return false;

        });

    }
}
