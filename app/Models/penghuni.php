<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class penghuni extends Model
{
    //


    function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    function kamar(): BelongsTo
    {
        return $this->belongsTo(kamar::class);
    }
}