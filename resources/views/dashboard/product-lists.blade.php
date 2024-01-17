<x-layout>
    <!-- Menu -->

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
            <li class="menu-item active open">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-dock-top"></i>
                    <div data-i18n="Account Settings">Product</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item active">
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
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-dock-top"></i>
                    <div data-i18n="Account Settings">Order</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
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
                    Product List
                </h4>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-12 col-md-8 col-lg-12 order-3 order-md-2">
                            <div class="row">
                                <div class="col-lg-3 col-md-12 col-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title d-flex align-items-start justify-content-between">
                                                <div class="avatar flex-shrink-0">
                                                    <img src="../assets/img/icons/unicons/chart-success.png"
                                                        alt="chart success" class="rounded" />
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn p-0" type="button" id="cardOpt3"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="cardOpt3">
                                                        <a class="dropdown-item" href="javascript:void(0);">View
                                                            More</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="fw-semibold d-block mb-1">Profit</span>
                                            <h3 class="card-title mb-2">$12,628</h3>
                                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                                +72.80%</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12 col-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title d-flex align-items-start justify-content-between">
                                                <div class="avatar flex-shrink-0">
                                                    <img src="../assets/img/icons/unicons/wallet-info.png"
                                                        alt="Credit Card" class="rounded" />
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn p-0" type="button" id="cardOpt6"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="cardOpt6">
                                                        <a class="dropdown-item" href="javascript:void(0);">View
                                                            More</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <span>Sales</span>
                                            <h3 class="card-title text-nowrap mb-1">$4,679</h3>
                                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                                +28.42%</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12 col-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title d-flex align-items-start justify-content-between">
                                                <div class="avatar flex-shrink-0">
                                                    <img src="../assets/img/icons/unicons/paypal.png"
                                                        alt="Credit Card" class="rounded" />
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn p-0" type="button" id="cardOpt4"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="cardOpt4">
                                                        <a class="dropdown-item" href="javascript:void(0);">View
                                                            More</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="d-block mb-1">Payments</span>
                                            <h3 class="card-title text-nowrap mb-2">$2,456</h3>
                                            <small class="text-danger fw-semibold"><i
                                                    class="bx bx-down-arrow-alt"></i>
                                                -14.82%</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12 col-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title d-flex align-items-start justify-content-between">
                                                <div class="avatar flex-shrink-0">
                                                    <img src="../assets/img/icons/unicons/cc-primary.png"
                                                        alt="Credit Card" class="rounded" />
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn p-0" type="button" id="cardOpt1"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                                        <a class="dropdown-item" href="javascript:void(0);">View
                                                            More</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="fw-semibold d-block mb-1">Transactions</span>
                                            <h3 class="card-title mb-2">$14,857</h3>
                                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                                +28.14%</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Outline -->
                        <div class="card mb-4">
                            <!-- Account -->
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-baseline">
                                    <div class="mb-3 col-md-4">
                                        <label for="lastName" class="form-label">Product Name</label>
                                        <input class="form-control" type="text" name="search" id="search"
                                            placeholder="Search Product" />
                                    </div>
                                    <div class="mt-2">
                                        <a href="/product/create">
                                            <button type="submit" class="btn btn-primary me-2">
                                                Add Product
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-0" />
                            <div class="card-body">
                                <div class="table-responsive text-nowrap">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Category</th>
                                                <th>Stock</th>
                                                <th>QTY</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            @unless (count($products) == 0)
                                                @foreach ($products as $product)
                                                    <x-listing-row :product="$product" />
                                                @endforeach
                                            @endunless
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
    <!-- / Layout page -->

</x-layout>
