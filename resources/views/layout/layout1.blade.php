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

            /* Floating Button */
            .inquiry-btn {
                position: fixed;
                top: 50%;
                right: 0;
                transform: translateY(-50%);
                background: #1B1B1B;
                color: #fff;
                width: 55px;
                height: 180px;
                border: none;
                cursor: pointer;
                z-index: 9999;
                box-shadow: -4px 0 15px rgba(0, 0, 0, 0.3);
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                gap: 12px;
                border-radius: 14px 0 0 14px;
                transition: all 0.3s ease;
            }

            .btn-text {
                writing-mode: vertical-rl;
                text-orientation: mixed;
                font-size: 16px;
                font-weight: 400;
                letter-spacing: 3px;
                font-family: Inter, sans-serif;
            }

            .btn-icon {
                display: flex;
                align-items: center;
                justify-content: center;
                color: #F90305;
            }

            .btn-icon svg {
                width: 20px;
                height: 20px;
            }

            /* Overlay */
            .inquiry-overlay {
                position: fixed;
                inset: 0;
                background: rgba(0, 0, 0, 0.6);
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s ease;
                z-index: 9998;
                backdrop-filter: blur(2px);
            }

            .inquiry-overlay.active {
                opacity: 1;
                visibility: visible;
            }

            /* Side Panel */
            .inquiry-panel {
                position: fixed;
                top: 0;
                right: -100%;
                width: 100%;
                max-width: 600px;
                height: 100vh;
                background: #1B1B1B;
                z-index: 9999;
                transition: right 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                box-shadow: -10px 0 30px rgba(0, 0, 0, 0.3);
                overflow-y: auto;
            }

            .inquiry-panel.active {
                right: 0;
            }

            /* Panel Content */
            .inquiry-panel-content {
                position: relative;
                padding: 40px 30px;
                color: #fff;
            }

            /* Close Button */
            .close-inquiry-btn {
                position: absolute;
                top: 25px;
                right: 25px;
                background: transparent;
                border: none;
                cursor: pointer;
                padding: 8px;
                transition: transform 0.2s ease;
                z-index: 10;
            }

            .close-inquiry-btn:hover {
                transform: scale(1.1);
            }

            /* Panel Header */
            .inquiry-panel-header {
                margin-bottom: 35px;
            }

            .inquiry-panel-header h2 {
                font-family: Arial, sans-serif;
                font-size: 28px;
                font-weight: 400;
                margin-bottom: 15px;
                color: #fff;
            }

            .inquiry-panel-header p {
                font-size: 16px;
                font-weight: 400;
                line-height: 1.6;
                color: #A9A9A9;
            }

            /* Form Styles */
            .inquiry-form {
                display: flex;
                flex-direction: column;
                gap: 25px;
            }

            .form-group {
                display: flex;
                flex-direction: column;
                gap: 10px;
            }

            .form-group label {
                font-size: 16px;
                font-weight: 400;
                color: #fff;
            }

            .required {
                color: #F90305;
                margin-left: 2px;
            }

            .form-group input,
            .form-group textarea {
                background: transparent;
                border: none;
                border-bottom: 1px solid #A9A9A9;
                padding: 12px 0;
                color: #fff;
                font-size: 16px;
                font-weight: 400;
                transition: border-color 0.3s ease;
                font-family: inherit;
            }

            .form-group input::placeholder,
            .form-group textarea::placeholder {
                color: #A9A9A9;
            }

            .form-group input:focus,
            .form-group textarea:focus {
                outline: none;
                border-bottom-color: #F90305;
            }

            .form-group textarea {
                resize: vertical;
                min-height: 100px;
            }

            /* Checkbox Group */
            .checkbox-group {
                margin-top: 5px;
            }

            .checkbox-label {
                display: flex;
                align-items: flex-start;
                gap: 12px;
                cursor: pointer;
                font-size: 14px;
                line-height: 1.5;
            }

            .checkbox-label input[type="checkbox"] {
                width: 20px;
                height: 20px;
                min-width: 20px;
                accent-color: #CC0000;
                cursor: pointer;
                margin-top: 2px;
                border: none;
            }

            .checkbox-text {
                font-weight: 600;
                color: #A9A9A9;
            }

            .checkbox-text a {
                color: #A9A9A9;
                text-decoration: underline;
                transition: color 0.2s ease;
            }

            .checkbox-text a:hover {
                color: #F90305;
            }

            /* Submit Button */
            .submit-inquiry-btn {
                background: #F90305;
                color: #fff;
                border: none;
                padding: 16px 32px;
                font-size: 16px;
                font-weight: 600;
                border-radius: 14px;
                cursor: pointer;
                transition: all 0.3s ease;
                margin-top: 10px;
            }

            .submit-inquiry-btn:hover {
                background: #d90204;
                transform: translateY(-2px);
                box-shadow: 0 4px 12px rgba(249, 3, 5, 0.3);
            }

            /* Response Time */
            .response-time {
                text-align: center;
                font-size: 16px;
                font-weight: 400;
                color: #A9A9A9;
                margin-top: 40px;
            }

            /* Responsive Styles */
            @media (max-width: 768px) {
                .inquiry-panel {
                    max-width: 100%;
                }

                .inquiry-panel-content {
                    padding: 30px 20px;
                }

                .inquiry-panel-header h2 {
                    font-size: 26px;
                }

                .inquiry-panel-header p {
                    font-size: 14px;
                }

                .close-inquiry-btn {
                    top: 20px;
                    right: 20px;
                }
            }

            @media (max-width: 480px) {
                .inquiry-panel-content {
                    padding: 25px 16px;
                }

                .inquiry-panel-header h2 {
                    font-size: 24px;
                }

                .form-group input,
                .form-group textarea {
                    font-size: 14px;
                }

                .submit-inquiry-btn {
                    padding: 14px 24px;
                    font-size: 15px;
                }
            }

            /* Scrollbar Styling for Panel */
            .inquiry-panel::-webkit-scrollbar {
                width: 6px;
            }

            .inquiry-panel::-webkit-scrollbar-track {
                background: #1a1a1a;
            }

            .inquiry-panel::-webkit-scrollbar-thumb {
                background: #404040;
                border-radius: 3px;
            }

            .inquiry-panel::-webkit-scrollbar-thumb:hover {
                background: #555;
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
                                    <a href="{{ url('/contact') }}"
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
                                            We innovate the future with cutting-edge web development, AI solutions, and
                                            digital transformation services. Trusted by businesses worldwide, we deliver
                                            with a strong focus on quality and customer satisfaction.
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
<a href="https://wa.me/94707775264?text=Hello%20I%20would%20like%20to%20contact%20you" target="_blank"
    rel="noopener noreferrer"
    class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-[#FDFBF9]/10 text-sm text-white transition-all duration-300 hover:bg-ColorAtomicTangerine hover:text-[#1B1C1D]"
    aria-label="whatsapp">
    <i class="fa-brands fa-whatsapp"></i>
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
                                                    style="color: #939393 !important">{{ $product->product_name }}</a>
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

    <!-- Floating Inquiry Button -->
    <button id="inquiryBtn" class="inquiry-btn">
        <span class="btn-text">INQUIRIES</span>
        <span class="btn-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="19" viewBox="0 0 25 19"
                fill="none">
                <path
                    d="M12.3497 0.949997L13.6797 2.375L6.64969 9.5L13.6797 16.625L12.3497 18.05L3.79969 9.5L12.3497 0.949997Z"
                    fill="#F90305" />
                <path
                    d="M18.2872 0.949997L19.6172 2.375L12.5872 9.5L19.6172 16.625L18.2872 18.05L9.73719 9.5L18.2872 0.949997Z"
                    fill="#F90305" />
            </svg>
        </span>
    </button>

    <!-- Inquiry Overlay -->
    <div id="inquiryOverlay" class="inquiry-overlay"></div>

    <!-- Inquiry Side Panel -->
    <div id="inquiryPanel" class="inquiry-panel">
        <div class="inquiry-panel-content">
            <!-- Close Button -->
            <button id="closeInquiry" class="close-inquiry-btn">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18M6 6L18 18" stroke="white" stroke-width="2" stroke-linecap="round" />
                </svg>
            </button>

            <!-- Panel Header -->
            <div class="inquiry-panel-header">
                <h2>Get in Touch</h2>
                <p>Have a question? Fill out the form below and we'll get back to you as soon as possible.</p>
            </div>

            @if (session('success'))
                <div style="color: #00ff99; margin-bottom: 15px;">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div style="color: #ff4d4d; margin-bottom: 15px;">
                    Please fix the errors and try again.
                </div>
            @endif

            <!-- Inquiry Form -->
            <form action="{{ route('inquiry.submit') }}" method="POST" class="inquiry-form">
                @csrf

                <div class="form-group">
                    <label for="name">Name<span class="required">*</span></label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" required>
                </div>

                <div class="form-group">
                    <label for="contact">Contact No<span class="required">*</span></label>
                    <input type="tel" id="contact" name="contact" pattern="^\+?[0-9]{7,15}$" maxlength="16"
                        placeholder="+94 7 1234 5678" required>
                </div>

                <div class="form-group">
                    <label for="email">Email<span class="required">*</span></label>
                    <input type="email" id="email" name="email" placeholder="your.email@example.com"
                        required>
                </div>

                <div class="form-group">
                    <label for="message">Message<span class="required">*</span></label>
                    <textarea id="message" name="message" rows="5" placeholder="Tell us more about your inquiry..." required></textarea>
                </div>

                <div class="form-group checkbox-group">
                    <label class="checkbox-label">
                        <input type="checkbox" required>
                        <span class="checkbox-text">I agree to the <a href="{{ url('/privacy') }}"
                                target="_blank">privacy policy</a> and consent to the handling of my personal
                            information.</span>
                    </label>
                </div>

                <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="6LdUdJ0rAAAAAATp6GXxQOSnhz6E_yOdR7Uj3f47">
                    </div>

                    @if ($errors->has('g-recaptcha-response'))
                        <p style="color:red;">
                            {{ $errors->first('g-recaptcha-response') }}
                        </p>
                    @endif
                </div>

                <button type="submit" class="submit-inquiry-btn">Submit Inquiry</button>

                <p class="response-time">We typically respond within 24 hours</p>
            </form>
        </div>
    </div>


    <x-scripts />

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- for inquiry side panel -->
    <script>
        const inquiryBtn = document.getElementById('inquiryBtn');
        const inquiryPanel = document.getElementById('inquiryPanel');
        const inquiryOverlay = document.getElementById('inquiryOverlay');
        const closeInquiry = document.getElementById('closeInquiry');

        inquiryBtn.addEventListener('click', () => {
            inquiryPanel.classList.add('active');
            inquiryOverlay.classList.add('active');
            document.body.style.overflow = 'hidden'; // Prevent body scroll when panel is open
        });

        closeInquiry.addEventListener('click', closePanel);
        inquiryOverlay.addEventListener('click', closePanel);

        function closePanel() {
            inquiryPanel.classList.remove('active');
            inquiryOverlay.classList.remove('active');
            document.body.style.overflow = ''; // Restore body scroll
        }

        // Close panel on ESC key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && inquiryPanel.classList.contains('active')) {
                closePanel();
            }
        });
    </script>

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
