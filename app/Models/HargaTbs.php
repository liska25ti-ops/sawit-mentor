<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HargaTbs extends Model
{
    protected $table = 'harga_tbs';

    protected $fillable = [
        'periode_mulai',
        'periode_selesai',
        'harga_per_kg',
    ];

    /**
     * Relasi: Satu acuan Harga TBS dapat digunakan oleh banyak catatan Panen
     */
    public function panen()
    {
        return $this->hasMany(Panen::class);
    }
}