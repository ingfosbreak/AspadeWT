<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\User;
use App\Models\EventUser;
use App\Models\Process;
use App\Models\ProcessUser;
use App\Models\EventInfo;
use App\Models\EventTeam;
use App\Models\EventAdvertise;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    public function getMembersCount() {
        return $this->users->count();
    }

    public function users(): BelongsToMany {
        return $this->belongsToMany(User::class);
    }

    public function user_roles(): HasMany {
        return $this->hasMany(EventUser::class);
    }

    public function processes(): HasMany {
        return $this->hasMany(Process::class);
    }

    public function processes_statuses(): HasMany {
        return $this->hasMany(ProcessUser::class);
    }

    public function certificates(): HasMany {
        return $this->hasMany(Certificate::class);
    }

    public function event_infos(): HasMany {
        return $this->hasMany(EventInfo::class);
    }
    public function event_image(): HasOne {
        return $this->hasOne(EventImage::class);
    }
    public function event_teams(): HasMany {
        return $this->hasMany(EventTeam::class);
    }
    public function event_advertise(): HasMany {
        return $this->hasMany(EventAdvertise::class);
    }
}
