<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class pembayaran extends Model
{

    protected $fillable = [
        'user_id',
        'kamar_id',
        'penghuni_id',
        'status',
        'tipe',
        'snap_token',
        'jatuhtempo',
    ];

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