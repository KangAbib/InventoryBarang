<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetugasBMNController extends Controller
{
    public function __construct(){
        $this->middleware("Petugas BMN");
    }
}
