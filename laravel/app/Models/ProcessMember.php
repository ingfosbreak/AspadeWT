<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Process;
use App\Models\EventMember;

class ProcessMember extends Model
{
    use HasFactory, SoftDeletes;

    public function processes(): belongsToMany {
        return $this->belongsToMany(Process::class);
    }

    public function eventMembers(): belongsToMany {
        return $this->belongsToMany(EventMember::class);
    }
}
