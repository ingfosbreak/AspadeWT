<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Event;
use App\Models\UserEntry;
use App\Models\ProcessMember;

class EventMember extends Model
{
    use HasFactory, SoftDeletes;

    public function events(): belongsToMany {
        return $this->belongsToMany(Event::class);
    }

    public function userEntrys(): belongsToMany {
        return $this->belongsToMany(UserEntry::class);
    }

    public function processMembers(): belongsToMany {
        return $this->belongsToMany(ProcessMember::class);
    }







}
