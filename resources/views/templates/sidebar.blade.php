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
                        <i class="nav-icon bi bi-speedometer2"></i>
                        <p>{{ __('home') }}</p>
                    </a>
                </li>
                @if (checkPermission('shop', 'view'))
                    <li class="nav-item">
                        <a href="{{ route('shop.index') }}"
                            class="nav-link {{ request()->routeIs('shop.index') ? 'bg-white text-dark' : '' }}">
                            <i class="bi bi-shop-window nav-icon"></i>
                            <p>{{ __('shop') }}</p>
                        </a>
                    </li>
                @endif
                {{-- <li class="nav-item">
                    <a href="{{ route('customer_type.index') }}"
                        class="nav-link {{ request()->routeIs('customer_type.index') ? 'bg-white text-dark' : '' }}">
                        <i class="nav-icon bi bi-palette"></i>
                        <p>Customer Type</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('customer.index') }}"
                        class="nav-link {{ request()->routeIs('customer.index') ? 'bg-white text-dark' : '' }}">
                        <i class="nav-icon bi bi-palette"></i>
                        <p>{{ __('customer') }}</p>
                    </a>
                </li> --}}
                @if (checkPermission('product_category', 'view'))
                    <li class="nav-item">
                        <a href="{{ route('product_category.index') }}"
                            class="nav-link {{ request()->routeIs('product_category.index') ? 'bg-white text-dark' : '' }}">
                            <i class="bi bi-box nav-icon"></i>
                            <p>{{ __('product_category') }}</p>
                        </a>
                    </li>
                @endif
                @if (checkPermission('product', 'view'))
                    <li class="nav-item">
                        <a href="{{ route('product.index') }}"
                            class="nav-link {{ request()->routeIs('product.index') ? 'bg-white text-dark' : '' }}">
                            <i class="bi bi-box nav-icon"></i>
                            <p>{{ __('product') }}</p>
                        </a>
                    </li>
                @endif
                {{-- menu-open --}}
                @if (checkPermission('role', 'view') || checkPermission('user', 'view'))
                    <li
                        class="nav-item {{ request()->routeIs('user.index') || request()->routeIs('role.index') ? 'menu-open' : '' }}">
                        {{-- active --}}
                        <a href="#"
                            class="nav-link {{ request()->routeIs('user.index') || request()->routeIs('role.index') ? 'active' : '' }}">
                            <i class="bi bi-gear-wide-connected nav-icon"></i>
                            <p>
                                {{ __('settings') }}
                                <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @if (checkPermission('role', 'view'))
                                <li class="nav-item">
                                    {{-- active --}}
                                    <a href="{{ route('role.index') }}"
                                        class="nav-link {{ request()->routeIs('role.index') ? 'bg-white text-dark' : '' }}">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>{{ __('role') }}</p>
                                    </a>
                                </li>
                            @endif
                            @if (checkPermission('user', 'view'))
                                <li class="nav-item">
                                    {{-- active --}}
                                    <a href="{{ route('user.index') }}"
                                        class="nav-link {{ request()->routeIs('user.index') ? 'bg-white text-dark' : '' }}">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>{{ __('user') }}</p>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </li>
                    @if (\Illuminate\Support\Facades\Route::has('permission.index'))
                        <li class="nav-item">
                            <a href="{{ route('permission.index') }}"
                                class="nav-link {{ request()->routeIs('permission.index') || request()->routeIs('permission_feature.index') ? 'bg-white text-dark' : '' }}">
                                <i class="bi bi-gear-wide-connected nav-icon"></i>
                                <p>Permission</p>
                            </a>
                        </li>
                    @endif
                @endif
            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>
