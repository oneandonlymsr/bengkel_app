<?php

namespace App\Http\Controllers;

use App\Models\Service; //Menghubungkan ke model
use Illuminate\Http\Request;

class ServiceController extends Controller
{
  public function index()   
  { 
     $services = Service::all();
     return view('service.index', compact('services'));
  }
  public function create()
  {
     return view('service.create');
  }
  public function store(Request $request)
  {
     $request->validate([
         'nama_layanan' => 'required',
         'deskripsi' => 'required',
    ]);

     Service::create($request->all());

     return redirect()->route('services.index')->with('success', 'Jasa baru berhasil ditambahkan!');
  }
}
