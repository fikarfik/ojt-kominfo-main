@extends('admin.seclayouts.main')

@section('container')
    <div class="container">
        <div class="row d-flex my-5 justify-content-center">
            <div class="col-8">
                <h1 class="text-center">Halaman Detail Profil PKK</h1>
                <a href="/admin/profile" class="my-3 badge bg-danger bg-sm text-decoration-none">Kembali</a>
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Nama PKK </th>
                            <td>{{ $showProfileFromController->namaFromTableProfile }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Alamat </th>
                            <td>{{ $showProfileFromController->alamatFromTableProfile }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Email </th>
                            <td>{{ $showProfileFromController->emailFromTableProfile }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Telepon </th>
                            <td>{{ $showProfileFromController->teleponFromTableProfile }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Isi Halaman Profil PKK </th>
                            <td>{{ $showProfileFromController->bodyFromTableProfile }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Gambar PKK </th>
                            <td>{{ $showProfileFromController->gambarFromTableProfile }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Tentang PKK </th>
                            <td>{{ $showProfileFromController->aboutFromTableProfile }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Nama Visi Misi PKK </th>
                            <td>{{ $showProfileFromController->titleVisiMisiFromTableProfile }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Isi Halaman Visi Misi PKK </th>
                            <td>{{ $showProfileFromController->bodyFromTableProfile }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
