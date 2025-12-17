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
    <section class="section-breadcrumb" style="background-image: url('{{ asset('assets/img/kodetech/sub.jpg') }}'); background-position: bottom center; background-size: cover">
        <!-- Breadcrumb Section Spacer -->
        <div class="breadcrumb-wrapper" style="background-color: transparent !important">
            <!-- Section Container -->
            <div class="container-default">
                <div class="breadcrumb-block">
                    <h1 class="breadcrumb-title">Blog Details</h1>
                    {{-- <ul class="breadcrumb-nav">
                    <li><a href="{{ url('index') }}">Home</a></li>
                    <li><a href="{{ url('blog') }}">Blog</a></li>
                    <li>Blog Details</li>
                </ul> --}}
                </div>
            </div>
            <!-- Section Container -->

            <!-- Breadcrumb Shape - 1 -->
            <!--<div class="absolute left-0 top-0 -z-10">-->
            <!--    <img src="{{ asset('assets/img/elements/breadcrumb-shape-1.svg') }}" alt="hero-shape-1" width="291"-->
            <!--        height="380" />-->
            <!--</div>-->

            <!-- Breadcrumb Shape - 2 -->
            <!--<div class="absolute bottom-0 right-0 -z-[1]">-->
            <!--    <img src="{{ asset('assets/img/elements/breadcrumb-shape-2.svg') }}" alt="hero-shape-2" width="291"-->
            <!--        height="380" />-->
            <!--</div>-->
        </div>
        <!-- Breadcrumb Section Spacer -->
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Start -->
    <div class="blog-section">
        <!-- Section Spacer -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <div class="grid grid-cols-1 ">
                    <div class="flex flex-col gap-y-10 lg:gap-y-14 xl:gap-y-20">
                        <!-- Blog Post Area -->
                        <div class="flex flex-col gap-6">
                            <!-- Blog Post Article -->
                            <article class="jos overflow-hidden bg-white">
                                <div class="mb-7 block overflow-hidden rounded-[10px]">
                                    <img src="{{ asset('storage/' . $blogs->news_image) }}" alt="{{ $blogs->slug }}"
                                        width="856" height="540" class="h-auto w-full scale-100 object-cover" />
                                </div>
                                <!-- Blog Details Wrapper -->
                                <div class="px-[0px]">
                                    <!-- Blog Post Meta -->
                                    <ul
                                        class="flex w-full flex-wrap items-center justify-between text-base font-semibold sm:gap-6 mb-5">
                                        <li class="flex items-center gap-x-[10px] hover:text-ColorBlue">
                                            <i class="fa-regular fa-user ps-2"></i>
                                            {{ $blogs->authur }}


                                        </li>
                                        <li class="flex items-center gap-x-[10px] hover:text-ColorBlue">
                                            <i class="fa-regular fa-calendar"></i>
                                            {{ $blogs->date }}
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Blog Post Meta -->
                                    <!-- Blog Details Content Block-->
                                    <div>
                                        
                                        <div class="news-heading">
                                            <h4>
                                                {{$blogs->news_heading}}
                                            </h4>
                                           
                                        </div>
                                        <div class="news-description mt-5">
                                            {!!$blogs->news_description!!}
                                        </div>
                                       

                                        <p class="mb-7 mt-10 font-semibold last:mb-0">
                                            Thanks for reading ❤
                                        </p>
                                    </div>
                                    <!-- Blog Details Content Block-->
                                </div>
                                <!-- Blog Details Wrapper -->
                            </article>
                            <!-- Blog Post Article -->

                            <!-- Blog Events -->
                            <!--<div class="jos flex justify-between gap-x-8 px-[30px]">-->
                            <!--    <div class="flex items-center gap-x-6">-->
                            <!--        <button class="inline-flex items-center gap-x-1 text-[#121212]">-->
                            <!--            <i class="fa-regular fa-thumbs-up"></i>-->
                            <!--            200-->
                            <!--        </button>-->
                            <!--        <button class="inline-flex items-center gap-x-1 text-[#121212]">-->
                            <!--            <i class="fa-regular fa-messages"></i>-->
                            <!--            15-->
                            <!--        </button>-->
                            <!--    </div>-->
                            <!--    <div class="flex items-center gap-x-6">-->
                            <!--        <button class="inline-flex items-center gap-x-1 text-[#121212]">-->
                            <!--            <i class="fa-sharp fa-regular fa-share-nodes"></i>-->
                            <!--        </button>-->
                            <!--        <button class="inline-flex items-center gap-x-1 text-[#121212]">-->
                            <!--            <i class="fa-regular fa-inbox-in"></i>-->
                            <!--        </button>-->
                            <!--    </div>-->
                            <!--</div>-->

                            <!-- Blog Comment Form -->
                        </div>
                        <!-- Blog Post DetailArea -->
                    </div>
                    <!-- Blog Aside -->

                    <!-- Blog Aside -->
                </div>
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Spacer -->
    </div>
    <!-- Blog Section End -->
@endsection



@section('footer')
    <x-footer1 />
@endsection
