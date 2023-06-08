@extends('admin.layouts.main')

@section('container')

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success')}}
</div>
@endif

  <a href="/admin/berita/create" class="btn btn-warning text-dark btn-sm my-3 fw-bold">Tambah Data</a>
  <div class="table-responsive">
    <table class="table table-sm">
      <thead class="text-uppercase">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Judul</th>
          <th scope="col">Kategori</th>
          <th scope="col">Dibuat</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($showPostFromController as $showingPost)

          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $showingPost->titleFromTablePost }}</td>
            <td>{{ $showingPost->category->nameFromTableCategory }}</td>
            <td>{{ $showingPost->created_at->diffForHumans() }}</td>
            <td>
              <a href="/admin/berita/{{ $showingPost->slugFromTablePost }}"><span class="badge bg-primary text-decoration-none">Preview Artikel</span></a>

              <a href="/admin/berita/{{ $showingPost->slugFromTablePost }}/edit"><span class="badge bg-warning text-decoration-none">Edit</span></a>

              <form action="/admin/berita/{{ $showingPost->slugFromTablePost }}" method="post" class="d-inline">
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
