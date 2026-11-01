/* ============================================================
   FOUR SWEET — Frontend interactions (SIMULASI ONLY)
   Tidak ada database, API, atau transaksi sungguhan.
   Keranjang disimpan di localStorage perangkat pengunjung.
   ============================================================ */
'use strict';

const PRODUCTS = {
    'jelly-ball': {
        id: 'jelly-ball',
        name: 'Jelly Ball',
        slug: 'jelly-ball',
        price: 6000,
        image: '/assets/images/jelly-ball.jpg',
        variants: ['Cokelat', 'Stroberi', 'Mangga'],
    },
    'sweety-potato-cheese-bread': {
        id: 'sweety-potato-cheese-bread',
        name: 'Sweety Potato Cheese Bread',
        slug: 'sweety-potato-cheese-bread',
        price: 12000,
        image: '/assets/images/bread.png',
        variants: ['Original'],
    },
};

const CART_KEY = 'foursweet_cart_v1';
const DELIVERY_FEE = 10000;

function formatRupiah(n) {
    return 'Rp' + Number(n).toLocaleString('id-ID');
}

function getCart() {
    try { return JSON.parse(localStorage.getItem(CART_KEY)) || []; }
    catch (e) { return []; }
}
function saveCart(cart) {
    localStorage.setItem(CART_KEY, JSON.stringify(cart));
    updateCartBadge();
}
function cartQtyTotal() {
    return getCart().reduce((sum, item) => sum + item.qty, 0);
}
function updateCartBadge() {
    const badge = document.getElementById('cart-count');
    if (badge) badge.textContent = cartQtyTotal();
}

function showToast(message) {
    const wrap = document.getElementById('fs-toast-wrap');
    if (!wrap) return;
    const el = document.createElement('div');
    el.className = 'fs-toast';
    el.innerHTML = '<i class="bi bi-check-circle-fill"></i><span></span>';
    el.querySelector('span').textContent = message;
    wrap.appendChild(el);
    setTimeout(() => { el.style.opacity = '0'; el.style.transition = 'opacity .3s'; }, 2400);
    setTimeout(() => el.remove(), 2800);
}

function addToCart(id, variant, qty) {
    const product = PRODUCTS[id];
    if (!product) return;
    const cart = getCart();
    const found = cart.find((i) => i.id === id && i.variant === variant);
    if (found) found.qty += qty;
    else cart.push({ id, variant, qty });
    saveCart(cart);
    showToast(product.name + ' (' + variant + ') ditambahkan ke keranjang');
}

document.addEventListener('DOMContentLoaded', () => {
    updateCartBadge();

    /* ----- Navbar aktif ----- */
    const path = window.location.pathname.replace(/\/$/, '') || '/';
    document.querySelectorAll('[data-nav]').forEach((link) => {
        const target = link.getAttribute('data-nav');
        const active = target === '/'
            ? path === '/'
            : path === target || path.startsWith(target + '/');
        if (active) link.classList.add('active');
    });

    /* ----- Tahun footer ----- */
    const yearEl = document.getElementById('fs-year');
    if (yearEl) yearEl.textContent = new Date().getFullYear();

    /* ----- Tombol kembali ke atas ----- */
    const toTop = document.getElementById('fs-to-top');
    window.addEventListener('scroll', () => {
        if (toTop) toTop.classList.toggle('show', window.scrollY > 400);
    }, { passive: true });
    if (toTop) toTop.addEventListener('click', (e) => {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    /* ----- Reveal on scroll ----- */
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) entry.target.classList.add('revealed');
        });
    }, { threshold: 0.12 });
    document.querySelectorAll('.reveal').forEach((el) => observer.observe(el));

    /* ----- Wishlist (simulasi) ----- */
    document.querySelectorAll('[data-wish]').forEach((btn) => {
        btn.addEventListener('click', () => {
            btn.classList.toggle('active');
            const on = btn.classList.contains('active');
            showToast(on
                ? btn.getAttribute('data-wish') + ' disimpan ke favorit'
                : btn.getAttribute('data-wish') + ' dihapus dari favorit');
        });
    });

    /* ----- Tambah ke keranjang (kartu produk) ----- */
    document.querySelectorAll('[data-add-to-cart]').forEach((btn) => {
        btn.addEventListener('click', () => {
            const id = btn.getAttribute('data-id');
            const product = PRODUCTS[id];
            if (!product) return;
            let variant = product.variants[0];
            const activePill = document.querySelector('.variant-pill.active');
            if (activePill) variant = activePill.getAttribute('data-variant');
            let qty = 1;
            const qtyInput = document.getElementById('detail-qty');
            if (qtyInput) qty = Math.max(1, parseInt(qtyInput.value, 10) || 1);
            addToCart(id, variant, qty);
        });
    });

    /* ----- Beli sekarang (halaman detail) ----- */
    const buyNow = document.getElementById('buy-now');
    if (buyNow) {
        buyNow.addEventListener('click', () => {
            const id = buyNow.getAttribute('data-id');
            const product = PRODUCTS[id];
            if (!product) return;
            let variant = product.variants[0];
            const activePill = document.querySelector('.variant-pill.active');
            if (activePill) variant = activePill.getAttribute('data-variant');
            const qtyInput = document.getElementById('detail-qty');
            const qty = qtyInput ? Math.max(1, parseInt(qtyInput.value, 10) || 1) : 1;
            addToCart(id, variant, qty);
            window.location.href = '/cart';
        });
    }

    /* ----- Stepper quantity umum ----- */
    document.querySelectorAll('[data-qty-btn]').forEach((btn) => {
        btn.addEventListener('click', () => {
            const input = document.getElementById(btn.getAttribute('data-qty-target'));
            if (!input) return;
            let val = parseInt(input.value, 10) || 1;
            val = btn.getAttribute('data-qty-btn') === 'plus' ? val + 1 : Math.max(1, val - 1);
            input.value = val;
        });
    });

    /* ----- Pilihan varian ----- */
    document.querySelectorAll('.variant-pill').forEach((pill) => {
        pill.addEventListener('click', () => {
            document.querySelectorAll('.variant-pill').forEach((p) => p.classList.remove('active'));
            pill.classList.add('active');
            const label = document.getElementById('selected-variant-label');
            if (label) label.textContent = pill.getAttribute('data-variant');
        });
    });

    /* ----- Galeri detail ----- */
    document.querySelectorAll('[data-gallery-thumb]').forEach((thumb) => {
        thumb.addEventListener('click', () => {
            const main = document.getElementById('gallery-main');
            if (main) main.src = thumb.getAttribute('data-gallery-thumb');
            document.querySelectorAll('[data-gallery-thumb]').forEach((t) => t.classList.remove('active'));
            thumb.classList.add('active');
        });
    });

    /* ----- Katalog: pencarian & filter ----- */
    const searchInput = document.getElementById('product-search');
    const filterBtns = document.querySelectorAll('.filter-btn');
    const countEl = document.getElementById('catalog-count');
    const emptyEl = document.getElementById('catalog-empty');
    let activeCategory = 'all';

    function applyCatalogFilter() {
        const q = searchInput ? searchInput.value.trim().toLowerCase() : '';
        let shown = 0;
        document.querySelectorAll('.product-card-item').forEach((card) => {
            const name = card.getAttribute('data-name') || '';
            const cats = (card.getAttribute('data-category') || '').split(' ');
            const matchQ = !q || name.includes(q);
            const matchC = activeCategory === 'all' || cats.includes(activeCategory);
            const visible = matchQ && matchC;
            const col = card.parentElement;
            if (col && col.className.indexOf('col-') !== -1) col.style.display = visible ? '' : 'none';
            else card.style.display = visible ? '' : 'none';
            if (visible) shown += 1;
        });
        if (countEl) countEl.textContent = 'Menampilkan ' + shown + ' produk';
        if (emptyEl) emptyEl.style.display = shown === 0 ? '' : 'none';
    }

    if (searchInput) searchInput.addEventListener('input', applyCatalogFilter);
    filterBtns.forEach((btn) => {
        btn.addEventListener('click', () => {
            filterBtns.forEach((b) => b.classList.remove('active'));
            btn.classList.add('active');
            activeCategory = btn.getAttribute('data-filter');
            applyCatalogFilter();
        });
    });
    if (searchInput || filterBtns.length) {
        const catParam = new URLSearchParams(window.location.search).get('cat');
        if (catParam) {
            const match = document.querySelector('[data-filter="' + catParam + '"]');
            if (match) match.click();
            else applyCatalogFilter();
        } else {
            applyCatalogFilter();
        }
    }

    /* ----- Halaman keranjang ----- */
    const cartItemsEl = document.getElementById('cart-items');
    if (cartItemsEl) {
        renderCartPage();
        cartItemsEl.addEventListener('click', (e) => {
            const inc = e.target.closest('[data-cart-inc]');
            const dec = e.target.closest('[data-cart-dec]');
            const del = e.target.closest('[data-cart-remove]');
            const cart = getCart();
            if (inc) {
                cart[+inc.getAttribute('data-cart-inc')].qty += 1;
                saveCart(cart); renderCartPage();
            } else if (dec) {
                const idx = +dec.getAttribute('data-cart-dec');
                cart[idx].qty = Math.max(1, cart[idx].qty - 1);
                saveCart(cart); renderCartPage();
            } else if (del) {
                const idx = +del.getAttribute('data-cart-remove');
                const item = cart[idx];
                Swal.fire({
                    title: 'Hapus dari keranjang?',
                    text: PRODUCTS[item.id].name + ' (' + item.variant + ')',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, hapus',
                    cancelButtonText: 'Batal',
                    confirmButtonColor: '#E91E83',
                }).then((res) => {
                    if (res.isConfirmed) {
                        const c = getCart();
                        c.splice(idx, 1);
                        saveCart(c); renderCartPage();
                        showToast('Item dihapus dari keranjang');
                    }
                });
            }
        });
    }

    function renderCartPage() {
        const cart = getCart();
        const empty = document.getElementById('cart-empty');
        const summary = document.getElementById('cart-summary');
        const subtotalEl = document.getElementById('cart-subtotal');
        const totalEl = document.getElementById('cart-total');
        if (!cartItemsEl) return;
        if (cart.length === 0) {
            cartItemsEl.innerHTML = '';
            if (empty) empty.style.display = '';
            if (summary) summary.style.display = 'none';
            return;
        }
        if (empty) empty.style.display = 'none';
        if (summary) summary.style.display = '';
        let subtotal = 0;
        cartItemsEl.innerHTML = cart.map((item, idx) => {
            const p = PRODUCTS[item.id];
            const line = p.price * item.qty;
            subtotal += line;
            return '<div class="fs-cart-row d-flex gap-3 align-items-center mb-3">'
                + '<img class="fs-cart-thumb" src="' + p.image + '" alt="' + p.name + '">'
                + '<div class="flex-grow-1">'
                + '<h6 class="mb-1">' + p.name + '</h6>'
                + '<small class="text-muted">Varian: ' + item.variant + ' &middot; ' + formatRupiah(p.price) + '</small>'
                + '<div class="d-flex align-items-center gap-3 mt-2">'
                + '<div class="fs-qty"><button type="button" data-cart-dec="' + idx + '">&minus;</button>'
                + '<input value="' + item.qty + '" readonly aria-label="Jumlah">'
                + '<button type="button" data-cart-inc="' + idx + '">+</button></div>'
                + '<span class="fs-line-total">' + formatRupiah(line) + '</span>'
                + '</div></div>'
                + '<button type="button" class="fs-remove" data-cart-remove="' + idx + '" aria-label="Hapus item"><i class="bi bi-trash"></i></button>'
                + '</div>';
        }).join('');
        if (subtotalEl) subtotalEl.textContent = formatRupiah(subtotal);
        if (totalEl) totalEl.textContent = formatRupiah(subtotal);
    }

    /* ----- Halaman checkout ----- */
    const checkoutSummary = document.getElementById('checkout-summary');
    if (checkoutSummary) {
        renderCheckoutSummary();
        document.querySelectorAll('input[name="delivery"]').forEach((radio) => {
            radio.addEventListener('change', renderCheckoutSummary);
        });
        const form = document.getElementById('checkout-form');
        if (form) {
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                if (!validateCheckout(form)) return;
                const orderNo = 'FS-' + Math.floor(10000 + Math.random() * 90000);
                Swal.fire({
                    title: 'Pesanan berhasil dibuat!',
                    html: 'Nomor pesanan simulasi: <strong>' + orderNo + '</strong><br>'
                        + 'Ini hanya simulasi frontend — tidak ada pesanan sungguhan yang dikirim.',
                    icon: 'success',
                    confirmButtonText: 'Kembali ke Beranda',
                    confirmButtonColor: '#E91E83',
                }).then(() => {
                    localStorage.removeItem(CART_KEY);
                    updateCartBadge();
                    window.location.href = '/';
                });
            });
        }
    }

    function renderCheckoutSummary() {
        const cart = getCart();
        const empty = document.getElementById('checkout-empty');
        const body = document.getElementById('checkout-summary-body');
        const subEl = document.getElementById('co-subtotal');
        const feeEl = document.getElementById('co-fee');
        const totalEl = document.getElementById('co-total');
        const btn = document.getElementById('place-order-btn');
        if (!body) return;
        if (cart.length === 0) {
            body.innerHTML = '';
            if (empty) empty.style.display = '';
            if (btn) btn.disabled = true;
            if (subEl) subEl.textContent = formatRupiah(0);
            if (feeEl) feeEl.textContent = formatRupiah(0);
            if (totalEl) totalEl.textContent = formatRupiah(0);
            return;
        }
        if (empty) empty.style.display = 'none';
        if (btn) btn.disabled = false;
        let subtotal = 0;
        body.innerHTML = cart.map((item) => {
            const p = PRODUCTS[item.id];
            const line = p.price * item.qty;
            subtotal += line;
            return '<div class="d-flex justify-content-between gap-2 mb-2">'
                + '<span>' + p.name + ' <small class="text-muted">(' + item.variant + ' &times; ' + item.qty + ')</small></span>'
                + '<strong>' + formatRupiah(line) + '</strong></div>';
        }).join('');
        const delivery = document.querySelector('input[name="delivery"]:checked');
        const fee = delivery && delivery.value === 'antar' ? DELIVERY_FEE : 0;
        if (subEl) subEl.textContent = formatRupiah(subtotal);
        if (feeEl) feeEl.textContent = formatRupiah(fee);
        if (totalEl) totalEl.textContent = formatRupiah(subtotal + fee);
    }

    function validateCheckout(form) {
        let valid = true;
        const mark = (el, ok) => {
            el.classList.toggle('is-invalid', !ok);
            if (!ok) valid = false;
        };
        const name = form.querySelector('#co-name');
        const wa = form.querySelector('#co-wa');
        const address = form.querySelector('#co-address');
        const delivery = form.querySelector('input[name="delivery"]:checked');
        const payment = form.querySelector('input[name="payment"]:checked');
        mark(name, name.value.trim().length >= 3);
        mark(wa, /^08\d{8,11}$/.test(wa.value.trim()));
        mark(address, delivery && delivery.value === 'ambil' ? true : address.value.trim().length >= 10);
        if (!delivery || !payment) {
            valid = false;
            showToast('Pilih metode pengiriman dan pembayaran');
        }
        if (!valid) showToast('Periksa kembali formulir yang ditandai merah');
        return valid;
    }
});
