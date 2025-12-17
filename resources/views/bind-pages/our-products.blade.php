


@extends('layout.layout1')

@section('headerLogo')
    <img src="{{ asset('assets/img/logo-blue-dark.png') }}" alt="Masco" width="109" height="24" />
@endsection



@section('headButtons')
    <div class="flex items-center gap-6">

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
                    <h1 class="breadcrumb-title">{{ $products->product_name }}</h1>
                </div>
            </div>

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
                <div class="mx-auto content-div">
                    <div class="flex flex-col md:flex-row md:items-start gap-8">
                        <!-- Service main Image (50%) -->
                        <div class="md:w-1/2 w-full">
                            <img src="{{ asset('storage/' . $products->product_image) }}"
                                alt="{{ $products->product_name }}" class="mb-10 h-auto w-full rounded-[10px]" />
                        </div>
                        <!-- Service Rich Text (50%) -->
                        <div class="md:w-1/2 w-full">
                            <div class="rich-text">
                                {!! $products->product_overview !!}
                            </div>
                        </div>
                    </div>

                    <div>
                        {!! $products->product_short_description !!}
                    </div>
                </div>
                <!-- Service Details Area -->



                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-6 px-6 pb-6">

                    @foreach ($products->productIcons as $productIcon)
                        <div class="flex items-start gap-8 mt-5">
                            <div class="h-full flex items-center justify-center">
                                <img src="{{ asset('storage/' . $productIcon->product_icon_image) }}" alt=""
                                    class="inner-page-icons" />
                            </div>
                            <div>
                                <h3 class="icon-title">{{ $productIcon->product_icon_title }}</h3>
                                <p class="icon-paragraph">{{ $productIcon->product_icon_short_description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mx-auto content-div">


                    <div>
                        {!! $products->product_description !!}
                    </div>
                </div>


                <!-- Section Space -->

                <div>
                    <p>
                        Explore our <a href="{{ url('/our-projects') }}" style="text-decoration: underline">Projects
                            Page</a> to see how our solutions have made an impact across industries.
                    </p>
                </div>
    </section>
    <!-- Service Details Section End -->
@endsection
