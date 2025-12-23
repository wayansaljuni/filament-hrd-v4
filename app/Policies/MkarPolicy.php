<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Mkar;
use Illuminate\Auth\Access\HandlesAuthorization;

class MkarPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Mkar');
    }

    public function view(AuthUser $authUser, Mkar $mkar): bool
    {
        return $authUser->can('View:Mkar');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Mkar');
    }

    public function update(AuthUser $authUser, Mkar $mkar): bool
    {
        return $authUser->can('Update:Mkar');
    }

    public function delete(AuthUser $authUser, Mkar $mkar): bool
    {
        return $authUser->can('Delete:Mkar');
    }

    public function restore(AuthUser $authUser, Mkar $mkar): bool
    {
        return $authUser->can('Restore:Mkar');
    }

    public function forceDelete(AuthUser $authUser, Mkar $mkar): bool
    {
        return $authUser->can('ForceDelete:Mkar');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Mkar');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Mkar');
    }

    public function replicate(AuthUser $authUser, Mkar $mkar): bool
    {
        return $authUser->can('Replicate:Mkar');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Mkar');
    }

}