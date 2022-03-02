<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $guarded = [];

    public function profileImage(): string
    {
        $imagePath = ($this->image) ? $this->image :'/profile/PRAY2y7GBZQAM9Pd2y0fP0bAOJt3wJ4y80KebRPm.jpg';
        return $imagePath;
    }

    public function followers() {
        return $this->belongsToMany(User::class);
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
