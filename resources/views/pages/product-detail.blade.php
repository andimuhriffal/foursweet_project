@extends('layouts.app')

@php
$catalog = [
    'jelly-ball' => [
        'id' => 'jelly-ball',
        'name' => 'Jelly Ball',
        'slug' => 'jelly-ball',
        'price' => 6000,
        'priceLabel' => 'Rp6.000',
        'badge' => 'Best Seller',
        'badgeClass' => '',
        'desc' => 'Jelly kenyal dengan perpaduan cokelat manis yang bikin nagih di setiap gigitan!',
        'images' => ['assets/images/jelly-ball.jpg', 'assets/images/jelly-ball-box.png'],
        'variants' => ['Cokelat', 'Stroberi', 'Mangga'],
        'info' => [
            'Jelly kenyal berkualitas, tidak mudah hancur',
            'Tersedia tiga varian rasa',
            'Cocok untuk camilan, hadiah, dan hampers',
            'Dibuat segar setiap hari',
        ],
    ],
    'sweety-potato-cheese-bread' => [
        'id' => 'sweety-potato-cheese-bread',
        'name' => 'Sweety Potato Cheese Bread',
        'slug' => 'sweety-potato-cheese-bread',
        'price' => 12000,
        'priceLabel' => 'Rp12.000',
        'badge' => 'Premium',
        'badgeClass' => 'gold',
        'desc' => 'Roti lembut dengan isian Mozarella lumer!',
        'images' => ['assets/images/bread2.jpg'],
        'variants' => ['Original'],
        'info' => [
            'Berbahan ubi ungu pilihan',
            'Premium Quality',
            'Freshly Made',
            'Sweet & Delicious',
        ],
    ],
];
$product = $catalog[$slug] ?? $catalog['jelly-ball'];
$related = $product['slug'] === 'jelly-ball' ? $catalog['sweety-potato-cheese-bread'] : $catalog['jelly-ball'];
@endphp

@section('title', $product['name'] . ' — FOUR SWEET')

@section('content')
<section class="fs-page-head">
    <div class="container">
        <nav class="fs-breadcrumb mb-2" aria-label="breadcrumb">
            <a href="/">Beranda</a> &nbsp;/&nbsp; <a href="/products">Katalog</a> &nbsp;/&nbsp; {{ $product['name'] }}
        </nav>
        <h1>{{ $product['name'] }}</h1>
    </div>
</section>

<section class="fs-section" style="padding-top:2.5rem;">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="fs-gallery-main">
                    <img id="gallery-main" src="{{ asset($product['images'][0]) }}" alt="{{ $product['name'] }}">
                </div>
                <div class="fs-gallery-thumbs">
                    @foreach($product['images'] as $i => $img)
                        <button type="button" class="fs-thumb {{ $i === 0 ? 'active' : '' }}"
                            data-gallery-thumb="{{ asset($img) }}" aria-label="Lihat foto {{ $i + 1 }}">
                            <img src="{{ asset($img) }}" alt="Foto {{ $product['name'] }} {{ $i + 1 }}">
                        </button>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6">
                @if(!empty($product['badge']))
                    <span class="fs-badge {{ $product['badgeClass'] }}" style="position:static;">{{ $product['badge'] }}</span>
                @endif
                <h2 class="mt-3" style="font-family:var(--font-head);font-weight:800;font-size:2.2rem;">{{ $product['name'] }}</h2>
                <div class="fs-stars mb-2">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    <span>4.9 (128 ulasan dummy)</span>
                </div>
                <div class="fs-detail-price">{{ $product['priceLabel'] }}</div>
                <p class="text-muted mt-3">{{ $product['desc'] }}</p>

                <h6 class="mt-4 mb-2">Varian: <span id="selected-variant-label" class="text-muted">{{ $product['variants'][0] }}</span></h6>
                <div class="d-flex gap-2 flex-wrap mb-4">
                    @foreach($product['variants'] as $i => $variant)
                        <button type="button" class="variant-pill {{ $i === 0 ? 'active' : '' }}" data-variant="{{ $variant }}">{{ $variant }}</button>
                    @endforeach
                </div>

                <h6 class="mb-2">Jumlah</h6>
                <div class="d-flex align-items-center gap-3 flex-wrap mb-4">
                    <div class="fs-qty">
                        <button type="button" data-qty-btn="minus" data-qty-target="detail-qty" aria-label="Kurangi jumlah">&minus;</button>
                        <input id="detail-qty" value="1" inputmode="numeric" aria-label="Jumlah">
                        <button type="button" data-qty-btn="plus" data-qty-target="detail-qty" aria-label="Tambah jumlah">+</button>
                    </div>
                    <small class="text-muted">Stok tersedia (simulasi)</small>
                </div>

                <div class="d-flex gap-2 flex-wrap">
                    <button type="button" class="btn btn-sweet btn-lg" data-add-to-cart data-id="{{ $product['id'] }}" data-name="{{ $product['name'] }}">
                        <i class="bi bi-bag-plus me-1"></i> Tambah ke Keranjang
                    </button>
                    <button type="button" class="btn btn-outline-sweet btn-lg" id="buy-now" data-id="{{ $product['id'] }}">
                        Beli Sekarang
                    </button>
                </div>

                <hr class="my-4">
                <h6>Informasi Produk</h6>
                <ul class="fs-check">
                    @foreach($product['info'] as $line)
                        <li><i class="bi bi-check-circle-fill"></i> {{ $line }}</li>
                    @endforeach
                </ul>
                <p class="text-muted small">
                    <i class="bi bi-truck me-1"></i> Pengiriman: antar ke alamat (Rp10.000) atau ambil di toko (gratis).
                    Pembayaran: transfer bank, QRIS, atau COD — dipilih saat checkout.
                </p>
            </div>
        </div>

        <hr class="my-5">
        <div class="fs-section-head align-left" style="margin-bottom:2rem;">
            <span class="fs-eyebrow">Lengkapi Pesananmu</span>
            <h2 class="fs-section-title">Produk <em>Terkait</em></h2>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                @include('components.product-card', [
                    'id' => $related['id'],
                    'name' => $related['name'],
                    'slug' => $related['slug'],
                    'priceLabel' => $related['priceLabel'],
                    'image' => $related['images'][0],
                    'badge' => $related['badge'],
                    'badgeClass' => $related['badgeClass'],
                    'desc' => $related['desc'],
                    'category' => '',
                    'rating' => '4.9',
                ])
            </div>
        </div>
    </div>
</section>
@endsection
