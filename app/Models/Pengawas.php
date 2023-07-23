<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengawas extends Model
{
    use HasFactory;

    protected $fillable =['nama','jenis_kelamin','email'];

    public function kompenpengawas()
    {
        return $this->hasOne(Kompensasi::class, 'pengawas', 'id');
    }
}
