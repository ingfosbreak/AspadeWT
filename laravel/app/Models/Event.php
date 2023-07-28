<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\EventMembers;
use App\Models\Process;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    public function eventMembers(): HasMany {
        return $this->hasMany(EventMembers::class);
    }

    public function processes(): HasMany {
        return $this->hasMany(Process::class);
    }
}
