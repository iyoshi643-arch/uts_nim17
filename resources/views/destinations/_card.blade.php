<div class="col">
    <div class="card dest-card h-100 rounded-3">
        <img src="{{ $destination->image_url }}" class="card-img-top" alt="{{ $destination->name }}">
        <div class="card-body d-flex flex-column">
            <div class="region-tag">{{ $destination->region }}</div>
            <h5 class="card-title mb-2">{{ $destination->name }}</h5>
            <p class="card-text text-secondary">{{ \Illuminate\Support\Str::limit($destination->description, 90) }}</p>
            <div class="mt-auto d-flex justify-content-between align-items-center">
                <span class="price">{{ $destination->price_label }}</span>
                <a href="{{ route('destinations.show', $destination) }}" class="btn btn-sm btn-pine">Lihat detail</a>
            </div>
        </div>
    </div>
</div>
