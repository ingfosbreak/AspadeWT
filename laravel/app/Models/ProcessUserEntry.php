<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Process;
use App\Models\UserEntry;

class ProcessUserEntry extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'process_user_entry';

    public function process(): BelongsTo {
        return $this->belongsTo(Process::class);
    }

    public function userEntry(): BelongsTo {
        return $this->belongsTo(UserEntry::class);
    }
}
