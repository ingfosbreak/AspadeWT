<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\UserFull;
use App\Models\Event;
use App\Models\Process;
use App\Models\Inform;
use App\Models\Certificate;


class UserEntry extends Model
{
    use HasFactory, SoftDeletes;

    public function userFull(): HasOne {
        return $this->hasOne(UserFull::class);
    }

    public function informs(): HasMany {
        return $this->hasMany(Inform::class);
    }

    public function certificates(): HasMany {
        return $this->hasMany(Certificate::class);
    }

    public function events(): BelongsToMany {
        return $this->belongsToMany(Event::class);
    }

    public function events_roles(): HasMany {
        return $this->hasMany(EventUserEntry::class);
    }

    public function processes(): BelongsToMany {
        return $this->belongsToMany(Process::class);
    }

}
