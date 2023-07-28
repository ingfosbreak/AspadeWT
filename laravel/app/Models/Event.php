<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\UserEntry;
use App\Models\Process;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    public function userEntries(): belongsToMany {
        return $this->belongsToMany(UserEntry::class);
    }

    public function processes(): HasMany {
        return $this->hasMany(Process::class);
    }

    
}
