@props(['nav'])

<nav>
    <div class="nav-logo">
        <img src="{{ asset('/front/assets/image/64-bit.png') }}" alt="" class="logo" />
        <h1 class="nav-logo-text"><span class="cr-red">Tech</span>Planet</h1>
    </div>
    <ul class="navbar">
        <li class="nav-list"><a href="/" class="nav-link {{ $nav == 'home' ? 'active' : '' }}">Home</a></li>
        <li class="nav-list"><a href="/shop" class="nav-link {{ $nav == 'shop' ? 'active' : '' }}">Shop</a></li>
        <li class="nav-list">
            <a href="/about" class="nav-link {{ $nav == 'about' ? 'active' : '' }}">About Us</a>
        </li>
        <li class="nav-list"><a href="/blog" class="nav-link {{ $nav == 'blog' ? 'active' : '' }}">Blog</a></li>
        <li class="nav-list">
            <a href="/contact" class="nav-link {{ $nav == 'contact' ? 'active' : '' }}">Contact</a>
        </li>
    </ul>
    <ul class="navbar end">
        @if (auth()->user())
            <div class="user-logo">

            </div>
        @else
            <a href="" class="link-s">
                <button class="navbar-btn">Login</button>
            </a>
        @endif
        <a href="/login" class="link-s">
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
