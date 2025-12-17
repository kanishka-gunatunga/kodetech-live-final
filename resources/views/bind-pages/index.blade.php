<?php
use App\Models\Service;
use App\Models\Project;
use App\Models\Product;
use App\Models\Client;
use App\Models\Blog;

$products = Product::all();
$services = Service::all();
$projects = Project::all();
$clients = Client::all();
$blogs = Blog::all();

?>

@extends('layout.layout1')

{{-- @section('headerLogo')
<img src="{{ asset('assets/img/kodetech/kodetech-logo.png') }}" alt="Masco" width="109" height="30" />
@endsection --}}



@section('headButtons')
    <div class="flex items-center gap-6">
        {{-- <a href="{{ url('login') }}" class="btn-text hidden hover:text-ColorBlue sm:inline-block">Login</a>
    <a href="{{ url('signup') }}" class="btn is-blue is-rounded btn-animation group hidden sm:inline-block"><span>Sign up free</span></a> --}}
        <!-- Responsive Offcanvas Menu Button -->
        <div class="block xl:hidden">
            <button id="openBtn" class="hamburger-menu mobile-menu-trigger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
@endsection

@section('content')
    <style>
        .swiper-slide {
            margin-bottom: 30px
        }

        .swiper-pagination-bullets {
            bottom: 0px !important;
        }

        @media screen and (max-width: 600px) {
            .mobile-hero-size {
                display: flex !important;
                padding: 50px 20px !important;
            }
        }
    </style>
    <!-- Hero Section Start -->
    <section class="section-hero"
        style="background-image: url('{{ asset('assets/img/kodetech/sub.jpg') }}'); background-position: bottom center; background-size: cover">
        <!-- Section Background -->
        <div class="relative z-10 overflow-hidden ">
            <!-- Hero Section Space -->
            <div class="pt-[60px] sm:pt-[145px] lg:pt-[185px]">
                <!-- Section Container -->
                <div class="container-default relative z-10 mobile-hero-size">
                    <!-- Hero Area -->
                    <div class="text-center">
                        <h1
                            class="jos -trackig-[1px] mx-auto mb-6 font-PublicSans text-[30px] font-bold leading-[1.06] text-[#121212] md:max-w-[80%] md:text-[60px] lg:max-w-[95%] lg:text-[70px] xl:max-w-[1000px] xl:text-[90px]">
                            Driving Growth Through Digital Innovation
                        </h1>
                        <p class="jos mx-auto mb-8 max-w-[996px] lg:mb-[50px] mobile-text-14">
                            Make your business more efficient and effective with Kode Tech. We deliver smart, innovative
                            solutions to streamline your operations and drive growth. Let technology work with you to
                            elevate your business.

                        </p>
                        <div class="jos flex flex-wrap justify-center gap-[18px]">
                            <a href="{{ url('/contact') }}" class="btn is-lime is-large btn-animation group rounded-[3px]"
                                style="min-width: 177px !important"><span>Get In Touch</span></a>
                            <a href="#services" class="btn is-outline-black is-large btn-animation group rounded-[3px]"
                                style="min-width: 177px !important"><span>View Services</span></a>
                        </div>
                    </div>
                    <!-- Hero Area -->

                    <!-- Hero Images -->
                    <div class="-z-10 -mb-[17px] mt-[60px] grid grid-cols-1 gap-8 sm:grid-cols-2 md:flex md:gap-10 lg:gap-14"
                        style="margin-top: 150px">
                    </div>
                    <!-- Hero Images -->
                    <!-- Hero Space -->
                </div>
                <!-- Section Container -->
            </div>
            <!-- Hero Background Shape - 2 -->
            <div class="absolute bottom-0 z-10 hidden w-full md:block">
                <img src="{{ asset('assets/img/elements/section-devider-black.svg') }}" alt="home-8-dot-shape"
                    class="w-full" />
            </div>
        </div>
        <!-- Section Background -->
    </section>
    <!-- Hero Section End -->

    <!-- Fact Section Start -->
    <section class="section-fact">
        <!-- Section Background -->
        <div class="z-10 bg-[#121212]">
            <!-- Section Space -->
            <div class="section-space">
                <!-- Section Container -->
                <div class="container-default">
                    <!-- Fact Area -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[0.8fr_minmax(0,_1fr)] xl:gap-20 xxl:gap-[100px]"
                        style=" align-items: center;">
                        <!-- Section Wrapper -->
                        <div>
                            <!-- Section Block -->
                            <div class="mb-5">
                                <h2
                                    class="text-center font-PublicSans text-[30px] font-bold leading-[1.14] text-[#FDFBF9] lg:text-left lg:text-5xl xl:text-[56px]">
                                    Earning Trust Through Innovation and Excellence.
                                </h2>
                            </div>
                            <!-- Section Block -->
                        </div>
                        <!-- Section Wrapper -->
                        <!-- Fact List -->
                        <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-3">
                            <!-- Fact Item -->
                            <div
                                class="relative px-0 text-center sm:px-4 first:pl-0 last:pr-0 last:after:hidden 
    after:absolute after:bottom-0 after:left-full after:h-full after:w-[1px] after:bg-ColorPurple sm:after:block">
                                <div class="flex flex-col items-center h-full justify-end">
                                    <div class="mb-[5px] font-PublicSans text-5xl font-bold leading-[1.14] text-[#FDFBF9] xl:text-[56px]"
                                        data-module="countup">
                                        <span class="start-number" data-countup-number="15">15</span>+
                                    </div>
                                    <span class="text-[#FDFBF9]/60">Years of experience</span>
                                </div>
                            </div>
                            <!-- Fact Item -->
                            <!-- Fact Item -->
                            <div
                                class="relative px-0 text-center sm:px-4 first:pl-0 last:pr-0 last:after:hidden 
    after:absolute after:bottom-0 after:left-full after:h-full after:w-[1px] after:bg-ColorPurple sm:after:block">
                                <div class="flex flex-col items-center h-full justify-end">
                                    <div class="mb-[5px] font-PublicSans text-5xl font-bold leading-[1.14] text-[#FDFBF9] xl:text-[56px]"
                                        data-module="countup">
                                        <span class="start-number" data-countup-number="15">15</span>
                                    </div>
                                    <span class="text-[#FDFBF9]/60">International Markets</span>
                                </div>
                            </div>
                            <!-- Fact Item -->
                            <!-- Fact Item -->
                            <div
                                class="relative px-0 text-center sm:px-4 first:pl-0 last:pr-0 last:after:hidden 
    after:absolute after:bottom-0 after:left-full after:h-full after:w-[1px] after:bg-ColorPurple sm:after:block">
                                <div class="flex flex-col items-center h-full justify-end">
                                    <div class="mb-[5px] font-PublicSans text-5xl font-bold leading-[1.14] text-[#FDFBF9] xl:text-[56px]"
                                        data-module="countup">
                                        <span class="start-number" data-countup-number="1500">1500</span>+
                                    </div>
                                    <span class="text-[#FDFBF9]/60">Projects completed</span>
                                </div>
                            </div>
                            <!-- Fact Item -->
                        </div>
                        <!-- Fact List -->
                    </div>
                    <!-- Fact Area -->
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Space -->
        </div>
        <!-- Section Background -->
    </section>
    <!-- Fact Section End -->
    <style>
        @media (max-width: 639px) {
            .sec2-img-position {
                left: auto !important;
                right: 0 !important;
                width: 150px !important;
                transform: none !important;
                display: inline-block !important;
            }
        }

        @media (min-width: 640px) and (max-width: 1023px) {
            .sec2-img-position {
                right: 0px;
                left: auto;
                --tw-translate-x: none;
            }
        }

        @media (min-width: 1280px) {
            .sec2-img-position {
                display: inline-block !important;
            }
        }
    </style>
    <!-- Content Section Start -->
    <section class="section-content">
        <div class="relative z-10">
            <!-- Section Space -->
            <div class="section-space">
                <!-- Section Container -->
                <div class="container-default px-4 sm:px-0">
                    <div class="flex flex-col gap-y-20 lg:gap-y-[100px] xl:gap-y-[120px]">
                        <!-- Content Area Single -->
                        <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-24 xl:gap-60">
                            <!-- Content Block Left -->
                            <div class="jos order-2 lg:order-2" data-jos_animation="fade-right">
                                <!-- Section Wrapper -->
                                <div>
                                    <!-- Section Block -->
                                    <div class="mb-5">
                                        <h2
                                            class="font-PublicSans text-4xl font-bold leading-[1.14] text-[#121212] lg:text-left lg:text-5xl xl:text-[56px]">
                                            The Journey of Kode Tech
                                        </h2>
                                    </div>
                                    <!-- Section Block -->
                                </div>
                                <!-- Section Wrapper -->
                                <p class="mb-5">
                                    For more than 15 years, Kode Tech (Pvt) Ltd has been a trusted name in the world of
                                    technology, delivering over 1,500 groundbreaking projects across 15 international
                                    markets. Our journey has been driven by a passion for innovation, enabling businesses to
                                    thrive through advanced solutions in software development, artificial intelligence,
                                    blockchain, and the metaverse.
                                </p>
                                {{-- <hr class="mb-5" /> --}}
                                <p>
                                    With a rich legacy of excellence and an eye on the future, we continue to redefine
                                    what's possible, helping our clients achieve success at every step.
                                </p>
                                <div class="mt-8 lg:mt-[50px]">
                                    <a href="{{ url('/about') }}"
                                        class="btn is-lime is-large btn-animation group inline-block rounded-[3px]"><span>Learn
                                            More</span></a>
                                </div>
                            </div>
                            <!-- Content Block Left -->
                            <!-- Content Block Right -->
                            <div class="jos relative order-1 lg:order-1" data-jos_animation="fade-left">
                                <!-- Content Image -->
                                <img src="{{ asset('assets/img/kodetech/journey_img1.jpg') }}" alt="content-img-1"
                                    width="523" height="450" class="h-auto w-full rounded-[10px]" />
                                <!-- Content Shape -->
                                <img src="{{ asset('assets/img/kodetech/journey_img2.svg') }}" alt="content-shape-1"
                                    width="304" height="104"
                                    class="jos absolute bottom-6 left-full -translate-x-1/2 inline-block xl:inline-block sec2-img-position"
                                    data-jos_animation="fade-up" data-jos_delay="0.3" />
                            </div>
                            <!-- Content Block Right -->
                        </div>
                        <!-- Content Area Single -->
                    </div>
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Space -->

            <!-- Content Shape -->
            {{-- <div class="absolute hidden xl:inline-block right-[60px] top-1/3 -z-10 rotate-[29deg]">
            <img src="{{ asset('assets/img/elements/home-8-dot-shape.svg') }}" alt="home-8-dot-shape" width="126" height="275" />
    </div> --}}
        </div>
    </section>
    <!-- Content Section End -->

    <!-- Video Section Start -->
    <!--<section class="section-video">-->
    <!-- Section Space -->
    <!--    <div class="section-space-bottom">-->
    <!-- Section Container -->
    <!--        <div class="container-default">-->
    <!-- Section Content Wrapper -->
    <!--            <div class="jos mb-[60px] xl:mb-20">-->
    <!-- Section Content Block -->
    <!--                <div class="mx-auto max-w-[637px]">-->
    <!--                    <h2 class="mb-5 text-center">-->
    <!--                        Explore Our Innovation and Expertise-->
    <!--                    </h2>-->
    <!--                    <p class="text-center">-->
    <!--                        Unveil the power of our innovative solutions that drive growth, efficiency, and success for-->
    <!--                        businesses worldwide.-->
    <!--                    </p>-->
    <!--                </div>-->
    <!-- Section Content Block -->
    <!--            </div>-->
    <!-- Section Content Wrapper -->

    <!-- Video Block -->
    <div class="jos">
        <div class="relative flex items-center justify-center" style="padding:3px;">
            <img src="{{ asset('assets/img/kodetech/Kodetech Website Intro Video 2.jpg') }}" alt="video-img" width="1200"
                height="740" class="" />
            <a data-fslightbox="gallery" href="https://www.youtube.com/watch?v=M-AluZC9Buc"
                class="group group absolute flex h-[50px] w-[50px] items-center justify-center rounded-[50%] bg-white text-ColorPurple xl:h-[120px] xl:w-[120px]"
                aria-label="video-play">
                <span class="text-2xl transition-all duration-300 ease-linear group-hover:scale-110"><i
                        class="fa-solid fa-play"></i></span>
            </a>
        </div>
    </div>
    <!-- Video Block -->
    <!--        </div>-->
    <!-- Section Container -->
    <!--    </div>-->
    <!-- Section Space -->
    <!--</section>-->
    <!-- Video Section End -->

    <!-- Service Section Start -->
    <div class="section-service" id="services">
        <!-- Section Background -->
        <div class="relative z-10 bg-[#1B1C1D]">
            <!-- Section Space -->
            <div class="section-space">
                <!-- Section Container -->
                <div class="container-default">
                    <!-- Section Content Wrapper -->
                    <div class="jos mb-[60px] xl:mb-20">
                        <!-- Section Content Block -->
                        <div class="mx-auto max-w-[636px]">
                            <h2 class="text-center font-GeneralSans font-semibold text-white">
                                Explore Our Comprehensive Range of Expert Services
                            </h2>
                        </div>
                        <!-- Section Content Block -->
                    </div>
                    <!-- Section Content Wrapper -->

                    <!-- Service List -->
                    <div class="grid gap-x-6 gap-y-[50px] md:grid-cols-2 lg:grid-cols-3">
                        <!-- Service Item -->
                        @foreach ($services as $service)
                            <div class="jos" data-jos_delay="0">
                                <div class="group flex h-full flex-col text-[#FDFBF9]">
                                    <span
                                        class="block font-GeneralSans text-xl font-semibold leading-[1.4] transition-all duration-300 group-hover:text-ColorAtomicTangerine lg:text-2xl xl:text-3xl">
                                        {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}.</span>
                                    <div
                                        class="relative my-[30px] h-[2px] w-full bg-[#FDFBF9]/10 after:absolute after:inset-0 after:scale-x-0 after:bg-ColorAtomicTangerine after:transition-all after:duration-300 group-hover:after:scale-x-100">
                                    </div>
                                    <div
                                        class="mb-[15px] font-GeneralSans text-xl font-semibold leading-[1.4] lg:text-[22px] xl:text-3xl">
                                        {{ $service->service_name }}
                                    </div>
                                    <!--<p class="mb-5 line-clamp-3 text-[#FDFBF9]/80">-->
                                    <!--    {{ $service->service_overview }}-->

                                    <!--</p>-->
                                    <p class="mb-5 line-clamp-3 text-[#FDFBF9]/80">
                                        {!! strip_tags($service->service_overview, '<strong>') !!}
                                    </p>

                                    <a href="{{ route('ServicesShow', $service->slug) }}"
                                        class="mt-auto inline-flex items-center gap-x-4 font-GeneralSans text-base font-semibold text-ColorAtomicTangerine">Discover
                                        More
                                        <span
                                            class="text-3xl transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                            <i class="fa-sharp fa-regular fa-arrow-right-long"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        @endforeach

                        <!--group-hover:text-ColorAtomicTangerine-->
                        <!-- Service Item -->
                    </div>
                    <!-- Service List -->
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Space -->

            <!-- Background Shape -->
            {{-- <img src="{{ asset('assets/img/elements/home-5-service-bg-shape.svg') }}" alt="home-5-service-bg-shape" width="140" height="140" class="absolute right-12 top-[197px] -z-10 hidden xl:inline-block" /> --}}
        </div>
        <!-- Section Background -->
    </div>
    <!-- Service Section End -->


    <!-- Case studies Section Start -->
    <div class="section-brand " id="products">
        <div class="jos">
            <!-- Section Space -->
            <div class="py-[60px] md:py-20 lg:py-[100px]">
                <!-- Section Container -->
                <div class="container-default">
                    <!-- Section Content Wrapper -->
                    <div class="jos mb-[60px] xl:mb-20">
                        <!-- Section Content Block -->
                        <div class="mx-auto max-w-[636px]">
                            <h2 class="mb-5 text-center">
                                Innovative Solutions for Every Business Need
                            </h2>
                        </div>
                        <!-- Section Content Block -->
                    </div>
                    <!-- Section Content Wrapper -->
                    <!-- Case studies Slider -->
                    <div class="swiper case-study-slider-custom1">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            @foreach ($products as $product)
                                <div class="swiper-slide">
                                    <!-- Case studies Item -->
                                    <div class="jos mb-6 break-inside-avoid rounded-md slide-padding-case">
                                        <!-- Content Area Single -->
                                        <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-24">
                                            <!-- Content Block Left -->
                                            <div class="jos order-2 md:order-2">
                                                <!-- Section Wrapper -->
                                                <div>
                                                    <!-- Section Block -->
                                                    <div class="mb-5">
                                                        <h2
                                                            class="mb-5 font-PublicSans text-2xl font-bold leading-[1.14]  lg:text-4xl">
                                                            {{ $product->product_name }} </h2>
                                                    </div>
                                                    <!-- Section Block -->
                                                </div>
                                                <!-- Section Wrapper -->
                                                <!--<p class="mb-5 mobile-text-14">-->
                                                <!--    {{ $product->product_overview }}-->
                                                <!--</p>-->
                                                <p class="mb-5 mobile-text-14">
                                                    {!! strip_tags($product->product_overview, '<strong>') !!}
                                                </p>
                                                <div class="mt-8 lg:mt-[50px]">
                                                    <a href="{{ route('product.show', $product->slug) }}"
                                                        class="btn is-lime is-large btn-animation group inline-block rounded-[3px]"><span>Learn
                                                            More</span></a>
                                                </div>
                                            </div>
                                            <!-- Content Block Left -->
                                            <!-- Content Block Right -->
                                            <div class="jos relative order-1 md:order-1">
                                                <img src="{{ asset('storage/' . $product->product_image) }}"
                                                    alt="{{ $product->product_name }}" class="m-[20px] " />
                                            </div>
                                            <!-- Content Block Right -->
                                        </div>
                                        <!-- Content Area Single -->


                                    </div>
                                    <!-- Case studies Item -->
                                </div>
                            @endforeach

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <!-- Case studies Slider -->
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Space -->
        </div>
    </div>
    <!-- Case studies Section End -->


    <!-- Partners Section Start -->
    <div class="section-brand bg-[#1B1C1D] black-section">
        <div class="jos">
            <!-- Section Space -->
            <div class="py-[60px] md:py-20 lg:py-[100px]">
                <!-- Section Container -->
                <div class="container-default">
                    <!-- Section Content Wrapper -->
                    <div class="jos mb-[60px] xl:mb-20">
                        <!-- Section Content Block -->
                        <div class="mx-auto max-w-[636px]">
                            <h2 class="mb-5 text-center text-white">
                                Our Valued Clients Around the Globe
                            </h2>
                        </div>
                        <!-- Section Content Block -->
                    </div>
                    <!-- Section Content Wrapper -->
                    <!-- Section Content Wrapper -->
                    <style>
                        .grid-container {
                            display: grid;
                            grid-template-columns: repeat(6, 1fr);
                            grid-template-rows: repeat(3, 1fr);
                            gap: 15px;
                        }

                        .grid-item {
                            background-color: transparent;
                            padding: 0px;
                            text-align: center;
                            border-radius: 5px;
                        }

                        .grid-item img {
                            width: 100%;
                            height: auto;
                            object-fit: cover;
                            border-radius: 10px;
                        }

                        /* @media (max-width: 480px) {
                                            .grid-container {
                                                 grid-template-columns: repeat(6, 1fr);
                                            }
                                        }*/

                        @media screen and (max-width: 992px) {
                            .grid-item img {
                                border-radius: 0px;
                            }

                            .grid-container {
                                display: grid;
                                grid-template-columns: repeat(3, 1fr);
                                grid-template-rows: repeat(3, 1fr);
                                gap: 15px;
                            }
                        }
                    </style>
                    <!-- Partners Slider -->
                    <div class="swiper partners-slider-custom1">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            @foreach ($clients->chunk(18) as $chunk)
                                <div class="swiper-slide">
                                    <!-- Partner Item -->
                                    <div class="jos break-inside-avoid shadow rounded-md">
                                        <div class="grid-container">
                                            @foreach ($chunk as $client)
                                                <img src="{{ asset('storage/' . $client->client_logo) }}"
                                                    alt="client-logo" class="rounded" />
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <!-- Partners Slider -->
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Space -->
        </div>
    </div>
    <!-- Partners Section End -->

    <!-- Blog Class Section Start -->
    <section class="video-class-section" id="knowdge" style="background-color: #FDFBF9 !important;">
        <div class="relative z-10">
            <!-- Section Space -->
            <div class="section-space">
                <!-- Section Container -->
                <div class="container-default">
                    <!-- Section Content Wrapper -->
                    <div class="jos mb-[60px] xl:mb-20">
                        <!-- Section Content Block -->
                        <div class="mx-auto max-w-[840px]">
                            <div class="mb-5">
                                <h2
                                    class="mb-5 text-center font-PublicSans text-4xl font-bold leading-[1.14] text-[#1212121] lg:text-5xl xl:text-[56px]">
                                    Browse Through Our Tech Insights
                                </h2>
                            </div>
                            <p class="text-center mx-auto max-w-[640px]">
                                Stay updated with the latest trends, innovations, and expert insights in technology, AI,
                                blockchain, and more. Explore our blogs to gain valuable knowledge and stay ahead in the
                                digital world.
                            </p>
                        </div>
                        <!-- Section Content Block -->
                    </div>
                    <!-- Section Content Wrapper -->

                    <!-- Blog Class List-->
                    <div class="mb-10 grid gap-x-6 gap-y-10 md:grid-cols-2 lg:mb-20 lg:grid-cols-3">
                        @foreach ($blogs->take(3) as $blog)
                            <div class="jos rounded h-full flex flex-col"
                                style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);">
                                <div
                                    class="relative flex items-center justify-center overflow-hidden rounded-[6px] after:absolute after:inset-0 min-h-[250px]">
                                    <img src="{{ asset('storage/' . $blog->news_image) }}"
                                        alt="{{ $blog->news_heading }}" width="416" height="260px"
                                        class=" w-full object-cover rounded-t-[6px] rounded-b-none"
                                        style="height: 260px" />
                                </div>

                                <div class="mb-4 px-4 mt-6 text-2xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack"
                                    style="color: #000 !important">
                                    {{ str($blog->news_heading)->limit(40) }}

                                </div>

                                <p class="line-clamp-3 px-4 mobile-text-14 mb-4" style="color: #000 !important">
                                    {{ Str::limit(strip_tags($blog->news_description), 100) }}...
                                </p>

                                <div class="mt-auto px-4 mb-4">
                                    <a href="{{ route('BlogShow', $blog->slug) }}"
                                        class="inline-flex items-center gap-x-2 text-base font-bold text-[#F90305] hover:text-ColorPurple"
                                        style="color: #F90305 !important">
                                        Read More
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                        <!-- Blog Class Item -->

                        <!-- Blog Class Item -->
                        <!-- Blog Class Item -->
                        {{-- <div class="jos shadow rounded">
                            <div
                                class="relative flex items-center justify-center overflow-hidden rounded-[10px] after:absolute after:inset-0 after:bg-ColorBlack/40">
                                <img src="{{ asset('assets/img/kodetech/Rectangle 108.png') }}" alt="video-class-img-1"
                                    width="416" height="250" class="h-full w-full object-cover" />
                            </div>
                            <div class="mb-4 px-4 mt-6 text-2xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack"
                                style="color: #000 !important">
                                App - The power of communication
                            </div>
                            <p class="line-clamp-3  px-4 mobile-text-14" style="color: #000 !important">
                                A lot of information is given in our blogs. You can learn more about startup by reading our
                                blogs. It’s time to brainstorm ideas for your business .You can learn more about startup by
                                reading our blogs. It’s time to brainstorm ideas for your business
                            </p>
                            <a href="{{ url('servicedetails') }}"
                                class="mt-auto  px-4 mb-4 inline-flex items-center gap-x-2 text-base font-bold text-[#121212] hover:text-ColorPurple"
                                style="color: #F90305 !important">Read More
                                <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div> --}}
                        <!-- Blog Class Item -->
                        <!-- Blog Class Item -->
                        {{-- <div class="jos shadow rounded">
                            <div
                                class="relative flex items-center justify-center overflow-hidden rounded-[10px] after:absolute after:inset-0 after:bg-ColorBlack/40">
                                <img src="{{ asset('assets/img/kodetech/Rectangle 108.png') }}" alt="video-class-img-1"
                                    width="416" height="250" class="h-full w-full object-cover" />
                            </div>
                            <div class="mb-4 px-4 mt-6 text-2xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack"
                                style="color: #000 !important">
                                App - The power of communication
                            </div>
                            <p class="line-clamp-3  px-4 mobile-text-14" style="color: #000 !important">
                                A lot of information is given in our blogs. You can learn more about startup by reading our
                                blogs. It’s time to brainstorm ideas for your business .You can learn more about startup by
                                reading our blogs. It’s time to brainstorm ideas for your business
                            </p>
                            <a href="{{ url('servicedetails') }}"
                                class="mt-auto  px-4 mb-4 inline-flex items-center gap-x-2 text-base font-bold text-[#121212] hover:text-ColorPurple"
                                style="color: #F90305 !important">Read More
                                <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div> --}}
                        <!-- Blog Class Item -->

                    </div>
                    <!-- Blog Class List-->
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Space -->

            {{-- <img src="{{ asset('assets/img/elements/hero-3-shapes-1.svg') }}" alt="hero-2-shape-1" width="110" height="191" class="absolute -left-16 top-[150px] -z-10 hidden sm:inline-block" /> --}}
        </div>
    </section>
    <!-- Blog Section End -->
@endsection
