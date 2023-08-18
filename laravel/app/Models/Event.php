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
use App\Models\EventAnnouncement;
use App\Models\EventCategoryList;
use App\Models\Category;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    public function getMembersCount() {
        return $this->user_pivots->where('event_role','participant')->count();
    }

    public function getStaffsCount() {
        return $this->user_pivots->where('event_role','staff')->count();
    }

    public static function getPublishEventPaginate() {
        return Event::where('publish','publish')->paginate(15);
    }

    public function getInfoSorted() {
        return $this->hasMany(EventInfo::class)->orderBy('order', 'asc');
    }

    public function users(): BelongsToMany {
        return $this->belongsToMany(User::class);
    }

    public function user_pivots(): HasMany {
        return $this->hasMany(EventUser::class);
    }

    public function processes(): HasMany {
        return $this->hasMany(Process::class);
    }

    public function processes_pivots(): HasMany {
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
    public function event_announcement(): HasMany {
        return $this->hasMany(EventAnnouncement::class);
    }

    public function event_category_list(): HasMany {
        return $this->hasMany(EventCategoryList::class);
    }
    public function categories(): BelongsToMany {
        return $this->belongsToMany(Category::class);
    }

}
