@extends('admin.layouts.main')

@section('container')

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success')}}
</div>
@endif

  <a href="/admin/kategori/create" class="btn btn-warning text-dark btn-sm my-3 fw-bold">Tambah Data</a>
  <div class="table-responsive">
    <table class="table table-sm">
      <thead class="text-uppercase">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Kategori</th>
          <th scope="col">Dibuat</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($showCategoryFromController as $showingCategory)

          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $showingCategory->nameFromTableCategory }}</td>
            <td>{{ $showingCategory->created_at->diffForHumans() }}</td>
            <td>

              <a href="/admin/kategori/{{ $showingCategory->slugFromTableCategory  }}/edit"><span class="badge bg-warning text-decoration-none">Edit</span></a>

              <form action="/admin/kategori/{{ $showingCategory->slugFromTableCategory }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('kamu yakin')">Hapus</button>
              </form>

            </td>
          </tr>


        @endforeach
      </tbody>
    </table>
  </div>



@endsection
