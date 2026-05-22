@extends('service.master')
@section('content')

<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow bg-dark text-white border-secondary">
                    <div class="card-header bg-danger text-white py-3">
                        <h5 class="mb-0 fw-bold">Tambah Jasa Bengkel Baru</h5>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{route('services.store')}}" method='POST'>
                            @csrf
                              <div class="mb-3">
                                <label class="form-control bg-black text-white border-secondary">Nama Layanan</label>
                                <input type="text" name="nama_layanan" class="form-control" placeholder="Contoh: Ganti oli mesin" required>
                              </div>
                              <div class="mb-3">
                                <label class="form-control bg-black text-white border-secondary">Deskripsi</label>
                                <textarea name="deskripsi" rows="4" class="form-control" placeholder="Jelaskan detail layanannya di sini..." required></textarea>
                              </div>
                              <div class="d-flex justify-content-between mt-4">
                                <a href="{{route('services.index')}}" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-danger px-4">Simpan Jasa</button>
                              </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection
    
