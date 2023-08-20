<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Event;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    public function viewEvent(User $user, Event $event)
    {
        // Check if the user is associated with the event through the pivot table
        return $user->events->contains($event);
    }
    
    public function editEvent(User $user, Event $event)
    {
        // Check if the user is associated with the event through the pivot table
        return $user->events->contains($event);
    }
    
}
