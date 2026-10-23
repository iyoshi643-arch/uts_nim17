@extends('layouts.app')

@section('title', 'Beranda - Wisata Alam Nusantara')

@section('content')
<section class="hero" style="background-image: url('{{ asset('assets/images/bromo.jpg') }}');">
    <div class="overlay">
        <div class="container">
            <h1 class="mb-3">Jelajahi alam Indonesia, dari kawah hingga karang.</h1>
            <p class="lead col-lg-6 mb-4">Temukan gunung, danau, pantai, dan air terjun pilihan beserta lokasi dan harga tiket masuknya.</p>
            <a href="{{ route('destinations.index') }}" class="btn btn-sunrise btn-lg">Lihat semua wisata</a>
        </div>
    </div>
</section>

<section class="container pt-5">
    <div class="d-flex justify-content-between align-items-end mb-4">
        <h2 class="mb-0">Wisata pilihan</h2>
        <a href="{{ route('destinations.index') }}" class="link-dark">Semua destinasi</a>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
        @foreach ($featured as $destination)
            @include('destinations._card', ['destination' => $destination])
        @endforeach
    </div>
</section>
@endsection
