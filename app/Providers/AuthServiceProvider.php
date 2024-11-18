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
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        // Gate para verificar se o usuário é administrador
        Gate::define('is-admin', function ($user) {
            return $user->role->name === 'Administrador';
        });

        // Gate para verificar se o usuário é operador
        Gate::define('is-operator', function ($user) {
            return $user->role->name === 'Operador';
        });
    }
}
