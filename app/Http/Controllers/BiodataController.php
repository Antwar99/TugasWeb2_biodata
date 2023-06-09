<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BiodataController extends Controller
{

    public function biodata()
    {
        return View('biodata', [
            'nama' => 'Syaiful Anwar',
            'nim'  => '21103041068',
            'umur' => '21',
            'alamat' => 'Jepara',
            'hobi' => 'Music And Otomotif'
        ]);
    }
}
