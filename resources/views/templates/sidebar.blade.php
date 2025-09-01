<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="./index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img src="{{ asset('assets/dashboard/dist/assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                class="brand-image opacity-75 shadow" />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">AdminLTE 4</span>
            <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation"
                aria-label="Main navigation" data-accordion="false" id="navigation">
                <li class="nav-item">
                    <a href="{{ route('home') }}"
                        class="nav-link {{ request()->routeIs('home') ? 'bg-white text-dark' : '' }}">
                        <i class="nav-icon bi bi-palette"></i>
                        <p>{{ __('home') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('customer.index') }}"
                        class="nav-link {{ request()->routeIs('customer.index') ? 'bg-white text-dark' : '' }}">
                        <i class="nav-icon bi bi-palette"></i>
                        <p>{{ __('customer') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('product.index') }}"
                        class="nav-link {{ request()->routeIs('product.index') ? 'bg-white text-dark' : '' }}">
                        <i class="nav-icon bi bi-palette"></i>
                        <p>Product</p>
                    </a>
                </li>
                {{-- menu-open --}}
                <li class="nav-item {{ request()->routeIs('user.index') ? 'menu-open' : '' }}">
                    {{-- active --}}
                    <a href="#" class="nav-link {{ request()->routeIs('user.index') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Settings
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            {{-- active --}}
                            <a href="{{ route('user.index') }}"
                                class="nav-link {{ request()->routeIs('user.index') ? 'bg-white text-dark' : '' }}">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>User</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>
