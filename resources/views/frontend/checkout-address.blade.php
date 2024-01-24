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
    <nav>
        <div class="nav-logo">
            <img src="assets/image/64-bit.png" alt="" class="logo" />
            <h1 class="nav-logo-text"><span class="cr-red">Tech</span>Planet</h1>
        </div>
        <ul class="navbar">
            <li class="nav-list">
                <a href="./index.html" class="nav-link">Home</a>
            </li>
            <li class="nav-list"><a href="shop.html" class="nav-link">Shop</a></li>
            <li class="nav-list">
                <a href="about.html" class="nav-link">About Us</a>
            </li>
            <li class="nav-list"><a href="blog.html" class="nav-link">Blog</a></li>
            <li class="nav-list">
                <a href="contact.html" class="nav-link">Contact</a>
            </li>
        </ul>
        <ul class="navbar end">
            <a href="" class="link-s">
                <button class="navbar-btn">Login</button>
            </a>
            <a href="" class="link-s">
                <i class="fa fa-search"></i>
            </a>
            <a href="/cart" class="link-s">
                <i class="fa fa-shopping-cart"></i>
            </a>
            <button class="nav-toggle">
                <i class="fa fa-bars fa-1x"></i>
            </button>
        </ul>
    </nav>
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
                <section class="sidebar">
                    <div class="nav-logo step-logo">
                        <img src="assets/image/64-bit.png" alt="" class="logo" />
                        <h1 class="nav-logo-text">
                            <span class="cr-red">Tech</span>Planet
                        </h1>
                    </div>
                    <div class="step">
                        <div class="between">
                            <div class="checkbox red"></div>
                            <h5 class="which-step">STEP 01</h5>
                        </div>
                        <p class="step-title">Billing address</p>
                    </div>
                    <div class="step">
                        <div class="between">
                            <div class="checkbox"></div>
                            <h5 class="which-step">STEP 02</h5>
                        </div>
                        <p class="step-title">Shipment</p>
                    </div>
                    <div class="step">
                        <div class="between">
                            <div class="checkbox"></div>
                            <h5 class="which-step">STEP 03</h5>
                        </div>
                        <p class="step-title">Payment</p>
                    </div>
                    <div class="step">
                        <div class="between">
                            <div class="checkbox"></div>
                            <h5 class="which-step">STEP 04</h5>
                        </div>
                        <p class="step-title">Review</p>
                    </div>
                </section>
                <section class="form">
                    <h6 class="which-step-sm">Step 01</h6>
                    <h3 class="step-title-md">Address</h3>
                    <p class="step-desc">Please enter a valid shipping address</p>
                    <form action="#" class="address-form">
                        <div class="form-inputs">
                            <label for="full name">Full Name</label>
                            <input type="text" name="fullname" id="" class="form-input" />
                        </div>
                        <div class="form-inputs">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="" class="form-input" />
                        </div>
                        <div class="form-inputs">
                            <label for="street_address">Street Address</label>
                            <input type="text" name="street_address" id="" class="form-input" />
                        </div>
                        <div class="double form-double">
                            <div class="form-inputs">
                                <label for="zip_code">Zip Code</label>
                                <input type="number" name="ZipCode" id="" class="form-input"
                                    min="5" />
                            </div>
                            <div class="form-inputs">
                                <label for="city">City</label>
                                <input type="text" name="city" id="" class="form-input" />
                            </div>
                        </div>
                        <div class="form-inputs">
                            <label for="country">Country</label>
                            <select name="country" class="form-input" id="">
                                <option value="nigeria">Nigeria</option>
                                <option value="nigeria">Nigeria</option>
                                <option value="nigeria">Nigeria</option>
                            </select>
                        </div>
                        <div class="form-inputs">
                            <label for="number">Phone Number(Optional)</label>
                            <input type="number" name="number" id="" class="form-input" />
                        </div>
                        <div class="double btn">
                            <a href="/cart" class="btn-redirect">
                                <i class="fa-solid fa-arrow-left"></i> Back to Cart
                            </a>
                            <a href="./checkout-shipment.html" class="form-link">
                                <button class="btn-form" type="submit">
                                    Continue to Shipping
                                </button>
                            </a>
                        </div>
                    </form>
                </section>
                <section class="summary">
                    <div class="order-sumary-card">
                        <div class="order-header">
                            <h3 class="sumary-title">Order Summary</h3>
                        </div>
                        <hr />
                        <h4 class="fw-5">Have a Promo Code?</h4>
                        <form action="#" class="promo-from">
                            <input type="text" name="" id="" class="input"
                                placeholder="Enter Promo Code" />
                            <button type="submit" class="btn-red">Apply</button>
                        </form>
                        <div class="content-flex">
                            <h5>Item(5)</h5>
                            <h5>$2000</h5>
                        </div>
                        <div class="content-flex">
                            <h5>Discount(0%)</h5>
                            <h5>$0</h5>
                        </div>
                        <div class="sum">
                            <div class="content-flex">
                                <h5>Subtotal</h5>
                                <h5>$2000</h5>
                            </div>
                            <div class="content-flex">
                                <h5>Estimated Delivery</h5>
                                <h5>$100</h5>
                            </div>
                            <div class="content-flex">
                                <h5>Estimated Tax</h5>
                                <h5></h5>
                            </div>
                            <div class="order-foot">
                                <hr />
                                <div class="content-flex">
                                    <h3 class="sumary-title">Order Summary</h3>
                                    <h3 class="total">$2,100</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </article>
    </main>
    {{-- {{Footer}} --}}
    <x-footer />
    {{-- {{Footer End}} --}}
</body>

</html>
