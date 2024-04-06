<?php

namespace App\Models;

use App\Models\Ruang;
use App\Models\Barang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inventaris extends Model
{
    use HasFactory;
    protected $fillable = ["id", "barang_id", "ruang_id", "tglKeluar", "tglMasuk"];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
    public function ruang()
    {
        return $this->belongsTo(Ruang::class);
    }
}
