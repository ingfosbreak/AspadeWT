<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\UserEntry;
use App\Models\Event;

class Process extends Model
{
    use HasFactory, SoftDeletes;

    public function userEntries(): belongsToMany {
        return $this->belongsToMany(UserEntry::class);
    }

    public function event(): BelongsTo {
        return $this->belongsTo(Event::class);
    }

}
