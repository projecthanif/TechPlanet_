<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('/front/assets/css/nav.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/assets/css/footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/assets/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="{{ asset('/front/assets/image/64-bit.png') }}" type="image/x-icon">
    <title>TechPlanet</title>
</head>

<body>
    <x-front-nav :nav="$nav" />
    <main>
        <article class="jumbotron">
            <div class="content">
                <h4 class="rl-title-1">Beats Solo</h4>
                <h3 class="rl-title-2">Wireless</h3>
                <h1 class="title">HeadPhone</h1>
            </div>
            <img src="{{ asset('/front/assets/image/Screenshot_2023-12-30_160806-removebg-preview.png') }}"
                alt="" class="jb-image" />
            <div class="content-foot">
                <a href="#">
                    <button class="btn jp">Shop by Categories</button>
                </a>
                <h3 class="desc-title">Description</h3>
                <div class="content-desc">
                    <p class="desc-content">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero
                        totam quod culpa corporis quaerat similique eveniet, quasi dicta.
                        Dicta sunt iure quas quasi. Veritatis accusamus, est esse maiores
                        quidem dolorem!
                    </p>
                </div>
            </div>
        </article>

        <!-- CARDS -->

        <section class="cards">
            <div class="card-sm-1 one">
                <div class="card-detail">
                    <h4 class="fs-4">Enjoy</h4>
                    <h3 class="fs-3">With</h3>
                    <h2 class="fs-2">AIRPODS</h2>
                </div>
                <img src="{{ asset('/front/assets/image/download__1_-removebg-preview.png') }}" alt=""
                    class="card-img" />
                <div class="card-btn one">
                    <a href="#" class="btn-link">
                        <button class="btn-card">Browse</button>
                    </a>
                </div>
            </div>
            <div class="card-sm-1 two">
                <div class="card-detail">
                    <h4 class="fs-4">New</h4>
                    <h3 class="fs-3">Wear</h3>
                    <h2 class="fs-2">Gadgets</h2>
                </div>
                <img src="{{ asset('/front/assets/image/download__2_-removebg-preview.png') }}" alt=""
                    class="card-img" />
                <div class="card-btn two">
                    <a href="#" class="btn-link">
                        <button class="btn-card">Browse</button>
                    </a>
                </div>
            </div>
            <div class="card-lg one">
                <div class="card-detail-lg">
                    <h4 class="fs-4">Trending</h4>
                    <h3 class="fs-3">Devices</h3>
                    <h2 class="fs-2">Laptop</h2>
                </div>
                <img src="{{ asset('/front/assets/image/images__4_-removebg-preview.png') }}" alt=""
                    class="card-img lg-one" />
                <div class="card-btn lg-one">
                    <a href="#" class="btn-link">
                        <button class="btn-card lg-one">Browse</button>
                    </a>
                </div>
            </div>
        </section>
        <section class="cards">
            <div class="card-lg">
                <div class="card-detail-lg">
                    <h4 class="fs-4">Best</h4>
                    <h3 class="fs-3">Gaming</h3>
                    <h2 class="fs-2">Console</h2>
                </div>
                <img src="{{ asset('/front/assets/image/images__4_-removebg-preview.png') }}" alt=""
                    class="card-img lg-one" />
                <div class="card-btn lg-one">
                    <a href="#" class="btn-link">
                        <button class="btn-card lg-one">Browse</button>
                    </a>
                </div>
            </div>
            <div class="card-sm-1 three">
                <div class="card-detail">
                    <h4 class="fs-4">Play</h4>
                    <h3 class="fs-3">Game</h3>
                    <h2 class="fs-2">Virtual</h2>
                </div>
                <img src="{{ asset('/front/assets/image/download__5_-removebg-preview.png') }}" alt=""
                    class="card-img three" />
                <div class="card-btn three">
                    <a href="#" class="btn-link">
                        <button class="btn-card">Browse</button>
                    </a>
                </div>
            </div>
            <div class="card-sm-1 four">
                <div class="card-detail">
                    <h4 class="fs-4">Play</h4>
                    <h3 class="fs-3">Samsung</h3>
                    <h2 class="fs-2">Phone</h2>
                </div>
                <img src="{{ asset('/front/assets/image/download (6).jpg') }}" alt="" class="card-img" />
                <div class="card-btn four">
                    <a href="#" class="btn-link">
                        <button class="btn-card">Browse</button>
                    </a>
                </div>
            </div>
        </section>
        <!-- CARDS END HERE -->

        <!-- INFO -->
        <section>
            <div class="info">
                <div class="info-1">
                    <!-- <img src="" alt=""> -->
                    <h4 class="info-title">Free Shipping</h4>
                    <p class="info-desc">Free Shipping on all order</p>
                </div>
                <div class="info-1">
                    <!-- <img src="" alt=""> -->
                    <h4 class="info-title">Money Guarantee</h4>
                    <p class="info-desc">Get Your Money back after 30 Days</p>
                </div>
                <div class="info-1">
                    <!-- <img src="" alt=""> -->
                    <h4 class="info-title">24/7 Online Support</h4>
                    <p class="info-desc">Get 24/7 Technical Support</p>
                </div>
                <div class="info-1">
                    <!-- <img src="" alt=""> -->
                    <h4 class="info-title">Secure Payment</h4>
                    <p class="info-desc">All Cards Accepted</p>
                </div>
            </div>
        </section>

        <!-- CONTENT-2 -->
        <section>
            <div class="content-2 one">
                <div class="desc-one">
                    <h4 class="per-off">30% OFF</h4>
                    <h2 class="desc-gb-1">Fine Tune</h2>
                    <h4 class="date">26 Nov To 26 Dec 2023</h4>
                </div>
                <div class="desc-two">
                    <h4 class="desc-bg-3">Beats Solo Pro</h4>
                    <h3 class="desc-bg-2">Summer Sale</h3>
                    <p class="desc-p">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem
                        fugiat temporibus provident rerum! Fugiat, modi beatae! Vitae
                        fugiat, ratione amet minus recusandae aliquam dolorem nostrum
                        possimus? Quia libero sequi nostrum.
                    </p>
                    <a href="#" class="btn-links">
                        <button class="btn-content">Browse</button>
                    </a>
                </div>
            </div>
        </section>

        <!-- PRODUCT -->
        <article>
            <div class="section-header">
                <h1 class="ph-bg-1">Best Selling Products</h1>
                <h3 class="ph-bg-2">Explore our highest selling products</h3>
            </div>
            <div class="product-card">
                @foreach ($products as $product)
                    <x-index-card :product="$product" />
                @endforeach
            </div>
        </article>

        <!-- CONTENT-2 -->
        <section>
            <div class="content-2 two">
                <div class="desc-one">
                    <h4 class="per-off">30% OFF</h4>
                    <h2 class="desc-gb-1">Smart Beauty</h2>
                    <h4 class="date">26 Nov To 26 Dec 2023</h4>
                </div>
                <!-- <img src="" alt="" class="content-img"> -->
                <div class="desc-two">
                    <h4 class="desc-bg-3">Beats Solo Pro</h4>
                    <h3 class="desc-bg-2">Summer Sale</h3>
                    <p class="desc-p">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem
                        fugiat temporibus provident rerum! Fugiat, modi beatae! Vitae
                        fugiat, ratione amet minus recusandae aliquam dolorem nostrum
                        possimus? Quia libero sequi nostrum.
                    </p>
                    <a href="#" class="btn-links">
                        <button class="btn-content">Browse</button>
                    </a>
                </div>
            </div>
        </section>

        <!-- BLOG -->
        <section>
            <div class="section-header">
                <h1 class="ph-bg-1">Latest News and Updates</h1>
                <h3 class="ph-bg-2">Get the latest news and stay up date</h3>
            </div>
            <div class="cards">
                <div class="card-sm-3">
                    <!-- <div class="card-s-body"> -->
                    <img src="{{ asset('/front/assets/image/images (3).jpg') }}" alt=""
                        class="card-s-body" />
                    <!-- </div> -->
                    <div class="card-s-details">
                        <h5 class="date-info">August 4, 2023 --- By Richard</h5>
                        <h3 class="card-s-title">How to choose the perfect gadget</h3>
                        <p class="card-s-p">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius
                            omnis eveniet labore ex
                        </p>
                    </div>
                </div>
                <div class="card-sm-3">
                    <!-- <div class="card-s-body"> -->
                    <img src="{{ asset('/front/assets/image/images (9).jpg') }}" alt=""
                        class="card-s-body" />
                    <!-- </div> -->
                    <div class="card-s-details">
                        <h5 class="date-info">August 4, 2023 --- By Richard</h5>
                        <h3 class="card-s-title">How to choose the perfect gadget</h3>
                        <p class="card-s-p">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius
                            omnis eveniet labore ex
                        </p>
                    </div>
                </div>
                <div class="card-sm-3">
                    <!-- <div class="card-s-body"> -->
                    <img src="{{ asset('/front/assets/image/images (10).jpg') }}" alt=""
                        class="card-s-body" />
                    <!-- </div> -->
                    <div class="card-s-details">
                        <h5 class="date-info">August 4, 2023 --- By Richard</h5>
                        <h3 class="card-s-title">How to choose the perfect gadget</h3>
                        <p class="card-s-p">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius
                            omnis eveniet labore ex
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    {{-- Footer --}}
    <x-footer />
    {{-- Footer Ends --}}

    <script src="{{ asset('/front/assets/js/app.js') }}"></script>
</body>

</html>
