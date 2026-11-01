@extends('layouts.app')

@section('title', 'Checkout — FOUR SWEET')

@section('content')
<section class="fs-page-head">
    <div class="container">
        <nav class="fs-breadcrumb mb-2" aria-label="breadcrumb">
            <a href="/">Beranda</a> &nbsp;/&nbsp; <a href="/cart">Keranjang</a> &nbsp;/&nbsp; Checkout
        </nav>
        <h1>Checkout</h1>
        <p>Lengkapi datamu untuk menyelesaikan pesanan. Formulir ini hanya divalidasi di sisi frontend (simulasi).</p>
    </div>
</section>

<section class="fs-section" style="padding-top:2.5rem;">
    <div class="container">
        <form id="checkout-form" novalidate>
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="fs-form-card mb-4">
                        <h5><i class="bi bi-person-heart me-2" style="color:var(--pink);"></i> Informasi Pelanggan</h5>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="co-name" class="form-label">Nama Lengkap *</label>
                                <input type="text" id="co-name" class="form-control" placeholder="cth. Sinta Maharani" autocomplete="name">
                                <div class="invalid-feedback">Nama minimal 3 karakter.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="co-wa" class="form-label">Nomor WhatsApp *</label>
                                <input type="tel" id="co-wa" class="form-control" placeholder="cth. 081234567890" autocomplete="tel">
                                <div class="invalid-feedback">Masukkan nomor WhatsApp yang valid (diawali 08, 10–13 digit).</div>
                            </div>
                            <div class="col-12">
                                <label for="co-address" class="form-label">Alamat Pengiriman *</label>
                                <textarea id="co-address" class="form-control" rows="3" placeholder="Nama jalan, nomor rumah, patokan, kecamatan, kota..."></textarea>
                                <div class="invalid-feedback">Alamat minimal 10 karakter (tidak wajib jika pilih Ambil di Toko).</div>
                            </div>
                            <div class="col-12">
                                <label for="co-notes" class="form-label">Catatan Pesanan (opsional)</label>
                                <textarea id="co-notes" class="form-control" rows="2" placeholder="cth. Tolong pisahkan cokelatnya, atau: tanpa stroberi..."></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="fs-form-card mb-4">
                        <h5><i class="bi bi-truck me-2" style="color:var(--pink);"></i> Metode Pengiriman *</h5>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="fs-method-card">
                                    <input type="radio" name="delivery" value="antar" class="form-check-input me-2" checked>
                                    <strong>Antar ke Alamat</strong>
                                    <small>Biaya Rp10.000 — diantar ke alamatmu</small>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label class="fs-method-card">
                                    <input type="radio" name="delivery" value="ambil" class="form-check-input me-2">
                                    <strong>Ambil di Toko</strong>
                                    <small>Gratis — ambil sendiri sesuai jam operasional</small>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="fs-form-card">
                        <h5><i class="bi bi-wallet2 me-2" style="color:var(--pink);"></i> Metode Pembayaran *</h5>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="fs-method-card">
                                    <input type="radio" name="payment" value="transfer" class="form-check-input me-2">
                                    <strong>Transfer Bank</strong>
                                    <small>BCA / Mandiri / BRI</small>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <label class="fs-method-card">
                                    <input type="radio" name="payment" value="qris" class="form-check-input me-2">
                                    <strong>QRIS</strong>
                                    <small>Scan kode QR</small>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <label class="fs-method-card">
                                    <input type="radio" name="payment" value="cod" class="form-check-input me-2">
                                    <strong>COD</strong>
                                    <small>Bayar di tempat</small>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="fs-summary">
                        <h5>Ringkasan Pesanan</h5>
                        <hr>
                        <div id="checkout-summary-body"></div>
                        <div id="checkout-empty" class="text-center py-3" style="display:none;">
                            <p class="text-muted mb-2">Keranjang masih kosong.</p>
                            <a href="/products" class="btn btn-outline-sweet btn-sm">Lihat Katalog</a>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Subtotal</span>
                            <strong id="co-subtotal">Rp0</strong>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Ongkir</span>
                            <strong id="co-fee">Rp0</strong>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between fs-total-row mb-4">
                            <span>Total</span>
                            <span id="co-total">Rp0</span>
                        </div>
                        <button type="submit" id="place-order-btn" class="btn btn-sweet w-100 btn-lg">
                            <i class="bi bi-check-circle me-1"></i> Buat Pesanan
                        </button>
                        <p class="text-muted small text-center mt-3 mb-0">
                            Dengan menekan tombol ini kamu menyetujui simulasi pesanan.
                            Tidak ada data yang dikirim ke server.
                        </p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
