<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Process;

class ProcessMember extends Model
{
    use HasFactory, SoftDeletes;

    public function process(): BelongsTo {
        return $this->belongsTo(Process::class);
    }
}
