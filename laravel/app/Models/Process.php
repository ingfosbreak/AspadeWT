<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ProcessMember;

class Process extends Model
{
    use HasFactory, SoftDeletes;

    public function processMembers(): HasMany {
        return $this->hasMany(ProcessMember::class);
    }

}
