<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function tampil()
    {
        $makanan = Makanan::all();

        //cek database makanan

        return view('Makanan', ["makanans" => $makanan]);
    }
}
