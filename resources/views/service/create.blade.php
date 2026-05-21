<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jasa Baru</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />

    </head>
    <body class="bg-dark text-white">
    <nav class="navbar navbar-dark navbar-expand-lg navbar-expand-lg border-bottom border-3 border-danger shadow bg-black mb-4 sticky-top">
        <div class="container lead lh-lg">
        <a class="navbar-brand" href="#">Bengkelku</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('services.index')}}">Daftar Jasa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('services.create')}}">Tambah Jasa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('alamat.index')}}">ALamat</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

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


    <footer class="text-center p-4 ">
        <p class="text-center text-white">&copy; 2026 Bengkelku App.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>"
    </body>
</html>
