<!doctype html>
<html lang="en">

<x-head/>

<body>
    <div class="page-wrapper relative z-[1] {{ isset($bgColor) ? $bgColor : 'bg-white' }}">
        <!-- Header Start -->
        <header class="site-header site-header--sticky mobile-sticky-enable is--bg-dark is--white py-3" id="sticky-menu">
            <div class="container-default">
                <div class="flex items-center justify-between gap-x-8">
                    <!-- Header Logo -->
                    <a href="{{ url('index') }}" class="">
                        @yield('headerLogo')
                    </a>
                    <!-- Header Logo -->

                    <!-- Header Navigation -->
                    <div class="menu-block-wrapper">
                        <div class="menu-overlay"></div>
                        <nav class="menu-block" id="append-menu-header">
                            <div class="mobile-menu-head">
                                <div class="go-back">
                                    <i class="fa-solid fa-angle-left"></i>
                                </div>
                                <div class="current-menu-title"></div>
                                <div class="mobile-menu-close">&times;</div>
                            </div>
                            <ul class="site-menu-main">
                                <li class="nav-item nav-link-item--white nav-item-has-children">
                                    <a href="{{ url('index') }}" class="nav-link-item drop-trigger">Home</a>
                                </li>
                                <li class="nav-item nav-link-item--white nav-item-has-children">
                                    <a href="#section-features" class="nav-link-item drop-trigger">Features</a>
                                </li>
                                <li class="nav-item nav-link-item--white nav-item-has-children">
                                    <a href="#section-about" class="nav-link-item drop-trigger">About</a>
                                </li>
                                <li class="nav-item nav-link-item--white nav-item-has-children">
                                    <a href="#section-service" class="nav-link-item drop-trigger">Services</a>
                                </li>
                                <li class="nav-item nav-link-item--white nav-item-has-children">
                                    <a href="#section-pricing" class="nav-link-item drop-trigger">Pricing</a>
                                </li>
                                <li class="nav-item nav-link-item--white nav-item-has-children">
                                    <a href="#section-testimonial" class="nav-link-item drop-trigger">Testimonial</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Navigation -->

                    <!-- Header User Event -->
                    @yield('headButtons')
                    <!-- Header User Event -->
                </div>
            </div>
        </header>
        <!-- Header End -->

        <main class="main-wrapper relative overflow-hidden">
            @yield('content')
        </main>

        @yield('footerSection')

        @yield('footer')
        

    </div>

    <x-scripts/>

</body>

</html>