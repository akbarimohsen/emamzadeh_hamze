<?php

namespace App\Policies;

use App\Models\Heading;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\HandlesAuthorization;

class HeadingPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Heading  $heading
     * @return mixed
     */
    public function view(User $user, Heading $heading)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
        return Auth::user()->utype === "TCH";
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Heading  $heading
     * @return mixed
     */
    public function update(User $user, Heading $heading)
    {
        //
        return Auth::user()->utype === "TCH" && ( Auth::user()->id == $heading->teacher_id );
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Heading  $heading
     * @return mixed
     */
    public function delete(User $user, Heading $heading)
    {
        //
        return ( Auth::user()->utype === "TCH" ) && ( Auth::user()->id == $heading->teacher_id ) ;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Heading  $heading
     * @return mixed
     */
    public function restore(User $user, Heading $heading)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Heading  $heading
     * @return mixed
     */
    public function forceDelete(User $user, Heading $heading)
    {
        //
    }
}
