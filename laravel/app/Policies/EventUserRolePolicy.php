<?php

namespace App\Policies;

use App\Models\EventUser;
use App\Models\User;
use App\Models\Event;
use Illuminate\Auth\Access\Response;

class EventUserRolePolicy
{
    public function manageEvent(User $user, Event $event){
    // Check if the user's role in the pivot table is "header" or "staff"
        $eventUser = $event->users->find($user->id);
        return $eventUser && in_array($eventUser->pivot->event_role, ['header', 'staff']);
    }

}
