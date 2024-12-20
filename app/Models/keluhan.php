<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Keluhan extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'judul',
        'keluhan',
        'gambarbukti',
        'status',
        'user_id'
    ];

    function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}