<?php
use App\Models\Project;
use App\Models\Blog;
use Illuminate\Support\Str;
$projects = Project::all();
$blogs = Blog::all();
?>
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
    '
<style>
  
    @media (max-width: 576px) {
   .blog-image{
        height:unset !important;
    }
}
</style>
    <!-- Breadcrumb Section Start -->
    <section class="section-breadcrumb" style="background-image: url('{{ asset('assets/img/kodetech/sub.jpg') }}'); background-position: bottom center; background-size: cover">
        <!-- Breadcrumb Section Spacer -->
        <div class="breadcrumb-wrapper" style="background-color: transparent !important">
            <!-- Section Container -->
            <div class="container-default">
                <div class="breadcrumb-block">
                    <h1 class="breadcrumb-title">Knowledge Center</h1>
                    {{-- <ul class="breadcrumb-nav">
                        <li><a href="{{ url('index') }}">Home</a></li>
                        <li>Blog</li>
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
    <section class="blog-section">
        <!-- Section Spacer -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <div class="grid gap-8 md:grid-cols-3 lg:gap-10 xl:gap-[60px]">
                    @foreach ($blogs->reverse()->take(3) as $blog)
                        <div class="jos" data-jos_delay="0"
                            style="background-color:#F4F4F4;border-radius:20px !important;">
                            <div class="group">
                                <div class="overflow-hidden" style="border-radius:20px !important;" >
                                    <img src="{{ asset('storage/' . $blog->news_image) }}" alt="{{ $blog->news_heading }}"
                                        width="617" height="450"
                                        class="h-full w-full object-cover transition-all blog-image duration-300 ease-in-out group-hover:scale-105"/
                                        style="height: 230px;border-top-left-radius:20px !important;border-top-right-radius:20px !important">

                                    <ul
                                        class="flex w-full flex-wrap items-center justify-between text-base font-semibold sm:gap-6 p-5 pb-0">
                                        <li class="flex items-center gap-x-[10px] hover:text-ColorBlue">
                                            <i class="fa-regular fa-user ps-2"></i>
                                            {{ $blog->authur }}
                                        </li>
                                        <li class="flex items-center gap-x-[10px] hover:text-ColorBlue">
                                            <i class="fa-regular fa-calendar"></i>
                                            {{ $blog->date }}
                                        </li>
                                    </ul>
                                </div>
                                <div class="mt-6" style="padding:20px; padding-top:0">
                                    <div>
                                        <div
                                            class="mb-5 flex flex-wrap justify-between gap-5 text-ColorBlack lg:flex-nowrap xl:mb-7">
                                            <a href="{{ route('BlogShow', $blog->slug) }}"
                                                class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] group-hover:text-ColorBlue xl:text-2xl line-clamp-2">{{ $blog->news_heading }}</a>
                                        </div>
                                        <p class="mb-7 line-clamp-2 last:mb-0">
                                            {{-- {{ str::limit($blog->news_description, 100) }}... --}}

                                            {{ Str::limit(strip_tags($blog->news_description), 100) }}...
                                        </p>
                                    </div>

                                    <div style="margin-top: inherit">
                                        <a href="{{ route('BlogShow', $blog->slug) }}"
                                            class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View
                                            More
                                            <span
                                                class="inline-block transition-all duration-150 group-hover:translate-x-2">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Spacer -->
    </section>
    <!-- Blog Section End -->
@endsection



@section('footer')
    <x-footer1 />
@endsection
