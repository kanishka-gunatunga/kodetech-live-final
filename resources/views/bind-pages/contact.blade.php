@extends('layout.layout1')

{{-- @section('headerLogo')
<img src="{{ asset('assets/img/kodetech/kodetech-logo.png') }}" alt="Masco" width="109" height="24" />
@endsection --}}

@section('headButtons')
    <div class="flex items-center gap-6">
        {{-- <a href="{{ url('login') }}" class="btn-text hidden hover:text-ColorBlue md:inline-block">Login</a>
    <a href="{{ url('signup') }}" class="btn is-blue is-rounded btn-animation group hidden md:inline-block"><span>Sign up free</span></a> --}}
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
            <div class="mb-[50px] lg:mb-20 text-center">
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
                    class="grid items-center gap-10 lg:grid-cols-2 lg:gap-20 xl:grid-cols-[0.9fr_1fr] xl:gap-32 xxl:grid-cols-[0.7fr_1fr] xxl:gap-[100px]">
                    <!-- Contact Info List -->
                    <div class="flex flex-col gap-[60px]">

                        <!-- Contact Info Item -->
                        <!--<div class="flex flex-row justify-center lg:justify-start gap-[30px] jos" data-jos_delay="0.3">-->
                        <!--    <<div class="p-3 border border-[#EB131B] rounded-md flex-shrink-0">-->
                        <!--        <img src="{{ asset('assets/img/kodetech/Phone.png') }}" alt="icon-duotone-phone"-->
                        <!--            width="64" height="60" class="h-[50px] w-auto" />-->
                        <!--    </div>-->

                        <!--   <div class="flex-1 min-w-[200px]">-->
                        <!--        <div class="mb-2 text-2xl font-semibold -tracking-[0.5] text-ColorBlack" style="font-weight: 500 !important; color: #000 !important;">-->
                        <!--            Phone Number-->
                        <!--        </div>-->
                        <!--        <p class="flex flex-col">-->
                        <!--            <a href="tel:+94772275263" class="hover:text-ColorBlue" style="font-weight: 400 !important; color: #000 !important;">+94 772 275 263</a>-->
                        <!--            <a href="tel:+94775437340" class="hover:text-ColorBlue" style="font-weight: 400 !important; color: #000 !important;">+94 775 437 340</a>-->
                        <!--        </p>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="flex flex-wrap items-start gap-4 sm:gap-[30px] jos" data-jos_delay="0.3">
                            <div class="p-3 border border-[#EB131B] rounded-md flex-shrink-0" style="border: solid 1px #EB131B; padding: 20px; border-radius: 8px">
                                <img src="{{ asset('assets/img/kodetech/Phone.png') }}" alt="Phone Icon"
                                    class="h-[50px] w-auto" />
                            </div>
                            <div class="flex-1 min-w-[200px]">
                                <div class="mb-2 text-xl font-semibold text-black">
                                    Phone Number
                                </div>
                                <p class="flex flex-col text-black font-normal">
                                    <a href="tel:+94772275263" class="hover:text-ColorBlue">+94 772 275 263</a>
                                    <a href="tel:+94775437340" class="hover:text-ColorBlue">+94 775 437 340</a>
                                </p>
                            </div>
                        </div>
                        <!-- Contact Info Item -->

                        <!-- Contact Info Item -->
                        <!--<div class="flex flex-row justify-center lg:justify-start gap-[30px] jos" data-jos_delay="0">-->
                        <!--    <div class="p-3" style="border: solid 1px #EB131B; padding: 20px; border-radius: 8px">-->
                        <!--        <img src="{{ asset('assets/img/kodetech/Email.png') }}" alt="icon-duotone-chat"-->
                        <!--            width="64" height="60" class="h-[60px] w-auto" />-->
                        <!--    </div>-->
                        <!--    <div>-->
                        <!--        <div class="mb-2 text-2xl font-semibold -tracking-[0.5] text-ColorBlack" style="font-weight: 500 !important; color: #000 !important;">-->
                        <!--            Email-->
                        <!--        </div>-->
                                <!--<p class="flex flex-col">-->
                                <!--    <a href="mailto:info@kodetech.co" class="hover:text-ColorBlue" style="font-weight: 400 !important; color: #000 !important;">info@kodetech.co</a>-->
                                <!--</p>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="flex flex-wrap items-start gap-4 sm:gap-[30px] jos" data-jos_delay="0.3">
                            <div class="p-3 border border-[#EB131B] rounded-md flex-shrink-0" style="border: solid 1px #EB131B; padding: 20px; border-radius: 8px">
                                <img src="{{ asset('assets/img/kodetech/Email.png') }}" alt="Email Icon"
                                    class="h-[50px] w-auto" />
                            </div>
                            <div class="flex-1 min-w-[200px]">
                                <div class="mb-2 text-xl font-semibold text-black">
                                   Email
                                </div>
                                 <p class="flex flex-col">
                                    <a href="mailto:info@kodetech.co" class="hover:text-ColorBlue" style="font-weight: 400 !important; color: #000 !important;">info@kodetech.co</a>
                                </p>
                            </div>
                        </div>
                        <!-- Contact Info Item -->

                        <!-- Contact Info Item -->
                        
                            <!--<div class="flex flex-row justify-center lg:justify-start gap-[30px] jos" data-jos_delay="0.6">-->
                            <!--    <div class="p-3" style="border: solid 1px #EB131B; padding: 20px; border-radius: 8px">-->
                            <!--        <img src="{{ asset('assets/img/kodetech/Location.png') }}" alt="icon-duotone-message"-->
                            <!--            width="74" height="60" class="h-[60px] w-auto" />-->
                            <!--    </div>-->

                            <!--    <div>-->
                            <!--        <div class="mb-2 text-2xl font-semibold -tracking-[0.5] text-ColorBlack" style="font-weight: 500 !important; color: #000 !important;">-->
                            <!--            Location-->
                            <!--        </div>-->
                            <!--        <p style="line-height: 22px;font-weight: 400 !important; color: #000 !important;">-->
                            <!--            Kode Tech (Pvt) Ltd, <br>-->
                            <!--            No 165A, High Level Rd,<br>-->
                            <!--            Nugegoda, Sri Lanka.-->
                            <!--        </p>-->

                            <!--    </div>-->
                            <!--</div>-->
                            <div class="flex flex-wrap items-start gap-4 sm:gap-[30px] jos" data-jos_delay="0.3">
                            <div class="p-3 border border-[#EB131B] rounded-md flex-shrink-0" style="border: solid 1px #EB131B; padding: 20px; border-radius: 8px">
                                <img src="{{ asset('assets/img/kodetech/Location.png') }}" alt="Location Icon"
                                    class="h-[50px] w-auto" />
                            </div>
                            <div class="flex-1 min-w-[200px]">
                                <div class="mb-2 text-xl font-semibold text-black">
                                   Location
                                </div>
                                 <p style="line-height: 22px;font-weight: 400 !important; color: #000 !important;">
                                        Kode Tech (Pvt) Ltd, <br>
                                        No 165A, High Level Rd,<br>
                                        Nugegoda, Sri Lanka.
                                    </p>
                            </div>
                        </div>
                            {{-- <div class="jos flex gap-[30px]" data-jos_delay="0.6">
                        <div class="p-3" style="border: solid 1px #EB131B; padding: 20px; border-radius: 8px;visibility: hidden">
                            <img src="{{ asset('assets/img/kodetech/Location.png') }}" alt="icon-duotone-message" width="74" height="60" class="h-[60px] w-auto" />
                        </div>

                        <div>
                           
                            <p style="line-height: 22px;font-weight: 400 !important" class="mt-5">
                                Kode Tech (Pvt) Ltd, <br>
                                No 165A, High Level Rd,<br>
                                Nugegoda, Sri Lanka.
                            </p>
                        </div>
                    </div> --}}
                        
                        <!-- Contact Info Item -->
                        <div class="flex flex-col gap-5 items-center lg:items-start">
                            <div class="mb-2 text-2xl font-semibold -tracking-[0.5] text-[#686868]">
                                Connect With Us
                            </div>
                            <div class="flex flex-wrap gap-5">
                                <a href="https://www.facebook.com/kodetech.co?_rdc=1&_rdr#" target="_blank" rel="noopener noreferrer"
                                    class="flex h-[50px] w-[50px] items-center justify-center rounded-[50%] bg-[#FDFBF9]/10 text-sm text-black border border-black transition-all duration-300 hover:bg-ColorAtomicTangerine hover:text-[#1B1C1D]"
                                    aria-label="facebook">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="https://www.instagram.com/kodetech.co/" target="_blank" rel="noopener noreferrer"
                                    class="flex h-[50px] w-[50px] items-center justify-center rounded-[50%] bg-[#FDFBF9]/10 text-sm text-black border border-black transition-all duration-300 hover:bg-ColorAtomicTangerine hover:text-[#1B1C1D]"
                                    aria-label="instagram">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a href="https://www.linkedin.com/company/kodetech-co/" target="_blank" rel="noopener noreferrer"
   class="flex h-[50px] w-[50px] items-center justify-center rounded-[50%] bg-[#FDFBF9]/10 text-sm text-black border border-black transition-all duration-300 hover:bg-ColorAtomicTangerine hover:text-[#1B1C1D]"
   aria-label="linkedin">
   <i class="fa-brands fa-linkedin-in"></i>
</a>

                                {{-- <a href="https://www.github.com/" target="_blank" rel="noopener noreferrer"
                                    class="flex h-[50px] w-[50px] items-center justify-center rounded-[50%] bg-[#FDFBF9]/10 text-sm text-black border border-black transition-all duration-300 hover:bg-ColorAtomicTangerine hover:text-[#1B1C1D]"
                                    aria-label="github">
                                    <i class="fa-brands fa-github"></i>
                                </a> --}}
                            </div>
                        </div>

                    </div>
                    <!-- Contact Info List -->
                    <!-- Contact Form Block -->
                    <div class="jos xm:p-10 rounded-[10px] bg-white p-[30px]" style="border: 0.5px solid #000000 !important; background-color: #FAF9F5 !important;">
                        @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @elseif(session('fail'))
                                <div class="alert alert-danger">
                                    {{ session('fail') }}
                                </div>
                            @endif

               
                        <div class="mb-5 tracking-tight text-ColorBlack ">
                            <h2 class="mb-5 mt-3" style="font-weight: 700 !important">
                                Get in <span style="color: #EB131B">Touch</span>
                            </h2>
                            <p style="font-weight: 300 !important">
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
                                                 @if($errors->has("first_name")) 
                                                <p style="color:red;">{{ $errors->first('first_name') }}</p>
                                            @endif
                                        </div>
                                        <!-- Form Group Item-->
                                        <!-- Form Group Item-->
                                        <div>
                                            <input type="text" name="last_name" id="last_name" placeholder="Last Name *"
                                                class="w-full rounded-[8px] border border-ColorBlack/50 bg-white px-[30px] py-[15px] outline-none transition-all duration-300 placeholder:text-ColorBlack/50 focus:border-ColorBlue"
                                                required style="border-radius: 8px !important" />
                                                 @if($errors->has("last_name")) 
                                                <p style="color:red;">{{ $errors->first('last_name') }}</p>
                                            @endif
                                        </div>
                                        <!-- Form Group Item-->
                                    </div>
                                    <div>
                                        <input type="email" name="email" id="email" placeholder="Email *"
                                            class="w-full rounded-[8px] border border-ColorBlack/50 bg-white px-[30px] py-[15px] outline-none transition-all duration-300 placeholder:text-ColorBlack/50 focus:border-ColorBlue"
                                            required style="border-radius: 8px !important" />
                                            @if($errors->has("email")) 
                                               <p style="color:red;">{{ $errors->first('email') }}</p>
                                            @endif
                                    </div>
                                    <div>
                                       <input type="tel" name="phone_number" id="phone_number"
                                            placeholder="Enter phone number (e.g. +94712345678 or 0712345678) *"
                                            class="w-full rounded-[8px] border border-ColorBlack/50 bg-white px-[30px] py-[15px] outline-none transition-all duration-300 placeholder:text-ColorBlack/50 focus:border-ColorBlue"
                                            required maxlength="16"
                                            pattern="^\+?[0-9]{7,15}$"
                                            style="border-radius: 8px !important"
                                        />
                                            @if($errors->has("phone_number")) 
                                               <p style="color:red;">{{ $errors->first('phone_number') }}</p>
                                            @endif
                                    </div>

                                    <!-- Form Group Item-->
                                    <div>
                                        <textarea name="message" id="message" placeholder="Message *"
                                            class="min-h-[130px] w-full rounded-[8px] border border-ColorBlack/50 bg-white px-[30px] py-[15px] outline-none transition-all duration-300 placeholder:text-ColorBlack/50 focus:border-ColorBlue"
                                            required style="border-radius: 8px !important" maxlength="700"></textarea>
                                            @if($errors->has("message")) 
                                                <div class="alert alert-danger mt-2">{{ $errors->first('message') }}</div>
                                            @endif
                                    </div>
                                    <div class="">
                                        <div class="g-recaptcha" data-sitekey="6LdUdJ0rAAAAAATp6GXxQOSnhz6E_yOdR7Uj3f47"></div>
                                        @if ($errors->has('g-recaptcha-response'))
                                            <p style="color:red;">{{ $errors->first('g-recaptcha-response') }}</p>
                                        @endif
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
           
                <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.1677484402694!2d79.88470747461176!3d6.870493719034583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25b79c0693495%3A0xea2978003083150!2sKode%20Tech%20(Pvt)%20Ltd!5e0!3m2!1sen!2slk!4v1753425166431!5m2!1sen!2slk" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- Location Section End -->
@endsection

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

@section('footer')
    <x-footer1 />
@endsection
