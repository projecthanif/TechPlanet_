<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('front/assets/css/nav.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/assets/css/jumbo.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/assets/css/cart.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/assets/css/footer.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="{{ asset('/front/assets/image/64-bit.png') }}" type="image/x-icon">
    <title>Document</title>
</head>

<body>
    <x-front-nav :nav='$nav' />
    <main>
        <section>
            <div class="jumbotron">
                <div class="link">
                    <a href="index.html" class="link index-link">
                        <h4 class="index">Home</h4>
                    </a>
                    >
                    <a href="#" class="link about-link">
                        <h4 class="about">Cart</h4>
                    </a>
                </div>
                <h1 class="page-title">Cart</h1>
            </div>
        </section>
        <article class="main-page">
            <section>
                <div class="message">
                    <p class="talk">
                        You can continue to shop and we'll save your items to Cart
                    </p>
                    <h2 class="title">Shopping Cart</h2>
                </div>
            </section>
            <div class="cart-info">
                <section class="cart-table">
                    <table>
                        <thead>
                            <th>items</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th></th>
                        </thead>
                        <tbody>
                            <tr class="cart-card">
                                <td class="items">
                                    <img src="./assets/image/download__10_-removebg-preview.png" alt=""
                                        class="cart-img" />
                                    <div class="cart-card-info">
                                        <h4 class="cart-name">Samsung Galaxy Watch Active2</h4>
                                        <p class="item-color">Blue</p>
                                        <p class="item-number">Quantity(1)</p>
                                    </div>
                                </td>
                                <td class="quantity">
                                    1
                                    <!-- <div class="amount">1</div>
                    <div class="counter">
                      <div class="increase">+</div>
                      <div class="decrease">-</div>
                    </div> -->
                                </td>
                                <td class="price">
                                    <div>
                                        <h5>$1,200</h5>
                                    </div>
                                </td>
                                <td class="delete"></td>
                            </tr>
                            <tr class="cart-card">
                                <td class="items">
                                    <img src="./assets/image/download__12_-removebg-preview.png" alt=""
                                        class="cart-img" />
                                    <div class="cart-card-info">
                                        <h4 class="cart-name">Sony PlayStation 5</h4>
                                        <p class="item-color">Blue</p>
                                        <p class="item-number">Quantity(1)</p>
                                    </div>
                                </td>
                                <td class="quantity">
                                    1
                                    <!-- <div class="amount">1</div>
                    <div class="counter">
                      <div class="increase">+</div>
                      <div class="decrease">-</div>
                    </div> -->
                                </td>
                                <td class="price">
                                    <div>
                                        <h5>$1,200</h5>
                                    </div>
                                </td>
                                <td class="delete"></td>
                            </tr>
                            <tr class="cart-card">
                                <td class="items">
                                    <img src="./assets/image/download__10_-removebg-preview.png" alt=""
                                        class="cart-img" />
                                    <div class="cart-card-info">
                                        <h4 class="cart-name">Samsung Galaxy Watch Active2</h4>
                                        <p class="item-color">Blue</p>
                                        <p class="item-number">Quantity(1)</p>
                                    </div>
                                </td>
                                <td class="quantity">
                                    1
                                    <!-- <div class="amount">1</div>
                    <div class="counter">
                      <div class="increase">+</div>
                      <div class="decrease">-</div>
                    </div> -->
                                </td>
                                <td class="price">
                                    <div>
                                        <h5>$1,200</h5>
                                    </div>
                                </td>
                                <td class="delete"></td>
                            </tr>
                            <tr class="cart-card">
                                <td class="items">
                                    <img src="./assets/image/download__12_-removebg-preview.png" alt=""
                                        class="cart-img" />
                                    <div class="cart-card-info">
                                        <h4 class="cart-name">Sony PlayStation 5</h4>
                                        <p class="item-color">Blue</p>
                                        <p class="item-number">Quantity(1)</p>
                                    </div>
                                </td>
                                <td class="quantity">
                                    1
                                    <!-- <div class="amount">1</div>
                    <div class="counter">
                      <div class="increase">+</div>
                      <div class="decrease">-</div>
                    </div> -->
                                </td>
                                <td class="price">
                                    <div>
                                        <h5>$1,200</h5>
                                    </div>
                                </td>
                                <td class="delete"></td>
                            </tr>
                        </tbody>
                    </table>
                </section>
                <section class="summary-cart">
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
                        <a href="./checkout-address.html" class="checkout-link">
                            <button class="btn bg-red">checkout</button>
                        </a>
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
