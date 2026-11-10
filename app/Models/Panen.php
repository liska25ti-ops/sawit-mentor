<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Panen extends Model
{
    protected $table = 'panen';

    protected $fillable = [
        'kebun_id',
        'harga_tbs_id',
        'tanggal_panen',
        'berat_kg',
        'total_pendapatan',
    ];

    public function kebun()
    {
        return $this->belongsTo(Kebun::class);
    }

    public function hargaTbs()
    {
        return $this->belongsTo(HargaTbs::class);
    }
}