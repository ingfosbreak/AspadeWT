<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\UserEntry;

class UserFull extends Model
{
    use HasFactory, SoftDeletes;

    public function userEntry(): BelongsTo
    {
        return $this->belongsTo(userEntry::class);
    }
}
