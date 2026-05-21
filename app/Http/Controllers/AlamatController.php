<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlamatController extends Controller
{
    public function index()
    {
        $alamat_asli = "Dukuh Kepadon, Desa Tanjungsari, Kecamatan Petanahan, Kabupaten Kebumen";
        return view('alamat', compact('alamat_asli'));
    }
}
