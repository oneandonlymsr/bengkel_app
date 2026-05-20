<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Selamat Datang - Bengkelku</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />

    </head>
    <body class="bg-dark">
    <nav class="navbar navbar-light navbar-expand-lg shadow bg-light mb-4 sticky-top">
        <div class="container lead lh-lg">
        <a class="navbar-brand" href="#">Bengkelku App</a>
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
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-5">
        <div class="p-5 mb-4 bg-white rounded-3 shadow-sm border text-center">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold text-primary">Selamat Datang di Bengkelku App!</h1>
                <p class="col-md-8 mx-auto fs-4 text-muted mt-3">Sistem informasi manajemen pengelolaan jasa dan layanan bengkel secara digital</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mt-4">
                    <a href="{{route('services.index')}}" class="btn btn-primary btn-lg px-4 gap-3">Lihat Daftar Jasa</a>
                    <a href="{{route('services.create')}}" class="btn btn-primary btn-lg px-4">Tambah Jasa Baru</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center p-4 ">
        <p class="text-center text-white">&copy; 2026 Bengkelku App</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>"
    </body>
</html>