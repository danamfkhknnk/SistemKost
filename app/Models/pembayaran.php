<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class pembayaran extends Model
{
    function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    function penghuni(): BelongsTo
    {
        return $this->belongsTo(penghuni::class);
    }

    function kamar(): BelongsTo
    {
        return $this->belongsTo(kamar::class);
    }
}