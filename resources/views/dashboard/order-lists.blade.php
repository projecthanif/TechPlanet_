<x-layout>
    <x-nav :nav="$nav" :list="$list" />
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
                                            <div class="card-title d-flex align-items-baseline justify-content-between">
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
                                            <div class="card-title d-flex align-items-baseline justify-content-between">
                                                <div>
                                                    <h3 class="card-title mb-2">7</h3>
                                                    <span class="fw-semibold d-block mb-1">Refunded</span>
                                                </div>
                                                <div class="avatar flex-shrink-0">
                                                    <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card"
                                                        class="rounded" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12 col-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title d-flex align-items-baseline justify-content-between">
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
