@extends('layouts.app')

@section('title', 'Katalog Produk — FOUR SWEET')

@section('content')
<section class="fs-page-head">
    <div class="container">
        <nav class="fs-breadcrumb mb-2" aria-label="breadcrumb">
            <a href="/">Beranda</a> &nbsp;/&nbsp; Katalog
        </nav>
        <h1>Katalog Produk</h1>
        <p>Semua menu FOUR SWEET dalam satu tempat. Cari, filter, dan tambahkan favoritmu ke keranjang.</p>
    </div>
</section>

<section class="fs-section" style="padding-top:2.5rem;">
    <div class="container">
        <div class="fs-filter-bar mb-4">
            <div class="row g-3 align-items-center">
                <div class="col-lg-5">
                    <div class="fs-search">
                        <i class="bi bi-search"></i>
                        <input type="text" id="product-search" class="form-control" placeholder="Cari produk, mis. jelly, roti, ubi..." aria-label="Cari produk">
                    </div>
                </div>
                <div class="col-lg-7 d-flex gap-2 flex-wrap">
                    <button type="button" class="filter-btn active" data-filter="all">Semua</button>
                    <button type="button" class="filter-btn" data-filter="jelly">Jelly</button>
                    <button type="button" class="filter-btn" data-filter="bread">Roti</button>
                    <button type="button" class="filter-btn" data-filter="best-seller">Best Seller</button>
                </div>
            </div>
        </div>

        <p class="text-muted mb-4" id="catalog-count">Menampilkan 2 produk</p>

        <div class="row g-4" id="catalog-grid">
            <div class="col-md-6 col-lg-4">
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
            <div class="col-md-6 col-lg-4">
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

        <div id="catalog-empty" class="text-center py-5" style="display:none;">
            <i class="bi bi-search-heart fs-1" style="color:var(--pink);"></i>
            <h4 class="mt-3" style="font-family:var(--font-head);">Produk tidak ditemukan</h4>
            <p class="text-muted">Coba kata kunci lain atau ubah filter kategori.</p>
        </div>
    </div>
</section>
@endsection
