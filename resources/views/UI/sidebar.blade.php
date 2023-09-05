<!-- Sidebar Start -->
<aside class="left-sidebar border border-primary">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="#" class="text-nowrap logo-img">
                <div class="fw-bolder fs-6 text-dark">Admin Dashboard</div>
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="fa-solid fa-x fs-4"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('adminindex') }}" aria-expanded="false">
                        <span>
                            <i class="fa-solid fa-house"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Menu</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('useradmin') }}" aria-expanded="false">
                        <span>
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span class="hide-menu">User</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('nasabah') }}" aria-expanded="false">
                        <span>
                            <i class="fa-solid fa-clipboard-user"></i>
                        </span>
                        <span class="hide-menu">Nasabah</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('pinjaman') }}" aria-expanded="false">
                        <span>
                            <i class="fa-solid fa-wallet"></i>
                        </span>
                        <span class="hide-menu">Pinjaman</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!--  Sidebar End -->