<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class UserImage extends Model
{
    use HasFactory, SoftDeletes;

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
