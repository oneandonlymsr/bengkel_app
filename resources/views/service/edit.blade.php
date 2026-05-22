@extends('service.master')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow bg-dark text-white border-secondary">
                <div class="card-header bg-danger text-white py-3">
                    Edit Data Jasa
                </div>
                <div class="card-body p-4">
                    <form action="{{route('services.update', $service->id)}}" method='POST'>
                        @csrf
                        @method('PUT')
                            <div class="mb-3">
                            <label class="form-control bg-black text-white border-secondary">Nama Layanan</label>
                            <input type="text" name="nama_layanan" class="form-control bg-dark text-white border-secondary" value = "{{$service->nama_layanan}}" required>
                            </div>
                            <div class="mb-3">
                            <label class="form-control bg-black text-white border-secondary">Deskripsi</label>
                            <textarea name="deskripsi" rows="4" class="form-control bg-dark text-white border-secondary" required>{{$service->deskripsi}}</textarea>
                            </div>
                            <div class="d-flex justify-content-between mt-4">
                            <button type="submit" class="btn btn-warning fw-bold text-white">Simpan Perubahan</button>
                            <a href="{{route('services.index')}}" class="btn btn-outline-secondary ms-2">Batal</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection