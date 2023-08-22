<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\ItemNotFoundException;
use App\Models\User;
use App\Models\EventUser;
use App\Models\Process;
use App\Models\ProcessUser;
use App\Models\EventInfo;
use App\Models\EventTeam;
use App\Models\EventAnnouncement;
use App\Models\EventCategoryList;
use App\Models\RequestJoinEvent;
use App\Models\Category;
use Carbon\Carbon;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    public function getMembersCount() {
        return $this->user_pivots->where('event_role','participant')->count();
    }

    public function getStaffsCount() {
        return $this->user_pivots->where('event_role','staff')->count();
    }

    public function hasStarted()
    {
        return Carbon::now()->greaterThan($this->date_start);
    }
    
    // EventPaginate
    public static function getPublishEventPaginate() {
        return Event::where('publish','publish')->paginate(15);
    }
    
    // Eventlol
    public static function getNewEvent() {
        return Event::orderBy('created_at', 'desc')->where('publish','publish')->paginate(15);
    }
    
    public static function getPopular() {
        return Event::withCount('requestJoinEvent')->where('publish','publish')->get()->sortByDesc('request_join_event_count')->take(6);
    }

    public static function getUpcomingEvent() {
        $events = Event::whereDate('date_start', '>', today())->where('publish','publish')->get(); // Get all upcoming events without pagination
        
        foreach ($events as $event) {
            $event->upcoming_count = $event->hasStarted() ? 0 : Carbon::parse($event->date_start)->diffInDays(now());
        }
        
        // Sort the events by 'upcoming_count' in descending order
        $sortedEvents = $events->sortBy('upcoming_count');
        
        // Convert the sorted events back to a query builder instance
        $queryBuilder = Event::whereIn('id', $sortedEvents->pluck('id')->all());
        
        // Paginate the sorted events with 15 results per page
        $paginatedEvents = $queryBuilder->paginate(15);
        
        return $paginatedEvents;
    }
    


    public function isUserInEvent(string $userid){
        
        $event_users = $this->users;
        try {
            $event_users->where('id',(int)$userid)->firstOrFail();
            return true;
      
        } catch (ItemNotFoundException $exception) {
      
            return false;
        
        }
    }

    public function getPrettyDateStart() {
        return Carbon::parse($this->date_start)->format('d-m-Y');
    }

    public function getPrettyDateClose() {
        return Carbon::parse($this->date_close)->format('d-m-Y');
    }

    public function getPrettyDateRegister() {
        return Carbon::parse($this->date_register)->format('d-m-Y');
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

    public function requestJoinEvent(): HasMany {
        return $this->hasMany(RequestJoinEvent::class);
    }


}