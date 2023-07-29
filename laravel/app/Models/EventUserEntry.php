<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Event;
use App\Models\UserEntry;

class EventUserEntry extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'event_user_entry';

    public function event(): BelongsTo {
        return $this->belongsTo(Event::class);
    }

    public function userEntry(): BelongsTo {
        return $this->belongsTo(UserEntry::class);
    }
}
