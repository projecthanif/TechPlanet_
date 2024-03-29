<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('front/assets/css/nav.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/assets/css/product.css') }}" />
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
            <img src="{{ asset('front/assets/image/64-bit.png') }}" alt="" class="logo" />
            <h1 class="nav-logo-text"><span class="cr-red">Tech</span>Planet</h1>
        </div>
        <ul class="navbar">
            <li class="nav-list"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-list">
                <a href="/shop" class="nav-link active">Shop</a>
            </li>
            <li class="nav-list">
                <a href="/about" class="nav-link">About Us</a>
            </li>
            <li class="nav-list">
                <a href="/blog" class="nav-link">Blog</a>
            </li>
            <li class="nav-list">
                <a href="/contact" class="nav-link">Contact</a>
            </li>
        </ul>
        <ul class="navbar end">
            <a href="/login" class="link-s">
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
        <section class="carousel">
            <div class="left-img">
                <img src="/storage/{{ $product->image_url }}" alt="" class="carousel-img" />
            </div>
            <div class="right-descp">
                <h1 class="title">{{ $product->name }}</h1>
                <div class="rating">
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h3 class="customer-review">(1 Customer review)</h3>
                </div>
                <div class="price">
                    @isset($product->old_price)
                        <h4 class="old-price">$1,800</h4>
                    @endisset
                    <h2 class="new-price">${{ $product->price }}</h2>
                </div>
                <p class="descp">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium
                    at aut praesentium sapiente iure esse eos excepturi, voluptates sit.
                    Vitae officiis dolor atque in, repellendus ex quam assumenda tempora
                    sapiente?Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Accusantium at aut praesentium sapiente iure esse eos excepturi,
                    voluptates sit. Vitae officiis dolor atque in, repellendus ex quam
                    assumenda tempora sapiente?
                </p>
                <form action="/shop/{{ $product->id }}" method="post" id="subForm">
                    @csrf
                    @method('post')
                    <button type="submit" class="dp-btn">Add to cart</button>
                </form>
                <p class="type">Category: <span class="red">{{ $product->category }}</span></p>
            </div>
        </section>
        <section class="tabs">
            <!-- Tab links -->
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'Description')">
                    Description
                </button>
                <button class="tablinks" onclick="openCity(event, 'Review')">
                    Reviews (1)
                </button>
            </div>
            <!-- Tab content -->
            <div id="Description" class="tabcontent">
                <h3 class="description-title">Description</h3>
                <ul class="list">
                    <li>7th Gen Intel Core i7, Core i5 proccessor</li>
                    <li>7th Gen Intel Core i7, Core i5 proccessor</li>
                    <li>7th Gen Intel Core i7, Core i5 proccessor</li>
                    <li>7th Gen Intel Core i7, Core i5 proccessor</li>
                    <li>7th Gen Intel Core i7, Core i5 proccessor</li>
                </ul>
            </div>

            <!-- REVIEW -->
            <div id="Review" class="tabcontent">
                <h3 class="description-title">
                    1 Reveiw for HP Elitebook Folio G1 M5
                </h3>
                <!-- Review card -->
                <div class="card-review">
                    <div class="review-top">
                        <div class="who">
                            <h5 class="whoName">John Doe</h5>
                            <p class="when">September 20, 2023</p>
                        </div>
                        <div class="review-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                    <div class="review-review">
                        <!-- <img src="#" alt="" class="avatar"> -->
                        <p class="review-paragraph">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor
                            reprehenderit suscipit ipsum temporibus. Necessitatibus
                            cupiditate, molestiae sit reprehenderit inventore, dolorum modi
                            maiores, ut id iure esse incidunt dolore illo ad.
                        </p>
                    </div>
                </div>
                <!-- Review form -->
                <div class="form-top">
                    <h3 class="form-title">Add a review</h3>
                    <p class="form-para">
                        Your email address would not be publish. Required fields are
                        marked*
                    </p>
                </div>
                <form action="#" class="form">
                    <div class="checkbox">
                        <label for="checkbox" class="your-rating">Your rating*</label>
                        <div class="wrapper">
                            <input type="checkbox" id="st1" value="1" />
                            <label for="st1"></label>
                            <input type="checkbox" id="st2" value="2" />
                            <label for="st2"></label>
                            <input type="checkbox" id="st3" value="3" />
                            <label for="st3"></label>
                            <input type="checkbox" id="st4" value="4" />
                            <label for="st4"></label>
                            <input type="checkbox" id="st5" value="5" />
                            <label for="st5"></label>
                        </div>
                    </div>
                    <div class="form-text">
                        <div class="input">
                            <label for="name">Name*</label>
                            <input type="text" name="name" id="" class="form-input" />
                        </div>
                        <div class="input">
                            <label for="email">Email*</label>
                            <input type="email" name="email" id="" class="form-input" />
                        </div>
                    </div>
                    <label for="review">Your review*</label>
                    <textarea name="review" id="" cols="30" rows="10" placeholder="" class="form-input textarea"></textarea>
                    <div class="form-btn">
                        <button type="submit" class="btn-submit">Submit</button>
                    </div>
                </form>
            </div>
        </section>
        <section class="similar-product">
            <h2 class="title two">Related Products</h2>
            <div class="cards">
                <div class="card-sm-2">
                    <div class="card-body">
                        <img src="assets/image/download__10_-removebg-preview.png" alt=""
                            class="card-body-img" />
                    </div>
                    <div class="card-foot">
                        <h4 class="card-name">HP Elitebook x360 G2</h4>
                        <h5 class="card-price">$1200</h5>
                    </div>
                </div>
                <div class="card-sm-2">
                    <div class="card-body">
                        <img src="assets/image/download__10_-removebg-preview.png" alt=""
                            class="card-body-img" />
                    </div>
                    <div class="card-foot">
                        <h4 class="card-name">HP Elitebook x360 G2</h4>
                        <h5 class="card-price">$1200</h5>
                    </div>
                </div>
                <div class="card-sm-2">
                    <div class="card-body">
                        <img src="assets/image/download__10_-removebg-preview.png" alt=""
                            class="card-body-img" />
                    </div>
                    <div class="card-foot">
                        <h4 class="card-name">HP Elitebook x360 G2</h4>
                        <h5 class="card-price">$1200</h5>
                    </div>
                </div>
                <div class="card-sm-2">
                    <div class="card-body">
                        <img src="assets/image/download__10_-removebg-preview.png" alt=""
                            class="card-body-img" />
                    </div>
                    <div class="card-foot">
                        <h4 class="card-name">HP Elitebook x360 G2</h4>
                        <h5 class="card-price">$1200</h5>
                    </div>
                </div>
            </div>
        </section>
    </main>
    {{-- Footer}} --}}
    <x-footer />
    {{-- Footer End}} --}}
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script>
    <script src="{{ asset('/front/assets/js/tabs.js') }}"></script>
    <script src="{{ asset('/front/assets/js/ajax.js') }}"></script>
</body>

</html>
