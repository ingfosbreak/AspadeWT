<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Process;
use App\Models\User;

class ProcessUser extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'process_users';

    public function process(): BelongsTo {
        return $this->belongsTo(Process::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
