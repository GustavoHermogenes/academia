@extends('layout.layout')

@section('title', 'Modalidades')

@section('conteudo')

    <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="img/breadcrumb-bg.png">
        <!-- bg animated image/ -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Modalidades</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">INÍCIO</a></li>
                            <li class="active">Modalidades</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--==============================
    Service Area 02
    ==============================-->
    <div class="service-details-area space-top space-extra-bottom overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="service-page-single">
                        <div class="page-img mb-50">
                            <img src="img/service-details1-1.png" alt="img">
                        </div>
                        <div class="page-content">
                            <h2 class="page-title">Champion Boxer Training</h2>
                            <p class="mb-30">Boxers engage in intense cardiovascular exercises to build endurance and stamina. This includes activities like running, skipping rope, and high-intensity interval training (HIIT) to improve overall cardiovascular fitness. Strength and Power Training: Boxers focus on building functional strength and explosive power to deliver powerful punches. This involves weightlifting exercises, plyometrics, and bodyweight exercises such as push-ups, pull-ups, squats, and core exercises.</p>
                            <p class="mb-50">During the CrossFit Boxing Challenge, you'll engage in a dynamic workout regimen that incorporates elements of strength training, cardiovascular conditioning, agility, and coordination. Under the guidance of experienced coaches, you'll learn proper boxing techniques, footwork, and defensive maneuvers, all while pushing yourself through a series of intense CrossFit workouts. Each session will challenge your physical and mental resilience, building not only strength but also enhancing your endurance and mental toughness.</p>
                            <h3 class="page-subtitle mb-0">Why Choose Us?</h3>
                            <p>There are several reasons why you should choose us:</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="service-wrap">
                                        <h6><i class="far fa-check me-2"></i> Diverse Range of Services:</h6>
                                        <p>We offer a wide range of fitness services and programs to cater to different fitness levels, interests, and goals. </p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="service-wrap">
                                        <h6><i class="far fa-check me-2"></i> Expertise and Experience:</h6>
                                        <p>We have a team of highly qualified and experienced fitness professionals who are dedicated to helping you...</p>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-25 mb-50">We offer a wide range of fitness services and programs to cater to different fitness levels, interests, and goals. Whether you're looking for personal training, group fitness classes, specialized workouts, or nutritional guidance, we have options to suit your needs.</p>
                            <h3 class="page-subtitle mb-0">Why Choose Us?</h3>
                            <div class="service-page-list checklist mb-50" data-bg-src="img/service-details1-2.png">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Design workout program.</li>
                                    <li><i class="far fa-check-circle"></i>Progressive overload.</li>
                                    <li><i class="far fa-check-circle"></i>Focus on proper form.</li>
                                    <li><i class="far fa-check-circle"></i>Be consistent with training.</li>
                                    <li><i class="far fa-check-circle"></i>Adjust calorie intake as needed.</li>
                                </ul>
                            </div>
                            <div class="accordion-area mb-30 accordion" id="faqAccordion">

                                <div class="accordion-card style2 active">
                                    <div class="accordion-header" id="collapse-item-1">
                                        <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1"> What are your gym's operating hours?</button>
                                    </div>
                                    <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">Progressively communicate flexible human capital with best-of-breed schemas. Completely develop 2.0 infrastructures via bleeding-edge opportunities. Completely initiate world-class leadership skills via fully tested applications. </p>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-card style2">
                                    <div class="accordion-header" id="collapse-item-2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2"> What amenities and facilities does your gym offer?</button>
                                    </div>
                                    <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">Progressively communicate flexible human capital with best-of-breed schemas. Completely develop 2.0 infrastructures via bleeding-edge opportunities. Completely initiate world-class leadership skills via fully tested applications. </p>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-card style2">
                                    <div class="accordion-header" id="collapse-item-3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3"> Do you provide personal training services?</button>
                                    </div>
                                    <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">Progressively communicate flexible human capital with best-of-breed schemas. Completely develop 2.0 infrastructures via bleeding-edge opportunities. Completely initiate world-class leadership skills via fully tested applications. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_categories">
                            <h3 class="widget_title">All Services</h3>
                            <ul>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Gym Fitness Class</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Power Lifting Class</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Body Building</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Boxing Class</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Meditation Class</a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget_schedule">
                            <h3 class="widget_title">Working Hours</h3>
                            <ul>
                                <li>
                                    <i class="far fa-clock"></i>
                                    Monday – Friday 1.00 – 2:00 pm
                                </li>
                                <li>
                                    <i class="far fa-clock"></i>
                                    Saturday 8.00 – 12:00 pm
                                </li>
                                <li class="unavailable">
                                    <i class="far fa-clock"></i>
                                    Sunday closed
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Cta Area
    ==============================-->
    <section class="cta-area space" data-bg-src="img/cta-bg1.png">
        <div class="container">
            <div class="row justify-content-lg-end justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="cta-wrap text-center text-lg-start">
                        <div class="title-area">
                            <span class="sub-title">Make An Appointment</span>
                            <h2 class="sec-title text-white">Get a Free Consultancy
                                Right Now Here!</h2>
                        </div>
                        <div class="btn-wrap mt-40">
                            <a href="about.html" class="btn style2">Make Appointment</a>
                            <div class="about-info-wrap style3">
                                <div class="icon"><i class="fas fa-phone-volume"></i></div>
                                <div class="details">
                                    <p class="about-info-title text-white">Need Help?</p>
                                    <a class="about-info-link" href="tel:+25825692582">(+258) 2569 2582</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <!--==============================
            Footer Area
        ==============================-->
        <div class="footer-wrapper footer-layout1" data-bg-src="img/footer-1-bg.png">
            <div class="container">
                <div class="contact-card">
                    <div class="info-card">
                        <div class="info-card_icon">
                            <i class="fas fa-location-dot"></i>
                        </div>
                        <div class="info-card_content">
                            <p class="info-card_text">Localização</p>
                            <a href="https://www.google.com/maps" class="info-card_link">Marechal Tito, 1500</a>
                        </div>
                    </div>
                    <div class="info-card">
                        <div class="info-card_icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-card_content">
                            <p class="info-card_text">endereço de email</p>
                            <a href="mailto:health@Fitmas.com" class="info-card_link">contato@VivaBem.com</a>
                        </div>
                    </div>
                    <div class="info-card">
                        <div class="info-card_icon">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="info-card_content">
                            <p class="info-card_text">Telefone</p>
                            <a href="tel:+18925382145" class="info-card_link">(11) 99999-9999</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>


@endsection
