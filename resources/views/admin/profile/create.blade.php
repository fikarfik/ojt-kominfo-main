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
                <form action="/admin/berita" method="post">
                    @method('post')
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">
                            <b>Nama PKK</b></label>
                        <input type="text" class="form-control @error('namaFromTableProfile') is-invalid @enderror"
                            name="namaFromTableProfile" id="titleFromTablePost" value="{{ old('namaFromTableProfile') }}"
                            required autofocus placeholder="Isikan Nama PKK | Contoh : Kelurahan Daerah">
                        @error('titleFromTablePost')
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
                            value="{{ old('alamatFromTableProfile') }}" required
                            placeholder="Isikan Alamat PKK">
                        @error('titleFromTablePost')
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
                            value="{{ old('teleponFromTableProfile') }}" required 
                            placeholder="Isikan Nomor Telepon PKK">
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
                            <label for="title" class="form-label">
                                <b>About</b></label>
                            <input type="text" class="form-control @error('aboutFromTableProfile') is-invalid @enderror"
                                name="aboutFromTableProfile" id="aboutFromTableProfile"
                                value="{{ old('aboutFromTableProfile') }}" required 
                                placeholder="Isikan | Contoh : Kelurahan Daerah">
                            @error('aboutFromTableProfile')
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
                            <label for="titleVisimisFromTableProfile" class="form-label">
                                <b>Title Visimisi PKK</b></label>
                            <input type="text"
                                class="form-control @error('titleVisimisiFromTableProfile') is-invalid @enderror"
                                name="titleVisimisiFromTableProfile" id="titleVisimisiFromTableProfile"
                                value="{{ old('titleVisimisiFromTableProfile') }}" required 
                                placeholder="Isikan Title Visimisi PKK | Contoh : Kelurahan Daerah">
                            @error('titleVisimisiFromTableProfile')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="bodyVisimisiFromtableProfile" class="form-label">
                                <b>Body Visimisi PKK</b></label>
                            <input type="text"
                                class="form-control @error('bodyVisimisiFromTableProfile') is-invalid @enderror"
                                name="bodyVisimisiFromTableProfile" id="bodyVisimisiFromTableProfile"
                                value="{{ old('titleFromTablePost') }}" required
                                placeholder="Isikan Body Visimisi PKK | Contoh : Kelurahan Daerah">
                            @error('bodyVisimisiFromTableProfile')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="gambarFromtableProfile" class="form-label">
                                <b>Gambar PKK</b></label>
                            <input type="File" class="form-control @error('gambarFromTableProfile') is-invalid @enderror"
                                name="gamabarFromTableProfile" id="gambarFromTableProfile"
                                value="{{ old('gambarFromTableProfile') }}" required
                                placeholder="Isikan Gambar PKK | Contoh : Kelurahan Daerah">
                            @error('gambarFromTableProfile')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
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
        @endsection
