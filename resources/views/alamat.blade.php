<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkelku</title>
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
              <a class="nav-link" href="{{route('alamat.index')}}">Alamat</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

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

    <footer class="text-center p-4 ">
        <p class="text-center text-white">&copy; 2026 Bengkelku App.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>"
    </body>
</html>
