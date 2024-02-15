<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_gudang',
        'nama_gudang',
        'status'
    ];

    public function barang()
    {
        return $this->hasMany(Barang::class);
    }
}
