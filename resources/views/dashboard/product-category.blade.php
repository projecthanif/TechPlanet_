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
                                            Create Category
                                        </button>
                                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd"
                                            aria-labelledby="offcanvasEndLabel">
                                            <div class="offcanvas-header">
                                                <h5 id="offcanvasEndLabel" class="offcanvas-title">
                                                    Category Name
                                                </h5>
                                                <button type="button" class="btn-close text-reset"
                                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                                                <form action="/product/category/create" method="post">
                                                    @csrf
                                                    @method('POST')
                                                    <div class="mb-3 col-md-8 w-100">
                                                        <label for="" class="form-label">Category Name</label>
                                                        <input class="form-control" type="text" id="firstName"
                                                            name="name" placeholder="Product title" />
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mb-2 d-grid w-100">
                                                        Continue
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-outline-secondary d-grid w-100"
                                                        data-bs-dismiss="offcanvas">
                                                        Cancel
                                                    </button>
                                                </form>
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
                                            @foreach ($categories as $category)
                                                <x-category-list :category="$category" />
                                            @endforeach
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
