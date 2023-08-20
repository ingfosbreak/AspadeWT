<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\RequestJoinEvent;


class RequestJoinEventFile extends Model
{
    use HasFactory, SoftDeletes;

    public function requestJoinEvent(): BelongsTo {
        return $this->belongsTo(RequestJoinEvent::class);
    }
}
