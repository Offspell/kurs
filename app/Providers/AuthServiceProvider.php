<?php

namespace App\Providers;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Support\Facades\Gate as FacadesGate;
use Illuminate\Support\ServiceProvider as SupportServiceProvider;

class AuthServiceProvider extends SupportServiceProvider
{
    /**
     *
     *
     *
     *
    */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\Model\Policy',
    ];

    /**
     *
     *
     *
     */
    public function boot()
    {

        $this->defineUserRoleGate('isAdmin', UserRole::ADMIN);
        $this->defineUserRoleGate('isUser', UserRole::USER);
    }

    private function defineUserRoleGate(string $name, string $role): void
    {
        FacadesGate::define($name, function(User $user) use ($role) {
            return $user->role == $role;
        });
    }
}
