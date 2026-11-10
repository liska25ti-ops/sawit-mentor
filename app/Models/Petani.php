<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Petani extends Model
{
    protected $table = 'petani';

    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
    ];

    /**
     * Relasi: Satu Petani memiliki banyak Kebun
     */
    public function kebun()
    {
        return $this->hasMany(Kebun::class);
    }

    /**
     * Relasi: Satu Petani terhubung dengan satu akun User
     */
    public function user()
    {
        return $this->hasOne(User::class);
    }
}