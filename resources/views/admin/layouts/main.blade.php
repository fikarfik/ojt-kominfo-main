<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Halaman Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


</head>

<body>
    @include('partials.nav')
    <div class="mt-5">
        <div class="md:grid md:grid-cols-4 md:gap-6">
            <div class="md:col-span-1 align-items-center d-flex">
                
            </div>
            <div class="mt-5 md:mt-0 md:col-span-3">
                <div class="mb-10">
                    <ul class="flex items-center">
                      <li>
                        <a href="/admin/dashboard"
                            class="py-4 px-10 border-b-2 {{ Request::is('admin/dashboard') ? 'text-indigo-600 font-bold border-b-indigo-600' : 'border-b-gray-200 text-gray-600 hover:border-b-indigo-600 hover:text-indigo-600 font-medium' }}">Dashboard</a>
                    </li>
                        <li>
                            <a href="/admin/profile"
                                class="py-4 px-10 border-b-2 {{ Request::is('admin/profile') ? 'text-indigo-600 font-bold border-b-indigo-600' : 'border-b-gray-200 text-gray-600 hover:border-b-indigo-600 hover:text-indigo-600 font-medium' }}">Profile</a>
                        </li>
                        <li>
                            <a href="/admin/berita"
                                class="py-4 px-10 border-b-2 {{ Request::is('admin/berita') ? 'text-indigo-600 font-bold border-b-indigo-600' : 'border-b-gray-200 text-gray-600 hover:border-b-indigo-600 hover:text-indigo-600 font-medium' }}">Artikel</a>
                        </li>
                        <li>
                            <a href="/admin/kategori"
                            class="py-4 px-10 border-b-2 {{ Request::is('admin/kategori') ? 'text-indigo-600 font-bold border-b-indigo-600' : 'border-b-gray-200 text-gray-600 hover:border-b-indigo-600 hover:text-indigo-600 font-medium' }}">Kategori Artikel</a>
                        </li>
                        <li>
                          <a href="/admin/galeri"
                          class="py-4 px-10 border-b-2 {{ Request::is('admin/galeri') ? 'text-indigo-600 font-bold border-b-indigo-600' : 'border-b-gray-200 text-gray-600 hover:border-b-indigo-600 hover:text-indigo-600 font-medium' }}">Galeri</a>
                      </li>
                    </ul>
                </div>
                <div class="max-w-7xl mx-auto px-4 sm:px-6 py-5 my-5">
                    @yield('container')
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="js/dashboard.js"></script>
</body>

</html>
