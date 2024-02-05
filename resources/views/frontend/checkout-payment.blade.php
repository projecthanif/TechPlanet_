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
    @error(['msg'])
        <h1>{{ $message }}</h1>
    @enderror
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
                <section class="payment">
                    <h6 class="which-step-sm">Step 03</h6>
                    <h3 class="step-title-md">Payment</h3>
                    <p class="step-desc">Payment method: credit card</p>
                    <form action="/pay" method="post">
                        @method('post')
                        @csrf
                        {{-- <div class="form-inputs">
                            <label for="full name">Card Number</label>
                            <input type="number" name="card_number" id="" class="form-input" />
                        </div> --}}
                        <div class="form-inputs">
                            <label for="email">Cardholder's Email</label>
                            <input type="email" name="email" id="" class="form-input" />
                        </div>
                        <input type="hidden" value="{{ $total_sum }}" name="amount">
                        {{-- <div class="double">
                            <div class="form-inputs">
                                <label for="zip_code">Expire Date </label>
                                <input type="number" name="expire_date" id="" class="form-input" />
                            </div>
                            <div class="form-inputs">
                                <label for="cvv_code">CVV Code</label>
                                <input type="number" name="cvv_code" id="" class="form-input" />
                            </div>
                        </div> --}}
                        <div class="double btn">
                            {{-- <a href="/checkout/address" class="btn-redirect">
                                <i class="fa-solid fa-arrow-left"></i> Back to address
                            </a> --}}
                            {{-- <a href="/checkout/shipment" class="form-link"> --}}
                            <button class="btn-form" type="submit" class="form-link">
                                Continue to Shipping
                            </button>
                            {{-- </a> --}}
                        </div>
                    </form>

                </section>
                <x-checkout-summary-card :total_sum="$total_sum" :num="$num" />
            </div>
        </article>
    </main>
    {{-- {{Footer}} --}}
    <x-footer />
    {{-- {{Footer End}} --}}
</body>

</html>
