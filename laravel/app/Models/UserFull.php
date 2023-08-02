<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class UserFull extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'email',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'email' => 'hashed',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
