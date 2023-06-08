@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <article class="my-5">

                <h2 class="fs-2"> {{ $showPostFromController->titleFromTablePost}}</h2>

                <div class="row">
                    <div class="col-6 text-decoration-underline">
                        <p><i class="bi bi-archive"></i>Kategori <span class="text-primary">{{ $showPostFromController->category->nameFromTableCategory }}</span></p>
                    </div>
                    <div class="col-3 offset-3 text-end text-decoration-underline">
                        <p>{{ $showPostFromController->created_at->diffForHumans() }}</p>
                    </div>
                </div>

                <img src="{{ asset('storage/'.$showPostFromController->imageFromTablePost) }}"
                class="img-fluid mb-3" alt="">

                <p>{!! $showPostFromController->bodyFromTablePost !!}</p>


            </article>

            <a class="my-5" href="/">Back To Post</a>

        </div>
    </div>
</div>
@endsection
