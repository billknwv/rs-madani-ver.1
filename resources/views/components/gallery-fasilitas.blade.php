<div class="row g-4">
    @foreach($fasilitas as $item)
    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index % 3 * 100 }}">
        <div class="gallery-item card-hover-premium">
            <div class="position-relative overflow-hidden rounded-4 shadow-sm" style="aspect-ratio: 4/3;">
                <div class="gallery-badge">{{ $item['badge'] ?? 'Fasilitas' }}</div>
                @if(isset($item['image']) && $item['image'])
                <img src="{{ asset($item['image']) }}" alt="{{ $item['nama'] }}" class="gallery-img" loading="lazy">
                @else
                <div class="service-img-placeholder" style="background: linear-gradient(135deg, {{ $item['gradient_start'] ?? '#0D1B3D' }}, {{ $item['gradient_end'] ?? '#1a2d5e' }});">
                    <i class="bi {{ $item['icon'] ?? 'bi-building' }}"></i>
                </div>
                @endif
                <div class="gallery-overlay">
                    <h6 class="gallery-title">{{ $item['nama'] }}</h6>
                    <p class="gallery-desc">{{ $item['deskripsi'] }}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
