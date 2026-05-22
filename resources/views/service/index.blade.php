@extends('service.master')
@section('content')

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

@endsection