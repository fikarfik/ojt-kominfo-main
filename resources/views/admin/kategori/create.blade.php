@extends('admin.seclayouts.main')

@section('container')
    <div class="container">
        <div class="justify-content-start flex-wrap flex-md-nowrap align-items-center pt-5 my-3">
            <div class="row">
                <div class="col-12">
                    <h1>Membuat Kategori</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <form action="/admin/kategori" method="post">
                    @method('post')
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">
                            <b>Nama Kategori</b></label>
                        <input type="text" class="form-control @error('nameFromTableCategory') is-invalid @enderror"
                            name="nameFromTableCategory" id="nameFromTableCategory"
                            value="{{ old('nameFromTableCategory') }}" required
                            autofocus>
                        @error('nameFromTableCategory')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="slug" class="form-label">
                            <b>Buat Link Kategori</b></label>
                        <input type="text" class="form-control @error('slugFromTableCategory') is-invalid @enderror"
                            name="slugFromTableCategory" id="slugFromTableCategory"
                            value="{{ old('slugFromTableCategory') }}" required
                            autofocus>
                        @error('slugFromTableCategory')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
            </div>
            <div class="col-12">
                <button type="submit" name ="submit" id="submit" class="btn mt-2 mb-5 float-center btn-primary">Simpan</button>
            </div>
            </form>
        </div>

    @endsection
