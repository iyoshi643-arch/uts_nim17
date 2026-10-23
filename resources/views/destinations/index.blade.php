@extends('layouts.app')

@section('title', 'Daftar Wisata - Wisata Alam Nusantara')

@section('content')
<div class="container pt-5">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-3 mb-4">
        <div>
            <h1 class="h2 mb-1">Daftar wisata alam</h1>
            <p class="text-secondary mb-0">{{ $destinations->count() }} destinasi{{ $selectedRegion ? ' di ' . $selectedRegion : '' }}</p>
        </div>
        <form method="GET" action="{{ route('destinations.index') }}" class="d-flex gap-2">
            <label for="region" class="visually-hidden">Filter wilayah</label>
            <select name="region" id="region" class="form-select" onchange="this.form.submit()">
                <option value="">Semua wilayah</option>
                @foreach ($regions as $region)
                    <option value="{{ $region }}" @selected($selectedRegion === $region)>{{ $region }}</option>
                @endforeach
            </select>
            @if ($selectedRegion)
                <a href="{{ route('destinations.index') }}" class="btn btn-outline-secondary">Reset</a>
            @endif
        </form>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
        @forelse ($destinations as $destination)
            @include('destinations._card', ['destination' => $destination])
        @empty
            <div class="col-12"><div class="alert alert-light">Belum ada destinasi untuk wilayah ini. Pilih wilayah lain.</div></div>
        @endforelse
    </div>
</div>
@endsection
