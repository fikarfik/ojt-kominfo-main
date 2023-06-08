@extends('layouts.main')

@section('container')
    <h1 class="my-4">Post Categories</h1>
    <div class="container">
        <div class="row">
        @foreach ($categoriesFromController as $showingPost)
        <div class="col-md-4">
            <div class="card bg-dark text-white">

                <a href="/posts?category={{ $showingPost->slugFromTableCategory }}"><img src="https://source.unsplash.com/1200x400?{{ $showingPost->nameFromTableCategory }}"
                    class="card-img-top" alt="" class="img-fluid"></a>

                <div class="card-body">
                    <h5 class="card-title text-center">{{ $showingPost->nameFromTableCategory }}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
