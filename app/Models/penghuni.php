<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class penghuni extends Model
{
    protected $fillable = [
        'user_id',
        'nik',
        'alamat',
        'kamar_id',
        'tgglmasuk',
        'tgglkeluar',
        'foto',

    ];

    protected static function boot()
    {
        parent::boot();

        static::updating(function ($penghuni) {
            if ($penghuni->isDirty('tgglkeluar') && !is_null($penghuni->tgglkeluar)) {
                $penghuni->kamar_id = null;
            }
        });
    }


    function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    function kamar(): BelongsTo
    {
        return $this->belongsTo(kamar::class);
    }

    function pembayaran(){
        return $this->hasMany(pembayaran::class);
    }
}