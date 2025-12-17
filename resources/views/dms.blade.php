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
                <h1 class="breadcrumb-title">Document Management System (DMS)</h1>
                {{-- <ul class="breadcrumb-nav">
                    <li><a href="{{ url('index') }}">Home</a></li>
                <li>About</li>
                </ul> --}}
            </div>
        </div>
        <!-- Section Container -->
    </div>
    <!-- Breadcrumb Section Spacer -->
</section>
<!-- Breadcrumb Section End -->

    <!-- Service Details Section Start -->
    <section class="section-service-details">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Service Details Area -->
                <div class="mx-auto max-w-[1080px]">
                    <!-- Service main Image -->
                    <img src="{{ asset('assets/img/kodetech/products/document management system.png') }}" alt="service-main-img" class="mb-10 h-auto w-full rounded-[10px]" />
                    <!-- Service Rich Text -->
                    <div class="rich-text">
                        <h5>What is Digital Brand Strategy?</h5>
                        <p>
                            A comprehensive plan that helps you communicate your
                            company's identity to consumers online to increase customer
                            loyalty and sales. A digital brand strategy also defines how
                            your organization wishes to be perceived by consumers.
                        </p>
                        <p>
                            What makes it unique? What do you want people to think about
                            your product or service? By creating guidelines for your
                            brand, you can ensure every interaction with consumers
                            remains consistent.
                        </p>

                        <h5>
                            How Do You Create an Effective Digital Brand Strategy?
                        </h5>
                        <p>
                            Creating an effective digital brand takes time, effort, and
                            due diligence. It's not as simple as making a logo, showing
                            up with a few dozen hashtags, and calling. Let's dive into
                            the roadmap for building a digital brand strategy with a few
                            detailed examples.
                        </p>

                        <ul class="font-semibold text-ColorBlack">
                            <li class="mb-4 flex gap-x-3 last:mb-0">
                                <span class="text-xl text-ColorBlue"><i class="fa-solid fa-badge-check"></i></span>
                                Digital Branding – Creating your brand image through logo,
                                website design, and social media design to produce a solid
                                brand identity through digital platforms.
                            </li>
                            <li class="mb-4 flex gap-x-3 last:mb-0">
                                <span class="text-xl text-ColorBlue"><i class="fa-solid fa-badge-check"></i></span>
                                Digital Marketing – Promoting your existing brand image
                                through content marketing and advertising techniques to
                                impact consumers.
                            </li>
                        </ul>

                        {{-- <div class="my-6 grid grid-cols-1 md:grid-cols-2 gap-5">
                            <img src="{{ asset('assets/img/th-1/service-inner-1-img.jpg') }}" alt="service-inner-1-img" width="532" height="355" class="w-full h-auto rounded-[10px]" />
                            <img src="{{ asset('assets/img/th-1/service-inner-2-img.jpg') }}" alt="service-inner-2-img" width="532" height="355" class="w-full h-auto rounded-[10px]" />
                        </div> --}}

                        <h5>Digital Branding vs. Digital Marketing</h5>
                        <p>
                            It is a common misconception to confuse digital marketing
                            and digital branding. While you may think that these phrases
                            are interchangeable, there is a distinct difference.
                            Creating an effective digital brand takes time, effort, and
                            due diligence. It's not as simple as making a logo, showing
                            up with a few dozen hashtags, and calling it a day.
                        </p>

                        <h5>Are You Ready to Digitize Your Business Brand?</h5>
                        <p>
                            Now it is clear what digital branding is and what are the
                            strategies. That means it’s time for you to put it into
                            practice. There are nine ways that you can use for maximum
                            the results.
                        </p>

                        <p>
                            However, you can also try some of the strategies that you
                            think are the easiest and most important. For example, you
                            can start by creating a logo, using social media, or
                            creating a website. Keep the spirit and see you on the next
                            article!
                        </p>
                    </div>
                </div>
                <!-- Service Details Area -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </section>
    <!-- Service Details Section End -->

@endsection

