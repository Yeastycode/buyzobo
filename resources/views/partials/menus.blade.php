<!--? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{asset('assets/img/logo/logo.svg')}}" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo/logo.svg') }}" alt=""
                                style="width: 6em;"></a>
                    </div>
                    <!-- Main-menu -->
                    <div class="main-menu d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                                <li class="hot"><a href="{{ route('home') }}">Shop</a></li>
                                {{-- <li><a href="#">Latest</a>
                                    <ul class="submenu">
                                        <li><a href="shop.html"> Product list</a></li>
                                        <li><a href="product_details.html"> Product Details</a></li>
                                    </ul>
                                </li> --}}
                                {{-- <li><a href="blog.html">Blog</a>
                                    <ul class="submenu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li> --}}

                                @guest
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Create an Account</a></li>
                                @else
                                <li><a href="{{ route('logout') }}">Logout</a></li>
                                @endguest

                                <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Right -->
                    <div class="header-right">
                        <ul>
                            <li>
                                <div class="nav-search search-switch">
                                    <span class="flaticon-search"></span>
                                </div>
                            </li>
                            <li><a href="login.html"><span class="flaticon-user"></span></a></li>
                            @guest
                            <li>Hi</li>
                            @else
                            {{-- <li><a href="{{ route('logout') }}">Logout</a></li> --}}
                            {{-- <li><b>{{ $user->name }}</b></li> --}}
                            @endguest
                            <li><a href="cart.html"><span class="flaticon-shopping-cart"></span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
