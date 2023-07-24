<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submit extends Model
{
    use HasFactory;

    protected $table = 'submit';
    protected $fillable = ['id_mahasiswa', 'id_kompensasi', 'foto', 'status_kalab', 'status_pengawas', 'status_kaprodi'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa', 'id');
    }

    public function kompensasi()
    {
        return $this->belongsTo(Kompensasi::class, 'id_kompensasi', 'id');
    }
}
