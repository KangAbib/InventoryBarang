<?php

namespace App\Models;

use App\Models\Barang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jenis extends Model
{
    use HasFactory;
    protected $fillable = ["id", "namaJenis"];

    public function barang()
    {
        return $this->hasMany(Barang::class);
    }
}
