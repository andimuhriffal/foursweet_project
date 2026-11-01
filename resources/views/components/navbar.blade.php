<nav class="navbar navbar-expand-lg fs-navbar sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/" aria-label="FOUR SWEET — Beranda">
            <span class="fs-brand-logos">
                <img src="{{ asset('assets/images/Logo.png') }}" alt="Logo FOUR SWEET">
                <span class="fs-brand-divider" aria-hidden="true"></span>
                <img src="{{ asset('assets/images/unp.png') }}" alt="Logo Universitas Negeri Padang">
            </span>
        </a>

        <div class="d-flex align-items-center gap-2 order-lg-3">
            <a href="/cart" class="fs-cart-btn" aria-label="Keranjang belanja">
                <i class="bi bi-bag-heart"></i>
                <span class="fs-cart-count" id="cart-count">0</span>
            </a>
            <button class="navbar-toggler fs-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#fsNav" aria-controls="fsNav" aria-expanded="false" aria-label="Buka menu">
                <i class="bi bi-list"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse order-lg-2" id="fsNav">
            <ul class="navbar-nav mx-auto fs-nav-links">
                <li class="nav-item"><a class="nav-link" data-nav="/" href="/">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" data-nav="/products" href="/products">Katalog</a></li>
                <li class="nav-item"><a class="nav-link" data-nav="/about" href="/about">Tentang Kami</a></li>
            </ul>
            <a href="/products" class="btn btn-sweet d-none d-lg-inline-flex">
                <i class="bi bi-bag-heart me-1"></i> Pesan Sekarang
            </a>
        </div>
    </div>
</nav>
