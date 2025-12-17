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
    <section class="section-breadcrumb"
        style="background-image: url('{{ asset('assets/img/kodetech/sub.jpg') }}'); background-position: bottom center; background-size: cover">
        <!-- Breadcrumb Section Spacer -->
        <div class="breadcrumb-wrapper" style="background-color: transparent !important">
            <!-- Section Container -->
            <div class="container-default">
                <div class="breadcrumb-block">
                    <h1 class="breadcrumb-title">Contact Us</h1>
                    {{-- <ul class="breadcrumb-nav">
                        <li><a href="{{ url('index') }}">Home</a></li>
                <li>Contact Us</li>
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

    <!-- Contact Info Section Start -->
    <div class="section-contact-info section-space">
        <div class="container-default text-center">
            <div class="mb-5 lg:mb-20 text-center">
                <h2>
                    Fill out this form, We ‘ll quickly <br>get back to you
                </h2>
            </div>
        </div>
        <!-- Section Space -->
        <div class="section-space-bottom">
            <!-- Section Container -->
            <div class="container-default">
                <div
                    class="grid items-center gap-10 lg:grid-cols-2 lg:gap-20 xl:grid-cols-[0.9fr_1fr] xl:gap-32 xxl:grid-cols-[0.7fr_1fr] xxl:gap-[210px]">
                    <!-- Contact Info List -->
                    <div class="flex flex-col gap-[60px]">

                        <!-- Contact Info Item -->
                        <div class="jos flex gap-[30px]" data-jos_delay="0.3">
                            <div class="p-3" style="border: solid 1px #EB131B; padding: 20px; border-radius: 8px">
                                <img src="{{ asset('assets/img/kodetech/Phone.png') }}" alt="icon-duotone-phone"
                                    width="64" height="60" class="h-[60px] w-auto" />
                            </div>

                            <div>
                                <div class="mb-2 text-2xl font-semibold -tracking-[0.5] text-ColorBlack">
                                    Phone Number
                                </div>
                                <p class="flex flex-col">
                                    <a href="tel:+94772275263" class="hover:text-ColorBlue">+94 772 275 263</a>
                                    <a href="tel:+94775437340" class="hover:text-ColorBlue">+94 775 437 340</a>
                                </p>
                            </div>
                        </div>
                        <!-- Contact Info Item -->

                        <!-- Contact Info Item -->
                        <div class="jos flex gap-[30px]" data-jos_delay="0">
                            <div class="p-3" style="border: solid 1px #EB131B; padding: 20px; border-radius: 8px">
                                <img src="{{ asset('assets/img/kodetech/Email.png') }}" alt="icon-duotone-chat"
                                    width="64" height="60" class="h-[60px] w-auto" />
                            </div>
                            <div>
                                <div class="mb-2 text-2xl font-semibold -tracking-[0.5] text-ColorBlack">
                                    Email
                                </div>
                                <p class="flex flex-col">
                                    <a href="mailto:info@kodetech.co" class="hover:text-ColorBlue">info@kodetech.co</a>
                                  <!--  <a href="mailto:info@ko2labs.com" class="hover:text-ColorBlue">sales@ko2labs.com</a> -->
                                </p>
                            </div>
                        </div>
                        <!-- Contact Info Item -->

                        <!-- Contact Info Item -->
                        <div>
                            <div class="jos flex gap-[30px]" data-jos_delay="0.6">
                                <div class="p-3" style="border: solid 1px #EB131B; padding: 20px; border-radius: 8px">
                                    <img src="{{ asset('assets/img/kodetech/Location.png') }}" alt="icon-duotone-message"
                                        width="74" height="60" class="h-[60px] w-auto" />
                                </div>

                                <div>
                                    <div class="mb-2 text-2xl font-semibold -tracking-[0.5] text-ColorBlack">
                                        Location
                                    </div>
                                    <p style="line-height: 22px;">
                                        Kodetech (Pvt) Ltd, <br>
                                        No 2A, Sulaiman Terrace,<br>
                                        Colombo 05, Sri Lanka.
                                    </p>

                                </div>
                            </div>
                            {{-- <div class="jos flex gap-[30px]" data-jos_delay="0.6">
                        <div class="p-3" style="border: solid 1px #EB131B; padding: 20px; border-radius: 8px;visibility: hidden">
                            <img src="{{ asset('assets/img/kodetech/Location.png') }}" alt="icon-duotone-message" width="74" height="60" class="h-[60px] w-auto" />
                        </div>

                        <div>
                           
                            <p style="line-height: 22px;" class="mt-5">
                                Kodetech (Pvt) Ltd, <br>
                                No 2A, Sulaiman Terrace,<br>
                                Colombo 05, Sri Lanka.
                            </p>
                        </div>
                    </div> --}}
                        </div>
                        <!-- Contact Info Item -->
                        <div class="flex flex-col gap-5">
                            <div class="mb-2 text-2xl font-semibold -tracking-[0.5] text-[#686868]">
                                Connect With Us
                            </div>
                            <div class="flex flex-wrap gap-5">
                                <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer"
                                    class="flex h-[50px] w-[50px] items-center justify-center rounded-[50%] bg-[#FDFBF9]/10 text-sm text-black border border-black transition-all duration-300 hover:bg-ColorAtomicTangerine hover:text-[#1B1C1D]"
                                    aria-label="facebook">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer"
                                    class="flex h-[50px] w-[50px] items-center justify-center rounded-[50%] bg-[#FDFBF9]/10 text-sm text-black border border-black transition-all duration-300 hover:bg-ColorAtomicTangerine hover:text-[#1B1C1D]"
                                    aria-label="instagram">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a href="https://www.github.com/" target="_blank" rel="noopener noreferrer"
                                    class="flex h-[50px] w-[50px] items-center justify-center rounded-[50%] bg-[#FDFBF9]/10 text-sm text-black border border-black transition-all duration-300 hover:bg-ColorAtomicTangerine hover:text-[#1B1C1D]"
                                    aria-label="github">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- Contact Info List -->
                    <!-- Contact Form Block -->
                    <div class="jos xm:p-10 rounded-[10px] border-2 border-ColorBlack/50 bg-white p-[30px]">
                        @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @elseif(session('fail'))
                                <div class="alert alert-danger">
                                    {{ session('fail') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <p>{{ $errors->first() }}</p>
                                </div>
                            @endif
                        <div class="mb-5 tracking-tight text-ColorBlack ">
                            <h2>
                                Get in <span style="color: #EB131B">Touch</span>
                            </h2>
                            <p>
                                At Kode Tech , we value your inquiries and feedback. Whether you have project in mind,
                                question about our services, or simply want to explore collaboration opportunities, we're
                                here for you.
                            </p>
                        </div>

                        <!-- Contact Form Block -->
                        <div class="jos mx-auto max-w-[996px]">
                            
                            <form action="{{ route('mailSubmit') }}" method="post">
                                @csrf
                                <!-- From Group List -->
                                <div class="flex flex-col gap-6">
                                    <div class="grid md:grid-cols-2 gap-6">
                                        <!-- Form Group Item-->
                                        <div>
                                            <input type="text" name="first_name" id="first_name"
                                                placeholder="First Name *"
                                                class="w-full rounded-[8px] border border-ColorBlack/50 bg-white px-[30px] py-[15px] outline-none transition-all duration-300 placeholder:text-ColorBlack/50 focus:border-ColorBlue"
                                                required style="border-radius: 8px !important" />
                                        </div>
                                        <!-- Form Group Item-->
                                        <!-- Form Group Item-->
                                        <div>
                                            <input type="text" name="last_name" id="last_name" placeholder="Last Name *"
                                                class="w-full rounded-[8px] border border-ColorBlack/50 bg-white px-[30px] py-[15px] outline-none transition-all duration-300 placeholder:text-ColorBlack/50 focus:border-ColorBlue"
                                                required style="border-radius: 8px !important" />
                                        </div>
                                        <!-- Form Group Item-->
                                    </div>
                                    <div>
                                        <input type="email" name="email" id="email" placeholder="Email"
                                            class="w-full rounded-[8px] border border-ColorBlack/50 bg-white px-[30px] py-[15px] outline-none transition-all duration-300 placeholder:text-ColorBlack/50 focus:border-ColorBlue"
                                            required style="border-radius: 8px !important" />
                                    </div>
                                    <div>
                                        <input type="tel" name="phone_number" id="phone_number"
                                            placeholder="Phone number *"
                                            class="w-full rounded-[8px] border border-ColorBlack/50 bg-white px-[30px] py-[15px] outline-none transition-all duration-300 placeholder:text-ColorBlack/50 focus:border-ColorBlue"
                                            required style="border-radius: 8px !important" />
                                    </div>

                                    <!-- Form Group Item-->
                                    <div>
                                        <textarea name="message" id="message" placeholder="Message"
                                            class="min-h-[130px] w-full rounded-[8px] border border-ColorBlack/50 bg-white px-[30px] py-[15px] outline-none transition-all duration-300 placeholder:text-ColorBlack/50 focus:border-ColorBlue"
                                            required style="border-radius: 8px !important"></textarea>
                                    </div>
                                    <!-- Form Group Item-->
                                </div>
                                <!-- From Group List -->
                                <div style="display: flex; justify-content: center; width: 100%">
                                    <button type="submit" class="btn is-blue is-rounded is-large mt-6">
                                        Send Message
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- Contact Form Block -->
                    </div>
                    <!-- Contact Form Block -->
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Space -->
        </div>
    </div>
    <!-- Contact Info Section End -->

    <!-- Location Section Start -->
    <div class="location-section">
        <div class="h-96 w-full lg:h-[600px]">
            <iframe class="w-full h-full"
                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
        </div>
    </div>
    <!-- Location Section End -->
@endsection



@section('footer')
    <x-footer1 />
@endsection
