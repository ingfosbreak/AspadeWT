<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\UserFull;
use App\Models\EventMembers;


class UserEntry extends Model
{
    use HasFactory, SoftDeletes;

    public function userFull(): HasOne
    {
        return $this->hasOne(UserFull::class);
    }

    public function eventMembers(): HasMany {
        return $this->hasMany(EventMembers::class);
    }
}
