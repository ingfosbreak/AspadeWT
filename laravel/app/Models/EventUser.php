<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Event;
use App\Models\User;

class EventUser extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'event_user';


    public function event(): BelongsTo {
        return $this->belongsTo(Event::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

}
