<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Event;
use App\Models\UserEntry;

class EventMember extends Model
{
    use HasFactory, SoftDeletes;

    public function event(): BelongsTo {
        return $this->belongsTo(Event::class);
    }

    public function userEntry(): BelongsTo {
        return $this->belongsTo(UserEntry::class);
    }





}
