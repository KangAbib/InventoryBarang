<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KepalaRuangController extends Controller
{
    public function __construct(){
        $this->middleware("Kepala Ruang");
    }
}
