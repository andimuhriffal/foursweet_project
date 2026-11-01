@extends('layouts.app')

@section('title', 'Tentang Kami — FOUR SWEET')

@section('content')
<section class="fs-page-head">
    <div class="container">
        <nav class="fs-breadcrumb mb-2" aria-label="breadcrumb">
            <a href="/">Beranda</a> &nbsp;/&nbsp; Tentang Kami
        </nav>
        <h1>Tentang FOUR SWEET</h1>
        <p>Sweet Treats for a Sweeter Day — cerita, identitas, dan komitmen kami.</p>
    </div>
</section>

<section class="fs-section" style="padding-top:2.5rem;">
    <div class="container">
        <div class="row g-5 align-items-center mb-5">
            <div class="col-lg-6">
                <span class="fs-eyebrow">Brand Story</span>
                <h2 class="fs-section-title">Dari Dapur Rumahan, <em>Untuk Semua</em></h2>
                <p class="text-muted mt-3">
                    FOUR SWEET berawal dari dapur rumahan dan satu keyakinan sederhana: dessert yang baik
                    harus segar, jujur bahannya, dan dibuat dengan cinta. Dari percobaan jelly kenyal
                    pertama hingga roti ubi ungu dengan mozzarella lumer, setiap resep diuji berulang
                    kali sampai rasanya pas di lidah semua orang.
                </p>
                <p class="text-muted">
                    Hari ini, FOUR SWEET hadir sebagai toko dessert online dengan dua menu andalan —
                    Jelly Ball dan Sweety Potato Cheese Bread — yang dibuat segar setiap hari dalam
                    jumlah terbatas.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="fs-spot-img">
                    <img src="{{ asset('assets/images/jelly-ball-box.png') }}" alt="Jelly Ball FOUR SWEET">
                </div>
            </div>
        </div>

        <div class="mb-5">
            <span class="fs-eyebrow">Brand Identity</span>
            <h2 class="fs-section-title mb-4">Identitas <em>Visual Kami</em></h2>
            <div class="row g-3">
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="fs-swatch" style="background:#E91E83;">Primary Pink<br><code>#E91E83</code></div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="fs-swatch" style="background:#C21868;">Magenta<br><code>#C21868</code></div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="fs-swatch light" style="background:#FCE4EF;">Soft Pink<br><code>#FCE4EF</code></div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="fs-swatch light" style="background:#FFF0F6;">Light Pink<br><code>#FFF0F6</code></div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="fs-swatch" style="background:#4A1740;">Dark Text<br><code>#4A1740</code></div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="fs-swatch light" style="background:#FFFFFF;border:1px solid #FCE4EF;">White<br><code>#FFFFFF</code></div>
                </div>
            </div>
            <p class="text-muted mt-3">Tipografi: <strong style="font-family:var(--font-head);">Playfair Display</strong> untuk heading,
                <strong>Poppins</strong> untuk konten utama, dan aksen script untuk sentuhan dekoratif brand.</p>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-6">
                <div class="fs-form-card h-100">
                    <h5><i class="bi bi-flower1 me-2" style="color:var(--pink);"></i> Filosofi Produk</h5>
                    <p class="text-muted mb-0">
                        Manisnya pas, tidak berlebihan. Kami merancang setiap produk agar bisa dinikmati
                        semua usia — anak-anak sampai orang tua — tanpa rasa bersalah yang berlebihan.
                        Dessert seharusnya membuat hari lebih baik, bukan sebaliknya.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="fs-form-card h-100">
                    <h5><i class="bi bi-shield-check me-2" style="color:var(--pink);"></i> Komitmen Kualitas</h5>
                    <ul class="fs-check mb-0">
                        <li><i class="bi bi-check-circle-fill"></i> Dibuat segar setiap hari, tanpa stok lama</li>
                        <li><i class="bi bi-check-circle-fill"></i> Bahan pilihan: ubi ungu terbaik &amp; mozzarella asli</li>
                        <li><i class="bi bi-check-circle-fill"></i> Kebersihan dapur selalu dijaga</li>
                        <li><i class="bi bi-check-circle-fill"></i> Kemasan aman dan cantik untuk hadiah</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="fs-form-card">
            <div class="row g-4">
                <div class="col-md-8">
                    <h5><i class="bi bi-chat-heart me-2" style="color:var(--pink);"></i> Hubungi Kami</h5>
                    <p class="text-muted">Punya pertanyaan, pesanan khusus, atau ingin bermitra? Hubungi kami lewat kanal berikut:</p>
                    <ul class="fs-footer-contact" style="color:var(--ink);">
                        <li><i class="bi bi-whatsapp"></i> WhatsApp: 0812-0000-0000 (dummy)</li>
                        <li><i class="bi bi-instagram"></i> Instagram: @foursweet.id</li>
                        <li><i class="bi bi-envelope"></i> Email: halo@foursweet.id</li>
                        <li><i class="bi bi-clock"></i> Jam operasional: setiap hari, 09.00 – 20.00</li>
                    </ul>
                </div>
                <div class="col-md-4 d-flex align-items-center">
                    <a href="/products" class="btn btn-sweet w-100">Pesan Menu Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
