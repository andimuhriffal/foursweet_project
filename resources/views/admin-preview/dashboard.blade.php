@extends('layouts.app')

@section('title', 'Admin Preview — FOUR SWEET')

@section('content')
<section class="fs-page-head">
    <div class="container">
        <h1>Admin Preview</h1>
        <p>Halaman pratinjau dasbor admin dengan data dummy. <strong>Tanpa backend, tanpa database</strong> — murni tampilan.</p>
    </div>
</section>

<section class="fs-section" style="padding-top:2.5rem;">
    <div class="container">
        <div class="alert alert-warning" role="alert">
            <i class="bi bi-exclamation-triangle me-1"></i>
            Halaman ini hanya preview UI. Angka, pesanan, dan stok di bawah ini adalah data dummy statis.
        </div>

        <div class="row g-4 mb-4">
            <div class="col-6 col-lg-3">
                <div class="fs-admin-stat"><i class="bi bi-basket2"></i><strong>2</strong><span>Total Produk</span></div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="fs-admin-stat"><i class="bi bi-receipt"></i><strong>18</strong><span>Pesanan Hari Ini</span></div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="fs-admin-stat"><i class="bi bi-cash-coin"></i><strong>Rp216.000</strong><span>Pendapatan Hari Ini</span></div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="fs-admin-stat"><i class="bi bi-people"></i><strong>132</strong><span>Total Pelanggan</span></div>
            </div>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-lg-8">
                <div class="fs-form-card">
                    <h5>Penjualan 7 Hari Terakhir (dummy)</h5>
                    <div class="fs-bars">
                        <div class="fs-bar" style="height:35%;"><span>12</span></div>
                        <div class="fs-bar" style="height:55%;"><span>18</span></div>
                        <div class="fs-bar" style="height:45%;"><span>15</span></div>
                        <div class="fs-bar" style="height:70%;"><span>22</span></div>
                        <div class="fs-bar" style="height:60%;"><span>19</span></div>
                        <div class="fs-bar" style="height:85%;"><span>27</span></div>
                        <div class="fs-bar" style="height:65%;"><span>21</span></div>
                    </div>
                    <div class="fs-bar-labels">
                        <span>Sen</span><span>Sel</span><span>Rab</span><span>Kam</span><span>Jum</span><span>Sab</span><span>Min</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="fs-form-card">
                    <h5>Produk Terlaris (dummy)</h5>
                    <div class="d-flex justify-content-between mb-2"><span>Jelly Ball</span><strong>86 terjual</strong></div>
                    <div class="progress mb-3" style="height:10px;"><div class="progress-bar" style="width:86%;background:var(--pink);"></div></div>
                    <div class="d-flex justify-content-between mb-2"><span>Sweety Potato Cheese Bread</span><strong>48 terjual</strong></div>
                    <div class="progress" style="height:10px;"><div class="progress-bar" style="width:48%;background:var(--pink-dark);"></div></div>
                </div>
            </div>
        </div>

        <div class="fs-form-card mb-4">
            <h5>Pesanan Terbaru (dummy)</h5>
            <div class="table-responsive">
                <table class="table align-middle mb-0">
                    <thead>
                        <tr><th>No. Pesanan</th><th>Pelanggan</th><th>Produk</th><th>Total</th><th>Status</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>FS-48210</td><td>Sinta M.</td><td>Jelly Ball × 3</td><td>Rp18.000</td><td><span class="badge rounded-pill" style="background:var(--pink);">Diproses</span></td></tr>
                        <tr><td>FS-48209</td><td>Raka P.</td><td>Sweety Potato Cheese Bread × 2</td><td>Rp24.000</td><td><span class="badge rounded-pill bg-success">Selesai</span></td></tr>
                        <tr><td>FS-48208</td><td>Putri A.</td><td>Jelly Ball × 2, Bread × 1</td><td>Rp24.000</td><td><span class="badge rounded-pill bg-success">Selesai</span></td></tr>
                        <tr><td>FS-48207</td><td>Dewi L.</td><td>Jelly Ball × 5</td><td>Rp30.000</td><td><span class="badge rounded-pill bg-warning text-dark">Menunggu</span></td></tr>
                        <tr><td>FS-48206</td><td>Andi W.</td><td>Sweety Potato Cheese Bread × 1</td><td>Rp12.000</td><td><span class="badge rounded-pill bg-success">Selesai</span></td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="fs-form-card">
            <h5>Daftar Produk (dummy)</h5>
            <div class="table-responsive">
                <table class="table align-middle mb-0">
                    <thead>
                        <tr><th>Produk</th><th>Harga</th><th>Stok (dummy)</th><th>Status</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>Jelly Ball</td><td>Rp6.000</td><td>120 cup</td><td><span class="badge rounded-pill bg-success">Aktif</span></td></tr>
                        <tr><td>Sweety Potato Cheese Bread</td><td>Rp12.000</td><td>45 pcs</td><td><span class="badge rounded-pill bg-success">Aktif</span></td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
