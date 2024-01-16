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
                    <li class="menu-item">
                        <a href="/product/lists" class="menu-link">
                            <div data-i18n="Account">Product List</div>
                        </a>
                    </li>
                    <li class="menu-item active">
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
                    Add Product
                </h4>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <!-- Notifications -->
                            <div class="card-body">
                                <h4>Product information</h4>
                                <form id="formAccountSettings" method="POST" onsubmit="return false">
                                    <div class="row">
                                        <div class="mb-3 col-md-12">
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="inputGroupFile02" />
                                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-8">
                                            <label for="" class="form-label">Product Name</label>
                                            <input class="form-control" type="text" id="firstName"
                                                name="firstName" placeholder="Product title" autofocus />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="lastName" class="form-label">Pricing</label>
                                            <input class="form-control" type="number" name="price"
                                                id="lastName" />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="discount" class="form-label">Discount</label>
                                            <input class="form-control" type="number" id="discount"
                                                name="discount" placeholder="Discount" />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="country">Category</label>
                                            <select id="country" class="select2 form-select">
                                                <option value="">Select</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="exampleFormControlTextarea1"
                                            class="form-label">Description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                    </div>
                                    <div class="mt-2">
                                        <button type="submit" class="btn btn-primary me-2">
                                            Save changes
                                        </button>
                                        <button type="reset" class="btn btn-outline-secondary">
                                            Cancel
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- /Notifications -->
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
