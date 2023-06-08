@extends('admin.seclayouts.main')

@section('container')
    <div class="container">


        <div class="justify-content-start flex-wrap flex-md-nowrap align-items-center pt-5 my-3">
            <div class="row">
                <div class="col-12">
                    <h1>Mengisi Halaman Profile</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <form action="/admin/profile" method="post" enctype="multipart/form-data">
                    @method('post')
                    @csrf
                    <div class="mb-3">
                        <label for="namaFromTableProfile" class="form-label">
                            <b>Nama PKK</b></label>
                        <input type="text" class="form-control @error('namaFromTableProfile') is-invalid @enderror"
                            name="namaFromTableProfile" id="titleFromTablePost" value="{{ old('namaFromTableProfile') }}"
                            required autofocus placeholder="Isikan Nama PKK | Contoh : Kelurahan Daerah">
                        @error('namaFromTableProfile')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="slug" class="form-label">
                            <b>Buat Link Profile</b></label>
                        <input type="text" class="form-control @error('slugFromTableProfile') is-invalid @enderror"
                            name="slugFromTableProfile" id="slugFromTableProfile" value="{{ old('slugFromTableProfile') }}"
                            required autofocus>
                        @error('slugFromTableProfile')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">
                            <b>Alamat PKK</b></label>
                        <input type="text" class="form-control @error('alamatFromTableProfile') is-invalid @enderror"
                            name="alamatFromTableProfile" id="alamatFromTableProfile"
                            value="{{ old('alamatFromTableProfile') }}" required placeholder="Isikan Alamat PKK">
                        @error('alamatFromTablePost')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">
                            <b>Email PKK</b></label>
                        <input type="text" class="form-control @error('emailFromTableProfile') is-invalid @enderror"
                            name="emailFromTableProfile" id="emailFromTableProfile"
                            value="{{ old('emailFromTableProfile') }}" required
                            placeholder="Isikan Email PKK | Contoh : Kelurahan Daerah">
                        @error('emailFromTableProfile')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="telepon" class="form-label">
                            <b>Telepon PKK</b></label>
                        <input type="text" class="form-control @error('teleponFromTableProfile') is-invalid @enderror"
                            name="teleponFromTableProfile" id="teleponFromTableProfile"
                            value="{{ old('teleponFromTableProfile') }}" required placeholder="Isikan Nomor Telepon PKK">
                        @error('teleponFromTableProfile')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="bodyFromTableProfile"><b>Isi Tulisan Profile PKK</b></label>
                        <textarea name="bodyFromTableProfile" id="bodyFromTableProfile"></textarea>
                    </div>


                    <div class="mb-3">
                        <label for="aboutFromTableProfile" class="form-label">
                            <b>Tentang</b></label>
                        <input type="text" class="form-control @error('aboutFromTableProfile') is-invalid @enderror"
                            name="aboutFromTableProfile" id="aboutFromTableProfile"
                            value="{{ old('aboutFromTableProfile') }}" required placeholder="Isikan">
                        @error('aboutFromTableProfile')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="my-5">
                        <h1>Membuat Visi Misi</h1>
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">
                            <b>Nama Visimisi PKK</b></label>
                        <input type="text"
                            class="form-control @error('titleVisiVisiFromTableProfile') is-invalid @enderror"
                            name="titleVisiMisiFromTableProfile" id="titleVisiVisiFromTableProfile"
                            value="{{ old('titleVisiVisiFromTableProfile') }}" required
                            placeholder="Isikan Nama Visimisi PKK | Contoh : Kelurahan Daerah">
                        @error('titleVisiVisiFromTableProfile')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="gambarFromTableProfile" class="form-label">
                            <b>Gambar PKK</b></label>
                        <input type="file" class="form-control @error('gambarFromTableProfile') is-invalid @enderror"
                            name="gambarFromTableProfile" id="gambarFromTableProfile"
                            value="{{ old('gambarFromTableProfile') }}" required placeholder="Isikan Gambar PKK"
                            onchange="previewImage()">
                        @error('gambarFromTableProfile')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <img class="img-preview" src="#" alt="Pratinjau Gambar" style="display: none;">


                    <div class="col-12">
                        <div class="form-group">
                            <label for="bodyVisiMisiFromTableProfile"><b>Isi Tulisan Visi Misi</b></label>
                            <textarea name="bodyVisiMisiFromTableProfile" id="bodyVisiMisiFromTableProfile"></textarea>
                        </div>
                        <button type="submit" name="submit" id="submit"
                            class="btn mt-2 mb-5 float-center btn-primary">Buat</button>
                    </div>
                </form>
            </div>
        </div>

        <script>
            ClassicEditor
                .create(document.querySelector('textarea[name="bodyVisiMisiFromTableProfile"]'), {
                    ckfinder: {
                        uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images&responseType=json',
                    },
                })
                .catch(error => {
                    console.error(error);
                });
        </script>

        <script>
            ClassicEditor
                .create(document.querySelector('textarea[name="bodyFromTableProfile"]'), {
                    ckfinder: {
                        uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images&responseType=json',
                    },
                })
                .catch(error => {
                    console.error(error);
                });
        </script>

        <script>
            function previewImage() {
                const image = document.querySelector('#gambarFromTableProfile');
                const imgPreview = document.querySelector('.img-preview');


                imgPreview.style.display = 'block';

                const oFReader = new FileReader();
                oFReader.readAsDataURL(image.files[0])

                oFReader.onload = function(oFRevent) {
                    imgPreview.src = oFRevent.target.result;
                }
            }
        </script>
    @endsection
