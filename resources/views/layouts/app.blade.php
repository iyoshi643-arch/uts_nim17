<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Wisata Alam Nusantara')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@600;700;800&family=Source+Sans+3:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">
    <style>
        :root {
            --pine: #16352b;
            --moss: #4f7a46;
            --mist: #eef3ef;
            --sunrise: #e0a526;
            --ink: #1b2420;
            --bs-body-font-family: 'Source Sans 3', system-ui, -apple-system, 'Segoe UI', sans-serif;
            --bs-body-color: var(--ink);
            --bs-body-bg: var(--mist);
        }
        h1, h2, h3, h4, h5, .navbar-brand { font-family: 'Bricolage Grotesque', 'Segoe UI', sans-serif; letter-spacing: -.01em; }
        .navbar { background: var(--pine); }
        .navbar .nav-link { color: #cfe0d4; }
        .navbar .nav-link:hover, .navbar .nav-link.active { color: #fff; }
        .navbar-brand { color: #fff; }
        .navbar-brand:hover { color: var(--sunrise); }
        .btn-sunrise { background: var(--sunrise); color: #2b1d00; border: 0; font-weight: 600; }
        .btn-sunrise:hover { background: #f0b73a; color: #2b1d00; }
        .btn-pine { background: var(--pine); color: #fff; border: 0; }
        .btn-pine:hover { background: #0f261e; color: #fff; }
        .hero {
            min-height: 78vh; display: flex; align-items: flex-end; color: #fff;
            background-size: cover; background-position: center;
        }
        .hero .overlay { width: 100%; padding: 5rem 0 3.5rem; background: linear-gradient(to top, rgba(10,28,21,.92), rgba(10,28,21,.1)); }
        .hero h1 { font-weight: 800; font-size: clamp(2.4rem, 6vw, 4.5rem); line-height: 1.02; }
        .dest-card { border: 0; overflow: hidden; box-shadow: 0 1px 2px rgba(22,53,43,.12); }
        .dest-card img { aspect-ratio: 4 / 3; object-fit: cover; }
        .price { color: var(--moss); font-weight: 600; }
        .region-tag { color: var(--moss); font-weight: 600; font-size: .9rem; }
        .detail-img { width: 100%; max-height: 520px; object-fit: cover; }
        footer { background: var(--pine); color: #a9c2b1; }
        a:focus-visible, button:focus-visible, select:focus-visible { outline: 3px solid var(--sunrise); outline-offset: 2px; }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

<nav class="navbar navbar-expand-md navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">Wisata Alam Nusantara</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Buka menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('destinations.*') ? 'active' : '' }}" href="{{ route('destinations.index') }}">Daftar Wisata</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="flex-grow-1">
    @yield('content')
</main>

<footer class="py-4 mt-5">
    <div class="container d-flex flex-column flex-md-row justify-content-between small">
        <span>&copy; {{ date('Y') }} Wisata Alam Nusantara. UTS Rekayasa Web, Universitas Pamulang.</span>
        <span>Data destinasi adalah data contoh dari seeder.</span>
    </div>
</footer>

<script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
