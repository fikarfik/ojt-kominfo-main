@extends('admin.seclayouts.main')

@section('container')

<div class="container">
    <div class="row my-5 justify-content-center">
        <div class="col-lg-8">

            <article class="my-5">

                <a class="badge bg-success text-decoration-none my-4" href="/admin/berita">Kembali</a>

                <a class="badge bg-warning text-decoration-none my-4" href="/admin/berita/{{ $showPostFromController->slugFromTablePost }}/edit">Edit</a>

                <form action="/admin/berita/{{ $showPostFromController->slugFromTablePost }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('kamu yakin')">Hapus</button>
                    </form>


                <h2> {{ $showPostFromController->titleFromTablePost}}</h2>
                <p>Kategori <span class="text-primary">{{ $showPostFromController->category->nameFromTableCategory }}</span></p>

                <div>
                    <img src="{{ asset('storage/' .$showPostFromController->imageFromTablePost)}}"
                    class="img-fluid mb-3" alt="">
                </div>

                <p class="fs-3">{!! $showPostFromController->bodyFromTablePost !!}</p>


            </article>


        </div>
    </div>
</div>
@endsection



