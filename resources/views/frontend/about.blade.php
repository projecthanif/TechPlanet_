<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('/front/assets/css/nav.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/assets/css/jumbo.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/assets/css/about.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/assets/css/footer.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <x-front-nav :nav="$nav" />
    <main>
        <section>
            <div class="jumbotron">
                <div class="link">
                    <a href="/" class="link index-link">
                        <h4 class="index">Home</h4>
                    </a>
                    >
                    <a href="#" class="link about-link">
                        <h4 class="about">About Us</h4>
                    </a>
                </div>
                <h1 class="page-title">About Us</h1>
            </div>
        </section>
        <article>
            <div class="about-details">
                <div class="left">
                    <h4 class="greeting">Welcome to TechPlanet</h4>
                    <h1 class="question">Who Are We?</h1>
                    <p class="about-p">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus
                        incidunt harum exercitationem sit qui odit sapiente ut architecto
                        est magnam mollitia fuga saepe tenetur officiis maiores itaque,
                        provident iste commodi?
                    </p>
                    <p class="about-p">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus
                        incidunt harum exercitationem sit qui odit sapiente ut architecto
                        est magnam mollitia fuga saepe tenetur officiis maiores itaque,
                        provident iste commodi?
                    </p>
                    <button class="btn jp">Contact Us</button>
                </div>
                <img src="{{ asset('/front/assets/image/images (14).jpg') }}" alt="" class="right-img" />
            </div>
        </article>
    </main>
    {{-- Footer --}}
    <x-footer />
    {{-- Footer Ends --}}

    <script src="{{ asset('/front/assets/js/app.js') }}"></script>
</body>

</html>
