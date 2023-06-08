@extends('admin.layouts.main')

@section('container')
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <a href="/admin/profile/create" class="btn btn-warning text-dark btn-sm my-3 fw-bold">Tambah Data</a>
    <div class="table-responsive">
        <table class="table table-sm">
            <thead class="text-uppercase">
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Nama PKK</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Email</th>
                    <th scope="col">No Telp</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Tentang</th>
                    <th scope="col">Nama Visimisi</th>
                    <th scope="col">Isi visimisi</th>
                    <th scope="col">isi profile</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($showProfileFromController as $showingProfile)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $showingProfile->namaFromTableProfile }}</td>
                        <td>{{ $showingProfile->alamatFromTableProfile }}</td>
                        <td>{{ $showingProfile->emailFromTableProfile }}</td>
                        <td>{{ $showingProfile->teleponFromTableProfile }}</td>
                        <td>{{ $showingProfile->gambarFromTableProfile }}</td>
                        <td>{{ $showingProfile->aboutFromTableProfile }}</td>
                        <td>{{ $showingProfile->titleFromTableProfile }}</td>
                        <td>{{ $showingProfile->BodyFromTableProfile }}</td>
                        <td>{{ $showingProfile->BodyVisiMisiFromTableProfile }}</td>
                        <td>
                            <a href="/admin/profile/{{ $showingProfile->id }}"><span
                                    class="badge bg-primary text-decoration-none">Detail Profile</span></a>

                            <a href="/admin/profile/{{ $showingProfile->id }}/edit"><span
                                    class="badge bg-warning text-decoration-none">Edit</span></a>

                            <form action="/admin/profile/{{ $showingProfile->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('kamu yakin')">Hapus</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
