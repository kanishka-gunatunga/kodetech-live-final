@extends('layout.layout1')

@section('headerLogo')
    <img src="{{ asset('assets/img/kodetech/kodetech-logo.png') }}" alt="Masco" width="109" height="24" />
@endsection



@section('headButtons')

<div class="flex items-center gap-6">
    <a href="{{ url('login') }}" class="btn-text hidden hover:text-ColorBlue sm:inline-block">Login</a>
    <a href="{{ url('signup') }}" class="btn is-blue is-rounded btn-animation group hidden sm:inline-block"><span>Sign up free</span></a>
    <!-- Responsive Offcanvas Menu Button -->
    <div class="block lg:hidden">
        <button id="openBtn" class="hamburger-menu mobile-menu-trigger">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</div>

@endsection

@section('content')

<!-- Hero Section Start -->
    <section class="section-hero">
        <!-- Section Background -->
        <div class="relative z-10 overflow-hidden">
            <!-- Hero Section Space -->
            <div class="pt-[105px] sm:pt-[145px] lg:pt-[185px]">
                <!-- Section Container -->
                <div class="container-default relative z-10">
                    <!-- Hero Area -->
                    <div class="text-center">
                        <h1 class="jos -trackig-[1px] mx-auto mb-6 font-PublicSans text-5xl font-bold leading-[1.06] text-[#121212] md:max-w-[80%] md:text-[60px] lg:max-w-[70%] lg:text-[70px] xl:max-w-[856px] xl:text-[90px]">
                            Grow your business to the next level
                        </h1>
                        <p class="jos mx-auto mb-8 max-w-[658px] lg:mb-[50px]">
                            Starting a business can be daunting, but you can make it
                            easier with us. We're skilled in team-building strategies
                            for your business's success.
                        </p>
                        <div class="jos flex flex-wrap justify-center gap-[18px]">
                            <a href="#" class="btn is-lime is-large btn-animation group rounded-[3px]"><span>Get In Touch</span></a>
                            <a href="#" class="btn is-outline-black is-large btn-animation group rounded-[3px]"><span>View Services</span></a>
                        </div>
                    </div>
                    <!-- Hero Area -->

                    <!-- Hero Images -->
                    <div class="-z-10 -mb-[17px] mt-[60px] grid grid-cols-1 gap-8 sm:grid-cols-2 md:flex md:gap-10 lg:gap-14">
                        <div class="jos md:rotate-[5deg]" data-jos_animation="fade-left" data-jos_delay="0.3">
                            <img src="{{ asset('assets/img/th-8/hero-img-1.png') }}" alt="hero-img-1" width="279" height="307" class="h-full w-full rounded-[5px] object-cover md:h-auto" />
                        </div>
                        <div class="jos md:-rotate-[5deg] md:self-end" data-jos_animation="fade-left" data-jos_delay="0">
                            <img src="{{ asset('assets/img/th-8/hero-img-2.png') }}" alt="hero-img-2" width="279" height="250" class="h-full w-full rounded-[5px] object-cover md:h-auto" />
                        </div>
                        <div class="jos md:rotate-[5deg] md:self-end" data-jos_animation="fade-right" data-jos_delay="0">
                            <img src="{{ asset('assets/img/th-8/hero-img-3.png') }}" alt="hero-img-3" width="279" height="250" class="h-full w-full rounded-[5px] object-cover md:h-auto" />
                        </div>
                        <div class="jos md:-rotate-[5deg]" data-jos_animation="fade-right" data-jos_delay="0.3">
                            <img src="{{ asset('assets/img/th-8/hero-img-4.png') }}" alt="hero-img-4" width="279" height="307" class="h-full w-full rounded-[5px] object-cover md:h-auto" />
                        </div>
                    </div>
                    <!-- Hero Images -->

                    <!-- Hero Background Shape - 1 -->
                    <div class="absolute left-0 -z-10 hidden md:block lg:-top-[70px]">
                        <img src="{{ asset('assets/img/elements/hero-8-content-shape.svg') }}" alt="hero-8-content-shape" width="291" height="331" class="h-auto w-[230px] xxl:h-[331px] xxl:w-[291px]" />
                    </div>
                    <!-- Hero Background Shape - 2 -->
                    <div class="absolute top-[100px] -z-10 hidden md:block lg:right-10 xxl:right-0">
                        <img src="{{ asset('assets/img/elements/home-8-dot-shape.svg') }}" alt="home-8-dot-shape" width="126" height="275" class="h-[200px] w-auto xxl:h-[275px] xxl:w-[125px]" />
                    </div>
                    <!-- Hero Space -->
                </div>
                <!-- Section Container -->
            </div>
            <!-- Hero Background Shape - 2 -->
            <div class="absolute bottom-0 z-10 hidden w-full md:block">
                <img src="{{ asset('assets/img/elements/section-devider-black.svg') }}" alt="home-8-dot-shape" class="w-full" />
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
                    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[0.8fr_minmax(0,_1fr)] xl:gap-20 xxl:gap-[100px]">
                        <!-- Section Wrapper -->
                        <div>
                            <!-- Section Block -->
                            <div class="mb-5">
                                <h2 class="text-center font-PublicSans text-4xl font-bold leading-[1.14] text-[#FDFBF9] lg:text-left lg:text-5xl xl:text-[56px]">
                                    We earn trust by working efficiently
                                </h2>
                            </div>
                            <!-- Section Block -->
                        </div>
                        <!-- Section Wrapper -->
                        <!-- Fact List -->
                        <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-3">
                            <!-- Fact Item -->
                            <div class="relative px-0 text-center after:absolute after:left-full after:top-1/2 after:hidden after:h-10 after:w-0.5 after:-translate-y-1/2 after:bg-ColorPurple first:pl-0 last:pr-0 last:after:hidden sm:px-10 sm:after:block">
                                <div>
                                    <div class="mb-[5px] font-PublicSans text-5xl font-bold leading-[1.14] text-[#FDFBF9] xl:text-[56px]" data-module="countup">
                                        <span class="start-number" data-countup-number="15">15</span>+
                                    </div>
                                    <span class="text-[#FDFBF9]/60">Years of experience</span>
                                </div>
                            </div>
                            <!-- Fact Item -->
                            <!-- Fact Item -->
                            <div class="relative px-0 text-center after:absolute after:left-full after:top-1/2 after:hidden after:h-10 after:w-0.5 after:-translate-y-1/2 after:bg-ColorPurple first:pl-0 last:pr-0 last:after:hidden sm:px-10 sm:after:block">
                                <div>
                                    <div class="mb-[5px] font-PublicSans text-5xl font-bold leading-[1.14] text-[#FDFBF9] xl:text-[56px]" data-module="countup">
                                        <span class="start-number" data-countup-number="84">84</span>K
                                    </div>
                                    <span class="text-[#FDFBF9]/60">Customers worldwide</span>
                                </div>
                            </div>
                            <!-- Fact Item -->
                            <!-- Fact Item -->
                            <div class="relative px-0 text-center after:absolute after:left-full after:top-1/2 after:hidden after:h-10 after:w-0.5 after:-translate-y-1/2 after:bg-ColorPurple first:pl-0 last:pr-0 last:after:hidden sm:px-10 sm:after:block">
                                <div>
                                    <div class="mb-[5px] font-PublicSans text-5xl font-bold leading-[1.14] text-[#FDFBF9] xl:text-[56px]" data-module="countup">
                                        <span class="start-number" data-countup-number="600">600</span>+
                                    </div>
                                    <span class="text-[#FDFBF9]/60">Project completed</span>
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

     <!-- Content Section Start -->
    <section class="section-content">
        <div class="relative z-10">
            <!-- Section Space -->
            <div class="section-space">
                <!-- Section Container -->
                <div class="container-default">
                    <div class="flex flex-col gap-y-20 lg:gap-y-[100px] xl:gap-y-[120px]">
                        <!-- Content Area Single -->
                        <div class="grid items-center gap-10 md:grid-cols-2 lg:gap-24 xl:gap-60">
                            <!-- Content Block Left -->
                            <div class="jos order-1 md:order-2" data-jos_animation="fade-right">
                                <!-- Section Wrapper -->
                                <div>
                                    <!-- Section Block -->
                                    <div class="mb-5">
                                        <h2 class="font-PublicSans text-4xl font-bold leading-[1.14] text-[#121212] lg:text-left lg:text-5xl xl:text-[56px]">
                                            The story behind our consulting firm
                                        </h2>
                                    </div>
                                    <!-- Section Block -->
                                </div>
                                <!-- Section Wrapper -->
                                <p class="mb-5">
                                    We have created a space for new and aspiring
                                    entrepreneurs to learn how to start & grow their own
                                    businesses effectively.
                                </p>
                                <hr class="mb-5" />
                                <p>
                                    We cover everything from inception to growth & even
                                    failure. In a world success is celebrated through the
                                    lens of a few, we are here to determine what happens
                                    after the elevator pitch.
                                </p>
                                <div class="mt-8 lg:mt-[50px]">
                                    <a href="#" class="btn is-lime is-large btn-animation group inline-block rounded-[3px]"><span>Learn More</span></a>
                                </div>
                            </div>
                            <!-- Content Block Left -->
                            <!-- Content Block Right -->
                            <div class="jos relative order-2 md:order-1" data-jos_animation="fade-left">
                                <!-- Content Image -->
                                <img src="{{ asset('assets/img/kodetech/sec2-img.png') }}" alt="content-img-1" width="523" height="450" class="h-auto w-full rounded-[10px]" />
                                <!-- Content Shape -->
                                <img src="{{ asset('assets/img/kodetech/sec2-analysis-img.png') }}" alt="content-shape-1" width="304" height="104" class="jos absolute bottom-6 left-full hidden -translate-x-1/2 xl:inline-block" data-jos_animation="fade-up" data-jos_delay="0.3" />
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
            <div class="absolute hidden xl:inline-block right-[60px] top-1/3 -z-10 rotate-[29deg]">
                <img src="{{ asset('assets/img/elements/home-8-dot-shape.svg') }}" alt="home-8-dot-shape" width="126" height="275" />
            </div>
        </div>
    </section>
    <!-- Content Section End -->

    <!-- Video Section Start -->
<section class="section-video">
    <!-- Section Space -->
    <div class="section-space-bottom">
        <!-- Section Container -->
        <div class="container-default">
            <!-- Section Content Wrapper -->
            <div class="jos mb-[60px] xl:mb-20">
                <!-- Section Content Block -->
                <div class="mx-auto max-w-[636px]">
                    <h2 class="mb-5 text-center">
                        Develop a communication strategy with live video chat
                    </h2>
                    <p class="text-center">
                        Kode Tech (Pvt) Ltd is a well-established and renowned software development company with a rich legacy spanning over 14 years.
                    </p>
                </div>
                <!-- Section Content Block -->
            </div>
            <!-- Section Content Wrapper -->

            <!-- Video Block -->
            <div class="jos">
                <div class="relative flex items-center justify-center">
                    <img src ="{{ asset('assets/img/kodetech/video-thumbnail.png') }}" alt="video-img" width="1295" height="699" class="h-auto w-full" />
                    <a data-fslightbox="gallery" href="https://www.youtube.com/watch?v=3nQNiWdeH2Q" class="group group absolute flex h-20 w-20 items-center justify-center rounded-[50%] bg-white text-ColorPurple xl:h-[120px] xl:w-[120px]" aria-label="video-play">
                        <span class="text-2xl transition-all duration-300 ease-linear group-hover:scale-110"><i class="fa-solid fa-play"></i></span>
                    </a>
                </div>
            </div>
            <!-- Video Block -->
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</section>
<!-- Video Section End -->

<!-- Service Section Start -->
<div class="section-service">
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
                            Boost your business with advanced SEO strategies
                        </h2>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Section Content Wrapper -->

                <!-- Service List -->
                <div class="grid gap-x-6 gap-y-[50px] md:grid-cols-2 lg:grid-cols-3">
                    <!-- Service Item -->
                    <div class="jos" data-jos_delay="0">
                        <div class="group flex h-full flex-col text-[#FDFBF9]">
                            <span class="block font-GeneralSans text-xl font-semibold leading-[1.4] transition-all duration-300 group-hover:text-ColorAtomicTangerine lg:text-2xl xl:text-3xl">01.</span>
                            <div class="relative my-[30px] h-[2px] w-full bg-[#FDFBF9]/10 after:absolute after:inset-0 after:scale-x-0 after:bg-ColorAtomicTangerine after:transition-all after:duration-300 group-hover:after:scale-x-100"></div>
                            <div class="mb-[15px] font-GeneralSans text-xl font-semibold leading-[1.4] lg:text-[22px] xl:text-3xl">
                                Keyword strategy
                            </div>
                            <p class="mb-5 line-clamp-3 text-[#FDFBF9]/80">
                                When developing a keyword strategy, we use a number of
                                tools to conduct keyword research alongside years of
                                knowledge.
                            </p>
                            <a href="{{ url('servicedetails') }}" class="mt-auto inline-flex items-center gap-x-4 font-GeneralSans text-base font-semibold group-hover:text-ColorAtomicTangerine">Discover More
                                <span class="text-3xl transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                    <i class="fa-sharp fa-regular fa-arrow-right-long"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <!-- Service Item -->
                    <!-- Service Item -->
                    <div class="jos" data-jos_delay="0.3">
                        <div class="group flex h-full flex-col text-[#FDFBF9]">
                            <span class="block font-GeneralSans text-xl font-semibold leading-[1.4] transition-all duration-300 group-hover:text-ColorAtomicTangerine lg:text-2xl xl:text-3xl">02.</span>
                            <div class="relative my-[30px] h-[2px] w-full bg-[#FDFBF9]/10 after:absolute after:inset-0 after:scale-x-0 after:bg-ColorAtomicTangerine after:transition-all after:duration-300 group-hover:after:scale-x-100"></div>
                            <div class="mb-[15px] font-GeneralSans text-xl font-semibold leading-[1.4] lg:text-[22px] xl:text-3xl">
                                Content optimization
                            </div>
                            <p class="mb-5 line-clamp-3 text-[#FDFBF9]/80">
                                Ranking on page 1 &gaining rich snippets requires a
                                detailed SEO content strategy. Everything from header
                                tag optimization.
                            </p>
                            <a href="{{ url('servicedetails') }}" class="mt-auto inline-flex items-center gap-x-4 font-GeneralSans text-base font-semibold group-hover:text-ColorAtomicTangerine">Discover More
                                <span class="text-3xl transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                    <i class="fa-sharp fa-regular fa-arrow-right-long"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <!-- Service Item -->
                    <!-- Service Item -->
                    <div class="jos" data-jos_delay="0.6">
                        <div class="group flex h-full flex-col text-[#FDFBF9]">
                            <span class="block font-GeneralSans text-xl font-semibold leading-[1.4] transition-all duration-300 group-hover:text-ColorAtomicTangerine lg:text-2xl xl:text-3xl">03.</span>
                            <div class="relative my-[30px] h-[2px] w-full bg-[#FDFBF9]/10 after:absolute after:inset-0 after:scale-x-0 after:bg-ColorAtomicTangerine after:transition-all after:duration-300 group-hover:after:scale-x-100"></div>
                            <div class="mb-[15px] font-GeneralSans text-xl font-semibold leading-[1.4] lg:text-[22px] xl:text-3xl">
                                Technical SEO
                            </div>
                            <p class="mb-5 line-clamp-3 text-[#FDFBF9]/80">
                                Creating great content is one thing, but making sure
                                Googlebot can crawl, and index it efficiently is
                                another! We used.
                            </p>
                            <a href="{{ url('servicedetails') }}" class="mt-auto inline-flex items-center gap-x-4 font-GeneralSans text-base font-semibold group-hover:text-ColorAtomicTangerine">Discover More
                                <span class="text-3xl transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                    <i class="fa-sharp fa-regular fa-arrow-right-long"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <!-- Service Item -->
                    <!-- Service Item -->
                    <div class="jos" data-jos_delay="0.9">
                        <div class="group flex h-full flex-col text-[#FDFBF9]">
                            <span class="block font-GeneralSans text-xl font-semibold leading-[1.4] transition-all duration-300 group-hover:text-ColorAtomicTangerine lg:text-2xl xl:text-3xl">04.</span>
                            <div class="relative my-[30px] h-[2px] w-full bg-[#FDFBF9]/10 after:absolute after:inset-0 after:scale-x-0 after:bg-ColorAtomicTangerine after:transition-all after:duration-300 group-hover:after:scale-x-100"></div>
                            <div class="mb-[15px] font-GeneralSans text-xl font-semibold leading-[1.4] lg:text-[22px] xl:text-3xl">
                                Link building & SEO audits
                            </div>
                            <p class="mb-5 line-clamp-3 text-[#FDFBF9]/80">
                                When developing a keyword strategy, we use a number of
                                tools to conduct keyword research alongside years of
                                knowledge.
                            </p>
                            <a href="{{ url('servicedetails') }}" class="mt-auto inline-flex items-center gap-x-4 font-GeneralSans text-base font-semibold group-hover:text-ColorAtomicTangerine">Discover More
                                <span class="text-3xl transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                    <i class="fa-sharp fa-regular fa-arrow-right-long"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <!-- Service Item -->
                    <!-- Service Item -->
                    <div class="jos" data-jos_delay="1.2">
                        <div class="group flex h-full flex-col text-[#FDFBF9]">
                            <span class="block font-GeneralSans text-xl font-semibold leading-[1.4] transition-all duration-300 group-hover:text-ColorAtomicTangerine lg:text-2xl xl:text-3xl">05.</span>
                            <div class="relative my-[30px] h-[2px] w-full bg-[#FDFBF9]/10 after:absolute after:inset-0 after:scale-x-0 after:bg-ColorAtomicTangerine after:transition-all after:duration-300 group-hover:after:scale-x-100"></div>
                            <div class="mb-[15px] font-GeneralSans text-xl font-semibold leading-[1.4] lg:text-[22px] xl:text-3xl">
                                Website migrations
                            </div>
                            <p class="mb-5 line-clamp-3 text-[#FDFBF9]/80">
                                Whether it’s a domain, design, or platform migration,
                                there is always the risk of losing organic traffic. We
                                can mitigate that risk.
                            </p>
                            <a href="{{ url('servicedetails') }}" class="mt-auto inline-flex items-center gap-x-4 font-GeneralSans text-base font-semibold group-hover:text-ColorAtomicTangerine">Discover More
                                <span class="text-3xl transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                    <i class="fa-sharp fa-regular fa-arrow-right-long"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <!-- Service Item -->
                    <!-- Service Item -->
                    <div class="jos" data-jos_delay="1.5">
                        <div class="group flex h-full flex-col text-[#FDFBF9]">
                            <span class="block font-GeneralSans text-xl font-semibold leading-[1.4] transition-all duration-300 group-hover:text-ColorAtomicTangerine lg:text-2xl xl:text-3xl">06.</span>
                            <div class="relative my-[30px] h-[2px] w-full bg-[#FDFBF9]/10 after:absolute after:inset-0 after:scale-x-0 after:bg-ColorAtomicTangerine after:transition-all after:duration-300 group-hover:after:scale-x-100"></div>
                            <div class="mb-[15px] font-GeneralSans text-xl font-semibold leading-[1.4] lg:text-[22px] xl:text-3xl">
                                E-Commerce SEO
                            </div>
                            <p class="mb-5 line-clamp-3 text-[#FDFBF9]/80">
                                E-Commerce websites require a unique approach to SEO in
                                order to maximize for product page visibility and
                                increase sales.
                            </p>
                            <a href="{{ url('servicedetails') }}" class="mt-auto inline-flex items-center gap-x-4 font-GeneralSans text-base font-semibold group-hover:text-ColorAtomicTangerine">Discover More
                                <span class="text-3xl transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                    <i class="fa-sharp fa-regular fa-arrow-right-long"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <!-- Service Item -->
                </div>
                <!-- Service List -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->

        <!-- Background Shape -->
        <img src="{{ asset('assets/img/elements/home-5-service-bg-shape.svg') }}" alt="home-5-service-bg-shape" width="140" height="140" class="absolute right-12 top-[197px] -z-10 hidden xl:inline-block" />
    </div>
    <!-- Section Background -->
</div>
<!-- Service Section End -->









<!-- Brand Section Start -->
<div class="section-brand">
    <div class="jos">
        <!-- Section Space -->
        <div class="py-[60px] md:py-20 lg:py-[100px]">
            <!-- Section Container -->
            <div class="container-default">
                <div class="mx-auto mb-10 max-w-[80%] text-center text-xl font-semibold leading-[1.4] opacity-70 md:mb-16 lg:mb-20 lg:max-w-2xl">
                    From start-ups to Fortune 500, we partner with brands of all
                    sizes
                </div>
                <!-- Brand Slider -->
                <div class="swiper brand-slider">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-1/brand-1.png') }}" alt="brand-1" width="186" height="46" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-1/brand-2.png') }}" alt="brand-2" width="186" height="46" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-1/brand-3.png') }}" alt="brand-3" width="186" height="46" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-1/brand-4.png') }}" alt="brand-4" width="186" height="46" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-1/brand-5.png') }}" alt="brand-5" width="186" height="46" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-1/brand-1.png') }}" alt="brand-1" width="186" height="46" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-1/brand-2.png') }}" alt="brand-2" width="186" height="46" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-1/brand-3.png') }}" alt="brand-3" width="186" height="46" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-1/brand-4.png') }}" alt="brand-4" width="186" height="46" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-1/brand-5.png') }}" alt="brand-5" width="186" height="46" class="h-auto w-fit" />
                        </div>
                    </div>
                </div>
                <!-- Brand Slider -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </div>
</div>
<!-- Brand Section End -->

<!-- Horizontal Line Separator -->
<div class="horizontal-line bg-ColorBlack"></div>
<!-- Horizontal Line Separator -->

<!-- Service Section Start -->
<section class="section-service">
    <div class="relative z-10 overflow-hidden">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-custom">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="mx-auto max-w-[590px]">
                        <h2 class="text-center">
                            All the digital services that are convenient for you
                        </h2>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Section Content Wrapper -->

                <!-- Service List -->
                <div class="grid gap-6 sm:grid-cols-2">
                    <!-- Service Item -->
                    <div class="jos" data-jos_delay="0">
                        <div class="group rounded-[10px] border border-[#E6E6E6] bg-white p-8 transition-all duration-300 ease-in-out hover:border-ColorOffWhite hover:bg-ColorOffWhite lg:p-10 h-full">
                            <div class="flex flex-col gap-x-10 gap-y-6 sm:gap-y-8 lg:flex-row">
                                <div class="relative mx-auto flex w-16 items-center justify-center lg:w-[98px]">
                                    <img src="{{ asset('assets/img/icons/icon-black-service-1.svg') }}" alt="icon-service-1" width="98" height="100" class="opcity-100 h-auto w-full transition-all duration-300 ease-in-out group-hover:opacity-0" />
                                    <img src="{{ asset('assets/img/icons/icon-blue-service-1.svg') }}" alt="icon-service-1" width="98" height="100" class="absolute h-auto w-full opacity-0 transition-all duration-300 ease-in-out group-hover:opacity-100" />
                                </div>
                                <div class="flex-1 text-center lg:text-left">
                                    <div class="mb-4 text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack lg:text-2xl">
                                        Branding & Digital Strategies
                                    </div>
                                    <p class="mb-5 line-clamp-2 text-ColorBlack/80">
                                        Brand strategy is all about developing a unique
                                        identity that distinguishes your business from
                                    </p>
                                    <a href="{{ url('servicedetails') }}" class="inline-flex items-center gap-x-2 text-base font-bold text-ColorBlack group-hover:text-ColorBlue">Find out more
                                        <span class="transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item -->
                    <!-- Service Item -->
                    <div class="jos" data-jos_delay="0.3">
                        <div class="group rounded-[10px] border border-[#E6E6E6] bg-white p-8 transition-all duration-300 ease-in-out hover:border-ColorOffWhite hover:bg-ColorOffWhite lg:p-10 h-full">
                            <div class="flex flex-col gap-x-10 gap-y-6 sm:gap-y-8 lg:flex-row">
                                <div class="relative mx-auto flex w-16 items-center justify-center lg:w-[98px]">
                                    <img src="{{ asset('assets/img/icons/icon-black-service-2.svg') }}" alt="icon-service-2" width="98" height="100" class="opcity-100 h-auto w-full transition-all duration-300 ease-in-out group-hover:opacity-0" />
                                    <img src="{{ asset('assets/img/icons/icon-blue-service-2.svg') }}" alt="icon-service-2" width="98" height="100" class="absolute h-auto w-full opacity-0 transition-all duration-300 ease-in-out group-hover:opacity-100" />
                                </div>
                                <div class="flex-1 text-center lg:text-left">
                                    <div class="mb-4 text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack lg:text-2xl">
                                        Web Design & App Development
                                    </div>
                                    <p class="mb-5 line-clamp-2 text-ColorBlack/80">
                                        Web design & development is an umbrella term that
                                        describes the process of creating a website
                                    </p>
                                    <a href="{{ url('servicedetails') }}" class="inline-flex items-center gap-x-2 text-base font-bold text-ColorBlack group-hover:text-ColorBlue">Find out more
                                        <span class="transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item -->
                    <!-- Service Item -->
                    <div class="jos" data-jos_delay="0.6">
                        <div class="group rounded-[10px] border border-[#E6E6E6] bg-white p-8 transition-all duration-300 ease-in-out hover:border-ColorOffWhite hover:bg-ColorOffWhite lg:p-10 h-full">
                            <div class="flex flex-col gap-x-10 gap-y-6 sm:gap-y-8 lg:flex-row">
                                <div class="relative mx-auto flex w-16 items-center justify-center lg:w-[98px]">
                                    <img src="{{ asset('assets/img/icons/icon-black-service-3.svg') }}" alt="icon-service-3" width="98" height="100" class="opcity-100 h-auto w-full transition-all duration-300 ease-in-out group-hover:opacity-0" />
                                    <img src="{{ asset('assets/img/icons/icon-blue-service-3.svg') }}" alt="icon-service-3" width="98" height="100" class="absolute h-auto w-full opacity-0 transition-all duration-300 ease-in-out group-hover:opacity-100" />
                                </div>
                                <div class="flex-1 text-center lg:text-left">
                                    <div class="mb-4 text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack lg:text-2xl">
                                        Results-Driven Digital Marketing
                                    </div>
                                    <p class="mb-5 line-clamp-2 text-ColorBlack/80">
                                        Digital marketing potential customers using the
                                        internet & other forms of digital communication
                                    </p>
                                    <a href="{{ url('servicedetails') }}" class="inline-flex items-center gap-x-2 text-base font-bold text-ColorBlack group-hover:text-ColorBlue">Find out more
                                        <span class="transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item -->
                    <!-- Service Item -->
                    <div class="jos" data-jos_delay="0.9">
                        <div class="group rounded-[10px] border border-[#E6E6E6] bg-white p-8 transition-all duration-300 ease-in-out hover:border-ColorOffWhite hover:bg-ColorOffWhite lg:p-10 h-full">
                            <div class="flex flex-col gap-x-10 gap-y-6 sm:gap-y-8 lg:flex-row">
                                <div class="relative mx-auto flex w-16 items-center justify-center lg:w-[98px]">
                                    <img src="{{ asset('assets/img/icons/icon-black-service-4.svg') }}" alt="icon-service-4" width="98" height="100" class="opcity-100 h-auto w-full transition-all duration-300 ease-in-out group-hover:opacity-0" />
                                    <img src="{{ asset('assets/img/icons/icon-blue-service-4.svg') }}" alt="icon-service-4" width="98" height="100" class="absolute h-auto w-full opacity-0 transition-all duration-300 ease-in-out group-hover:opacity-100" />
                                </div>
                                <div class="flex-1 text-center lg:text-left">
                                    <div class="mb-4 text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack lg:text-2xl">
                                        Custom Software Development
                                    </div>
                                    <p class="mb-5 line-clamp-2 text-ColorBlack/80">
                                        Custom Software Development is the process of
                                        conceptualizing, designing, building & deploying
                                    </p>
                                    <a href="{{ url('servicedetails') }}" class="inline-flex items-center gap-x-2 text-base font-bold text-ColorBlack group-hover:text-ColorBlue">Find out more
                                        <span class="transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item -->
                </div>
                <!-- Service List -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->

        <!-- Service Shape -->
        <div class="absolute bottom-0 left-0 -z-10">
            <img src="{{ asset('assets/img/elements/service-1-shape-1.svg') }}" alt="service-section-shape" width="390" height="507" />
        </div>
        <!-- Service Shape -->
    </div>
</section>
<!-- Service Section End -->

<!-- Content Section Start -->
<section class="section-content">
    <!-- Section Background -->
    <div class="bg-ColorOffWhite">
        <!-- Section Spacer -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-custom">
                <div class="flex flex-col gap-y-20 lg:gap-y-[100px] xl:gap-y-[120px]">
                    <!-- Content Area Single -->
                    <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-24 xl:grid-cols-[1.2fr_minmax(0,_1fr)] xl:gap-[135px]">
                        <!-- Content Block Left -->
                        <div class="jos" data-jos_animation="fade-right">
                            <!-- Section Wrapper -->
                            <div>
                                <!-- Section Block -->
                                <div class="mb-5">
                                    <h2>
                                        Boost the effectiveness of your promotions as well
                                        as polish your branding
                                    </h2>
                                </div>
                                <!-- Section Block -->
                            </div>
                            <!-- Section Wrapper -->
                            <p>
                                SINCE 1998, we transform bold business ideas into
                                exceptional digital products. We ideate, design, and
                                develop data-driven digital products made to answer
                                business challenges.
                            </p>
                            <p>
                                We offer 360° services to smoothly guide you on your way
                                to creating a seamless digital masterpiece projects on
                                budget and on time.
                            </p>
                        </div>
                        <!-- Content Block Left -->
                        <!-- Content Block Right -->
                        <div class="jos relative" data-jos_animation="fade-left">
                            <div class="rounded-[10px] bg-[#FCEDCF] p-[30px] lg:p-10 xl:p-[50px]">
                                <!-- Content Image -->
                                <img src="{{ asset('assets/img/th-1/content-img-1.jpg') }}" alt="content-img-1" width="426" height="398" class="h-auto w-full rounded-[10px]" />
                            </div>
                            <!-- Content Shape -->
                            <img src="{{ asset('assets/img/elements/content-shape-1.svg') }}" alt="content-shape-1" width="168" height="61" class="absolute -right-16 -top-16" />
                        </div>
                        <!-- Content Block Right -->
                    </div>
                    <!-- Content Area Single -->

                    <!-- Content Area Single -->
                    <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-24 xl:grid-cols-[1fr_minmax(0,_1.2fr)] xl:gap-[135px]">
                        <!-- Content Block Left -->
                        <div class="jos lg:order-2" data-jos_animation="fade-left">
                            <!-- Section Wrapper -->
                            <div>
                                <!-- Section Block -->
                                <div class="mb-5">
                                    <h2>
                                        Discover the latest digital strategies & emerging
                                        ideas for business growth
                                    </h2>
                                </div>
                                <!-- Section Block -->
                            </div>
                            <!-- Section Wrapper -->
                            <p>
                                Our brand tenders and marketing mixologists always serve
                                up unique, design-forward websites coded with today’s
                                modern technologies
                            </p>
                            <ul class="flex flex-col gap-5 font-semibold text-ColorBlack">
                                <li>
                                    <span class="mr-3 inline-block text-xl text-ColorBlue"><i class="fa-solid fa-badge-check"></i></span>
                                    Reach new business opportunities or test your product
                                    ideas.
                                </li>
                                <li>
                                    <span class="mr-3 inline-block text-xl text-ColorBlue"><i class="fa-solid fa-badge-check"></i></span>
                                    Automate your processes and get data-driven business
                                    insights.
                                </li>
                                <li>
                                    <span class="mr-3 inline-block text-xl text-ColorBlue"><i class="fa-solid fa-badge-check"></i></span>
                                    Create lightweight, scalable, and easly accessible
                                    cloud solution.
                                </li>
                            </ul>
                        </div>
                        <!-- Content Block Left -->
                        <!-- Content Block Right -->
                        <div class="jos relative lg:order-1" data-jos_animation="fade-right">
                            <div class="rounded-[10px] bg-[#BEF8FC] p-[30px] lg:p-10 xl:p-[50px]">
                                <!-- Content Image -->
                                <img src="{{ asset('assets/img/th-1/content-img-2.jpg') }}" alt="content-img-1" width="426" height="398" class="h-auto w-full rounded-[10px]" />
                            </div>
                            <!-- Content Shape -->
                            <img src="{{ asset('assets/img/elements/content-shape-2.svg') }}" alt="content-shape-1" width="107" height="105" class="absolute -bottom-1 -left-1" />
                        </div>
                        <!-- Content Block Right -->
                    </div>
                    <!-- Content Area Single -->
                </div>
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Spacer -->
    </div>
    <!-- Section Background -->
</section>
<!-- Content Section End -->

<!-- Portfolio Section Start -->
<section class="section-portfolio">
    <div class="relative z-10 overflow-hidden">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Wrapper -->
                <div class="jos mb-[60px] flex flex-wrap items-end justify-between gap-8 xl:mb-20">
                    <!-- Section Block -->
                    <div class="max-w-[550px]">
                        <h2>We create world-class web design, & branding</h2>
                    </div>
                    <!-- Section Block -->
                    <a href="{{ url('portfolio') }}" class="btn is-blue is-rounded btn-animation is-large group"><span>See more works</span></a>
                </div>
                <!-- Section Wrapper -->

                <!-- Portfolio List -->
                <div class="grid gap-8 md:grid-cols-2 lg:gap-10 xl:gap-[60px]">
                    <!-- Portfolio Item -->
                    <div class="jos" data-jos_delay="0">
                        <div class="group">
                            <div class="overflow-hidden rounded-[10px]">
                                <img src="{{ asset('assets/img/th-1/portfolio-img-1.jpg') }}" alt="portfolio-img-1" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                            </div>
                            <div class="mt-6">
                                <div class="mb-5 flex flex-wrap justify-between gap-5 text-ColorBlack lg:flex-nowrap xl:mb-7">
                                    <a href="{{ url('portfoliodetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] group-hover:text-ColorBlue xl:text-2xl">App — The power of communication</a>
                                    <a href="#" class="hover:text-ColorBlue">UI/UX Design</a>
                                </div>
                                <a href="{{ url('portfoliodetails') }}" class="text-base font-bold capitalize leading-[1.5] group-hover:text-ColorBlue">View work
                                    <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="jos" data-jos_delay="0.3">
                        <div class="group">
                            <div class="overflow-hidden rounded-[10px]">
                                <img src="{{ asset('assets/img/th-1/portfolio-img-2.jpg') }}" alt="portfolio-img-2" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                            </div>
                            <div class="mt-6">
                                <div class="mb-5 flex flex-wrap justify-between gap-5 text-ColorBlack lg:flex-nowrap xl:mb-7">
                                    <a href="{{ url('portfoliodetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] group-hover:text-ColorBlue xl:text-2xl">Website — The future lifestyle platform.</a>
                                    <a href="#" class="hover:text-ColorBlue">Branding</a>
                                </div>
                                <a href="{{ url('portfoliodetails') }}" class="text-base font-bold capitalize leading-[1.5] group-hover:text-ColorBlue">View work
                                    <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item -->
                </div>
                <!-- Portfolio List -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->

        <!-- Portfolio Shape - 2 -->
        <div class="absolute right-0 top-0 -z-10">
            <img src="{{ asset('assets/img/elements/portfolio-1-shape-1.svg') }}" alt="portfolio-1-shape-1" width="467" height="609" />
        </div>
    </div>
</section>
<!-- Portfolio Section End -->

<!-- Testimonial Section Start -->
<section class="section-testimonial">
    <!-- Section Background -->
    <div class="bg-ColorOffWhite">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-custom">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="mx-auto max-w-[625px]">
                        <h2 class="text-center">
                            Most of our satisfied clients leave their feedback
                        </h2>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Section Content Wrapper -->

                <!-- Testimonial Area -->
                <div class="grid items-center gap-10 lg:grid-cols-2 xl:gap-20 xxl:grid-cols-[1.1fr_minmax(0,_1fr)]">
                    <img src="{{ asset('assets/img/th-1/testimonial-image-1.jpg') }}" alt="testimonial-image-1" width="636" height="446" class="jos h-auto w-full rounded-2xl" data-jos_animation="fade-right" />
                    <div class="jos flex flex-col text-ColorBlack" data-jos_animation="fade-left">
                        <img src="{{ asset('assets/img/icons/icon-blue-quote-right-reverse.svg') }}" alt="icon-blue-quote-right-reverse" width="90" height="60" class="h-auto w-10 xl:w-[90px]" />
                        <p class="mt-[30px] text-xl font-semibold leading-[1.33] -tracking-[0.5px] lg:text-2xl">
                            They’re probably one of the easiest vendors I’ve ever
                            worked with in the digital space. They have our best
                            interests in mind. The team went the extra mile in
                            negotiating costs and delivering within a flexible scope.
                            They’re customer focused and strong in terms of
                            development quality.
                        </p>
                        <div class="mb-8 lg:mb-[50px]">
                            <span class="block text-xl font-semibold">Dominika Drońska</span>
                            <span class="block">Senior Digital Marketing Manager, Abbey Road
                                Studios</span>
                        </div>
                        <a href="{{ url('portfoliodetails') }}" class="group text-base font-bold capitalize leading-[1.5] hover:text-ColorBlue">Read more reviews
                            <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
                <!-- Testimonial Area -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </div>
    <!-- Section Background -->
</section>
<!-- Testimonial Section End -->

<!-- FAQ Section Start -->
<section class="section-faq">
    <div class="relative z-10 overflow-hidden">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="mx-auto max-w-[625px]">
                        <h2 class="text-center">
                            Frequently asked questions about our digital agency
                        </h2>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Section Content Wrapper -->
                <!-- FAQ Area -->
                <div class="jos">
                    <!-- Accordion List -->
                    <ul class="mx-auto max-w-[1076px] rounded-[10px] border border-ColorBlack">
                        <!-- Accordion Item -->
                        <li class="accordion-item active overflow-hidden border-b border-ColorBlack p-[30px] last:border-b-0">
                            <!-- Accordion Header -->
                            <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorBlack">
                                <button class="flex-1 text-left">
                                    Q. What is a digital agency?
                                </button>
                                <div class="accordion-icon-1 relative flex h-5 w-5 items-center justify-center rounded-[50%] bg-ColorBlue">
                                    <span class="inline-block h-0.5 w-[10px] rounded-sm bg-white"></span>
                                    <span class="absolute inline-block h-[10px] w-0.5 rotate-0 rounded-sm bg-white"></span>
                                </div>
                            </div>
                            <!-- Accordion Header -->
                            <!-- Accordion Body -->
                            <div class="accordion-body max-w-[826px] opacity-80">
                                <p class="pt-5">
                                    A digital agency is a company that leverages digital
                                    channels to grow their clients’ brands online. ls and
                                    technologies such as web design, digital marketing,
                                    creative design and app development.
                                </p>
                            </div>
                            <!-- Accordion Body -->
                        </li>
                        <!-- Accordion Item -->
                        <!-- Accordion Item -->
                        <li class="accordion-item overflow-hidden border-b border-ColorBlack p-[30px] last:border-b-0">
                            <!-- Accordion Header -->
                            <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorBlack">
                                <button class="flex-1 text-left">
                                    Q. What services does a digital agency provide?
                                </button>
                                <div class="accordion-icon-1 relative flex h-5 w-5 items-center justify-center rounded-[50%] bg-ColorBlue">
                                    <span class="inline-block h-0.5 w-[10px] rounded-sm bg-white"></span>
                                    <span class="absolute inline-block h-[10px] w-0.5 rotate-0 rounded-sm bg-white"></span>
                                </div>
                            </div>
                            <!-- Accordion Header -->
                            <!-- Accordion Body -->
                            <div class="accordion-body max-w-[826px] opacity-80">
                                <p class="pt-5">
                                    A digital agency is a company that leverages digital
                                    channels to grow their clients’ brands online. ls and
                                    technologies such as web design, digital marketing,
                                    creative design and app development.
                                </p>
                            </div>
                            <!-- Accordion Body -->
                        </li>
                        <!-- Accordion Item -->
                        <!-- Accordion Item -->
                        <li class="accordion-item overflow-hidden border-b border-ColorBlack p-[30px] last:border-b-0">
                            <!-- Accordion Header -->
                            <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorBlack">
                                <button class="flex-1 text-left">
                                    Q. Hiring a digital agency vs hiring in-house: What is
                                    the difference?
                                </button>
                                <div class="accordion-icon-1 relative flex h-5 w-5 items-center justify-center rounded-[50%] bg-ColorBlue">
                                    <span class="inline-block h-0.5 w-[10px] rounded-sm bg-white"></span>
                                    <span class="absolute inline-block h-[10px] w-0.5 rotate-0 rounded-sm bg-white"></span>
                                </div>
                            </div>
                            <!-- Accordion Header -->
                            <!-- Accordion Body -->
                            <div class="accordion-body max-w-[826px] opacity-80">
                                <p class="pt-5">
                                    A digital agency is a company that leverages digital
                                    channels to grow their clients’ brands online. ls and
                                    technologies such as web design, digital marketing,
                                    creative design and app development.
                                </p>
                            </div>
                            <!-- Accordion Body -->
                        </li>
                        <!-- Accordion Item -->
                        <!-- Accordion Item -->
                        <li class="accordion-item overflow-hidden border-b border-ColorBlack p-[30px] last:border-b-0">
                            <!-- Accordion Header -->
                            <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorBlack">
                                <button class="flex-1 text-left">
                                    Q. What questions should you ask when interviewing a
                                    digital agency?
                                </button>
                                <div class="accordion-icon-1 relative flex h-5 w-5 items-center justify-center rounded-[50%] bg-ColorBlue">
                                    <span class="inline-block h-0.5 w-[10px] rounded-sm bg-white"></span>
                                    <span class="absolute inline-block h-[10px] w-0.5 rotate-0 rounded-sm bg-white"></span>
                                </div>
                            </div>
                            <!-- Accordion Header -->
                            <!-- Accordion Body -->
                            <div class="accordion-body max-w-[826px] opacity-80">
                                <p class="pt-5">
                                    A digital agency is a company that leverages digital
                                    channels to grow their clients’ brands online. ls and
                                    technologies such as web design, digital marketing,
                                    creative design and app development.
                                </p>
                            </div>
                            <!-- Accordion Body -->
                        </li>
                        <!-- Accordion Item -->
                        <!-- Accordion Item -->
                        <li class="accordion-item overflow-hidden border-b border-ColorBlack p-[30px] last:border-b-0">
                            <!-- Accordion Header -->
                            <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorBlack">
                                <button class="flex-1 text-left">
                                    Q. How do digital agencies charge for their services?
                                </button>
                                <div class="accordion-icon-1 relative flex h-5 w-5 items-center justify-center rounded-[50%] bg-ColorBlue">
                                    <span class="inline-block h-0.5 w-[10px] rounded-sm bg-white"></span>
                                    <span class="absolute inline-block h-[10px] w-0.5 rotate-0 rounded-sm bg-white"></span>
                                </div>
                            </div>
                            <!-- Accordion Header -->
                            <!-- Accordion Body -->
                            <div class="accordion-body max-w-[826px] opacity-80">
                                <p class="pt-5">
                                    A digital agency is a company that leverages digital
                                    channels to grow their clients’ brands online. ls and
                                    technologies such as web design, digital marketing,
                                    creative design and app development.
                                </p>
                            </div>
                            <!-- Accordion Body -->
                        </li>
                        <!-- Accordion Item -->
                    </ul>
                    <!-- Accordion List -->

                    <div class="jos mt-[60px] flex justify-center xl:mt-20">
                        <a href="{{ url('contact') }}" class="btn is-blue is-rounded btn-animation is-large group"><span>Still, have any questions? Contact us</span></a>
                    </div>
                </div>
                <!-- FAQ Area -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->

        <!-- FAQ Shape - 1 -->
        <div class="absolute left-0 top-0 -z-10">
            <img src="{{ asset('assets/img/elements/faq-1-shape-1.svg') }}" alt="service-section-shape" width="390" height="507" />
        </div>
        <!-- FAQ Shape - 2 -->
        <div class="absolute bottom-0 right-0 -z-10">
            <img src="{{ asset('assets/img/elements/faq-1-shape-2.svg') }}" alt="service-section-shape" width="467" height="609" />
        </div>
    </div>
</section>
<!-- FAQ Section End -->

@endsection

@section('footer')
    <x-footer1/>
@endsection