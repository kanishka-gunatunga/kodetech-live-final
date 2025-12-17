<?php
use App\Models\Project;
$projects = Project::all();

?>



@extends('layout.layout1')

@section('headerLogo')
    <img src="{{ asset('assets/img/logo-blue-dark.png') }}" alt="Masco" width="109" height="24" />
@endsection



@section('headButtons')
    <div class="flex items-center gap-6">
        {{-- <a href="{{ url('login') }}" class="btn-text hidden hover:text-ColorBlue sm:inline-block">Login</a>
    <a href="{{ url('signup') }}" class="btn is-blue is-rounded btn-animation group hidden sm:inline-block"><span>Sign up free</span></a> --}}
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
    <style>
        .project-header {
            min-height: 3.2rem;
        }
    </style>
    <!-- Breadcrumb Section Start -->
    <section class="section-breadcrumb"
        style="background-image: url('{{ asset('assets/img/kodetech/sub.jpg') }}'); background-position: bottom center; background-size: cover">
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

                <style>
                    #pagination button {
                        padding: 10px !important;
                        line-height: 16px;
                        font-size: 16px;
                        width: 36px;
                    }

                    #pagination .text-white {
                        background-color: #F90305 !important;
                        color: #fff !important
                    }

                    .project-card {
                        box-shadow: 1px 1px 5px 3px #9999994d;
                        border-radius: 15px;
                        /* height: 680px; */
                    }

                    .details{
                        padding: 0.8rem;
                    }

                    
                </style>
                <div class="my-10 lg:my-[60px] xl:my-20">
                    <!-- Portfolio List -->
                    <div id="portfolio-grid" class="grid gap-8 md:grid-cols-2 lg:grid-cols-3 lg:gap-10 xl:gap-[60px]">
                        <!-- Portfolio Item -->

                        @foreach ($projects as $project)
                            <div class="jos project-card" data-jos_delay="0">
                                <div class="group group-container">
                                    <div class="overflow-hidden rounded-[10px]">
                                        <img src="{{ asset('storage/' . $project->project_image) }}" {{-- alt="{{ $project->project_name }}" --}}
                                            width="617" height="450"
                                            class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                    </div>
                                    <div class="mt-6 details">
                                        <div
                                            class="mb-5 flex flex-wrap justify-between project-header gap-5 lg:flex-nowrap xl:mb-7">
                                            <a class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl"
                                                href="{{ route('ProjectShow', $project->slug) }}">

                                                {{ $project->project_name }}

                                            </a>
                                            <a href="{{ route('ProjectShow', $project->slug) }}"
                                                class="hover:text-ColorBlue">{{ $project->project_type }}</a>
                                        </div>
                                        <p>
                                            {{ Str::limit($project->project_overview, 100, '...') }}
                                        </p>

                                        @if ($project->project_type == 'Website' && $project->website_link)
                                            <a href="{{ $project->website_link }}" target="_blank"
                                                class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">
                                                Visit website
                                                <span
                                                    class="inline-block transition-all duration-150 group-hover:translate-x-2">
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </span>
                                            </a>
                                        @else
                                            <a href="{{ route('ProjectShow', $project->slug) }}"
                                                class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">
                                                View work
                                                <span
                                                    class="inline-block transition-all duration-150 group-hover:translate-x-2">
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </span>
                                            </a>
                                        @endif

                                        {{-- <a href="{{ route('ProjectShow', $project->slug) }}"
                                        class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">
                                        View work
                                        <span class="inline-block transition-all duration-150 group-hover:translate-x-2">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </span>
                                    </a> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach



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
            const itemsPerPage = 9;
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

                document.getElementsByClassName('section-space')[0].scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });
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
