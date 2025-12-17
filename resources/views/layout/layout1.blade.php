<?php
use App\Models\Product;
use App\Models\Project;
use App\Models\Service;

$products = Product::all();
$projects = Project::all();
$services = Service::all();
?>


<!doctype html>
<html lang="en">

<x-head />

<body>
    <div class="page-wrapper relative z-[1] {{ isset($bgColor) ? $bgColor : 'bg-white' }}">
        <!-- Header Start -->
        <style>
            @media (min-width: 992px) {
                .contact-on-mobile {
                    display: none !important;
                }
            }
        </style>
        <style>
@import url('https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap');
</style>
        <style>
        
  @media (max-width: 1200px) {
    .hide-below-1200 {
      display: none !important;
    }
  }
</style>
        <header class="site-header bg-white site-header--absolute is--white py-3" id="sticky-menu">
            <div class="container-default">
                <div class="flex items-center justify-between gap-x-8">
                    <!-- Header Logo -->
                    <a href="{{ url('/') }}" class="">
                        {{-- @yield('headerLogo') --}}
                        <img src="{{ asset('assets/img/kodetech/kodetech-logo.png') }}" alt="Masco" width="109"
                            height="30" class="img-logo-head" />
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
                                <li class="nav-item">
                                    <a href="{{ url('/') }}" class="nav-link-item">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('about') }}" class="nav-link-item">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('tech-stack') }}" class="nav-link-item">Tech Stack</a>
                                </li>
                                <li class="nav-item nav-item-has-children">
                                    <a class="nav-link-item drop-trigger">Our Services
                                        <i class="fa-solid fa-angle-down"></i>
                                    </a>
                                    <ul class="sub-menu" id="submenu-2">

                                        @foreach ($services as $service)
                                            <li class="sub-menu--item"><a
                                                    href="{{ route('ServicesShow', $service->slug) }}">{{ $service->service_name }}</a>
                                            </li>
                                        @endforeach




                                        {{-- <li class="sub-menu--item">
                                            <a href="{{ url('/web') }}">Web Development</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('/software') }}">Software Development</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('/aiDev') }}">AI Development</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('/blockchain') }}">Blockchain Development</a>
                                        </li> --}}
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-has-children">
                                    <a class="nav-link-item drop-trigger">Our Products
                                        <i class="fa-solid fa-angle-down"></i>
                                    </a>
                                    <ul class="sub-menu" id="submenu-3">
                                        @foreach ($products as $product)
                                            <li class="sub-menu--item"><a
                                                    href="{{ route('product.show', $product->slug) }}">{{ $product->product_name }}</a>
                                            </li>
                                        @endforeach
                                        {{-- <li class="sub-menu--item">
                                            <a href="{{ url('/dms') }}">Document Management System (DMS)</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('/crm') }}">AI Based Customer Relationship Management</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('/ai') }}">AI Chatbot</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('/hrm') }}">Human Resource Information System</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('/ecommerce') }}">E-Commerce solutions</a>
                                        </li> --}}
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('our-projects') }}" class="nav-link-item">Our Projects</a>
                                </li>

                                {{-- <li class="nav-item">
                                    <a href="{{ route('blog') }}" class="nav-link-item">Blogs</a>
                                </li> --}}
                                <li class=" contact-on-mobile px-4">
                                    <a href="{{ url('contact') }}"
                                        class="btn is-blue is-rounded btn-animation group mt-2">
                                        <span>Contact Us</span>
                                    </a>
                                </li>
                            </ul>

                        </nav>
                    </div>
                    <!-- Header Navigation -->
                    <a href="{{ url('contact') }}"
                        class="btn is-blue is-rounded btn-animation group hidden xl:inline-block hide-below-1200"><span>Contact
                            Us</span></a>
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

        <footer class="section-footer">
            <div class="bg-[#1B1C1D]">
                <!-- Footer Area Top-->
                <div class="">
                    <!-- Footer Top Spacing -->
                    <div class="pt-[60px] lg:pt-20 xl:pt-[100px]">
                        <div class="container-default">
                            <div class="flex flex-col items-center justify-between gap-x-10 gap-y-8 rounded-[5px] bg-white p-10 md:flex-row lg:gap-x-20 lg:p-[50px]"
                                style="border: solid 2px #F90305">
                                <div class="max-w-none md:max-w-[60%] lg:max-w-[65%] xl:max-w-[700px]">
                                    <h2 class="text-center font-GeneralSans font-semibold text-[#1B1C1D] md:text-left">
                                        Let's Build Something Great Together!
                                    </h2>
                                    <p class="text-center md:text-left  ">
                                        Get in touch with us today and take the first step toward innovation and growth.
                                    </p>
                                </div>
                                <div class="">
                                    <a href="{{url('/contact')}}"
                                        class="btn is-lime is-large btn-animation group inline-block rounded-[3px]"><span>Contact
                                            us</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Top Spacing -->
                </div>
                <!-- Footer Area Top-->

                <!-- Footer Area Center -->
                <div class="text-white">
                    <!-- Footer Center Spacing -->
                    <div class="py-[60px] lg:py-20 xl:py-[100px]">
                        <!-- Section Container -->
                        <div class="container-default">
                            <!-- Footer Widget List -->
                            <div
                                class="grid gap-x-16 gap-y-10 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-[1fr_repeat(3,_auto)] xl:gap-x-24 xxl:gap-x-[134px]">
                                <!-- Footer Widget Item -->
                                <div class="flex flex-col gap-y-7 md:col-span-3 lg:col-span-1">
                                    <!-- Footer Logo -->
                                    <a href="{{ url('/') }}">
                                        <img src="{{ asset('assets/img/kodetech/Kode_Tech_v3_copy_2-removebg-preview 2 (1).png') }}"
                                            alt="Masco" width="180" height="50" />
                                    </a>
                                    <!-- Footer Content -->
                                    <div>
                                        <!-- Footer About Text -->
                                        <div class="lg:max-w-[416px]">
                                            <!--Kode Tech (Pvt) Ltd is a well-established and renowned software development company with a rich legacy spanning over 14 years. -->
                                            We innovate the future with cutting-edge web development, AI solutions, and digital transformation services. Trusted by businesses worldwide, we deliver with a strong focus on quality and customer satisfaction.
                                        </div>
                                        <!-- Footer Mail -->
                                        <a href="mailto:info@kodetech.co"
                                            class="my-6 block underline-offset-4 transition-all duration-300 hover:underline">info@kodetech.co</a>
                                        <!-- Footer Social Link -->
                                        <div class="flex flex-wrap gap-5">
                                            <a href="https://www.facebook.com/kodetech.co?_rdc=1&_rdr#" target="_blank"
                                                rel="noopener noreferrer"
                                                class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-[#FDFBF9]/10 text-sm text-white transition-all duration-300 hover:bg-ColorAtomicTangerine hover:text-[#1B1C1D]"
                                                aria-label="facebook">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                            <a href="https://www.instagram.com/kodetech.co/" target="_blank"
                                                rel="noopener noreferrer"
                                                class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-[#FDFBF9]/10 text-sm text-white transition-all duration-300 hover:bg-ColorAtomicTangerine hover:text-[#1B1C1D]"
                                                aria-label="instagram">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                            <a href="https://www.linkedin.com/company/kodetech-co/" target="_blank"
    rel="noopener noreferrer"
    class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-[#FDFBF9]/10 text-sm text-white transition-all duration-300 hover:bg-ColorAtomicTangerine hover:text-[#1B1C1D]"
    aria-label="linkedin">
    <i class="fa-brands fa-linkedin-in"></i>
</a>

                                            {{-- <a href="https://www.github.com/" target="_blank" rel="noopener noreferrer"
                                                class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-[#FDFBF9]/10 text-sm text-white transition-all duration-300 hover:bg-ColorAtomicTangerine hover:text-[#1B1C1D]"
                                                aria-label="github">
                                                <i class="fa-brands fa-github"></i>
                                            </a> --}}
                                        </div>
                                    </div>
                                    <!-- Footer Content -->
                                </div>
                                <!-- Footer Widget Item -->

                                <!-- Footer Widget Item -->
                                <div class="flex flex-col gap-y-7 md:col-span-1 lg:col-span-1">
                                    <!-- Footer Widget Title -->
                                    <div class="text-xl font-semibold uppercase">
                                        QUICK LINKS
                                    </div>
                                    <!-- Footer Navbar -->
                                    <ul class="flex flex-col gap-y-[10px] capitalize footer-ul">
                                        {{-- <li>
                                            <a href="{{ url('/') }}"
                                                class="hover:opcity-100 text-[#939393]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline"
                                                style="color: #939393 !important">Home</a>
                                        </li> --}}
                                        <li>
                                            <a href="{{ url('about') }}"
                                                class="hover:opcity-100 text-[#939393]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline"
                                                style="color: #939393 !important">About Us</a>
                                        </li>
                                        {{-- <li>
                                            <a href="{{ url('/#services') }}"
                                                class="hover:opcity-100 text-[#939393]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline"
                                                style="color: #939393 !important">Our Services</a>
                                        </li> --}}
                                        {{-- <li>
                                            <a href="{{ url('/#products') }}"
                                                class="hover:opcity-100 text-[#939393]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline"
                                                style="color: #939393 !important">Our Products</a>
                                        </li> --}}
                                        {{-- <li>
                                            <a href="{{ url('our-projects') }}"
                                                class="hover:opcity-100 text-[#939393]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline"
                                                style="color: #939393 !important">Our Projects</a>
                                        </li> --}}
                                        <li>
                                            <a href="{{ url('/blog') }}"
                                                class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline"
                                                style="color: #939393 !important">Knowledge Center</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('careers') }}"
                                                class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline"
                                                style="color: #939393 !important">Careers</a>
                                        </li>
                                        <!--<li>-->
                                        <!--    <a href="{{ url('faq') }}"-->
                                        <!--        class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline"-->
                                        <!--        style="color: #939393 !important">FAQ</a>-->
                                        <!--</li>-->
                                        <li>
                                            <a href="{{ url('contact') }}"
                                                class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline"
                                                style="color: #939393 !important">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Footer Widget Item -->

                                <!-- Footer Widget Item -->
                                <div class="flex flex-col gap-y-6 md:col-span-1 lg:col-span-1">
                                    <!-- Footer Title -->
                                    <div class="text-xl font-semibold uppercase">
                                        OUR SERVICES
                                    </div>
                                    <!-- Footer Title -->

                                    <!-- Footer Navbar -->
                                    <ul class="flex flex-col gap-y-[10px] capitalize footer-ul">
                                        @foreach ($services as $service)
                                            <li>
                                                <a href="{{ route('ServicesShow', $service->slug) }}"
                                                    class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline"
                                                    style="color: #939393 !important">{{ $service->service_name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- Footer Widget Item-->

                                <!-- Footer Widget Item -->
                                <div class="flex flex-col gap-y-6 md:col-span-1 lg:col-span-1">
                                    <!-- Footer Title -->
                                    <div class="text-xl font-semibold capitalize ">
                                        OUR PRODUCTS
                                    </div>
                                    <!-- Footer Title -->

                                    <!-- Footer Navbar -->
                                    <ul class="flex flex-col gap-y-[10px] capitalize footer-ul">
                                        @foreach ($products as $product)
                                       
                                        <li>
                                            <a href="{{ route('product.show', $product->slug) }}"  
                                                rel="noopener noreferrer"
                                                class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline"
                                                style="color: #939393 !important">{{$product->product_name}}</a>
                                        </li>
                                        @endforeach
                                        
                                    </ul>
                                </div>
                                <!-- Footer Widget Item -->
                            </div>
                            <!-- Footer Widget List -->
                        </div>
                        <!-- Section Container -->
                    </div>
                    <!-- Footer Center Spacing -->
                </div>
                <!-- Footer Area Center -->

                <div class="horizontal-line bg-[#F90305]"
                    style="height: 2px; width: 100%; background-color: #F90305; opacity: 1"></div>

                <!-- Footer Area Bottom -->
                <div>
                    <!-- Footer Bottom Spacing -->
                    <div class="py-[18px]" style="padding-bottom: 50px !important;">
                        <!-- Section Container -->
                        <div class="container-default flex flex-col md:flex-row justify-between">
                            <div class="text-center text-[#FDFBF9]/80" style="color: #CFD3D7 !important">
                                &copy; Copyright 2025 Kodetech (Pvt) Ltd.
                            </div>
                            <div class="text-center text-[#FDFBF9]/80">
                                <a href="{{ url('/terms') }}"
                                    class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline "
                                    style="color: #CFD3D7 !important">Terms & Conditions</a>
                                <span style="width: 50px">|</span>
                                <a href="{{ url('/privacy') }}"
                                    class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline"
                                    style="color: #CFD3D7 !important">Privacy Policy</a>
                            </div>
                        </div>
                        <!-- Section Container -->
                    </div>
                    <!-- Footer Bottom Spacing -->
                </div>
                <!-- Footer Area Bottom -->
            </div>
        </footer>
        {{-- @yield('footerSection')

        @yield('footer')  --}}


    </div>

    <x-scripts />
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const currentUrl = window.location.pathname;

            document.querySelectorAll(".site-menu-main .nav-link-item").forEach(link => {
                const linkUrl = new URL(link.href).pathname;

                if (currentUrl === linkUrl || (currentUrl === "/" && linkUrl === "/")) {
                    link.classList.add("active-url");
                } else {
                    link.classList.remove("active-url");
                }
            });
        });
    </script>
</body>

</html>
