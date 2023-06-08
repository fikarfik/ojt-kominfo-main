@extends('layouts.main')

@section('container')
    <div class="container-fluid py-5 my-5 bg-light">
        <div class="container">
            <div class="row text-dark">
                <div class="col-lg-12 mt-5 mb-2">
                    <h1 class="text-center"> Profil PKK Kecamatan Blimbing</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 mt-3 text-start text-dark text-center">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, aut inventore. Laboriosam soluta
                        asperiores quasi odit voluptate omnis eos iure atque ipsa corporis, totam quos optio repellendus
                        doloremque maxime assumenda voluptatem fuga? Voluptatum soluta voluptate temporibus repellat
                        exercitationem assumenda provident perspiciatis, excepturi obcaecati non aut adipisci quaerat quas
                        delectus eum.</p>
                    <button class="btn float-center btn-sm btn-primary">Selengkapnya</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Informasi Terbaru --}}
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center my-5" id="info-terbaru">Informasi Terbaru</h1>
                    @if ($showPostFromController->count() > 0)

                        <div class="card mb-3">
                            <img src="{{ asset('storage/'.$showPostFromController[0]->imageFromTablePost) }}"
                                class="img-fluid card-img-top"
                                alt="{{ $showPostFromController[0]->category->nameFromTableCategory }}">
                            <div class="card-body text-center">

                                <h3 class="card-title"><a href="/{{ $showPostFromController[0]->slugFromTablePost }}"
                                        class="text-decoration-none text-dark">{{ $showPostFromController[0]->titleFromTablePost }}</a>
                                </h3>

                                <p>
                                    <small class="text-muted">
                                        {{ $showPostFromController[0]->created_at->diffForHumans() }}
                                    </small>
                                </p>

                                <p class="card-text">{{ $showPostFromController[0]->excerptFromTablePost }}</p>

                                <a href="/{{ $showPostFromController[0]->slugFromTablePost }}"
                                    class="text-decoration-none btn btn-primary">Baca Selengkapnya...</a>
                            </div>
                        </div>
                    @else
                        <p class="text-center fs-4">No Post Found.</p>
                    @endif

                   <h5 class="text-center"><a href="#info-lainya" class=" badge bg-danger text-decoration-none">Informasi Lainya...</a></h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Galery  -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Galeri</h1>
                    <p>Galeri Kegiatan</p>
                </div>
            </div>
            <!-- Carousel Galery -->
            <div id="carouselBagianGambar" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/img.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/img.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/img.jpeg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselBagianGambar"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselBagianGambar"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                <div class="p-4">
                    <button class="btn btn-sm btn-primary float-end">Selengkapnya</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5" style="background-color: whitesmoke;" id="visi-misi">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-lg-4 mb-md-3 mb-sm-2">
                    <h1>Visi & Misi</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-justify">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis sapiente magni asperiores et alias
                        maxime suscipit neque hic tempore, deserunt impedit corrupti. Mollitia esse tempora, ex libero
                        tenetur, animi amet exercitationem dicta expedita ratione omnis sint iste at repellat corrupti aut.
                        Labore sunt odio sed incidunt! Quae molestiae, rem ut corporis autem beatae quas suscipit alias
                        praesentium consequatur ipsum dolorum magni libero, eius quisquam ad iure dignissimos voluptatibus.
                        Nostrum velit fuga quia fugit deserunt odit veniam! Voluptatibus vero nulla molestias hic? Ab
                        inventore adipisci tempore necessitatibus nulla consequuntur minima dicta illum officiis rem unde
                        earum, facilis recusandae cumque. Tenetur hic animi dolor deserunt, quo placeat et pariatur sed,
                        debitis tempora ducimus laudantium reprehenderit vel perferendis similique saepe id possimus.
                        Doloribus eveniet aliquam quisquam quo corrupti id repellendus deleniti facere quis et fugit
                        consequuntur nobis expedita, molestiae ratione eligendi perferendis harum libero enim explicabo fuga
                        reiciendis hic culpa. Animi illum laborum, tempora quod nisi assumenda deserunt </p>
                    <div class="p-4">
                    </div>
                    <button class="btn btn-sm float-center btn-primary">Selengkapnya</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Berita -->
    <div class="container-fluid py-4" style="background-color: black;" id="info-lainya">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center text-light">
                    <h1 class="my-5">Cari Informasi</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row justify-content-center mb-3">
                        <div class="col-md-6">
                            <form id="search-form" action="/" method="GET">
                                @if (request('category'))
                                    <input type="hidden" name="category" value="{{ request('category') }}">
                                @endif

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="search-input" placeholder="Cari Berita..." name="search"
                                        value="{{ request('search') }}">
                                   <button class="btn btn-warning" type="submit" id="button-addon2">Cari</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @if ($showPostFromController->count() > 0)
                    @foreach ($showPostFromController->skip(1) as $showingPost)
                        <div class="col-md-4 mb-3">
                            <div class="card">

                                <div class="position-absolute bg-dark px-2 py-3 text-white">
                                    <a href="/?category={{ $showingPost->category->slugFromTableCategory }}"
                                        class="text-white text-decoration-none">{{ $showingPost->category->nameFromTableCategory }}</a>
                                </div>
                                <img src="{{ asset('storage/'.$showingPost->imageFromTablePost) }}"
                                    class="card-img-top" alt="">
                                <div class="card-body">

                                    <h5 class="card-title">
                                        <h5>{{ $showingPost->titleFromTablePost }}</h5></a>
                                    </h5>

                                    <p>
                                        <small>
                                           {{ $showingPost->created_at->diffForHumans() }}
                                        </small>
                                    </p>

                                    <p class="card-text">{{ $showingPost->excerptFromTablePost }}</p>

                                    <a href="/{{ $showingPost->slugFromTablePost }}" class="badge bg-primary text-decoration-none">Baca Selengkapnya...</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="mt-5 pt-5"> {{ $showPostFromController->links() }}</div>
                @else
                    <p class="text-center text-light fs-4 my-5 py-5">No Post Found.</p>
                @endif

            </div>
        </div>
    </div>
    </div>

    <!-- Akhir Berita -->
    <div class="container-fluid pt-5" style="background-color: white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6  col-md-12 text-dark mb-5">
                    <h3>Alamat</h3>
                    <p>Jl. Jalan Jalan Nomor 12 Tahun 2022</p>
                </div>
            </div>
        </div>
    </div>

    <div id="info-cari"></div>

    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const searchQuery = urlParams.get('search');
        if (searchQuery) {
            const infoLainya = document.getElementById('info-cari');
            infoLainya.scrollIntoView({ behavior: 'smooth' });
        }
    </script>

@endsection
