<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\Jenisabsen;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\User as AuthUser;

class JenisabsenPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Jenisabsen');
    }

    public function view(AuthUser $authUser, Jenisabsen $jenisabsen): bool
    {
        return $authUser->can('View:Jenisabsen');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Jenisabsen');
    }

    public function update(AuthUser $authUser, Jenisabsen $jenisabsen): bool
    {
        return $authUser->can('Update:Jenisabsen');
    }

    public function delete(AuthUser $authUser, Jenisabsen $jenisabsen): bool
    {
        return $authUser->can('Delete:Jenisabsen');
    }

    public function restore(AuthUser $authUser, Jenisabsen $jenisabsen): bool
    {
        return $authUser->can('Restore:Jenisabsen');
    }

    public function forceDelete(AuthUser $authUser, Jenisabsen $jenisabsen): bool
    {
        return $authUser->can('ForceDelete:Jenisabsen');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Jenisabsen');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Jenisabsen');
    }

    public function replicate(AuthUser $authUser, Jenisabsen $jenisabsen): bool
    {
        return $authUser->can('Replicate:Jenisabsen');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Jenisabsen');
    }

}