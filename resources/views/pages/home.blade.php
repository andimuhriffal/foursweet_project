@extends('layouts.app')

@section('title', 'FOUR SWEET — Sweet Treats for a Sweeter Day')

@section('content')
{{-- ============ HERO ============ --}}
<section class="fs-hero">
    <div class="fs-blob" style="width:180px;height:180px;top:8%;right:6%;"></div>
    <div class="fs-blob" style="width:120px;height:120px;bottom:10%;left:3%;"></div>
    <div class="container position-relative">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="fs-eyebrow">Sweet Treats for a Sweeter Day</span>
                <h1 class="fs-hero-title">Manisnya Hari,<br>Dimulai dari <em>Gigitan Pertama.</em></h1>
                <p class="fs-hero-sub">
                    Jelly Ball kenyal dengan cokelat manis yang bikin nagih, dan roti ubi ungu
                    lembut dengan mozzarella lumer. Dibuat segar setiap hari, khusus untuk harimu yang lebih manis.
                </p>
                <div class="fs-hero-cta">
                    <a href="/products" class="btn btn-sweet btn-lg">
                        <i class="bi bi-bag-heart me-1"></i> Pesan Sekarang
                    </a>
                    <a href="#featured" class="btn btn-outline-sweet btn-lg">Jelajahi Menu</a>
                </div>
                <div class="fs-hero-trust">
                    <div><strong>4.9 <span class="text-warning">★</span></strong><span>Rating pelanggan</span></div>
                    <div><strong>100%</strong><span>Freshly made</span></div>
                    <div><strong>2</strong><span>Menu andalan</span></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="fs-hero-visual mx-auto" style="max-width:480px;">
                    <div class="fs-hero-ring" aria-hidden="true">
                        <svg viewBox="0 0 100 100">
                            <defs><path id="fs-circle" d="M 50,50 m -36,0 a 36,36 0 1,1 72,0 a 36,36 0 1,1 -72,0"></path></defs>
                            <text><textPath href="#fs-circle">FOUR SWEET • SWEET TREATS • </textPath></text>
                        </svg>
                        <span class="fs-ring-center"><i class="bi bi-heart-fill"></i></span>
                    </div>
                    <div class="fs-hero-arch">
                        <img src="{{ asset('assets/images/jelly-ball.jpg') }}" alt="Jelly Ball FOUR SWEET">
                    </div>
                    <div class="fs-float-card fs-float-1">
                        <div>
                            <small>Menu favorit</small>
                            <strong>Jelly Ball — Rp6.000</strong>
                        </div>
                    </div>
                    <div class="fs-float-card fs-float-2">
                        <i class="bi bi-star-fill fs-4"></i>
                        <div>
                            <small>Rating pelanggan</small>
                            <strong>4.9 / 5.0</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============ PROMO BANNER ============ --}}
<section class="container pt-4">
    <div class="fs-promo-card reveal">
        <div class="row align-items-center g-3">
            <div class="col-lg-7">
                <span class="badge bg-white text-dark mb-2">Promo Spesial (Simulasi)</span>
                <h3>Paket Hemat: Jelly Ball + Sweety Potato Cheese Bread</h3>
                <p class="mb-0">Dua menu andalan dalam satu paket hemat. Cocok untuk dinikmati sendiri atau berbagi dengan orang tersayang.</p>
            </div>
            <div class="col-lg-5 text-lg-end">
                <div class="fs-promo-price">Rp15.000 <s>Rp18.000</s></div>
                <a href="/products" class="btn mt-2">Lihat Katalog <i class="bi bi-arrow-right ms-1"></i></a>
            </div>
        </div>
    </div>
</section>

{{-- ============ FEATURED PRODUCTS ============ --}}
<section class="fs-section" id="featured">
    <div class="container">
        <div class="fs-section-head reveal">
            <span class="fs-eyebrow">Menu Pilihan</span>
            <h2 class="fs-section-title">Dibuat Segar, <em>Rasanya Bikin Nagih</em></h2>
            <p class="fs-section-sub">Dua menu andalan FOUR SWEET — dipilih pelanggan, dibuat dengan bahan pilihan.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 reveal">
                @include('components.product-card', [
                    'id' => 'jelly-ball',
                    'name' => 'Jelly Ball',
                    'slug' => 'jelly-ball',
                    'priceLabel' => 'Rp6.000',
                    'image' => 'assets/images/jelly-ball.jpg',
                    'badge' => 'Best Seller',
                    'badgeClass' => '',
                    'desc' => 'Jelly kenyal dengan perpaduan cokelat manis yang bikin nagih di setiap gigitan!',
                    'category' => 'jelly best-seller',
                    'rating' => '4.9',
                ])
            </div>
            <div class="col-md-6 reveal">
                @include('components.product-card', [
                    'id' => 'sweety-potato-cheese-bread',
                    'name' => 'Sweety Potato Cheese Bread',
                    'slug' => 'sweety-potato-cheese-bread',
                    'priceLabel' => 'Rp12.000',
                    'image' => 'assets/images/bread2.jpg',
                    'badge' => 'Premium',
                    'badgeClass' => 'gold',
                    'desc' => 'Roti lembut dengan isian Mozarella lumer, berbahan ubi ungu pilihan.',
                    'category' => 'bread',
                    'rating' => '4.9',
                ])
            </div>
        </div>
    </div>
</section>

{{-- ============ BEST SELLER SPOTLIGHT ============ --}}
<section class="fs-section fs-section-pink">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 reveal">
                <div class="fs-spot-img">
                    <img src="{{ asset('assets/images/jelly-ball-box.png') }}" alt="Jelly Ball kemasan box FOUR SWEET">
                </div>
            </div>
            <div class="col-lg-6 reveal">
                <span class="fs-eyebrow">Best Seller</span>
                <h2 class="fs-section-title">Jelly Ball, <em>Si Kecil yang Paling Dicari</em></h2>
                <p class="text-muted mt-3">
                    Kenyal, manisnya pas, dan selalu habis duluan. Satu cup berisi perpaduan rasa
                    cokelat, stroberi, dan mangga — atau pilih satu rasa favoritmu.
                </p>
                <ul class="fs-check">
                    <li><i class="bi bi-check-circle-fill"></i> Jelly kenyal, tidak mudah hancur</li>
                    <li><i class="bi bi-check-circle-fill"></i> Tiga varian rasa: Cokelat, Stroberi, Mangga</li>
                    <li><i class="bi bi-check-circle-fill"></i> Cocok untuk hadiah dan hampers</li>
                </ul>
                <div class="d-flex gap-2 flex-wrap">
                    <a href="/products/jelly-ball" class="btn btn-sweet">Lihat Detail</a>
                    <button type="button" class="btn btn-outline-sweet" data-add-to-cart data-id="jelly-ball" data-name="Jelly Ball">
                        <i class="bi bi-bag-plus me-1"></i> Tambah ke Keranjang
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============ CATEGORIES ============ --}}
<section class="fs-section">
    <div class="container">
        <div class="fs-section-head reveal">
            <span class="fs-eyebrow">Kategori</span>
            <h2 class="fs-section-title">Mau yang <em>Manisnya Seperti Apa?</em></h2>
        </div>
        <div class="row g-4">
            <div class="col-md-4 reveal">
                <a class="fs-category-tile" href="/products?cat=jelly">
                    <img src="{{ asset('assets/images/jelly-ball.jpg') }}" alt="Kategori Jelly">
                    <div class="fs-category-label"><strong>Jelly</strong><span>Kenyal &amp; menyegarkan <i class="bi bi-arrow-right"></i></span></div>
                </a>
            </div>
            <div class="col-md-4 reveal">
                <a class="fs-category-tile" href="/products?cat=bread">
                    <img src="{{ asset('assets/images/bread.png') }}" alt="Kategori Roti">
                    <div class="fs-category-label"><strong>Roti &amp; Bakery</strong><span>Lembut &amp; lumer <i class="bi bi-arrow-right"></i></span></div>
                </a>
            </div>
            <div class="col-md-4 reveal">
                <a class="fs-category-tile" href="/products?cat=best-seller">
                    <img src="{{ asset('assets/images/jelly-ball-box.png') }}" alt="Kategori Best Seller">
                    <div class="fs-category-label"><strong>Best Seller</strong><span>Paling banyak dipesan <i class="bi bi-arrow-right"></i></span></div>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ============ WHY CHOOSE ============ --}}
<section class="fs-section fs-section-pink">
    <div class="container">
        <div class="fs-section-head reveal">
            <span class="fs-eyebrow">Kenapa FOUR SWEET?</span>
            <h2 class="fs-section-title">Manis Saja <em>Tidak Cukup</em></h2>
            <p class="fs-section-sub">Kami percaya dessert yang baik harus segar, jujur bahannya, dan dibuat dengan cinta.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 reveal">
                <div class="fs-why-card">
                    <div class="fs-why-icon"><i class="bi bi-sun"></i></div>
                    <h4>Freshly Made</h4>
                    <p>Dibuat segar setiap hari, bukan stok lama. Pesan hari ini, dibuat hari ini.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 reveal">
                <div class="fs-why-card">
                    <div class="fs-why-icon"><i class="bi bi-award"></i></div>
                    <h4>Premium Quality</h4>
                    <p>Bahan pilihan: ubi ungu terbaik dan mozzarella asli yang lumer sempurna.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 reveal">
                <div class="fs-why-card">
                    <div class="fs-why-icon"><i class="bi bi-wallet2"></i></div>
                    <h4>Harga Bersahabat</h4>
                    <p>Mulai Rp6.000 saja. Rasa premium, harga tetap ramah di kantong.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 reveal">
                <div class="fs-why-card">
                    <div class="fs-why-icon"><i class="bi bi-heart"></i></div>
                    <h4>Sweet &amp; Delicious</h4>
                    <p>Manisnya pas, tidak berlebihan — dirancang untuk dinikmati semua usia.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============ BRAND INTRODUCTION ============ --}}
<section class="fs-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 reveal">
                <span class="fs-eyebrow">Tentang FOUR SWEET</span>
                <h2 class="fs-section-title">Dari Dapur Rumahan, <em>Untuk Harimu yang Manis</em></h2>
                <p class="text-muted mt-3">
                    FOUR SWEET lahir dari kecintaan pada dessert rumahan: jelly kenyal buatan tangan
                    dan roti ubi ungu yang lembut. Setiap produk dibuat dalam jumlah terbatas setiap hari
                    agar kesegarannya selalu terjaga.
                </p>
                <p class="text-muted">
                    Kami percaya satu gigitan yang tepat bisa mengubah hari biasa menjadi hari yang lebih manis.
                    Itulah janji kami: <strong>Sweet Treats for a Sweeter Day.</strong>
                </p>
                <a href="/about" class="btn btn-outline-sweet mt-2">Cerita Selengkapnya <i class="bi bi-arrow-right ms-1"></i></a>
            </div>
            <div class="col-lg-6 reveal">
                <div class="fs-spot-img">
                    <img src="{{ asset('assets/images/bread-cheese.jpg') }}" alt="Sweety Potato Cheese Bread dengan mozzarella lumer">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============ TESTIMONIALS ============ --}}
<section class="fs-section fs-section-pink">
    <div class="container">
        <div class="fs-section-head reveal">
            <span class="fs-eyebrow">Kata Mereka</span>
            <h2 class="fs-section-title">Pelanggan yang <em>Sudah Nagih</em></h2>
        </div>
        <div class="row g-4">
            <div class="col-md-4 reveal">
                <div class="fs-testi-card">
                    <div class="fs-stars mb-2"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                    <p>“Jelly Ball-nya kenyal banget, cokelatnya lumer. Sekali beli langsung pesan lagi buat keluarga.”</p>
                    <div class="d-flex align-items-center gap-2 mt-3">
                        <span class="fs-avatar">S</span>
                        <div><strong>Sinta Maharani</strong><br><small class="text-muted">Pembeli Jelly Ball</small></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 reveal">
                <div class="fs-testi-card">
                    <div class="fs-stars mb-2"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                    <p>“Roti ubi ungunya lembut, mozzarellanya benar-benar lumer. Dimakan hangat itu juara.”</p>
                    <div class="d-flex align-items-center gap-2 mt-3">
                        <span class="fs-avatar">R</span>
                        <div><strong>Raka Pratama</strong><br><small class="text-muted">Pembeli Sweety Potato Bread</small></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 reveal">
                <div class="fs-testi-card">
                    <div class="fs-stars mb-2"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                    <p>“Kemasan cantik, cocok buat hadiah. Rasanya manisnya pas, tidak bikin enek.”</p>
                    <div class="d-flex align-items-center gap-2 mt-3">
                        <span class="fs-avatar">P</span>
                        <div><strong>Putri Ayu</strong><br><small class="text-muted">Pembeli Paket Hemat</small></div>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-center text-muted small mt-4">Testimoni di atas adalah data dummy untuk keperluan tampilan.</p>
    </div>
</section>

{{-- ============ INSTAGRAM ============ --}}
<section class="fs-section">
    <div class="container">
        <div class="fs-section-head reveal">
            <span class="fs-eyebrow">@foursweet.id</span>
            <h2 class="fs-section-title">Manisnya, <em>Di Setiap Foto</em></h2>
            <p class="fs-section-sub">Ikuti kami di Instagram untuk menu terbaru dan promo spesial.</p>
        </div>
        <div class="fs-ig-grid reveal">
            <div class="fs-ig-tile"><img src="{{ asset('assets/images/jelly-ball.jpg') }}" alt="Jelly Ball"></div>
            <div class="fs-ig-tile"><img src="{{ asset('assets/images/bread.png') }}" alt="Sweety Potato Bread"></div>
            <div class="fs-ig-tile brand"><i class="bi bi-instagram"></i><strong>@foursweet.id</strong></div>
            <div class="fs-ig-tile"><img src="{{ asset('assets/images/jelly-ball-box.png') }}" alt="Jelly Ball box"></div>
            <div class="fs-ig-tile"><img src="{{ asset('assets/images/bread-cheese.jpg') }}" alt="Mozzarella lumer"></div>
            <div class="fs-ig-tile brand"><i class="bi bi-heart-fill"></i><strong>Sweet Treats for a Sweeter Day</strong></div>
        </div>
    </div>
</section>
@endsection
