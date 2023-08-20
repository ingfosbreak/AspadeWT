<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ItemNotFoundException;
use Illuminate\Database\Eloquent\ModelNotFoundException; 
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\UserFull;
use App\Models\UserToken;
use App\Models\UserImage;
use App\Models\Event;
use App\Models\EventUser;
use App\Models\EventTeam;
use App\Models\Process;
use App\Models\ProcessUser;
use App\Models\Request;
use App\Models\Complaint;
use App\Models\Certificate;
use App\Models\RequestCreateEvent;
use App\Models\RequestJoinEvent;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
    protected $fillable = [
        'username',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'password' => 'hashed',
    ];
    

    protected function role()
    {
        return $this->role;
    }

    public function getEventRole(string $event_id){
        return $this->user_pivots->where('event_id',(int) $event_id)->firstOrFail()->event_role;
        
    }

    public function getEventTeamId(string $event_id) {
        return $this->user_pivots->where('event_id',(int) $event_id)->firstOrFail()->event_team_id;
    }

    publIc function getEventTeamName(string $event_id) {
        
        return EventTeam::find($this->getEventTeamId($event_id))->name;
            
    }



    public function userFull(): HasOne {
        return $this->hasOne(UserFull::class);
    }

    public function user_pivots(): HasMany {
        return $this->hasMany(EventUser::class);
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

    public function processes(): BelongsToMany {
        return $this->belongsToMany(Process::class);
    }

    public function processes_statuses(): HasMany {
        return $this->hasMany(ProcessUser::class);
    }

    public function tokens(): HasMany {
        return $this->hasMany(UserToken::class);
    }

    public function image(): HasOne {
        return $this->hasOne(UserImage::class);
    }

    public function noti():HasMany{
        return $this->hasMany(UserNoti::class);
    }

    public function requestCreateEvent(): HasMany {
        return $this->hasMany(RequestCreateEvent::class);
    }

    public function requestJoinEvent(): HasMany {
        return $this->hasMany(RequestJoinEvent::class);
    }

}
