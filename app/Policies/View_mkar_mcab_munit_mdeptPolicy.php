<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\View_mkar_mcab_munit_mdept;
use Illuminate\Auth\Access\HandlesAuthorization;

class View_mkar_mcab_munit_mdeptPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:ViewMkarMcabMunitMdept');
    }

    public function view(AuthUser $authUser, View_mkar_mcab_munit_mdept $viewMkarMcabMunitMdept): bool
    {
        return $authUser->can('View:ViewMkarMcabMunitMdept');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:ViewMkarMcabMunitMdept');
    }

    public function update(AuthUser $authUser, View_mkar_mcab_munit_mdept $viewMkarMcabMunitMdept): bool
    {
        return $authUser->can('Update:ViewMkarMcabMunitMdept');
    }

    public function delete(AuthUser $authUser, View_mkar_mcab_munit_mdept $viewMkarMcabMunitMdept): bool
    {
        return $authUser->can('Delete:ViewMkarMcabMunitMdept');
    }

    public function restore(AuthUser $authUser, View_mkar_mcab_munit_mdept $viewMkarMcabMunitMdept): bool
    {
        return $authUser->can('Restore:ViewMkarMcabMunitMdept');
    }

    public function forceDelete(AuthUser $authUser, View_mkar_mcab_munit_mdept $viewMkarMcabMunitMdept): bool
    {
        return $authUser->can('ForceDelete:ViewMkarMcabMunitMdept');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:ViewMkarMcabMunitMdept');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:ViewMkarMcabMunitMdept');
    }

    public function replicate(AuthUser $authUser, View_mkar_mcab_munit_mdept $viewMkarMcabMunitMdept): bool
    {
        return $authUser->can('Replicate:ViewMkarMcabMunitMdept');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:ViewMkarMcabMunitMdept');
    }

}