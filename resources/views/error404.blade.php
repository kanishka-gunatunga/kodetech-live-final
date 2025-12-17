@extends('layout.layout1')

@section('headerLogo')
<img src="{{ asset('assets/img/logo-blue-dark.png') }}" alt="Masco" width="109" height="24" />
@endsection


@section('headButtons')

<div class="flex items-center gap-6">
    <a href="{{ url('login') }}" class="btn-text hidden hover:text-ColorBlue md:inline-block">Login</a>
    <a href="{{ url('signup') }}" class="btn is-blue is-rounded btn-animation group hidden md:inline-block"><span>Sign up free</span></a>
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

 <!-- 404 Section Start -->
 <section class="section-404">
    <!-- Section Space -->
    <div class="section-space">
        <!-- Section Container -->
        <div class="container-default">
            <div class=""></div>
            <div class="mt-10 flex flex-col items-center justify-center text-center lg:mt-[60px] xl:mt-[90px]">
                <img src="{{ asset('assets/img/th-1/404-img.svg') }}" alt="404-img" width="532" height="550" class="mb-[30px]" />
                <h2 class="mb-[15px]">Page not found</h2>
                <p class="mb-10 max-w-[374px] text-ColorBlack/80">
                    The requested URL you are looking for doesn’t exist on this
                    server.
                </p>
                <a href="{{ url('index') }}" class="btn is-blue is-rounded btn-animation is-large group"><span>Back To Homepage</span></a>
            </div>
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</section>
<!-- 404 Section End -->

@endsection



@section('footer')
    <x-footer1/>
@endsection