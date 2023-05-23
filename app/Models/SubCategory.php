<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function item(): BelongsToMany
    {
        return $this->belongsToMany(Item::class, 'item_sub_categories');
    }
}
