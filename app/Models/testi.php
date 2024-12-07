<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class testi extends Model
{
    protected $fillable = [
        'user_id',
        'testi',
    ];

    function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
}