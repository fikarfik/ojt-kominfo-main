@extends('admin.seclayouts.main')

@section('container')
    <div class="container">
        <div class="justify-content-start flex-wrap flex-md-nowrap align-items-center pt-5 my-3">
            <div class="row">
                <div class="col-12">
                    <h1>Mengedit Postingan</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <form action="/admin/berita/{{ $showPostFromController->slugFromTablePost }}" method="post"
                    enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">
                            <b> Judul Berita</b></label>

                        <input type="text" class="form-control @error('titleFromTablePost') is-invalid @enderror"
                            name="titleFromTablePost" id="titleFromTablePost"
                            value="{{ old('titleFromTablePost', $showPostFromController->titleFromTablePost) }}" required
                            autofocus>
                        @error('titleFromTablePost')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="slug" class="form-label">
                            <b>Link Berita</b></label>
                        <input type="text" class="form-control @error('slugFromTablePost') is-invalid @enderror"
                            name="slugFromTablePost" id="slugFromTablePost"
                            value="{{ old('slugFromTablePost', $showPostFromController->slugFromTablePost) }}" required>
                        @error('slugFromTablePost')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="imageFromTablePost" class="form-label">
                            <b>Gambar</b></label>
                        <input type="hidden" name="oldImage" value="{{ $showPostFromController->imageFromTablePost }}">
                        @if ($showPostFromController->imageFromTablePost)
                            <img src="{{ asset('storage/' . $showPostFromController->imageFromTablePost) }}"
                                class="img-preview img-fluid mb-3 d-block">
                        @else
                            <img class="img-preview img-fluid mb-3">
                        @endif
                        <input type="file" class="form-control @error('imageFromTablePost') is-invalid @enderror"
                            name="imageFromTablePost" id="imageFromTablePost" onchange="previewImage()">
                        @error('imageFromTablePost')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="category_id" class="form-label"><b>Pilih Kategori</b></label>
                        <select
                            class="form-select @error('category_id')
                            is-invalid
                        @enderror"
                            id="category_id" name="category_id" id="category_id" name="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->nameFromTableCategory }}</option>
                            @endforeach

                        </select>
                    </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="body"><b>Isi Berita</b></label>
                    <textarea name="bodyFromTablePost" id="bodyFromTablePost">{{ $showPostFromController->bodyFromTablePost }}</textarea>
                </div>
                <button type="submit" class="btn mt-2 mb-5 float-center btn-primary">Update</button>
            </div>
            </form>
        </div>

        <script>
            ClassicEditor
                .create(document.querySelector('textarea[name="bodyFromTablePost"]'), {
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
                const image = document.querySelector('#imageFromTablePost');
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
