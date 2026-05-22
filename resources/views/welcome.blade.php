@extends('service.master')
@section('content')
<div class="container mt-5">
    <div class="p-5 mb-4 bg-white rounded-3 shadow-sm border text-center">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold text-danger">Selamat Datang di Bengkelku!</h1>
            <p class="col-md-8 mx-auto fs-4 text-muted mt-3">Sistem informasi manajemen pengelolaan jasa dan layanan bengkel secara digital</p>
            <p class="fw-semiblod text-secondary">Web ini dibuat khusus untuk mendukung dan membantu operasional usaha bengkel ayah saya.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mt-4">
                <a href="{{route('services.index')}}" class="btn btn-danger fw-bold btn-lg px-4 gap-3">Lihat Daftar Jasa</a>
                <a href="{{route('services.create')}}" class="btn btn-danger fw-bold btn-lg px-4">Tambah Jasa Baru</a>
            </div>
        </div>
    </div>
</div>

@endsection