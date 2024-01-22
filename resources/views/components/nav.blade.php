@props(['nav', 'list'])

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/dashboard" class="app-brand-link">
            <span class="app-brand-text fs-4 menu-text fw-bolder ms-2">Tech<span class="text-danger">Panet</span></span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ $nav == 'dashboard' ? 'active' : '' }}">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pages</span>
        </li>
        <li class="menu-item {{ $nav == 'product' ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Product</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ $nav == 'product' && $list == 'list' ? 'active' : '' }}">
                    <a href="/product/lists" class="menu-link">
                        <div data-i18n="Account">Product List</div>
                    </a>
                </li>
                <li class="menu-item {{ $nav == 'product' && $list == 'add' ? 'active' : '' }}">
                    <a href="/product/create" class="menu-link">
                        <div data-i18n="Notifications">Add Product</div>
                    </a>
                </li>
                <li class="menu-item {{ $nav == 'product' && $list == 'clist' ? 'active' : '' }}">
                    <a href="/product/category" class="menu-link">
                        <div data-i18n="Connections">Category List</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item {{ $nav == 'order' ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Order</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ $nav == 'order' && $list == 'list' ? 'active' : '' }}">
                    <a href="/order/lists" class="menu-link">
                        <div data-i18n="Account">Order List</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item {{ $nav == 'customer' ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Customer</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ $nav == 'customer' && $list == 'list' ? 'active' : '' }}">
                    <a href="/customer/lists" class="menu-link">
                        <div data-i18n="Account">Customer List</div>
                    </a>
                </li>
                {{-- <li class="menu-item {{ $nav == 'customer' && $list == 'index' ? 'active' : '' }}">
                    <a href="/customer/lists" class="menu-link">
                        <div data-i18n="Account">Customer List</div>
                    </a>
                </li> --}}
            </ul>
        </li>
        <li class="menu-item {{ $nav == 'blog' ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Blog</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ $nav == 'blog' && $list == 'list' ? 'active' : '' }}">
                    <a href="/blog/list" class="menu-link">
                        <div data-i18n="Blog List">Blog List</div>
                    </a>
                </li>
                <li class="menu-item {{ $nav == 'blog' && $list == 'create' ? 'active' : '' }}">
                    <a href="/blog/create" class="menu-link">
                        <div data-i18n="Blog New">Create BLog</div>
                    </a>
                </li>
            </ul>
        </li>
        {{-- <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Authentications">Authentications</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="auth-login-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Login</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="auth-register-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Register</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Forgot Password</div>
                    </a>
                </li>
            </ul>
        </li> --}}
    </ul>
</aside>
