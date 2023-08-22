<?php

namespace App\Policies;

use App\Models\EventUser;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class EventUserPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, EventUser $eventUser): bool
    {
       return in_array($eventUser->event_role, ['header', 'staff']);
    }

    public function viewWithRole(User $user, EventUser $eventUser)
    {
        return $eventUser->event_role === 'header';
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, EventUser $eventUser): bool
    {
    
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, EventUser $eventUser): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, EventUser $eventUser): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, EventUser $eventUser): bool
    {
        //
    }
}
