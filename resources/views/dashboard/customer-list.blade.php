<x-layout>
    <!-- / Menu -->
    <x-nav :nav="$nav" :list="$list" />
    <!-- Layout container -->
    <div class="layout-page">
        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-3 mb-4">
                    <span class="text-muted fw-light">eCommerce /</span>
                    Customer List
                </h4>

                <div class="row">
                    <div class="col-md-12">
                        <!-- Outline -->
                        <div class="card mb-4">
                            <!-- Account -->
                            <div class="card-body">
                                <div class="table-responsive text-nowrap">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No. ORDER</th>
                                                <th>DATE REGISTERED</th>
                                                <th>CUSTOMER NAME</th>
                                                <th>CUSTOMER TYPE</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            @unless (count($users) === 0)
                                                @foreach ($users as $user)
                                                    <x-customer-list :user="$user" />
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
