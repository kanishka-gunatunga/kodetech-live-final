@extends('layout.layout1')

{{-- @section('headerLogo')
<img src="{{ asset('assets/img/kodetech/kodetech-logo.png') }}" alt="Masco" width="109" height="24" />
@endsection --}}




@section('headButtons')

<div class="flex items-center gap-6">
    {{-- <a href="{{ url('login') }}" class="btn-text hidden hover:text-ColorBlue md:inline-block">Login</a>
    <a href="{{ url('signup') }}" class="btn is-blue is-rounded btn-animation group hidden md:inline-block"><span>Sign up free</span></a> --}}
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
                <h1 class="breadcrumb-title">FAQ</h1>
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

<!-- FAQ Section Start -->
<div class="section-faq">
    <div class="relative z-10 overflow-hidden">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
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
                        <!-- Accordion Item -->
                        <li class="accordion-item overflow-hidden border-b border-ColorBlack p-[30px] last:border-b-0">
                            <!-- Accordion Header -->
                            <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorBlack">
                                <button class="flex-1 text-left">
                                    Q. How often should I post a blog or post on social
                                    media?
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
                                    Q. Which social media channels should my business be
                                    using?
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
    </div>
</div>
<!-- FAQ Section End -->

@endsection


