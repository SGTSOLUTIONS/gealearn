<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'level',
        'is_free',
        'price',
        'thumbnail',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'is_free' => 'boolean',
            'status' => 'boolean',
            'price' => 'decimal:2',
        ];
    }

    public function modules(): HasMany
    {
        return $this->hasMany(CourseModule::class)
                    ->orderBy('sort_order');
    }
}
