<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Event;


class EventInfo extends Model
{
    use HasFactory, SoftDeletes;

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

}
