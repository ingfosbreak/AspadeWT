<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\RequestCreateEventConfirmationFile;
use Illuminate\Database\Eloquent\Relations\HasMany;
class RequestCreateEvent extends Model
{
    use HasFactory, SoftDeletes;

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function requestConfirmationFile(): HasMany{
        return $this->hasMany(RequestCreateEventConfirmationFile::class);
    }
}
