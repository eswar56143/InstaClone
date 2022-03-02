<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $guarded = [];

    public function profileImage(): string
    {
        $imagePath = ($this->image) ? '/storage/'.$this->image :'/images/default_profile.jpg';
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
