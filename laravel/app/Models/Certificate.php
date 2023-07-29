<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\UserEntry;
use App\Models\event;

class Certificate extends Model
{
    use HasFactory, SoftDeletes;

    public function userEntry(): BelongsTo {
        return $this->belongsTo(UserEntry::class);
    }

    public function event(): BelongsTo {
        return $this->belongsTo(Event::class);
    }
}
