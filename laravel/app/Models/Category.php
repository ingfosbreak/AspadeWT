<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\EventCategoryList;
use App\Models\Event;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    public function event_category_list(): HasMany {
        return $this->hasMany(EventCategoryList::class);
    }
    public function events(): BelongsToMany {
        return $this->belongsToMany(Event::class);
    }
}
