<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Mcab;
use Illuminate\Auth\Access\HandlesAuthorization;

class McabPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Mcab');
    }

    public function view(AuthUser $authUser, Mcab $mcab): bool
    {
        return $authUser->can('View:Mcab');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Mcab');
    }

    public function update(AuthUser $authUser, Mcab $mcab): bool
    {
        return $authUser->can('Update:Mcab');
    }

    public function delete(AuthUser $authUser, Mcab $mcab): bool
    {
        return $authUser->can('Delete:Mcab');
    }

    public function restore(AuthUser $authUser, Mcab $mcab): bool
    {
        return $authUser->can('Restore:Mcab');
    }

    public function forceDelete(AuthUser $authUser, Mcab $mcab): bool
    {
        return $authUser->can('ForceDelete:Mcab');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Mcab');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Mcab');
    }

    public function replicate(AuthUser $authUser, Mcab $mcab): bool
    {
        return $authUser->can('Replicate:Mcab');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Mcab');
    }

}