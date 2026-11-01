{{--
    Product card — dipakai di homepage & katalog.
    Props: id, name, slug, price, priceLabel, image, badge, badgeClass,
           desc, category (spasi-dipisah untuk filter JS), rating
--}}
<article class="product-card-item" data-category="{{ $category ?? '' }}" data-name="{{ strtolower($name) }}">
    <div class="fs-product-card h-100">
        <div class="fs-product-media">
            <a href="/products/{{ $slug }}">
                <img src="{{ asset($image) }}" alt="{{ $name }}" loading="lazy">
            </a>
            @if(!empty($badge))
                <span class="fs-badge {{ $badgeClass ?? '' }}">{{ $badge }}</span>
            @endif
            <button type="button" class="fs-wish" data-wish="{{ $name }}" aria-label="Simpan {{ $name }} ke favorit">
                <i class="bi bi-heart"></i>
            </button>
        </div>
        <div class="fs-product-body">
            <div class="fs-stars" aria-label="Rating {{ $rating ?? '4.9' }} dari 5">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                <span>{{ $rating ?? '4.9' }}</span>
            </div>
            <h3 class="fs-product-name">
                <a href="/products/{{ $slug }}">{{ $name }}</a>
            </h3>
            <p class="fs-product-desc">{{ $desc }}</p>
            <div class="fs-product-foot">
                <div class="fs-price">{{ $priceLabel }}</div>
                <div class="fs-product-actions">
                    <a href="/products/{{ $slug }}" class="fs-icon-btn" aria-label="Lihat detail {{ $name }}">
                        <i class="bi bi-eye"></i>
                    </a>
                    <button type="button" class="btn btn-sweet btn-sm" data-add-to-cart
                        data-id="{{ $id }}" data-name="{{ $name }}">
                        <i class="bi bi-bag-plus me-1"></i> Tambah
                    </button>
                </div>
            </div>
        </div>
    </div>
</article>
