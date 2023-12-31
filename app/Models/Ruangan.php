<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory;

    protected $table = 'ruangan';
    protected $fillable =['nama'];

    public function kompenruang()
    {
        return $this->hasOne(Kompensasi::class, 'ruangan', 'id');
    }
}
