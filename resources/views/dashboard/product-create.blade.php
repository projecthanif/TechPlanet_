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
                    Add Product
                </h4>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <!-- Notifications -->
                            <div class="card-body">
                                <h4>Product information</h4>
                                <form action="" id="formAccountSettings" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="row">
                                        <div class="mb-3 col-md-12">
                                            <div class="input-group">
                                                <input type="file" name="image" class="form-control"
                                                    id="inputGroupFile02" />
                                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                            </div>
                                            @error('image')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="mb-3 col-md-8">
                                            <label for="" class="form-label">Product Name</label>
                                            <input class="form-control" type="text" id="firstName" name="name"
                                                placeholder="Product title" autofocus />
                                        </div>
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <div class="mb-3 col-md-6">
                                            <label for="lastName" class="form-label">Pricing</label>
                                            <input class="form-control" type="number" name="price" id="price" />
                                        </div>
                                        @error('price')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <div class="mb-3 col-md-6">
                                            <label for="discount" class="form-label">Discount</label>
                                            <input class="form-control" type="number" id="discount" name="discount"
                                                placeholder="Discount" />
                                        </div>
                                        @error('discount')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="country">Category</label>
                                            <select id="country" class="select2 form-select" name="category">
                                                <option value="">Select</option>
                                                @foreach ($categories as $category)
                                                    <x-category-option :category="$category" />
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('category')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <div class="mb-3 col-md-6">
                                            <label for="discount" class="form-label">Quantity</label>
                                            <input class="form-control" type="number" id="discount" name="qty"
                                                placeholder="Quantity" />
                                        </div>
                                        @error('category')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                    </div>
                                    @error('description')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
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
