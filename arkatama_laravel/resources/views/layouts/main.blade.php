<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko seni</title>
<link rel="stylesheet" href="{{ asset('vendor/bootstarp/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
{{-- Nav bar --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Toko Seni</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link {{ request()->url() == url('/') ? 'active' : '' }}" aria-current="page"
                    href="{{ url('/') }}">Home</a>
            </li>
            @auth()
            <li class="nav-item">
                <a class="nav-link {{ request()->url() == url('/produk') ? 'active' : '' }}"
                    href="{{ url('/produk') }}">Produk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->url() == url('/customer') ? 'active' : '' }}"
                    href="{{ url('/customer') }}">Pelanggan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->url() == url('/modal/customer') ? 'active' : '' }}"
                    href="{{ url('/modal/customer') }}">Pelanggan (Modal)</a>
            </li>
            @endguest
        </ul>
    </div>
    <div class="d-flex text-light">
        @auth
        <form action="{{ url('logout') }}" method="post">
            @csrf
            <button class="btn btn-link btn-sm text-light text-decoration-none" type="submit">Logout</button>
        </form>
        @else
        <a class="nav-link" href="{{ url('/login') }}">Login</a>
        @endauth
    </div>
</div>
</nav>

<div class="container mt-3">
@section('content')
    -- Data Tidak ada di Child Layout --
@show
</div>
<script src="{{asset('vendor\bootstarp\bootstrap.bundle.min.js') }}"></script>
</body>
</html>
