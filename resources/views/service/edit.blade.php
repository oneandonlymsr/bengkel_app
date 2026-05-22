<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jasa - Bengkelku</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
</head>
<body class="bg-dark text-white">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>"
</body>
</html>