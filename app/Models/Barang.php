<?php

namespace App\Models;

use App\Models\Jenis;
use App\Models\Kondisi;
use App\Models\Inventaris;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = ["id", "namaBarang", "tglMasuk", "tglKeluar", "jenis_id", "kondisi_id"];
    
    public function kondisi()
    {
        return $this->belongsTo(Kondisi::class);
    }
    public function jenis()
    {
        return $this->belongsTo(Jenis::class);
    }
    public function inventaris()
    {
        return $this->hasMany(Inventaris::class);
    }
}
