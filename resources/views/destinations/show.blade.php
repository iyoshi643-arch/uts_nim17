@extends('layouts.app')

@section('title', $destination->name . ' - Wisata Alam Nusantara')

@section('content')
<div class="container pt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{ route('destinations.index') }}">Daftar Wisata</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $destination->name }}</li>
        </ol>
    </nav>

    <div class="row g-4 g-lg-5">
        <div class="col-lg-7">
            <img src="{{ $destination->image_url }}" alt="{{ $destination->name }}" class="detail-img rounded-3">
        </div>
        <div class="col-lg-5">
            <div class="region-tag">{{ $destination->region }}</div>
            <h1 class="display-6 fw-bold mb-3">{{ $destination->name }}</h1>
            <p>{{ $destination->description }}</p>

            <table class="table table-borderless align-middle mb-4">
                <tbody>
                    <tr><th scope="row" class="ps-0 text-secondary fw-normal">Wilayah</th><td>{{ $destination->region }}</td></tr>
                    <tr><th scope="row" class="ps-0 text-secondary fw-normal">Tiket masuk</th><td class="price fs-5">{{ $destination->price_label }}</td></tr>
                </tbody>
            </table>

            <a href="{{ route('destinations.index') }}" class="btn btn-pine">Kembali ke daftar</a>
        </div>
    </div>

    <h2 class="h4 mt-5 mb-3">Wisata lainnya</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($others as $destination)
            @include('destinations._card', ['destination' => $destination])
        @endforeach
    </div>
</div>
@endsection
