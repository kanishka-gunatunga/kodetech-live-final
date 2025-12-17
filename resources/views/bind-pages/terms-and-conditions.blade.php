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
    <section class="section-breadcrumb"
        style="background-image: url('{{ asset('assets/img/kodetech/sub.jpg') }}'); background-position: bottom center; background-size: cover">

        <div class="breadcrumb-wrapper" style="background-color: transparent !important">
            <!-- Section Container -->
            <div class="container-default">
                <div class="breadcrumb-block">
                    <h1 class="breadcrumb-title">Terms & Conditions</h1>

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
                <div class="mx-auto max-w-[1080px]">

                    <!-- Service Rich Text -->
                    <div class="rich-text">

                        <h4>Introduction</h4><br>
                        <p>
                            These Website Standard Terms and Conditions written on this webpage shall manage your use of our
                            website, Kodetech accessible at <a href="https://kodetech.co/">www.kodetech.co</a>
                        </p>
                        <p>
                            These Terms will be applied fully and affect to your use of this Website. By using this Website,
                            you agreed to accept all terms and conditions written in here. You must not use this Website if
                            you disagree with any of these Website Standard Terms and Conditions.
                        </p>

                        <h4>Intellectual Property Rights</h4><br>
                        <p>
                            Other than the content you own, under these Terms, Kodetech (Pvt) LTD. and/or its licensors own
                            all the intellectual property rights and materials contained in this Website.
                        </p>
                        <p>
                            You are granted limited license only for purposes of viewing the material contained on this
                            Website.
                        </p>

                        <h4>Restrictions</h4><br>
                        <p>You are specifically restricted from all of the following:</p>
                        <ul>
                            <li>Publishing any Website material in any other media;</li>
                            <li>Selling, sublicensing and/or otherwise commercializing any Website material;</li>
                            <li>Publicly performing and/or showing any Website material;</li>
                            <li>Using this Website in any way that is or may be damaging to this Website;</li>
                            <li>Using this Website in any way that impacts user access to this Website;</li>
                            <li>Using this Website contrary to applicable laws and regulations, or in any way may cause harm
                                to the Website, or to any person or business entity;</li>
                            <li>Engaging in any data mining, data harvesting, data extracting or any other similar activity
                                in relation to this Website;</li>
                            <li>Using this Website to engage in any advertising or marketing.</li>
                        </ul>
                        <p>
                            Certain areas of this Website are restricted from being access by you and Kodetech (Pvt) LTD.
                            may further restrict access by you to any areas of this Website, at any time, in absolute
                            discretion. Any user ID and password you may have for this Website are confidential and you must
                            maintain confidentiality as well.
                        </p>

                        <h4>Your Content</h4><br>
                        <p>
                            In these Website Standard Terms and Conditions, "Your Content" shall mean any audio, video text,
                            images or other material you choose to display on this Website. By displaying Your Content, you
                            grant Kodetech (Pvt) LTD. a non-exclusive, worldwide irrevocable, sub licensable license to use,
                            reproduce, adapt, publish, translate and distribute it in any and all media.
                        </p>
                        <p>
                            Your Content must be your own and must not be invading any third-party’s rights. Kodetech (Pvt)
                            LTD. reserves the right to remove any of Your Content from this Website at any time without
                            notice.
                        </p>

                        <h4>Your Privacy</h4><br>
                        <p>Please read Privacy Policy.</p>

                        <h4>No warranties</h4><br>
                        <p>
                            This Website is provided "as is," with all faults, and Kodetech (Pvt) Ltd. express no
                            representations or warranties, of any kind related to this Website or the materials contained on
                            this Website. Also, nothing contained on this Website shall be interpreted as advising you.
                        </p>

                        <h4>Limitation of liability</h4><br>
                        <p>
                            In no event shall Kodetechs (Pvt) LTD. nor any of its officers, directors and employees, shall
                            be held liable for anything arising out of or in any way connected with your use of this Website
                            whether such liability is under contract. Kodetech (Pvt) LTD. including its officers, directors
                            and employees shall not be held liable for any indirect, consequential or special liability
                            arising out of or in any way related to your use of this Website.
                        </p>

                        <h4>Indemnification</h4><br>
                        <p>
                            You hereby indemnify to the fullest extent Kodetech (Pvt) LTD. from and against any and/or all
                            liabilities, costs, demands, causes of action, damages and expenses arising in any way related
                            to your breach of any of the provisions of these Terms.
                        </p>

                        <h4>Severability</h4><br>
                        <p>
                            If any provision of these Terms is found to be invalid under any applicable law, such provisions
                            shall be deleted without affecting the remaining provisions herein.
                        </p>

                        <h4>Variation of Terms</h4><br>
                        <p>
                            Kodetech (Pvt) LTD is permitted to revise these Terms at any time as it sees fit, and by using
                            this Website you are expected to review these Terms on a regular basis.
                        </p>

                        <h4>Assignment</h4><br>
                        <p>
                            The Kodetech (Pvt) LTD is allowed to assign, transfer, and subcontract its rights and/or
                            obligations under these Terms without any notification. However, you are not allowed to assign,
                            transfer, or subcontract any of your rights and/or obligations under these Terms.
                        </p>

                        <h4>Entire Agreement</h4><br>
                        <p>
                            These Terms constitute the entire agreement between Kodetech (Pvt) LTD and you in relation to
                            your use of this Website, and supersede all prior agreements and understandings.
                        </p>

                        <h4>Governing Law & Jurisdiction</h4><br>
                        <p>
                            These Terms will be governed by and interpreted in accordance with the laws of the State of lk,
                            and you submit to the non-exclusive jurisdiction of the state and federal courts located in lk
                            for the resolution of any disputes.
                        </p>

                    </div>
                </div>

            </div>


    </section>
@endsection
