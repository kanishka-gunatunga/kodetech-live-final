<?php
use App\Models\Project;
$projects = Project::all();
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
<style>
    @media (min-width: 992px) {
        .img-width {
            width: 75% !important
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
                <h1 class="breadcrumb-title">Tech Stack</h1>
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

<!-- Content Section Start -->
<section class="section-content">
    <div class="relative z-10">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <div class="flex flex-col gap-y-20 lg:gap-y-[100px] xl:gap-y-[120px]">
                    <!-- Content Area Single -->
                    <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-20 xl:gap-20">
                        <!-- Content Block Left -->
                        <div class="jos order-2 lg:order-1" data-jos_animation="fade-right">
                            <!-- Section Wrapper -->
                            <div>
                                <!-- Section Block -->
                                <div class="mb-5">
                                    <h2 class="font-PublicSans text-4xl font-bold leading-[1.14] text-[#121212] lg:text-left lg:text-5xl xl:text-[56px]">
                                        Kode Tech Development Process
                                    </h2>
                                </div>
                                <!-- Section Block -->
                            </div>
                            <!-- Section Wrapper -->
                            <p class="mb-5">
                                At Kode Tech, our development process is powered by the Agile methodology, ensuring flexibility, collaboration, and continuous improvement. We begin by thoroughly understanding your unique business needs, breaking projects into manageable sprints, and prioritizing regular feedback. This iterative approach allows us to deliver high-quality, scalable solutions that align with your goals while adapting seamlessly to changing requirements.
                            </p>
                            {{-- <hr class="mb-5" /> --}}
                            <p>
                                Our dedicated team works closely with clients throughout every stage—planning, development, testing, and deployment. With frequent updates, transparent communication, and a commitment to excellence, we ensure every project is delivered on time and to the highest standard. By integrating innovation with agility, we craft future-ready solutions that are scalable, secure, and designed to evolve with your business. Whether creating cutting-edge web applications or AI-driven tools, we empower businesses to stay ahead in today’s fast-paced digital world. At Kode Tech, your success is our priority.
                            </p>
                        </div>
                        <!-- Content Block Left -->
                        <!-- Content Block Right -->
                        <div class="jos relative order-1 lg:order-2" data-jos_animation="fade-left">
                            <!-- Content Image -->
                            <img src="{{ asset('assets/img/kodetech/Group 1000003459.png') }}" alt="content-img-1" width="523" height="450" class="h-auto w-full  rounded-[10px] img-width" />
                        </div>
                        <!-- Content Block Right -->
                    </div>
                    <!-- Content Area Single -->
                </div>
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->

        <!-- Content Shape -->
        {{-- <div class="absolute hidden xl:inline-block right-[60px] top-1/3 -z-10 rotate-[29deg]">
            <img src="{{ asset('assets/img/elements/home-8-dot-shape.svg') }}" alt="home-8-dot-shape" width="126" height="275" />
    </div> --}}
    </div>
</section>
<!-- Content Section End -->

<style>
    .hiddentab {
        display: none;
    }

</style>
<!-- Partners Section Start -->
{{-- <div class="section-brand bg-[#1B1C1D] black-section">
    <div class="jos">
        <!-- Section Space -->
        <div class="py-[60px] md:py-20 lg:py-[100px]">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="mx-auto max-w-[636px]">
                        <h2 class="mb-5 text-center text-white">
                           Our Powerful Tech Stack
                        </h2>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Tech Stack Category Slider -->
                <div class="swiper techStack-category-slider">
                    <div class="swiper-button-prev category-prev"></div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" data-category="web">
                            <div class="tech-item textTechStack">Web Development</div>
                        </div>
                        <div class="swiper-slide" data-category="software">
                            <div class="tech-item textTechStack">Software Development</div>
                        </div>
                        <div class="swiper-slide" data-category="mobile">
                            <div class="tech-item textTechStack">Mobile Development</div>
                        </div>
                        <div class="swiper-slide" data-category="ai">
                            <div class="tech-item textTechStack">AI Development</div>
                        </div>
                        <div class="swiper-slide" data-category="game">
                            <div class="tech-item textTechStack">Game Development</div>
                        </div>
                        <div class="swiper-slide" data-category="metaverse">
                            <div class="tech-item textTechStack">Metaverse Development</div>
                        </div>
                    </div>
                    <div class="swiper-button-next category-next"></div>
                </div>


                <div class="swiper techStack-image-slider" data-category="web">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Web Tech 1" />
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Web Tech 2" />
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Web Tech 3" />
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Web Tech 4" />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="swiper techStack-image-slider" data-category="game">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Game Tech 1" />
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Game Tech 2" />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="swiper techStack-image-slider " data-category="mobile">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Web Tech 1" />
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Web Tech 2" />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="swiper techStack-image-slider " data-category="ai">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Game Tech 1" />
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Game Tech 2" />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="swiper techStack-image-slider " data-category="software">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Web Tech 1" />
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Web Tech 2" />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="swiper techStack-image-slider" data-category="metaverse">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Game Tech 1" />
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Game Tech 2" />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="section-brand bg-[#1B1C1D] black-section">
    <div class="jos">
        <!-- Section Space -->
        <div class="py-[60px] md:py-20 lg:py-[100px]">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="mx-auto max-w-[636px]">
                        <h2 class="mb-5 text-center text-white">
                            Our Powerful Tech Stack
                        </h2>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Tech Stack Category Slider -->
                {{-- <div class="swiper techStack-new-category-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" data-category="ai">
                            <div class="tech-item textTechStack">
                                <p>AI Development</p>
                                <div class="grid grid-cols-1 gap-4 p-4 md:grid-cols-2 lg:grid-cols-4 lg:grid-rows-2">
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/ai/Group 1000003458.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/ai/Group 1000003459.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/ai/Group 1000003460.png" alt="Web Tech 1" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-category="frontend">
                            <div class="tech-item textTechStack">
                                <p>Frontend Development</p>
                                <div class="grid grid-cols-1 gap-4 p-4 md:grid-cols-2 lg:grid-cols-4 lg:grid-rows-2">
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/front-end/Group 1000003336.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/front-end/Group 1000003341.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/front-end/Group 1000003343.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/front-end/Group 1000003359.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/front-end/Group 1000003379.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/front-end/Group 1000003380.png" alt="Web Tech 1" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-category="backend">
                            <div class="tech-item textTechStack">
                                <p>Backend Development</p>
                               <div class="grid grid-cols-1 gap-4 p-4 md:grid-cols-2 lg:grid-cols-4 lg:grid-rows-2">
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/backend/Group 1000003353.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/backend/Group 1000003381.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/backend/Group 1000003382.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/backend/Group 1000003383.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/backend/Group 1000003384.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/backend/Group 1000003385.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/backend/Group 1000003386.png" alt="Web Tech 1" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-category="mobile">
                            <div class="tech-item textTechStack">
                                <p>Mobile Development</p>
                                <div class="grid grid-cols-1 gap-4 p-4 md:grid-cols-2 lg:grid-cols-4 lg:grid-rows-2">
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/mobile/Group 1000003375.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/mobile/Group 1000003376.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/mobile/Group 1000003377.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/mobile/Group 1000003378.png" alt="Web Tech 1" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-category="database">
                            <div class="tech-item textTechStack">
                                <p>Database</p>
                                <div class="grid grid-cols-1 gap-4 p-4 md:grid-cols-2 lg:grid-cols-4 lg:grid-rows-2">
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/database/Group 1000003368.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/database/Group 1000003372.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/database/Group 1000003373.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/database/Group 1000003374.png" alt="Web Tech 1" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-category="test">
                            <div class="tech-item textTechStack">
                                <p>Testing automation</p>
                                <div class="grid grid-cols-1 gap-4 p-4 md:grid-cols-2 lg:grid-cols-4 lg:grid-rows-2">
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/testing/Group 1000003394.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/testing/Group 1000003395.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/testing/Group 1000003396.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/testing/Group 1000003397.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/testing/Group 1000003398.png" alt="Web Tech 1" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-category="cloud">
                            <div class="tech-item textTechStack">
                                <p>Cloud</p>
                                <div class="grid grid-cols-1 gap-4 p-4 md:grid-cols-2 lg:grid-cols-4 lg:grid-rows-2">
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/cloud/Group 1000003407.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/cloud/Group 1000003408.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/cloud/Group 1000003409.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/cloud/Group 1000003410.png" alt="Web Tech 1" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-category="design">
                            <div class="tech-item textTechStack">
                                <p>Design</p>
                                <div class="grid grid-cols-1 gap-4 p-4 md:grid-cols-2 lg:grid-cols-4 lg:grid-rows-2">
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/design/Group 1000003403.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/design/Group 1000003404.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/design/Group 1000003405.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/design/Group 1000003406.png" alt="Web Tech 1" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-category="ide">
                            <div class="tech-item textTechStack">
                                <p>IDE</p>
                                <div class="grid grid-cols-1 gap-4 p-4 md:grid-cols-2 lg:grid-cols-4 lg:grid-rows-2">
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/ide/Group 1000003413.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/ide/Group 1000003432.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/ide/Group 1000003433.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/ide/Group 1000003434.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/ide/Group 1000003435.png" alt="Web Tech 1" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-category="game">
                            <div class="tech-item textTechStack">
                                <p>Game Development</p>
                                <div class="grid grid-cols-1 gap-4 p-4 md:grid-cols-2 lg:grid-cols-4 lg:grid-rows-2">
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/game/Group 1000003428.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/game/Group 1000003429.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/game/Group 1000003430.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/game/Group 1000003431.png" alt="Web Tech 1" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-category="ar">
                            <div class="tech-item textTechStack">
                                <p>AR/VR/3D</p>
                                <div class="grid grid-cols-1 gap-4 p-4 md:grid-cols-2 lg:grid-cols-4 lg:grid-rows-2">
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/ar/Group 1000003439.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/ar/Group 1000003440.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/ar/Group 1000003441.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/ar/Group 1000003442.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/ar/Group 1000003443.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/ar/Group 1000003444.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/ar/Group 1000003445.png" alt="Web Tech 1" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-category="cms">
                            <div class="tech-item textTechStack">
                                <p>CMS</p>
                                <div class="grid grid-cols-1 gap-4 p-4 md:grid-cols-2 lg:grid-cols-4 lg:grid-rows-2">
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/cms/Group 1000003451.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/cms/Group 1000003452.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/cms/Group 1000003453.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/cms/Group 1000003454.png" alt="Web Tech 1" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-category="other">
                            <div class="tech-item textTechStack">
                                <p>Other</p>
                                <div class="grid grid-cols-1 gap-4 p-4 md:grid-cols-2 lg:grid-cols-4 lg:grid-rows-2">
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/other/Group 1000003455.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/other/Group 1000003456.png" alt="Web Tech 1" />
                                    </div>
                                    <div class="p-6 text-white rounded-lg">
                                        <img src="assets/img/kodetech/tech-stack/other/Group 1000003457.png" alt="Web Tech 1" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div> --}}
                <style>
                    .grid-container {
                        display: grid;
                        grid-template-columns: repeat(6, 1fr);
                        grid-template-rows: repeat(3, 1fr);
                        gap: 15px;
                    }

                    .grid-item {
                        background-color: transparent;
                        padding: 0px;
                        text-align: center;
                        border-radius: 5px;
                    }

                    .grid-item img {
                        width: 100%;
                        height: auto;
                        object-fit: cover;
                        border-radius: 10px;
                    }

                    @media screen and (max-width: 992px){
                         .grid-item img {
                        border-radius: 0px;
                    }
                      .grid-container {
                        display: grid;
                        grid-template-columns: repeat(3, 1fr);
                        grid-template-rows: repeat(3, 1fr);
                        gap: 15px;
                    }
                    }

                   /* @media (max-width: 480px) {
                        .grid-container {
                             grid-template-columns: repeat(6, 1fr);
                        }
                    }*/

                </style>
                <div class="swiper partners-slider-custom1" style="padding-bottom: 30px;">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <!-- Partner Item -->
                            <div class="jos break-inside-avoid shadow rounded-md">
                                <div class="grid-container">
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/ai/Group 1000003458.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/ai/Group 1000003459.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/ai/Group 1000003460.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/front-end/Group 1000003336.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/front-end/Group 1000003341.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/front-end/Group 1000003343.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/front-end/Group 1000003359.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/front-end/Group 1000003379.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/front-end/Group 1000003380.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/backend/Group 1000003353.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/backend/Group 1000003381.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/backend/Group 1000003382.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/backend/Group 1000003383.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/backend/Group 1000003384.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/backend/Group 1000003385.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/backend/Group 1000003386.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/mobile/Group 1000003375.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/mobile/Group 1000003376.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                </div>
                            </div>
                            <!-- Partner Item -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Partner Item -->
                            <div class="jos break-inside-avoid shadow rounded-md">
                                <div class="grid-container">
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/mobile/Group 1000003377.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/mobile/Group 1000003378.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/database/Group 1000003368.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/database/Group 1000003372.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/database/Group 1000003373.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/database/Group 1000003374.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/testing/Group 1000003394.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/testing/Group 1000003395.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/testing/Group 1000003396.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/testing/Group 1000003397.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/testing/Group 1000003398.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/cloud/Group 1000003407.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/cloud/Group 1000003408.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/cloud/Group 1000003409.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/cloud/Group 1000003410.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/design/Group 1000003403.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/design/Group 1000003404.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/design/Group 1000003405.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                </div>
                            </div>
                            <!-- Partner Item -->
                        </div>

                        <div class="swiper-slide">
                            <!-- Partner Item -->
                            <div class="jos break-inside-avoid shadow rounded-md">
                                <div class="grid-container">
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/design/Group 1000003406.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/ide/Group 1000003413.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/ide/Group 1000003432.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/ide/Group 1000003433.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/ide/Group 1000003434.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/ide/Group 1000003435.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/game/Group 1000003428.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/game/Group 1000003429.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/game/Group 1000003430.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/game/Group 1000003431.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/ar/Group 1000003439.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/ar/Group 1000003440.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/ar/Group 1000003441.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/ar/Group 1000003442.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/ar/Group 1000003443.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/ar/Group 1000003444.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/ar/Group 1000003445.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/cms/Group 1000003451.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                </div>
                            </div>
                            <!-- Partner Item -->
                        </div>

                         <div class="swiper-slide">
                            <!-- Partner Item -->
                            <div class="jos break-inside-avoid shadow rounded-md">
                                <div class="grid-container">
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/cms/Group 1000003452.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/cms/Group 1000003453.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/cms/Group 1000003454.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/other/Group 1000003455.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/other/Group 1000003456.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                    <div class="grid-item">
                                        <img src="{{ asset('assets/img/kodetech/tech-stack/other/Group 1000003457.png') }}" alt="icon-green-star" class="rounded" />
                                    </div>
                                </div>
                            </div>
                            <!-- Partner Item -->
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partners Section End -->

<!-- Portfolio Section Start -->
<section class="section-portfolio">
    <div class="relative z-10 overflow-hidden">
        <!-- Section Space -->
        <div class="section-space" style="background-color: #FDFBF9 !important;">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Wrapper -->
                <div class="jos mb-[60px] flex flex-wrap items-end justify-between gap-8 xl:mb-20">
                    <!-- Section Block -->
                    <div class="max-w-[550px]">
                        <h2 class="color-black">We Create World-class Web Design & Branding</h2>
                    </div>
                    <!-- Section Block -->
                    <a href="{{url('/our-projects')}}" class="btn is-blue is-rounded btn-animation is-large group"><span>View More Works</span></a>
                </div>
                <!-- Section Wrapper -->

                <!-- Portfolio List -->
                <div class="grid gap-8 md:grid-cols-2 lg:gap-10 xl:gap-[60px]">
                    @foreach ($projects->take(2) as $project)
                    <div class="jos" data-jos_delay="0">
                        <div class="group">
                            <div class="overflow-hidden rounded-[10px]">
                                <img src="{{ asset('storage/' . $project->project_image) }}"
                                alt="{{ $project->product_name }}" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                            </div>
                            <div class="mt-6">
                                <div class="mb-5 flex flex-wrap justify-between gap-5 text-ColorBlack lg:flex-nowrap xl:mb-7">
                                    <a href="{{ route('ProjectShow', $project->slug) }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] group-hover:text-ColorBlue xl:text-2xl">{{$project->project_name}}</a>
                                    <a href="#" class="hover:text-ColorBlue">{{$project->category}}</a>
                                </div>
                                <a href="{{ route('ProjectShow', $project->slug) }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View More
                                    <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- Portfolio Item -->
                    
                    <!-- Portfolio Item -->
                    <!-- Portfolio Item -->
                    {{-- <div class="jos" data-jos_delay="0.3">
                        <div class="group">
                            <div class="overflow-hidden rounded-[10px]">
                                <img src="{{ asset('assets/img/kodetech/Rectangle 104.png') }}" alt="portfolio-img-2" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                            </div>
                            <div class="mt-6">
                                <div class="mb-5 flex flex-wrap justify-between gap-5 text-ColorBlack lg:flex-nowrap xl:mb-7">
                                    <a href="{{ url('portfoliodetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] group-hover:text-ColorBlue xl:text-2xl">Website — The future lifestyle platform.</a>
                                    <a href="#" class="hover:text-ColorBlue">Branding</a>
                                </div>
                                <a href="{{ url('portfoliodetails') }}" class="text-base font-bold capitalize leading-[1.5] text-ColorBlue group-hover:text-ColorBlue">View More
                                    <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Portfolio Item -->
                </div>
                <!-- Portfolio List -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->

        <!-- Portfolio Shape - 2 -->
        <!--<div class="absolute right-0 top-0 -z-10">-->
        <!--    <img src="{{ asset('assets/img/elements/portfolio-1-shape-1.svg') }}" alt="portfolio-1-shape-1" width="467" height="609" />-->
        <!--</div>-->
    </div>
</section>
<!-- Portfolio Section End -->

<script>
    document.querySelectorAll('.techstack-button').forEach(function(button) {
        button.addEventListener('click', function() {
            document.querySelectorAll('.techstack-slider').forEach(function(slider) {
                slider.style.display = 'none';
            });

            var techstackClass = this.getAttribute('data-techstack');
            var selectedSlider = document.querySelector('.' + techstackClass);

            selectedSlider.style.display = 'block';

        });
    });

</script>


@endsection
