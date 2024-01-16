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
                    <li class="menu-item">
                        <a href="/product/create" class="menu-link">
                            <div data-i18n="Notifications">Add Product</div>
                        </a>
                    </li>
                    <li class="menu-item active">
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
                    Category List
                </h4>

                <div class="row">
                    <div class="col-md-12">
                        <!-- Outline -->
                        <div class="card mb-4">
                            <!-- Account -->
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-baseline">
                                    <div class="mb-3 col-md-4">
                                        <input class="form-control" type="text" name="category" id="category"
                                            placeholder="Search Category" />
                                    </div>
                                    <div class="mt-3">
                                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasEnd" aria-controls="offcanvasEnd">
                                            Toggle End
                                        </button>
                                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd"
                                            aria-labelledby="offcanvasEndLabel">
                                            <div class="offcanvas-header">
                                                <h5 id="offcanvasEndLabel" class="offcanvas-title">
                                                    Offcanvas End
                                                </h5>
                                                <button type="button" class="btn-close text-reset"
                                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                                                <p class="text-center">
                                                    Lorem ipsum, or lipsum as it is sometimes known,
                                                    is dummy text used in laying out print, graphic
                                                    or web designs. The passage is attributed to an
                                                    unknown typesetter in the 15th century who is
                                                    thought to have scrambled parts of Cicero's De
                                                    Finibus Bonorum et Malorum for use in a type
                                                    specimen book.
                                                </p>
                                                <button type="button" class="btn btn-primary mb-2 d-grid w-100">
                                                    Continue
                                                </button>
                                                <button type="button" class="btn btn-outline-secondary d-grid w-100"
                                                    data-bs-dismiss="offcanvas">
                                                    Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-0" />
                            <div class="card-body">
                                <div class="table-responsive text-nowrap">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>CATEGORIES</th>
                                                <th>TOTAL PRODUCT</th>
                                                <th>TOTAL EARNINGS</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            <tr>
                                                <td class="d-flex align-items-center">
                                                    <strong class="mx-3">Angular Project</strong>
                                                </td>
                                                <td>Albert Cook</td>
                                                <td>$2000</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button"
                                                            class="btn p-0 dropdown-toggle hide-arrow"
                                                            data-bs-toggle="dropdown">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="bx bx-edit-alt me-1"></i>
                                                                Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="bx bx-trash me-1"></i>
                                                                Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
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
    <!-- / Layout page -->

</x-layout>
