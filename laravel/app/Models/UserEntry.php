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
use App\Models\EventUserEntry;
use App\Models\Process;
use App\Models\ProcessUserEntry;
use App\Models\Request;
use App\Models\Complaint;
use App\Models\Certificate;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;



class UserEntry extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable, SoftDeletes;

    protected $fillable = [
        'username'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getAuthPassword()
    {
        return $this->userFull->password;
    }


    public function userFull(): HasOne {
        return $this->hasOne(UserFull::class);
    }

    public function requests(): HasMany {
        return $this->hasMany(Request::class);
    }

    public function complaints(): HasMany {
        return $this->hasMany(Complaint::class);
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

    public function processes_statuses(): HasMany {
        return $this->hasMany(ProcessUserEntry::class);
    }

}