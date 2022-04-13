<?php

namespace App\Http\Controllers;

use App\Models\Renk;
use Illuminate\Http\Request;

class AnasayfaController extends Controller
{
    public function index() {
        return view('anasayfa');
    }

}
