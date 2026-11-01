@extends('layouts.app')

@section('title', 'Keranjang Belanja — FOUR SWEET')

@section('content')
<section class="fs-page-head">
    <div class="container">
        <nav class="fs-breadcrumb mb-2" aria-label="breadcrumb">
            <a href="/">Beranda</a> &nbsp;/&nbsp; Keranjang
        </nav>
        <h1>Keranjang Belanja</h1>
        <p>Periksa pesananmu sebelum lanjut ke checkout. Semua data hanya tersimpan di perangkatmu (simulasi).</p>
    </div>
</section>

<section class="fs-section" style="padding-top:2.5rem;">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8">
                <div id="cart-items"></div>
                <div id="cart-empty" class="text-center py-5" style="display:none;">
                    <i class="bi bi-bag-heart fs-1" style="color:var(--pink);"></i>
                    <h4 class="mt-3" style="font-family:var(--font-head);">Keranjangmu masih kosong</h4>
                    <p class="text-muted">Yuk, pilih menu manis favoritmu dulu.</p>
                    <a href="/products" class="btn btn-sweet mt-2">Lihat Katalog</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="fs-summary" id="cart-summary">
                    <h5>Ringkasan Belanja</h5>
                    <hr>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted">Subtotal</span>
                        <strong id="cart-subtotal">Rp0</strong>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted">Ongkir</span>
                        <span class="text-muted">Dihitung saat checkout</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between fs-total-row mb-4">
                        <span>Total</span>
                        <span id="cart-total">Rp0</span>
                    </div>
                    <a href="/checkout" class="btn btn-sweet w-100 btn-lg">
                        Lanjut ke Checkout <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                    <a href="/products" class="btn btn-outline-sweet w-100 mt-2">Tambah Produk Lain</a>
                    <p class="text-muted small text-center mt-3 mb-0">Simulasi frontend — belum ada pembayaran sungguhan.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
