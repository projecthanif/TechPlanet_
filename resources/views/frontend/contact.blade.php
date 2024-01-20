<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('/front/assets/css/nav.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/assets/css/jumbo.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/assets/css/contact.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/assets/css/footer.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <nav>
        <div class="nav-logo">
            <img src="{{ asset('/front/assets/image/64-bit.png') }}" alt="" class="logo" />
            <h1 class="nav-logo-text"><span class="cr-red">Tech</span>Planet</h1>
        </div>
        <ul class="navbar">
            <li class="nav-list"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-list"><a href="/shop" class="nav-link">Shop</a></li>
            <li class="nav-list">
                <a href="/about" class="nav-link">About Us</a>
            </li>
            <li class="nav-list"><a href="/blog" class="nav-link">Blog</a></li>
            <li class="nav-list">
                <a href="#" class="nav-link active">Contact</a>
            </li>
        </ul>
        <ul class="navbar end">
            <a href="" class="link-s">
                <button class="navbar-btn">Login</button>
            </a>
            <a href="" class="link-s">
                <i class="fa fa-search"></i>
            </a>
            <a href="cart.html" class="link-s">
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
                    <a href="/" class="link index-link">
                        <h4 class="index">Home</h4>
                    </a>
                    >
                    <a href="#" class="link about-link">
                        <h4 class="about">Contact</h4>
                    </a>
                </div>
                <h1 class="page-title">Contact</h1>
            </div>
        </section>
        <article>
            <div class="contact-details">
                <div class="left">
                    <h4 class="greeting">Welcome to TechPlanet</h4>
                    <h1 class="question">Who Are We?</h1>
                    <p class="contact-p">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus
                        incidunt harum exercitationem sit qui odit sapiente ut architecto
                    </p>
                    <form action="" method="" class="contact-form">
                        <input type="email" name="email" id="" placeholder="Your email"
                            class="form-input" />
                        <input type="number" name="number" id="" placeholder="Phone number"
                            class="form-input" />
                        <textarea name="message" id="" cols="30" rows="10" placeholder="Your message here"
                            class="form-input textarea"></textarea>
                        <button type="submit" class="btn-submit">Submit</button>
                    </form>
                </div>
                <img src="{{ asset('/front/assets/image/images (13).jpg') }}" alt="" class="right-img" />
            </div>
            <section>
                <div class="contact-info"></div>
            </section>
        </article>
    </main>
    {{-- {{Footer}} --}}
    <x-footer />
    {{-- {{Footer End}} --}}
    <script src="{{ asset('/front/assets/js/app.js') }}"></script>
</body>

</html>
