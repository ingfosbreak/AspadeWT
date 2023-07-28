<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\UserFull;
use App\Models\Event;
use App\Models\Process;



class UserEntry extends Model
{
    use HasFactory, SoftDeletes;

    public function userFull(): HasOne {
        return $this->hasOne(UserFull::class);
    }

    public function events(): BelongsToMany {
        return $this->belongsToMany(Event::class);
    }

    public function processes(): BelongsToMany {
        return $this->belongsToMany(Process::class);
    }
}
