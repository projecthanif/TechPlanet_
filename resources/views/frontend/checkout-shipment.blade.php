<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('front/assets/css/nav.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/assets/css/jumbo.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/assets/css/checkout.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/assets/css/footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/assets/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="{{ asset('/front/assets/image/64-bit.png') }}" type="image/x-icon">
    <title>TechPlanet</title>
</head>

<body>
    <x-front-nav :nav="$nav" />
    <main>
        <section>
            <div class="jumbotron">
                <div class="link">
                    <a href="index.html" class="link index-link">
                        <h4 class="index">Home</h4>
                    </a>
                    >
                    <a href="#" class="link about-link">
                        <h4 class="about">Checkout</h4>
                    </a>
                </div>
                <h1 class="page-title">Checkout</h1>
            </div>
        </section>
        <article class="main">
            <div class="flex">
                <x-checkout-side-bar :tick="$tick" />
                <section class="shipment-cards">
                    <h6 class="which-step-sm">Step 02</h6>
                    <h3 class="step-title-md">Shipment</h3>
                    <p class="step-desc">When would you like your order delivered</p>
                    <form action="">
                        <div class="shipment-type-card">
                            <input type="radio" name="shipping" id="same-day" value="same-day" />
                            <h4 class="arrival-date">Mon, September 17</h4>
                            <div class="double ship">
                                <h5 class="type">Same day delivery</h5>
                                <h5 class="price">$200</h5>
                            </div>
                        </div>
                        <div class="shipment-type-card">
                            <input type="radio" name="shipping" id="express" value="express" />
                            <h4 class="arrival-date">Mon, September 17</h4>
                            <div class="double ship">
                                <h5 class="type">Express Delivery</h5>
                                <h5 class="price">$150</h5>
                            </div>
                        </div>
                        <div class="shipment-type-card">
                            <input type="radio" name="shipping" id="standard" value="standard" />
                            <h4 class="arrival-date">Mon, September 17</h4>
                            <div class="double ship">
                                <h5 class="type">Standard Delivery</h5>
                                <h5 class="price">$100</h5>
                            </div>
                        </div>
                        <div class="shipment-type-card">
                            <input type="radio" name="shipping" id="standard" value="store" />
                            <h4 class="arrival-date">Store Pickup(September 17)</h4>
                            <div class="double ship">
                                <h5 class="type">Select a nearby store</h5>
                                <h5 class="price">Free</h5>
                            </div>
                        </div>
                        <div class="double btn">
                            <a href="/checkout/address" class="btn-redirect">
                                <i class="fa-solid fa-arrow-left"></i> Back to address
                            </a>
                            <a href="/checkout/payment" class="form-link">
                                {{-- <button class="btn-form" type="submit"> --}}
                                Continue to Payment
                                {{-- </button> --}}
                            </a>
                        </div>
                    </form>
                </section>
                <x-checkout-summary-card />
            </div>
        </article>
    </main>
    {{-- {{Footer}} --}}
    <x-footer />
    {{-- {{Footer End}} --}}

    <script src="./assets/js/shipmentOption.js"></script>
</body>

</html>
