<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBengkelController extends Controller
{
    public function __construct(){
        $this->middleware("Admin Bengkel");
    }
}
