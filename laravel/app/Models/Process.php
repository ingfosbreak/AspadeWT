<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\Event;
use App\Models\EventTeam;

class Process extends Model
{
    use HasFactory, SoftDeletes;

    public function users(): BelongsToMany {
        return $this->belongsToMany(User::class);
    }

    public function event(): BelongsTo {
        return $this->belongsTo(Event::class);
    }

    public function event_team(): BelongsTo {
        return $this->belongsTo(EventTeam::class);
    }

}