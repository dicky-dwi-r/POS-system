<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header d-flex justify-content-center">
            <a class="header-brand" href="{{ url('/home') }}">
                {{ config('app.name') }}
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                    fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>
            <ul class="side-menu">
                <li class="sub-category">
                    <h3>Main</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="index.html"><i
                            class="side-menu__icon fe fe-home"></i><span
                            class="side-menu__label">Dashboard</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-shopping-bag"></i><span
                            class="side-menu__label d-block">TOKO</span><i
                            class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">TOKO</a></li>
                        <li><a href="shop.html" class="slide-item"> Kasir</a></li>
                        <li><a href="shop-description.html" class="slide-item"> Gudang</a></li>
                        <li><a href="cart.html" class="slide-item"> Barang</a></li>
                        <li><a href="add-product.html" class="slide-item"> Data Penjualan</a></li>
                        <li><a href="add-product.html" class="slide-item"> Data Pembelian</a></li>
                        <li><a href="add-product.html" class="slide-item"> Laporan Keuangan</a></li>
                        <li><a href="wishlist.html" class="slide-item"> Member</a></li>
                        <li><a href="wishlist.html" class="slide-item"> Supplier</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/APP-SIDEBAR-->
</div>