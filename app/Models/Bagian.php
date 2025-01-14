<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bagian extends Model
{
    use HasFactory;
    protected $fillable = ["id", "bagian"];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
