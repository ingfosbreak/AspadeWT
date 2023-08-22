<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\RequestCreateEvent;

class RequestCreateEventConfirmationFile extends Model
{
    use HasFactory,SoftDeletes ;

    public function requestCreateEvent(): BelongsTo{
        return $this->belongsTo(RequestCreateEvent::class);
    }
    

}