<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\Event;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\RequestJoinEventFile;

class RequestJoinEvent extends Model
{
    use HasFactory, SoftDeletes;

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function event(): BelongsTo {
        return $this->belongsTo(Event::class);
    }

    public function requestFiles(): HasMany {
        return $this->hasMany(RequestJoinEventFile::class);
    }
    

}
