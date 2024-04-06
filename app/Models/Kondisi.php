<?php

namespace App\Models;

use App\Models\Barang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kondisi extends Model
{
    use HasFactory;
    protected $fillable = ["id", "kondisiBarang"];

    public function barang()
    {
        return $this->hasMany(Barang::class);
    }
}
