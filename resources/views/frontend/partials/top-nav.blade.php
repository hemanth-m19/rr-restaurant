<div class="rd-navbar-wrap">
    <nav class="rd-navbar rd-navbar-creative rd-navbar-creative-2" 
        data-layout="rd-navbar-fixed" 
        data-sm-layout="rd-navbar-fixed" 
        data-md-layout="rd-navbar-fixed" 
        data-md-device-layout="rd-navbar-fixed" 
        data-lg-layout="rd-navbar-static" 
        data-lg-device-layout="rd-navbar-fixed" 
        data-xl-layout="rd-navbar-static" 
        data-xl-device-layout="rd-navbar-static" 
        data-xxl-layout="rd-navbar-static" 
        data-xxl-device-layout="rd-navbar-static" 
        data-lg-stick-up-offset="100px" 
        data-xl-stick-up-offset="112px" 
        data-xxl-stick-up-offset="132px" 
        data-lg-stick-up="true" 
        data-xl-stick-up="true" 
        data-xxl-stick-up="true">
    <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
    <div class="rd-navbar-aside-outer">
        <div class="rd-navbar-aside">
        <div class="rd-navbar-collapse">
            <ul class="contacts-classic">
            <li><span class="contacts-classic-title">Call us:</span> <a class="link" href="tel:#">+1 (844) 123 456 78</a>
            </li>
            <li><a href="mailto:#">info@demolink.org</a></li>
            </ul><a class="rd-navbar-basket rd-navbar-basket-mobile fl-bigmug-line-shopping202" href="#"><span>2</span></a>
        </div>
        <!-- RD Navbar Panel-->
        <div class="rd-navbar-panel">
            <!-- RD Navbar Toggle-->
            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
            <!-- RD Navbar Brand-->
            <div class="rd-navbar-brand">
            <!--Brand--><a class="brand" href="index.html"><img class="brand-logo-dark" src="images/logo-default-234x82.png" alt="" width="117" height="41"/><img class="brand-logo-light" src="images/logo-inverse-234x82.png" alt="" width="117" height="41"/></a>
            </div>
        </div>
        <div class="rd-navbar-aside-element">
            <!-- RD Navbar Search-->
            <div class="rd-navbar-search rd-navbar-search-2">
            <button class="rd-navbar-search-toggle rd-navbar-fixed-element-3" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
            <form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live" method="GET">
                <div class="form-wrap">
                <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off"/>
                <label class="form-label" for="rd-navbar-search-form-input">Search...</label>
                <div class="rd-search-results-live" id="rd-search-results-live"></div>
                <button class="rd-search-form-submit fl-bigmug-line-search74" type="submit"></button>
                </div>
            </form>
            </div>
            <!-- RD Navbar Basket-->
            <div class="rd-navbar-basket-wrap">
            <button class="rd-navbar-basket fl-bigmug-line-shopping202" data-rd-navbar-toggle=".cart-inline"><span>2</span></button>
            <div class="cart-inline">
                <div class="cart-inline-header">
                    <h5 class="cart-inline-title">In cart:<span> 2</span> Products</h5>
                    <h6 class="cart-inline-title">Total price:<span> $44</span></h6>
                </div>
                <div class="cart-inline-body">
                    <div class="cart-inline-item">
                        <div class="unit unit-spacing-sm align-items-center">
                        <div class="unit-left"><a class="cart-inline-figure" href="single-product.html"><img src="images/product-mini-1-106x104.jpg" alt="" width="106" height="104"/></a></div>
                        <div class="unit-body">
                            <h6 class="cart-inline-name"><a href="single-product.html">Forest Berry</a></h6>
                            <div>
                            <div class="group-xs group-middle">
                                <div class="table-cart-stepper">
                                <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000"/>
                                </div>
                                <h6 class="cart-inline-title">$18.00</h6>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="cart-inline-item">
                        <div class="unit unit-spacing-sm align-items-center">
                        <div class="unit-left"><a class="cart-inline-figure" href="single-product.html"><img src="images/product-mini-2-106x104.jpg" alt="" width="106" height="104"/></a></div>
                        <div class="unit-body">
                            <h6 class="cart-inline-name"><a href="single-product.html">Tomatoes</a></h6>
                            <div>
                            <div class="group-xs group-middle">
                                <div class="table-cart-stepper">
                                <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000"/>
                                </div>
                                <h6 class="cart-inline-title">$16.00</h6>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="cart-inline-footer">
                    <div class="group-sm">
                        <a class="button button-default-outline-2 button-zakaria" href="{{ route('cart') }}">
                            Go to cart
                        </a>
                        <a class="button button-primary button-zakaria" href="checkout.html">
                            Checkout
                        </a>
                    </div>
                </div>
            </div>
            </div>
            @guest
                <div class="rd-navbar-fixed-element-2 select-inline">
                    <a href="{{ route('login') }}">Login</a>
                </div>
                <div class="rd-navbar-fixed-element-2 select-inline">
                    <a href="{{ route('register') }}">Register</a>
                </div>
            @endguest
            @auth
                <div class="rd-navbar-fixed-element-2 select-inline">
                    <form  method="POST" action="{{ route('logout') }}">
                        @csrf
                            <x-jet-dropdown-link href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                this.closest('form').submit();">
                            {{ __('LogOut') }}
                        </x-jet-dropdown-link>
                    </form>
                </div>
                <div class="rd-navbar-fixed-element-2 select-inline">
                    <a href="">Dashboard</a>
                </div>
            @endauth

        </div>
        </div>
    </div>
    <div class="rd-navbar-main-outer">
        <div class="rd-navbar-main">
            <div class="rd-navbar-nav-wrap">
                <ul class="rd-navbar-nav">
                <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('about') }}">About Us</a>
                </li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="blog-list.html">Blog</a>
                </li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('menu') }}">Menu</a>
                </li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('gallery') }}">Gallery</a>
                </li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="grid-shop.html">Shop</a>
                    <ul class="rd-menu rd-navbar-dropdown">
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{ route('cart') }}">Cart Page</a>
                        </li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{ route('checkout') }}">Checkout</a>
                        </li>
                    </ul>
                </li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('contact') }}">Contact Us</a>
                </li>
                </ul>
            </div>
        </div>
    </div>
    </nav>
</div>