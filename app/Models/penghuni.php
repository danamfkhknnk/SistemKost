<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class penghuni extends Model
{
    protected $fillable = [
        'user_id',
        'nik',
        'telepon',
        'alamat',
        'kamar_id',
        'tgglmasuk',
        'tgglkeluar',
        'gambarktp',

    ];


    function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    function kamar(): BelongsTo
    {
        return $this->belongsTo(kamar::class);
    }
}