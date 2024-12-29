<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class laporan extends Model
{
    protected $fillable = [
        'kamar_id',
        'item',
        'harga',
        'tipe',
    ];

    function kamar(): BelongsTo
    {
        return $this->belongsTo(kamar::class);
    }
}