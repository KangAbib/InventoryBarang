<?php

namespace App\Models;

use App\Models\User;
use App\Models\Inventaris;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ruang extends Model
{
    use HasFactory;
    protected $fillable = ["id", "namaRuang", "user_id"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function inventaris()
    {
        return $this->hasMany(Inventaris::class);
    }
}
