<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('/front/assets/css/nav.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/assets/css/jumbo.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/assets/css/shop.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/assets/css/footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/assets/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="{{ asset('/front/assets/image/64-bit.png') }}" type="image/x-icon">
    <title>Document</title>
</head>

<body>
    <x-front-nav :nav="$nav" />
    <section>
        <div class="jumbotron">
            <div class="link">
                <a href="/" class="link index-link">
                    <h4 class="index">Home</h4>
                </a>
                >
                <a href="#" class="link about-link">
                    <h4 class="about">Shop</h4>
                </a>
            </div>
            <h1 class="page-title">Products</h1>
        </div>
    </section>
    {{-- aside nav --}}

    <x-shop-aside :categories="$categories" />

    {{-- aside nav --}}

    <main>
        <article>
            <!-- PRODUCT CARD -->
            <div class="product-card">
                <!-- CARD -->

                @unless (count($products) == 0)
                    @foreach ($products as $product)
                        <x-shop-card :product="$product" />
                    @endforeach
                @endunless

            </div>
            {{-- <div class="pagination">
                <ul class="pagin">
                    <li class="pagin-list">
                        <a href="#" class="pagin-link active">1</a>
                    </li>
                    <li class="pagin-list">
                        <a href="#" class="pagin-link">2</a>
                    </li>
                    <!-- <button type="submit"><i class="fa fa-right"></i></button> -->
                </ul>
            </div> --}}
        </article>
    </main>

    {{-- Footer --}}
    <x-footer />
    {{-- Footer Ends --}}

    <script src="assets/js/app.js"></script>
    <script>
        const priceRangeEl = document.querySelector(
            "input[type=range]#price-range"
        );
        const minPriceEl = document.querySelector("h4#min-price-value");
        const maxPriceEl = document.querySelector("h4#max-price-value");
        console.log(priceRangeEl);
        priceRangeEl.addEventListener("change", () => {
            minPriceEl.innerText = `$${priceRangeEl.value}`;
        });
    </script>
</body>

</html>
