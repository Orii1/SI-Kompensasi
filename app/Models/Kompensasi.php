<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kompensasi extends Model
{
    use HasFactory;

    protected $table = 'kompensasi';

    public function mhsrel()
    {
        return $this->hasMany(Mahasiswa::class, 'id_kompensasi', 'id');
    }
}
