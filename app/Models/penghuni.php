<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class penghuni extends Model
{
    //


    function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}