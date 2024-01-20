<x-layout>
    <!-- Menu -->

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
                    Blogs
                </h4>

                <!-- Grid Card -->
                <h6 class="pb-1 mb-4 text-muted">Grid Card</h6>
                <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
                    @for ($i = 0; $i < 6; $i++)
                        <x-dash-blog-card />
                    @endfor
                </div>
            </div>
            <!-- / Content -->

            <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->

</x-layout>
