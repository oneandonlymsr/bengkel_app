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

    <div class="container mt-5">
        <h1 class="mb-4">Jasa Bengkel</h1>
        <a href="{{route('services.create')}}" class="btn btn-danger mb-3 fw-bold text-white shadow">+Tambah Jasa</a>

        <table class="table table-dark table-hover table-bodered border-secondary mt-3">
            <thead class="table-danger text-dark">
                <tr>
                    <th width="5%">No</th>
                    <th width="30%">Nama Layanan</th>
                    <th>Deskripsi</th>
                    <th width="15%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($services as $service)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td><strong>{{$service->nama_layanan}}</strong></td>
                    <td>{{$service->deskripsi}}</td>
                    <td>
                      <div class="d-flex gap-2">
                        <a href="{{route('services.edit', $service->id)}}" class="btn btn-warning btn-sm text-dark fw-bold">Edit</a>
                        <form action="{{route('services.destroy', $service->id)}}" method="POST" onsubmit="return confirm('Yakin ingin menghapus jasa ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form> 
                      </div>     
                    </td>
                </tr>   
                @endforeach             
            </tbody>
        </table>
    </div>

    <footer class="text-center p-4 ">
        <p class="text-center text-white">&copy; 2026 Bengkelku App.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>"
    </body>
</html>
