<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header d-flex justify-content-center">
            <a class="header-brand" href="{{ url('/home') }}">
                {{ config('app.name') }}
            </a>
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                    fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>
            <ul class="side-menu">
                <li class="sub-category">
                    <h3>Home</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ url('/home') }}"><i
                            class="side-menu__icon fe fe-home"></i><span
                            class="side-menu__label">Dashboard</span></a>
                </li>
                <li class="sub-category">
                    <h3>TOKO</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="#"><i
                            class="side-menu__icon fe fe-shopping-bag"></i><span
                            class="side-menu__label">Kasir</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="#"><i
                            class="side-menu__icon fe fe-grid"></i><span
                            class="side-menu__label">Etalase</span></a>
                </li>
                <li class="sub-category">
                    <h3>MANAGEMENT TOKO</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ url('/gudang') }}"><i
                            class="side-menu__icon fe fe-database"></i><span
                            class="side-menu__label">Gudang</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ url('/produk') }}"><i
                            class="side-menu__icon fe fe-box"></i><span
                            class="side-menu__label">Produk</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ url('') }}"><i
                            class="side-menu__icon fe fe-layers"></i><span
                            class="side-menu__label">Management Stok</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ url('/member') }}"><i
                            class="side-menu__icon fe fe-user"></i><span
                            class="side-menu__label">Member</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ url('/pengeluaran') }}"><i
                            class="side-menu__icon fe fe-activity"></i><span
                            class="side-menu__label">Pengeluaran</span></a>
                </li>
                <li class="slide">
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ url('') }}"><i
                            class="side-menu__icon fe fe-book-open"></i><span
                            class="side-menu__label">Laporan Keuangan</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!--/APP-SIDEBAR-->
</div>