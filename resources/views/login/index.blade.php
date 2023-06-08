@extends('admin.seclayouts.main')

@section('container')
    <div class="row justify-content-center align-items-center bg-dark vh-100" style="overflow-x: hidden">
        <div class="col-md-6">
            @if (session()->has('success'))
            <div class="alert alert-success allert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
                
            @endif

            @if (session()->has('loginError'))
            <div class="alert alert-danger allert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <div class="text-center"></div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
                
            @endif

        <main class="form-signin w-100 m-auto">
            <form action="/admin/login" method="POST">
                @csrf
                <h1 class="h3 mb-3 fw-bold fs-4 text-center text-light">Halaman Login</h1>
                <div class="form-floating">
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}">
                  <label for="email" autofocus required>Email address</label>
                </div>

                @error('email') 
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                    
                <div class="form-floating mt-3">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                  <label for="password" required>Password</label>
                </div>
                <button class="w-100 btn btn-sm btn-primary mt-3" type="submit">Login</button>
              </form>
            </main>
        </div>
    </div>
@endsection


