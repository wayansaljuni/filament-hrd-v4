<?php

namespace App\Providers;

use App\Models\User;
use App\Policies\UserPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
// Daftarkan Policy secara manual jika auto-discovery gagal
    Gate::policy(User::class, UserPolicy::class);

    // Bypass semua Gate untuk Super Admin
    Gate::before(function ($user, $ability) {
        return $user->hasRole('super_admin') ? true : null;
    });
    }
}
