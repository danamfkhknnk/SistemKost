<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    use HasFactory;

    protected $fillable = [
        'nokamar',
        'tipe',
        'harga',
        'status',
        'gambarkamar'
    ];

    function penghuni(){
        return $this->hasMany(penghuni::class);
    }
}