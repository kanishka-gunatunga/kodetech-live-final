@extends('layout.layout1')

@section('headerLogo')
<img src="{{ asset('assets/img/logo-blue-dark.png') }}" alt="Masco" width="109" height="24" />
@endsection



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

<!-- Breadcrumb Section Start -->
<section class="section-breadcrumb" style="background-image: url('{{ asset('assets/img/kodetech/sub.jpg') }}'); background-position: bottom center; background-size: cover">
    <!-- Breadcrumb Section Spacer -->
    <div class="breadcrumb-wrapper" style="background-color: transparent !important">
        <!-- Section Container -->
        <div class="container-default">
            <div class="breadcrumb-block">
                <h1 class="breadcrumb-title">Our Projects</h1>
                {{-- <ul class="breadcrumb-nav">
                    <li><a href="{{ url('index') }}">Home</a></li>
                <li>About</li>
                </ul> --}}
            </div>
        </div>
        <!-- Section Container -->

        <!-- Breadcrumb Shape - 1 -->
        {{-- <div class="absolute left-0 top-0 -z-10">
            <img src="{{ asset('assets/img/elements/breadcrumb-shape-1.svg') }}" alt="hero-shape-1" width="291" height="380" />
    </div> --}}

    <!-- Breadcrumb Shape - 2 -->
    {{-- <div class="absolute bottom-0 right-0 -z-[1]">
            <img src="{{ asset('assets/img/elements/breadcrumb-shape-2.svg') }}" alt="hero-shape-2" width="291" height="380" />
    </div> --}}
    </div>
    <!-- Breadcrumb Section Spacer -->
</section>
<!-- Breadcrumb Section End -->

<!-- Portfolio Section Start -->
<div class="section-portfolio">
    <!-- Section Space -->
    <div class="section-space">
        <!-- Section Container -->
        <div class="container-default">
            <!-- Tab Button Menu -->
            {{-- <div class="flex flex-wrap justify-center gap-3 md:gap-6">
                <button class="active tab-button btn tab-btn-blue is-rounded h-[50px]" data-tab="show-all">
                    Show All
                </button>
                <button class="tab-button btn tab-btn-blue is-rounded h-[50px]" data-tab="website">
                    Website
                </button>
                <button class="tab-button btn tab-btn-blue is-rounded h-[50px]" data-tab="branding">
                    Branding
                </button>
                <button class="tab-button btn tab-btn-blue is-rounded h-[50px]" data-tab="commercial">
                    Commercial
                </button>
                <button class="tab-button btn tab-btn-blue is-rounded h-[50px]" data-tab="digital-art">
                    Digital Art
                </button>
                <button class="tab-button btn tab-btn-blue is-rounded h-[50px]" data-tab="ui-ux-design">
                    UI/UX Design
                </button>
            </div> --}}
            <!-- Tab Button Menu -->

            <!-- Portfolio Area -->
            {{-- <div class="my-10 lg:my-[60xp] xl:my-20">
                <!-- Portfolio List -->
                <div class="tab-content grid gap-8 md:grid-cols-2 lg:gap-10 xl:gap-[60px]" id="show-all">
                    <!-- Portfolio Item -->
                    <div class="jos" data-jos_delay="0">
                        <div class="group">
                            <div class="overflow-hidden rounded-[10px]">
                                <img src="{{ asset('assets/img/portfolio/Rectangle 104.png') }}" alt="portfolio-img-1" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
        </div>
        <div class="mt-6">
            <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">App — The power of communication</a>
                <a href="#" class="hover:text-ColorBlue">UI/UX Design</a>
            </div>
            <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
        </div>
    </div>
</div>
<!-- Portfolio Item -->
<!-- Portfolio Item -->
<div class="jos" data-jos_delay="0.3">
    <div class="group">
        <div class="overflow-hidden rounded-[10px]">
            <img src="{{ asset('assets/img/portfolio/Rectangle 106.png') }}" alt="portfolio-img-2" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
        </div>
        <div class="mt-6">
            <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Website — The future lifestyle platform.</a>
                <a href="#" class="hover:text-ColorBlue">Branding</a>
            </div>
            <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
        </div>
    </div>
</div>
<!-- Portfolio Item -->
<!-- Portfolio Item -->
<div class="jos" data-jos_delay="0.6">
    <div class="group">
        <div class="overflow-hidden rounded-[10px]">
            <img src="{{ asset('assets/img/portfolio/Rectangle 107.png') }}" alt="portfolio-img-3" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
        </div>
        <div class="mt-6">
            <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Campaign — Provision of information</a>
                <a href="#" class="hover:text-ColorBlue">Marketing</a>
            </div>
            <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
        </div>
    </div>
</div>
<!-- Portfolio Item -->
<!-- Portfolio Item -->
<div class="jos" data-jos_delay="0.9">
    <div class="group">
        <div class="overflow-hidden rounded-[10px]">
            <img src="{{ asset('assets/img/portfolio/Rectangle 108.png') }}" alt="portfolio-img-4" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
        </div>
        <div class="mt-6">
            <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Journal — Asset in business</a>
                <a href="#" class="hover:text-ColorBlue">Commercial</a>
            </div>
            <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
        </div>
    </div>
</div>
<!-- Portfolio Item -->
<!-- Portfolio Item -->
<div class="jos" data-jos_delay="1.2">
    <div class="group">
        <div class="overflow-hidden rounded-[10px]">
            <img src="{{ asset('assets/img/portfolio/Rectangle 111.png') }}" alt="portfolio-img-5" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
        </div>
        <div class="mt-6">
            <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Book — Design of the year</a>
                <a href="#" class="hover:text-ColorBlue">UI/UX Design</a>
            </div>
            <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
        </div>
    </div>
</div>
<!-- Portfolio Item -->
<!-- Portfolio Item -->
<div class="jos" data-jos_delay="1.5">
    <div class="group">
        <div class="overflow-hidden rounded-[10px]">
            <img src="{{ asset('assets/img/portfolio/Rectangle 114.png') }}" alt="portfolio-img-6" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
        </div>
        <div class="mt-6">
            <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Strategic — Ways to level up your brand</a>
                <a href="#" class="hover:text-ColorBlue">Branding</a>
            </div>
            <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
        </div>
    </div>
</div>
<!-- Portfolio Item -->
</div>
<!-- Portfolio List -->
<!-- Portfolio List -->
<div class="tab-content grid hidden gap-8 md:grid-cols-2 lg:gap-10 xl:gap-[60px]" id="website">
    <!-- Portfolio Item -->
    <div class="jos" data-jos_delay="0">
        <div class="group">
            <div class="overflow-hidden rounded-[10px]">
                <img src="{{ asset('assets/img/th-1/portfolio-img-2.jpg') }}" alt="portfolio-img-2" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
            </div>
            <div class="mt-6">
                <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                    <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Website — The future lifestyle platform.</a>
                    <a href="#" class="hover:text-ColorBlue">Branding</a>
                </div>
                <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                    <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
        </div>
    </div>
    <!-- Portfolio Item -->
</div>
<!-- Portfolio List -->
<!-- Portfolio List -->
<div class="tab-content grid hidden gap-8 md:grid-cols-2 lg:gap-10 xl:gap-[60px]" id="branding">
    <!-- Portfolio Item -->
    <div class="jos" data-jos_delay="0">
        <div class="group">
            <div class="overflow-hidden rounded-[10px]">
                <img src="{{ asset('assets/img/th-1/portfolio-img-2.jpg') }}" alt="portfolio-img-2" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
            </div>
            <div class="mt-6">
                <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                    <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Website — The future lifestyle platform.</a>
                    <a href="#" class="hover:text-ColorBlue">Branding</a>
                </div>
                <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                    <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
        </div>
    </div>
    <!-- Portfolio Item -->
    <!-- Portfolio Item -->
    <div class="jos" data-jos_delay="0.3">
        <div class="group">
            <div class="overflow-hidden rounded-[10px]">
                <img src="{{ asset('assets/img/th-1/portfolio-img-6.jpg') }}" alt="portfolio-img-6" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
            </div>
            <div class="mt-6">
                <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                    <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Strategic — Ways to level up your brand</a>
                    <a href="#" class="hover:text-ColorBlue">Branding</a>
                </div>
                <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                    <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
        </div>
    </div>
    <!-- Portfolio Item -->
</div>
<!-- Portfolio List -->
<!-- Portfolio List -->
<div class="tab-content grid hidden gap-8 md:grid-cols-2 lg:gap-10 xl:gap-[60px]" id="commercial">
    <!-- Portfolio Item -->
    <div class="jos" data-jos_delay="0">
        <div class="group">
            <div class="overflow-hidden rounded-[10px]">
                <img src="{{ asset('assets/img/th-1/portfolio-img-4.jpg') }}" alt="portfolio-img-4" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
            </div>
            <div class="mt-6">
                <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                    <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Journal — Asset in business</a>
                    <a href="#" class="hover:text-ColorBlue">Commercial</a>
                </div>
                <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                    <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
        </div>
    </div>
    <!-- Portfolio Item -->
</div>
<!-- Portfolio List -->
<!-- Portfolio List -->
<div class="tab-content grid hidden gap-8 md:grid-cols-2 lg:gap-10 xl:gap-[60px]" id="digital-art">
    <!-- Portfolio Item -->
    <div class="jos" data-jos_delay="0">
        <div class="group">
            <div class="overflow-hidden rounded-[10px]">
                <img src="{{ asset('assets/img/th-1/portfolio-img-3.jpg') }}" alt="portfolio-img-3" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
            </div>
            <div class="mt-6">
                <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                    <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Campaign — Provision of information</a>
                    <a href="#" class="hover:text-ColorBlue">Marketing</a>
                </div>
                <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                    <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
        </div>
    </div>
    <!-- Portfolio Item -->
</div>
<!-- Portfolio List -->
<!-- Portfolio List -->
<div class="tab-content grid hidden gap-8 md:grid-cols-2 lg:gap-10 xl:gap-[60px]" id="ui-ux-design">
    <!-- Portfolio Item -->
    <div class="jos" data-jos_delay="0">
        <div class="group">
            <div class="overflow-hidden rounded-[10px]">
                <img src="{{ asset('assets/img/th-1/portfolio-img-1.jpg') }}" alt="portfolio-img-1" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
            </div>
            <div class="mt-6">
                <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                    <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">App — The power of communication</a>
                    <a href="#" class="hover:text-ColorBlue">UI/UX Design</a>
                </div>
                <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] group-hover:text-ColorBlue">View work
                    <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
        </div>
    </div>
    <!-- Portfolio Item -->
    <!-- Portfolio Item -->
    <div class="jos" data-jos_delay="0.3">
        <div class="group">
            <div class="overflow-hidden rounded-[10px]">
                <img src="{{ asset('assets/img/th-1/portfolio-img-5.jpg') }}" alt="portfolio-img-5" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
            </div>
            <div class="mt-6">
                <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                    <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Book — Design of the year</a>
                    <a href="#" class="hover:text-ColorBlue">UI/UX Design</a>
                </div>
                <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] group-hover:text-ColorBlue">View work
                    <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
        </div>
    </div>
    <!-- Portfolio Item -->
</div>
<!-- Portfolio List -->
</div> --}}
{{-- <div class="filters mb-10 flex gap-4">
                <button data-filter="all" class="btn">All</button>
                <button data-filter="branding" class="btn">Branding</button>
                <button data-filter="uiux" class="btn">UI/UX</button>
            </div> --}}
<style>
#pagination button{
    padding: 10px !important;
    line-height: 16px;
    font-size: 16px;
    width: 36px;
}
#pagination .text-white{
    background-color: #F90305 !important;
    color: #fff !important
}
</style>
<div class="my-10 lg:my-[60px] xl:my-20">
    <!-- Portfolio List -->
    <div id="portfolio-grid" class="grid gap-8 md:grid-cols-2 lg:gap-10 xl:gap-[60px]">
        <!-- Portfolio Item -->
        <div class="jos" data-jos_delay="0">
            <div class="group">
                <div class="overflow-hidden rounded-[10px]">
                    <img src="{{ asset('assets/img/portfolio/Rectangle 104.png') }}" alt="portfolio-img-1" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                </div>
                <div class="mt-6">
                    <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                        <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">App — The power of communication</a>
                        <a href="#" class="hover:text-ColorBlue">UI/UX Design</a>
                    </div>
                    <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                        <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
        <!-- Portfolio Item -->
        <!-- Portfolio Item -->
        <div class="jos" data-jos_delay="0.3">
            <div class="group">
                <div class="overflow-hidden rounded-[10px]">
                    <img src="{{ asset('assets/img/portfolio/Rectangle 106.png') }}" alt="portfolio-img-2" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                </div>
                <div class="mt-6">
                    <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                        <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Website — The future lifestyle platform.</a>
                        <a href="#" class="hover:text-ColorBlue">Branding</a>
                    </div>
                    <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                        <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
        <!-- Portfolio Item -->
        <!-- Portfolio Item -->
        <div class="jos" data-jos_delay="0.6">
            <div class="group">
                <div class="overflow-hidden rounded-[10px]">
                    <img src="{{ asset('assets/img/portfolio/Rectangle 107.png') }}" alt="portfolio-img-3" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                </div>
                <div class="mt-6">
                    <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                        <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Campaign — Provision of information</a>
                        <a href="#" class="hover:text-ColorBlue">Marketing</a>
                    </div>
                    <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                        <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
        <!-- Portfolio Item -->
        <!-- Portfolio Item -->
        <div class="jos" data-jos_delay="0.9">
            <div class="group">
                <div class="overflow-hidden rounded-[10px]">
                    <img src="{{ asset('assets/img/portfolio/Rectangle 108.png') }}" alt="portfolio-img-4" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                </div>
                <div class="mt-6">
                    <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                        <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Journal — Asset in business</a>
                        <a href="#" class="hover:text-ColorBlue">Commercial</a>
                    </div>
                    <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                        <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
        <!-- Portfolio Item -->
        <!-- Portfolio Item -->
        <div class="jos" data-jos_delay="1.2">
            <div class="group">
                <div class="overflow-hidden rounded-[10px]">
                    <img src="{{ asset('assets/img/portfolio/Rectangle 111.png') }}" alt="portfolio-img-5" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                </div>
                <div class="mt-6">
                    <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                        <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Book — Design of the year</a>
                        <a href="#" class="hover:text-ColorBlue">UI/UX Design</a>
                    </div>
                    <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                        <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
        <!-- Portfolio Item -->
        <!-- Portfolio Item -->
        <div class="jos" data-jos_delay="1.5">
            <div class="group">
                <div class="overflow-hidden rounded-[10px]">
                    <img src="{{ asset('assets/img/portfolio/Rectangle 114.png') }}" alt="portfolio-img-6" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                </div>
                <div class="mt-6">
                    <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                        <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Strategic — Ways to level up your brand</a>
                        <a href="#" class="hover:text-ColorBlue">Branding</a>
                    </div>
                    <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                        <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
        <!-- Portfolio Item -->
        <!-- Portfolio Item -->
        <div class="jos" data-jos_delay="1.2">
            <div class="group">
                <div class="overflow-hidden rounded-[10px]">
                    <img src="{{ asset('assets/img/portfolio/Rectangle 111.png') }}" alt="portfolio-img-5" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                </div>
                <div class="mt-6">
                    <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                        <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Book — Design of the year</a>
                        <a href="#" class="hover:text-ColorBlue">UI/UX Design</a>
                    </div>
                    <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                        <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
        <!-- Portfolio Item -->
        <!-- Portfolio Item -->
        <div class="jos" data-jos_delay="1.5">
            <div class="group">
                <div class="overflow-hidden rounded-[10px]">
                    <img src="{{ asset('assets/img/portfolio/Rectangle 114.png') }}" alt="portfolio-img-6" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                </div>
                <div class="mt-6">
                    <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                        <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Strategic — Ways to level up your brand</a>
                        <a href="#" class="hover:text-ColorBlue">Branding</a>
                    </div>
                    <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                        <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
        <!-- Portfolio Item -->
        <!-- Portfolio Item -->
        <div class="jos" data-jos_delay="1.2">
            <div class="group">
                <div class="overflow-hidden rounded-[10px]">
                    <img src="{{ asset('assets/img/portfolio/Rectangle 111.png') }}" alt="portfolio-img-5" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                </div>
                <div class="mt-6">
                    <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                        <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Book — Design of the year</a>
                        <a href="#" class="hover:text-ColorBlue">UI/UX Design</a>
                    </div>
                    <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                        <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
        <!-- Portfolio Item -->
        <!-- Portfolio Item -->
        <div class="jos" data-jos_delay="1.5">
            <div class="group">
                <div class="overflow-hidden rounded-[10px]">
                    <img src="{{ asset('assets/img/portfolio/Rectangle 114.png') }}" alt="portfolio-img-6" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                </div>
                <div class="mt-6">
                    <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                        <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Strategic — Ways to level up your brand</a>
                        <a href="#" class="hover:text-ColorBlue">Branding</a>
                    </div>
                    <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                        <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
        <!-- Portfolio Item -->
        <!-- Portfolio Item -->
        <div class="jos" data-jos_delay="1.2">
            <div class="group">
                <div class="overflow-hidden rounded-[10px]">
                    <img src="{{ asset('assets/img/portfolio/Rectangle 111.png') }}" alt="portfolio-img-5" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                </div>
                <div class="mt-6">
                    <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                        <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Book — Design of the year</a>
                        <a href="#" class="hover:text-ColorBlue">UI/UX Design</a>
                    </div>
                    <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                        <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
        <!-- Portfolio Item -->
        <!-- Portfolio Item -->
        <div class="jos" data-jos_delay="1.5">
            <div class="group">
                <div class="overflow-hidden rounded-[10px]">
                    <img src="{{ asset('assets/img/portfolio/Rectangle 114.png') }}" alt="portfolio-img-6" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                </div>
                <div class="mt-6">
                    <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                        <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Strategic — Ways to level up your brand</a>
                        <a href="#" class="hover:text-ColorBlue">Branding</a>
                    </div>
                    <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                        <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
        <!-- Portfolio Item -->
        <!-- Portfolio Item -->
        <div class="jos" data-jos_delay="1.2">
            <div class="group">
                <div class="overflow-hidden rounded-[10px]">
                    <img src="{{ asset('assets/img/portfolio/Rectangle 111.png') }}" alt="portfolio-img-5" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                </div>
                <div class="mt-6">
                    <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                        <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Book — Design of the year</a>
                        <a href="#" class="hover:text-ColorBlue">UI/UX Design</a>
                    </div>
                    <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                        <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
        <!-- Portfolio Item -->
        <!-- Portfolio Item -->
        <div class="jos" data-jos_delay="1.5">
            <div class="group">
                <div class="overflow-hidden rounded-[10px]">
                    <img src="{{ asset('assets/img/portfolio/Rectangle 114.png') }}" alt="portfolio-img-6" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                </div>
                <div class="mt-6">
                    <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                        <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Strategic — Ways to level up your brand</a>
                        <a href="#" class="hover:text-ColorBlue">Branding</a>
                    </div>
                    <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                        <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
        <!-- Portfolio Item -->
        <!-- Portfolio Item -->
        <div class="jos" data-jos_delay="1.2">
            <div class="group">
                <div class="overflow-hidden rounded-[10px]">
                    <img src="{{ asset('assets/img/portfolio/Rectangle 111.png') }}" alt="portfolio-img-5" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                </div>
                <div class="mt-6">
                    <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                        <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Book — Design of the year</a>
                        <a href="#" class="hover:text-ColorBlue">UI/UX Design</a>
                    </div>
                    <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                        <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
        <!-- Portfolio Item -->
        <!-- Portfolio Item -->
        <div class="jos" data-jos_delay="1.5">
            <div class="group">
                <div class="overflow-hidden rounded-[10px]">
                    <img src="{{ asset('assets/img/portfolio/Rectangle 114.png') }}" alt="portfolio-img-6" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                </div>
                <div class="mt-6">
                    <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                        <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Strategic — Ways to level up your brand</a>
                        <a href="#" class="hover:text-ColorBlue">Branding</a>
                    </div>
                    <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                        <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
        <!-- Portfolio Item -->
        <!-- Portfolio Item -->
        <div class="jos" data-jos_delay="1.2">
            <div class="group">
                <div class="overflow-hidden rounded-[10px]">
                    <img src="{{ asset('assets/img/portfolio/Rectangle 111.png') }}" alt="portfolio-img-5" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                </div>
                <div class="mt-6">
                    <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                        <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Book — Design of the year</a>
                        <a href="#" class="hover:text-ColorBlue">UI/UX Design</a>
                    </div>
                    <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                        <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
        <!-- Portfolio Item -->
        <!-- Portfolio Item -->
        <div class="jos" data-jos_delay="1.5">
            <div class="group">
                <div class="overflow-hidden rounded-[10px]">
                    <img src="{{ asset('assets/img/portfolio/Rectangle 114.png') }}" alt="portfolio-img-6" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                </div>
                <div class="mt-6">
                    <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                        <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Strategic — Ways to level up your brand</a>
                        <a href="#" class="hover:text-ColorBlue">Branding</a>
                    </div>
                    <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                        <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
        <!-- Portfolio Item -->
        <!-- Portfolio Item -->
        <div class="jos" data-jos_delay="1.2">
            <div class="group">
                <div class="overflow-hidden rounded-[10px]">
                    <img src="{{ asset('assets/img/portfolio/Rectangle 111.png') }}" alt="portfolio-img-5" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                </div>
                <div class="mt-6">
                    <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                        <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Book — Design of the year</a>
                        <a href="#" class="hover:text-ColorBlue">UI/UX Design</a>
                    </div>
                    <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                        <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
        <!-- Portfolio Item -->
        <!-- Portfolio Item -->
        <div class="jos" data-jos_delay="1.5">
            <div class="group">
                <div class="overflow-hidden rounded-[10px]">
                    <img src="{{ asset('assets/img/portfolio/Rectangle 114.png') }}" alt="portfolio-img-6" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                </div>
                <div class="mt-6">
                    <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                        <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Strategic — Ways to level up your brand</a>
                        <a href="#" class="hover:text-ColorBlue">Branding</a>
                    </div>
                    <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                        <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
        <!-- Portfolio Item -->
        <!-- Portfolio Item -->
        <div class="jos" data-jos_delay="1.2">
            <div class="group">
                <div class="overflow-hidden rounded-[10px]">
                    <img src="{{ asset('assets/img/portfolio/Rectangle 111.png') }}" alt="portfolio-img-5" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                </div>
                <div class="mt-6">
                    <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                        <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Book — Design of the year</a>
                        <a href="#" class="hover:text-ColorBlue">UI/UX Design</a>
                    </div>
                    <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                        <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
        <!-- Portfolio Item -->
        <!-- Portfolio Item -->
        <div class="jos" data-jos_delay="1.5">
            <div class="group">
                <div class="overflow-hidden rounded-[10px]">
                    <img src="{{ asset('assets/img/portfolio/Rectangle 114.png') }}" alt="portfolio-img-6" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                </div>
                <div class="mt-6">
                    <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                        <a href="{{ url('portfolioDetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Strategic — Ways to level up your brand</a>
                        <a href="#" class="hover:text-ColorBlue">Branding</a>
                    </div>
                    <a href="{{ url('portfolioDetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View work
                        <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
        <!-- Portfolio Item -->
    </div>

    <!-- Pagination Controls -->
    <div id="pagination" class="mt-10 flex justify-center gap-2">
        <!-- Pagination buttons will be injected here -->
    </div>
</div>


<!-- Portfolio Area -->

{{-- <div class="flex justify-center">
                <button class="btn is-blue is-rounded is-large group">
                    View more
                </button>
            </div> --}}
</div>
<!-- Section Container -->
</div>
<!-- Section Space -->
</div>
<!-- Portfolio Section End -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const itemsPerPage = 8;
        const portfolioGrid = document.getElementById("portfolio-grid");
        const items = Array.from(portfolioGrid.children);
        const paginationContainer = document.getElementById("pagination");

        let currentPage = 1;
        const totalPages = Math.ceil(items.length / itemsPerPage);

        function showPage(page) {
            currentPage = page;
            const start = (page - 1) * itemsPerPage;
            const end = page * itemsPerPage;

            items.forEach((item, index) => {
                item.style.display = index >= start && index < end ? "block" : "none";
            });

            renderPagination();
        }

        function renderPagination() {
            paginationContainer.innerHTML = "";

            for (let i = 1; i <= totalPages; i++) {
                const btn = document.createElement("button");
                btn.textContent = i;
                btn.className = `px-3 py-1 border rounded ${
                    i === currentPage ? "bg-blue-600 text-white" : "bg-white text-black"
                }`;
                btn.addEventListener("click", () => showPage(i));
                paginationContainer.appendChild(btn);
            }
        }

        // Init
        showPage(1);
    });

</script>


@endsection
