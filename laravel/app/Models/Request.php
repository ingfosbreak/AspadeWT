<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Request extends Model
{
    use HasFactory, SoftDeletes;

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
