<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\LandingController;

class ArtikelController extends Controller
{
    //
    public function index() {
        return view('artikel');
    }
}
