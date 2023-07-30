<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\UserEntry;

class Request extends Model
{
    use HasFactory, SoftDeletes;

    public function userEntry(): BelongsTo {
        return $this->belongsTo(UserEntry::class);
    }
}
