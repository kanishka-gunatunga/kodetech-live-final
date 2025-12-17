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
    <!-- Breadcrumb Section Start -->
    <section class="section-breadcrumb"
        style="background-image: url('{{ asset('assets/img/kodetech/sub.jpg') }}'); background-position: bottom center; background-size: cover">
        <!-- Breadcrumb Section Spacer -->
        <div class="breadcrumb-wrapper" style="background-color: transparent !important">
            <!-- Section Container -->
            <div class="container-default">
                <div class="breadcrumb-block">
                    <h1 class="breadcrumb-title">{{ $projects->project_name }}</h1>
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

    <!-- Portfolio Section Start -->
    <section class="section-portfolio">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Portfolio Details Area -->
                <div class="mx-auto max-w-[1076px] content-div">

                    <div class="flex flex-col md:flex-row md:items-start gap-8">
                        <!-- Service main Image (50%) -->
                        <div class="md:w-1/2 w-full">
                            <img src="{{ asset('storage/' . $projects->project_image) }}"
                                alt="{{ $projects->project_name }}" class="mb-10 h-auto w-full rounded-[10px]" />
                        </div>
                        <!-- Service Rich Text (50%) -->
                        <div class="md:w-1/2 w-full">
                            <div class="rich-text">
                                <h5>Project overview</h5>
                                {{ $projects->project_overview }}
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Main Image -->
                    {{-- <img src="{{ asset('assets/img/th-1/portfolio-main-img.jpg') }}" alt="portfolio-main-img" width="1076" height="600" class="h-auto w-full rounded-[10px]" /> --}}

                    <!-- Portfolio Main Image -->

                    <!-- Portfolio Info List -->
                    <div class="project-details-list-row">
                        <ul class="mb-[60px] mt-[30px] grid grid-cols-2 lg:grid-cols-4 justify-between gap-4 project-details-list">

                            <li class="flex items-center max-w-2 gap-3">
                                <div>
                                    <svg width="39" height="39" viewBox="0 0 39 39" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="19.1994" cy="19.1994" r="19.1994" fill="#EF0A0A" />
                                        <path
                                            d="M22.9052 19.4892C23.8214 18.7684 24.4902 17.7799 24.8184 16.6612C25.1467 15.5426 25.1181 14.3495 24.7367 13.2478C24.3553 12.1462 23.64 11.1908 22.6903 10.5146C21.7406 9.83846 20.6038 9.4751 19.438 9.4751C18.2722 9.4751 17.1354 9.83846 16.1857 10.5146C15.2361 11.1908 14.5208 12.1462 14.1393 13.2478C13.7579 14.3495 13.7294 15.5426 14.0576 16.6612C14.3859 17.7799 15.0546 18.7684 15.9709 19.4892C14.4009 20.1182 13.031 21.1614 12.0073 22.5077C10.9836 23.854 10.3445 25.4528 10.158 27.1338C10.1445 27.2565 10.1553 27.3807 10.1898 27.4993C10.2243 27.6178 10.2818 27.7284 10.359 27.8247C10.515 28.0193 10.7419 28.1439 10.9897 28.1711C11.2376 28.1984 11.4861 28.1261 11.6807 27.9701C11.8752 27.8141 11.9998 27.5873 12.0271 27.3394C12.2323 25.5125 13.1034 23.8253 14.4739 22.6001C15.8445 21.3749 17.6184 20.6976 19.4567 20.6976C21.2951 20.6976 23.069 21.3749 24.4395 22.6001C25.81 23.8253 26.6811 25.5125 26.8863 27.3394C26.9118 27.569 27.0213 27.7811 27.1939 27.9347C27.3665 28.0883 27.5899 28.1725 27.8209 28.1711H27.9237C28.1687 28.143 28.3926 28.0191 28.5466 27.8265C28.7007 27.634 28.7724 27.3883 28.7461 27.1431C28.5587 25.4574 27.9161 23.8545 26.8871 22.5061C25.8582 21.1578 24.4817 20.1149 22.9052 19.4892ZM19.438 18.8257C18.6987 18.8257 17.9759 18.6064 17.3612 18.1957C16.7465 17.7849 16.2673 17.2011 15.9844 16.518C15.7015 15.835 15.6274 15.0834 15.7717 14.3582C15.9159 13.6331 16.2719 12.967 16.7947 12.4442C17.3175 11.9214 17.9836 11.5654 18.7087 11.4212C19.4339 11.2769 20.1855 11.3509 20.8686 11.6339C21.5516 11.9168 22.1354 12.3959 22.5462 13.0107C22.957 13.6254 23.1762 14.3482 23.1762 15.0875C23.1762 16.0789 22.7824 17.0298 22.0813 17.7308C21.3803 18.4318 20.4294 18.8257 19.438 18.8257Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div class="d-flex flex-column justify-content-between project-heading-row">
                                    <p class=" block project-detail-item-1 font-bold text-ColorBlack">Client:</p>
                                    <p class="text-ColorBlack/80 project-detail-item-2">{{ $projects->client_name }}</p>
                                </div>
                            </li>
                            <li class="flex items-center max-w-2 gap-3">
                                <div>
                                    <svg width="39" height="39" viewBox="0 0 39 39" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="19.5978" cy="19.1994" r="19.1994" fill="#EF0A0A" />
                                        <path
                                            d="M13.8984 18L19.3984 9L24.8984 18H13.8984ZM24.8984 29C23.6484 29 22.5861 28.5627 21.7114 27.688C20.8368 26.8133 20.3991 25.7507 20.3984 24.5C20.3978 23.2493 20.8354 22.187 21.7114 21.313C22.5874 20.439 23.6498 20.0013 24.8984 20C26.1471 19.9987 27.2098 20.4363 28.0864 21.313C28.9631 22.1897 29.4004 23.252 29.3984 24.5C29.3964 25.748 28.9591 26.8107 28.0864 27.688C27.2138 28.5653 26.1511 29.0027 24.8984 29ZM10.3984 28.5V20.5H18.3984V28.5H10.3984ZM24.8984 27C25.5984 27 26.1901 26.7583 26.6734 26.275C27.1568 25.7917 27.3984 25.2 27.3984 24.5C27.3984 23.8 27.1568 23.2083 26.6734 22.725C26.1901 22.2417 25.5984 22 24.8984 22C24.1984 22 23.6068 22.2417 23.1234 22.725C22.6401 23.2083 22.3984 23.8 22.3984 24.5C22.3984 25.2 22.6401 25.7917 23.1234 26.275C23.6068 26.7583 24.1984 27 24.8984 27ZM12.3984 26.5H16.3984V22.5H12.3984V26.5ZM17.4484 16H21.3484L19.3984 12.85L17.4484 16Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div class="d-flex flex-column justify-content-between project-heading-row">
                                    <!--<p-->
                                    <!--class="mb-[5px] block project-detail-item-1 font-bold leading-[1.4] text-ColorBlack ">Category:</p>-->
                                    <p
                                    class="block project-detail-item-1 font-bold text-ColorBlack ">Category:</p>
                                    <p class="text-ColorBlack/80 project-detail-item-2">{{ $projects->category }}</p>
                                </div>
                            </li>

                            <li class="flex items-center max-w-2 gap-3">
                                <div>
                                    <svg width="40" height="39" viewBox="0 0 40 39" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="19.9972" cy="19.1994" r="19.1994" fill="#EF0A0A" />
                                        <path
                                            d="M19.7979 9C25.3209 9 29.7979 13.477 29.7979 19C29.7979 24.523 25.3209 29 19.7979 29C14.2749 29 9.79785 24.523 9.79785 19C9.79785 13.477 14.2749 9 19.7979 9ZM19.7979 11C17.6761 11 15.6413 11.8429 14.141 13.3431C12.6407 14.8434 11.7979 16.8783 11.7979 19C11.7979 21.1217 12.6407 23.1566 14.141 24.6569C15.6413 26.1571 17.6761 27 19.7979 27C21.9196 27 23.9544 26.1571 25.4547 24.6569C26.955 23.1566 27.7979 21.1217 27.7979 19C27.7979 16.8783 26.955 14.8434 25.4547 13.3431C23.9544 11.8429 21.9196 11 19.7979 11ZM19.7979 13C20.0428 13 20.2792 13.09 20.4622 13.2527C20.6453 13.4155 20.7622 13.6397 20.7909 13.883L20.7979 14V18.586L23.5049 21.293C23.6842 21.473 23.7883 21.7144 23.7961 21.9684C23.8038 22.2223 23.7146 22.4697 23.5466 22.6603C23.3786 22.8508 23.1443 22.9703 22.8914 22.9944C22.6385 23.0185 22.3858 22.9454 22.1849 22.79L22.0909 22.707L19.0909 19.707C18.9354 19.5514 18.8356 19.349 18.8069 19.131L18.7979 19V14C18.7979 13.7348 18.9032 13.4804 19.0907 13.2929C19.2783 13.1054 19.5326 13 19.7979 13Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div class="d-flex flex-column justify-content-between project-heading-row">
                                    <p
                                        class="block project-detail-item-1 font-bold text-ColorBlack">Duration:</p>
                                    <p class="text-ColorBlack/80 project-detail-item-2">{{ $projects->duration }}</p>
                                </div>
                            </li>
                            <li class="flex items-center max-w-2 gap-3">
                                <div>
                                    <svg width="39" height="39" viewBox="0 0 39 39" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="19.3957" cy="19.1994" r="19.1994" fill="#EF0A0A" />
                                        <path
                                            d="M17.5262 17.5258C18.2821 16.7699 19.2997 16.3335 20.3684 16.3068C21.4371 16.2802 22.4752 16.6653 23.2679 17.3825L23.4187 17.5258L25.7754 19.8833C26.5429 20.6522 26.9798 21.6905 26.9928 22.7768C27.0059 23.8631 26.5942 24.9116 25.8454 25.6988C25.0966 26.4859 24.07 26.9495 22.9844 26.9907C21.8987 27.0318 20.84 26.6473 20.0337 25.9192L19.8837 25.7758L18.1154 24.0075C17.9659 23.8575 17.8791 23.6563 17.8727 23.4447C17.8662 23.233 17.9406 23.0269 18.0806 22.8681C18.2206 22.7093 18.4158 22.6097 18.6266 22.5897C18.8374 22.5696 19.0479 22.6305 19.2154 22.76L19.2937 22.8292L21.062 24.5975C21.5204 25.0586 22.1404 25.3229 22.7905 25.3345C23.4405 25.346 24.0695 25.1039 24.544 24.6594C25.0185 24.2149 25.3012 23.6031 25.3321 22.9537C25.363 22.3043 25.1397 21.6683 24.7095 21.1808L24.597 21.0617L22.2404 18.705C22.0082 18.4728 21.7326 18.2886 21.4293 18.1629C21.1259 18.0373 20.8008 17.9726 20.4725 17.9726C20.1441 17.9726 19.819 18.0373 19.5157 18.1629C19.2123 18.2886 18.9367 18.4728 18.7045 18.705C18.5482 18.8612 18.3361 18.949 18.1151 18.9489C17.894 18.9488 17.682 18.8609 17.5258 18.7046C17.3695 18.5482 17.2818 18.3362 17.2819 18.1151C17.2819 17.894 17.3698 17.6821 17.5262 17.5258ZM12.2229 12.2225C12.9788 11.4666 13.9964 11.0302 15.0651 11.0035C16.1338 10.9768 17.1718 11.3619 17.9645 12.0792L18.1154 12.2225L19.8829 13.9917C20.0323 14.1416 20.1191 14.3428 20.1256 14.5545C20.132 14.7661 20.0577 14.9722 19.9177 15.131C19.7776 15.2899 19.5824 15.3894 19.3716 15.4095C19.1609 15.4296 18.9504 15.3687 18.7829 15.2392L18.7045 15.17L16.937 13.4025C16.4778 12.9463 15.8596 12.686 15.2124 12.6763C14.5652 12.6666 13.9395 12.9084 13.4668 13.3506C12.9942 13.7929 12.7116 14.4013 12.6784 15.0477C12.6451 15.6941 12.8639 16.3282 13.2887 16.8167L13.4012 16.9367L15.7587 19.2942C16.2275 19.7628 16.8633 20.0261 17.5262 20.0261C18.1891 20.0261 18.8249 19.7628 19.2937 19.2942C19.3711 19.2167 19.4629 19.1553 19.564 19.1134C19.6652 19.0715 19.7735 19.0499 19.883 19.0498C19.9925 19.0498 20.1008 19.0713 20.202 19.1131C20.3031 19.155 20.395 19.2164 20.4725 19.2937C20.5499 19.3711 20.6113 19.463 20.6532 19.5641C20.6952 19.6652 20.7168 19.7736 20.7168 19.883C20.7168 19.9925 20.6953 20.1009 20.6535 20.202C20.6116 20.3032 20.5502 20.3951 20.4729 20.4725C19.7169 21.2284 18.6994 21.6648 17.6307 21.6915C16.562 21.7182 15.5239 21.333 14.7312 20.6158L14.5795 20.4725L12.2229 18.115C11.4417 17.3336 11.0029 16.274 11.0029 15.1692C11.0029 14.0643 11.4417 13.0038 12.2229 12.2225Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div class="d-flex flex-column justify-content-between project-heading-row">
                                    <p class="block project-detail-item-1 font-bold">Website Link:</p>
                                    <p class="text-ColorBlack/80 project-detail-item-2">
                                        <a href="https://{{ $projects->website_link }}" target="_blank" rel="noopener">
                                            {{ $projects->website_link }}
                                        </a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Portfolio Info List -->

                    <!-- Portfolio Rich Text -->
                    <!--<div class="rich-text">-->
                    <!--    <h5>Project overview</h5>-->
                    <!--    <p>-->

                    <!--    </p>-->
                    <!--    <div>-->
                    <!--        {!! $projects->project_description !!}-->
                    <!--    </div>-->

                        {{-- <h5>What we did for this project</h5>
                    <p>
                        A user can engage with a product or service by using a user
                        interface (UI), which is essentially a collection of
                        screens, pages, visual elements (such as buttons and icons).
                        The phrase “User Experience” refers to how a person reacts
                        to each component.
                    </p>
                    <ol class="list-inside list-decimal">
                        <li>Strategic Discovery</li>
                        <li>Web application redesign and optimization</li>
                        <li>Mobile application redesign and optimization</li>
                        <li>Landing page redesign and optimization</li>
                        <li>Component-based UI-Kit</li>
                        <li>Product design sprints to explore new functionality</li>
                    </ol>

                    <h5>Project results</h5>
                    <p>
                        The UI/UX design of software and applications helps improve
                        customer experience and satisfaction. This ultimately helps
                        increase the number of people using your product. If users
                        encounter roadblocks when trying to complete actions on your
                        product, they are very likely to drop off.
                    </p>
                    <p>
                        Creating a brand with clear and targeted messaging was
                        crucial in increasing conversions. Together with the Webflow
                        team, we have compiled a new product page structure using
                        the App model and packed that in an excellent cover 🙂
                    </p> --}}
                    </div>
                    <!-- Portfolio Rich Text -->
                </div>
                <!-- Portfolio Details Area -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </section>
@endsection
