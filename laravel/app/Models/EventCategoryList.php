<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Event;
use App\Models\Category;


class EventCategoryList extends Model
{
    use HasFactory, SoftDeletes;


    public function event(): BelongsTo {
        return $this->belongsTo(Event::class);
    }

    public function catagory(): BelongsTo {
        return $this->belongsTo(Category::class);
    }
}
