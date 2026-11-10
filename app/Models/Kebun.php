<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kebun extends Model
{
    protected $table = 'kebun';

    protected $fillable = [
        'petani_id',
        'nama_kebun',
        'lokasi',
        'luas_lahan',
    ];

    /**
     * Relasi: Kebun milik satu Petani
     */
    public function petani()
    {
        return $this->belongsTo(Petani::class);
    }

    /**
     * Relasi: Satu Kebun memiliki banyak data Panen
     */
    public function panen()
    {
        return $this->hasMany(Panen::class);
    }
}