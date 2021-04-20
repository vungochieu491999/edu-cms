<?php

namespace Edumad\Policies;

use Edumad\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \Edumad\Models\User  $user
     * @return mixed
     */
    public function viewDashboard(User $user)
    {
        $user->hasAccess(['dashboard.view']);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \Edumad\Models\User  $user
     * @return mixed
     */
    public function viewUser(User $user)
    {
        $user->hasAccess(['user.view']);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \Edumad\Models\User  $user
     * @return mixed
     */
    public function viewPermission(User $user)
    {
        $user->hasAccess(['permission.view']);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \Edumad\Models\User  $user
     * @return mixed
     */
    public function viewEmployee(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \Edumad\Models\User  $user
     * @param  \App\Models\User  $model
     * @return mixed
     */
    public function update(User $user, User $model)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \Edumad\Models\User  $user
     * @param  \App\Models\User  $model
     * @return mixed
     */
    public function delete(User $user, User $model)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \Edumad\Models\User  $user
     * @param  \App\Models\User  $model
     * @return mixed
     */
    public function restore(User $user, User $model)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \Edumad\Models\User  $user
     * @param  \App\Models\User  $model
     * @return mixed
     */
    public function forceDelete(User $user, User $model)
    {
        //
    }
}
