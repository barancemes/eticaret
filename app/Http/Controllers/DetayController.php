<?php

namespace App\Http\Controllers;

use App\Models\Eticaret;
use Illuminate\Http\Request;

class DetayController extends Controller
{
    public function index($id)
    {
        $urun = Eticaret::where('id', $id)->first();
        return view('detay', compact('urun'));

    }

}
