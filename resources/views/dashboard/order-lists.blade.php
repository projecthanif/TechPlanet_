<x-layout>
    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
            <a href="/dashboard" class="app-brand-link">
                <span class="app-brand-text fs-4 menu-text fw-bolder ms-2">Tech<span
                        class="text-danger">Panet</span></span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
                <a href="/dashboard" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Analytics">Dashboard</div>
                </a>
            </li>

            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Pages</span>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-dock-top"></i>
                    <div data-i18n="Account Settings">Product</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="/product/lists" class="menu-link">
                            <div data-i18n="Account">Product List</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/product/create" class="menu-link">
                            <div data-i18n="Notifications">Add Product</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/product/category" class="menu-link">
                            <div data-i18n="Connections">Category List</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item active open">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-dock-top"></i>
                    <div data-i18n="Account Settings">Order</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item active">
                        <a href="/order/lists" class="menu-link">
                            <div data-i18n="Account">Order List</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-dock-top"></i>
                    <div data-i18n="Account Settings">Customer</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="/customer/lists" class="menu-link">
                            <div data-i18n="Account">Customer List</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
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
            </li>
        </ul>
    </aside>
    <!-- / Menu -->

    <!-- Layout container -->
    <div class="layout-page">
        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-3 mb-4">
                    <span class="text-muted fw-light">eCommerce /</span>
                    Order List
                </h4>

                <div class="row">
                    <div class="col-md-12">
                        <div class="col-12 col-md-8 col-lg-12 order-3 order-md-2">
                            <div class="row">
                                <div class="col-lg-3 col-md-12 col-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title d-flex align-items-baseline justify-content-between">
                                                <div>
                                                    <h3 class="card-title mb-2">57</h3>
                                                    <span class="fw-semibold d-block mb-1">Pending Payment</span>
                                                </div>
                                                <div class="avatar flex-shrink-0">
                                                    <img src="../assets/img/icons/unicons/chart-success.png"
                                                        alt="chart success" class="rounded" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12 col-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div
                                                class="card-title d-flex align-items-baseline justify-content-between">
                                                <div>
                                                    <h3 class="card-title mb-2">857</h3>
                                                    <span class="fw-semibold d-block mb-1">Completed</span>
                                                </div>
                                                <div class="avatar flex-shrink-0">
                                                    <img src="../assets/img/icons/unicons/wallet-info.png"
                                                        alt="Credit Card" class="rounded" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12 col-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div
                                                class="card-title d-flex align-items-baseline justify-content-between">
                                                <div>
                                                    <h3 class="card-title mb-2">7</h3>
                                                    <span class="fw-semibold d-block mb-1">Refunded</span>
                                                </div>
                                                <div class="avatar flex-shrink-0">
                                                    <img src="../assets/img/icons/unicons/paypal.png"
                                                        alt="Credit Card" class="rounded" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12 col-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div
                                                class="card-title d-flex align-items-baseline justify-content-between">
                                                <div>
                                                    <h3 class="card-title mb-2">12</h3>
                                                    <span class="fw-semibold d-block mb-1">Failed</span>
                                                </div>
                                                <div class="avatar flex-shrink-0">
                                                    <img src="../assets/img/icons/unicons/cc-primary.png"
                                                        alt="Credit Card" class="rounded" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Outline -->
                        <div class="card mb-4">
                            <!-- Account -->
                            <div class="card-body">
                                <div class="table-responsive text-nowrap">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ORDER</th>
                                                <th>DATE</th>
                                                <th>CUSTOMER</th>
                                                <th>PAYMENT STATUS</th>
                                                <th>METHOD</th>
                                                <th>ACTIONS</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /Account -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Content -->

            <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
    </div>

</x-layout>
