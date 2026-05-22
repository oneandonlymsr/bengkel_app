@extends('service.master')
@section('content')

<div class="card-body p-4 text-center">
  <h3 class="text-danger fw-bold mb-4">Bengkel Motor Pak Kholid</h3>

  <div class="p-3 bg-black rounded border border-secondary mb-4">
    <p class="fs-5 mb-0 text-white">
      📍{{$alamat_asli}}
    </p>
  </div>
  <div class="mb-4">
    <a href="https://maps.app.goo.gl/6SWFidNnBxh8xb7X9?g_st=ac" target="_blank" class="btn btn-danger btn-lg fw-bold px-5 shadow rounded-pill text-uppercase animate pulse infinite ">
      🗺 Buka di Google Maps
    </a>
  </div>
  <div class="mt-4 pt-3 border-top border-secondary">
    <a href="{{route('services.index')}}" class="btn btn-outline-secondary fw-bold px-4">
      ← Kembali ke Daftar Jasa
    </a>
  </div>
</div>

@endsection  