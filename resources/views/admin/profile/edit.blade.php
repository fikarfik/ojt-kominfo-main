@extends('admin.layouts.main')

@section('container')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">

                <h4><i class="bi bi-pen-fill" style="color: green"></i> Ubah Data Profile
                </h4>

                <div class="card-header">
                    <button type="button" class="btn btn-sm btn-primary"
                        onclick="window.location='{{ url('data-profiles') }}'">
                        << Kembali</button>
                </div>
                <div class="card-body">
                    <form action="{{ url('update-profiles', $dt->id) }}" method="POST" enctype="multipart/form-data">
                        {{-- @method('put') --}}
                        {{ csrf_field() }}
                        <div class=" row mb-3">
                            <label for="txtnama_pkk" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="txtnama_pkk" name="nama_pkk"
                                    placeholder="silahkan isi" value="{{ $dt->nama_pkk }}">

                            </div>
                        </div>
                        <div class=" row mb-3">
                            <label for="txtnama_pkk" class="col-sm-2 col-form-label">user</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="txtuser" name="user_id"
                                    placeholder="silahkan isi" value="{{ $dt->user_id }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="txtemail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="txtemail" name="email"
                                    placeholder="silahkan isi" value=" {{ $dt->email }}">

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="txtphone" class="col-sm-2 col-form-label">No.Telp</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="txtphone" name="telepon"
                                    placeholder="silahkan isi" value=" {{ $dt->telepon }}">

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="txtabout" class="col-sm-2 col-form-label">About</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="txtabout" name="about"
                                    placeholder="silahkan isi" value=" {{ $dt->about }}">

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="txtkutipan" class="col-sm-2 col-form-label">Kutipan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" cols="66" id="txtkutipan"
                                    name="excerpt_profile" placeholder="silahkan isi" value=" {{ $dt->excerpt_profile }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="texisi" class="col-sm-2 col-form-label">Isi</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" rows="7" cols="66"
                                    style="resize: none" id="txtisi" name="body_profile"
                                    value=" {{ $dt->body_profile }}">
                            </div>
                        </div>
                        <div class=" row mb-3">
                            <label for="txtalamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-7">
                                <input type="text" type="text" class="form-control" cols="66" id="txtalamat"
                                    name="alamat" placeholder="silahkan isi" value=" {{ $dt->alamat }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="txtabout" class="col-sm-2 col-form-label">Judul_visimisi</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="txtjudul" name="judul_visimisi"
                                    placeholder="silahkan isi" value=" {{ $dt->judul_visimisi }}">

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="txtkutipan" class="col-sm-2 col-form-label">Excerpt_visimisi</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" cols="66" id="txtexcerpt"
                                    name="excerpt_visimisi" placeholder="silahkan isi"
                                    value=" {{ $dt->excerpt_visimisi }}">

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="txtkutipan" class="col-sm-2 col-form-label">body_visimisi</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" cols="66" id="txtisi_visimisi"
                                    name="body_visimisi" placeholder="silahkan isi" value=" {{ $dt->body_visimisi }}">

                            </div>
                        </div>
                        <div class=" row mb-3">
                            <label for="txtgambar" class="col-sm-2 col-form-label">Gambar</label>
                            <div class="col-sm-7">
                                <input type="file" class="form-control" id="txtgamabr" name="gambar_hero"
                                    placeholder="silahkan isi">
                            </div>

                            {{-- <div class="col-sm-7">
                                <img src="{{ asset('img/' . $dt->gambar_hero) }}" height="100%" width="90%"
                                    alt="" srcset="" class="from-control">
                            </div> --}}
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-7">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
