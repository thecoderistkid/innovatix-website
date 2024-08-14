<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Innovatix Systems Services</title>
        {{-- CSS Libs --}}
            {{-- Core CSS --}}
            <link rel="stylesheet" href="assets/libs/bootstrap5/css/bootstrap.min.css">
            {{-- Google Fonts --}}
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
            {{-- Theming --}}
            <link rel="stylesheet" href="assets/theme/default.css">
            <link rel="stylesheet" href="assets/theme/cursor/cursor.css">
            {{-- libs --}}
            <link rel="stylesheet" href="assets/libs/animate/animate.css">
            <link rel="stylesheet" href="assets/libs/aos/aos.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
            <style>
              
            </style>
        {{-- End of CSS libs --}}
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
    
        <nav class="navbar navbar-expand-lg sticky-top" id="nav">
            <div class="container-fluid" style="align-items: flex-end !important;">
                <a class="navbar-brand fw-bold" href="/">
                    <img src="/images/innovatix-logo.png" style="width: 150px;" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link p-3" href="#home">Home 
                            <div class="cursor"></div>
                        </a>
                        <a class="nav-link p-3" href="#about">About Us</a>
                        <a class="nav-link p-3" href="#services">Services</a>
                        <a class="nav-link p-3" href="#clients">Clients & Partners</a>
                        <a class="nav-link p-3" href="#products">Portfolio</a>
                        <a class="nav-link p-3" href="#careers">Careers</a>
                        <a class="nav-link p-3" href="#contact">Contact Us</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main>
            <section class="hero d-flex justify-content-center align-items-center" id="home">
                <div class="section-border"></div>
                <div class="section-title mt-5">
                    Home
                </div>
                <div class="container">
                    <div class="row mt-5 ">
                        <div class="col-12">
                            <div class="swiper hero-swiper" style="witdth: 100%">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <img src="/images/slide1.svg" data-aos="fade-left" data-aos-delay="100" class="w-100 floating mt-5" alt="">
                                            </div>
                                            <div class="col-lg-6 mb-auto mt-auto" data-aos="fade-left" data-aos-delay="400">
                                                <h1 class="display-5 fw-bold text-body-emphasis" data-aos="fade-left" data-aos-delay="200">
                                                    Transforming ideas into innovations
                                                </h1>
                                                <a href="#about" >
                                                    <button class="btn btn-hover btn-template btn-lg px-4 gap-3 text-sm text-uppercase">
                                                        LEARN MORE
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="row">
                                            <div class="col-lg-6 text-center p-5">
                                                <img src="/images/slide3.svg" class="floating" data-aos="fade-left" data-aos-delay="100" style="width: 100%" alt="">
                                            </div>
                                            <div class="col-lg-6 mt-auto mb-auto" data-aos="fade-left" data-aos-delay="400">
                                                
                                                <h1 class="fw-bolder display-5 text-body-emphasis" data-aos="fade-left" data-aos-delay="200">
                                                    Innovatix Systems Services
                                                </h1>
                                                <h2 class="fw-bold text-gradient ">
                                                    Empowering business with Innovative IT Solutions
                                                </h2>
                                             
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="row">
                                            <div class="col-lg-6 mb-auto mt-auto" 
                                                data-aos="fade-left"
                                                data-aos-delay="400">
                                                <h1 class="display-5 fw-bold text-body-emphasis" data-aos="fade-left" data-aos-delay="200">Where ideas take flight.</h1>
                                                <a href="#about">
                                                    <button type="button" class="btn btn-hover btn-template btn-lg px-4 gap-3 text-sm text-uppercase">LEARN MORE</button>
                                                </a>
                                            </div>
                                            <div class="col-lg-6">
                                                <img src="/images/slide2.svg" class="mt-5 w-100 floating" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
            <section  id="about"  class="bg-gradient-light  d-flex justify-content-center align-items-center">
                <div class="section-border"></div>
                <div class="section-title mt-5">
                    About Us
                </div>
                <div class="px-4 py-5 my-5 container">
                    <div class="row mb-3">
                        <div class="col-xl-5 col-lg-6 mb-auto mt-auto" >
                            <h1 class="fw-bold text-body-emphasis " data-aos="fade-left" data-aos-delay="200">
                                Innovatix Systems Services
                            </h1>
                            <h2 class="fw-bold text-gradient" data-aos="fade-left" data-aos-delay="250">
                                The heart of Innovation
                            </h2>
                            <div data-aos="fade-up" class="text-justify"   data-aos-delay="200">
                                <p>
                                    At Innovatix, we're more than just an IT company –  
                                    <b class="text-dark"> we're your strategic partner </b> harnessing the power of
                                    technology to drive innovation and transformation. With a
                                    relentless focus on excellence and a passion for pushing
                                    the boundaries of what's possible, we are dedicated to empowering businesses to thrive in the digital age.
                                    We are a dynamic team of forward-thinkers, problem
                                    solvers, and technologists, united by a common mission:
                                    to deliver cutting-edge IT solutions that empower our
                                    clients to achieve their goals and surpass their
                                    expectations.
                                    Whether you're looking to develop cutting-edge
                                    applications, streamline your business processes, or
                                    enhance your cybersecurity posture, we are here to help
                                    you achieve your goals.
                                    <br>
                                </p>
                                
                                <button type="button" class="btn mb-3 mt-3 btn-sm btn-hover btn-template px-4 gap-3 text-sm text-uppercase">
                                    SEE MORE
                                </button> 
                            </div>
                           
                        </div>
                        <div class="col-xl-7 col-lg-6 text-center" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper about-swiper" >
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="/images/s5.png" class="about-swiper-img"/>
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/images/s1.png"  class="about-swiper-img"/>
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/images/s2.png"  class="about-swiper-img"/>
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/images/s3.png"  class="about-swiper-img"/>
                                    </div>
                                    
                                    <div class="swiper-slide">
                                        <img src="/images/s4.png"  class="about-swiper-img"/>
                                    </div>
                                </div>
                             
                            </div>
                            
                            {{-- <span class="swiper-button-custom text-uppercase h4 ms-2" id="swiper-next-about">Next</span>
                            <span class="h4"> |</span>
                            <span class="swiper-button-custom text-uppercase h4 me-2" id="swiper-prev-about">Prev</span> --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-5" >
                            <h2 class=" fw-bold text-body-emphasis" data-aos="fade-left" data-aos-delay="200">Meet Our Team </h2>
                        </div>
                        <div class="col-lg-3 mb-2 col-6" >
                           <div class="card card-team h-100"  data-aos="fade-left" data-aos-delay="200">
                                <div class="card-body text-center">
                                    <img src="https://cdn.prod.website-files.com/6365d860c7b7a7191055eb8a/65a752b15d58d46d51503280_Olivia%20Rhye-p-500.png" 
                                    class="w-50 img-rounded mb-3"
                                    alt="" > <br>
                                    <span class="fw-bold h4">Olivia Rhye</span> <br>
                                    <small class="text-gradient"> Computer Programmer</small>
                                </div>
                                <di class="card-footer text-center">
                                    <button type="button" class="btn mt-3 btn-sm btn-hover btn-template px-4 gap-3 text-sm text-uppercase">
                                        SEE MORE
                                    </button>
                                </di>
                           </div>
                        </div>
                        <div class="col-lg-3 mb-2 col-6" >
                            <div class="card card-team h-100"  data-aos="fade-left" data-aos-delay="300">
                                 <div class="card-body text-center">
                                     <img src="https://cdn.prod.website-files.com/6365d860c7b7a7191055eb8a/65a752dce4ae12986f0f90d6_Phoenix%20Baker-p-500.png" 
                                     class="w-50 img-rounded mb-3"
                                     alt="" > <br>
                                     <span class="fw-bold h4">Phoenix Baker</span> <br>
                                     <small class="text-gradient"> Computer Programmer</small>
                                </div>
                                <di class="card-footer text-center">
                                    <button type="button" class="btn mt-3 btn-sm btn-hover btn-template px-4 gap-3 text-sm text-uppercase">
                                        SEE MORE
                                    </button>
                                </di>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-2 col-6" >
                            <div class="card card-team h-100"  data-aos="fade-left" data-aos-delay="400">
                                <div class="card-body text-center">
                                    <img src="https://cdn.prod.website-files.com/6365d860c7b7a7191055eb8a/65a752c36516bd166a23e981_Orlando%20Diggs-p-500.png" 
                                    class="w-50 img-rounded mb-3"
                                    alt="" > <br>
                                    <span class="fw-bold h4">Orlando Diggs</span> <br>
                                    <small class="text-gradient"> Computer Programmer</small><br>
                                </div>
                                <di class="card-footer text-center">
                                    <button type="button" class="btn mt-3 btn-sm btn-hover btn-template px-4 gap-3 text-sm text-uppercase">
                                        SEE MORE
                                    </button>
                                </di>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-2 col-6" >
                            <div class="card card-team h-100"  data-aos="fade-left" data-aos-delay="500">
                                <div class="card-body text-center">
                                    <img src="https://cdn.prod.website-files.com/6365d860c7b7a7191055eb8a/65a74dc1fe8e58cc1acb1f4e_Ava%20Wright-p-500.png" 
                                    class="w-50 img-rounded mb-3"
                                    alt="" > <br>
                                    <span class="fw-bold h4">Ava Wright</span> <br>
                                    <small class="text-gradient"> Computer Programmer</small>
                                </div>
                                <di class="card-footer text-center">
                                    <button type="button" class="btn mt-3 btn-sm btn-hover btn-template px-4 gap-3 text-sm text-uppercase">
                                        SEE MORE
                                    </button>
                                </di>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="services" class=" d-flex justify-content-center align-items-center" style="background-image: url('/images/bg-hero-30.png'); ">
                <div class="section-border"></div>
                <div class="section-title mt-5">
                    Services
                </div>
                <div class="px-4 py-5 my-5 container">
                    <div class="row mb-3">
                        <div class="col-lg-6 mt-2 mb-3" data-aos="fade-right" data-aos-delay="500" >
                           <img src="/images/ps.svg" id="img_service" style="width: 80%" class="floating">
                        </div>
                        <div class="col-lg-6  mb-5" >
                            <h1 class="display-5 fw-bold text-body-emphasis mb-5" data-aos="fade-left" data-aos-delay="100">Our Services</h1>
                            <a href="/service" target="_blank" data-img="1" class="mb-4 h2 text-gradient text-service" data-aos="fade-left" data-aos-delay="200">
                                Application Development</a><p></p>
                            <a href="/service" target="_blank" data-img="2" class="mb-4 h2 text-gradient text-service" data-aos="fade-left" data-aos-delay="300">
                                ERP Implementation</a><p></p>
                            <a href="/service" target="_blank" data-img="3" class="mb-4 h2 text-gradient text-service" data-aos="fade-left" data-aos-delay="400">
                                Cyber Security Services</a><p></p>
                            <a href="/service" target="_blank" data-img="4" class="mb-4 h2 text-gradient text-service" data-aos="fade-left" data-aos-delay="500">
                                Data Analytics</a><p></p>
                            <a href="/service" target="_blank" data-img="5" class="mb-4 h2 text-gradient text-service" data-aos="fade-left" data-aos-delay="600">
                                Consulting Services</a><p></p>
                            <a href="/service" target="_blank" data-img="6" class="mb-4 h2 text-gradient text-service" data-aos="fade-left" data-aos-delay="600">
                                Support and Maintenance</a><p></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="fw-bold text-body-emphasis mb-5" data-aos-easing="linear"
                            data-aos-duration="500"
                            data-aos="fade-up" data-aos-delay="100">
                            How We Colaborate With You</h2>
                        </div>
                        <div class="col-md-2 col-12 mb-3">
                            <div class="card h-100 border-0" 
                            data-aos-easing="linear"
                            data-aos-duration="500"
                            data-aos="fade-up" data-aos-delay="100"
                            style=" background: linear-gradient(121deg, rgba(255,255,255,1) 0%, rgba(242,244,255,1) 72%, rgba(243,237,255,1) 100%); "    
                            > 
                                  <div class="card-body d-flex align-items-center justify-content-center">
                                    <h2 class="mb-0 fw-bold">The Innovatix Way</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 mb-3">
                            <div class="card h-100 border-0" 
                                data-aos-easing="linear"
                                data-aos-duration="500"
                                data-aos="fade-up" data-aos-delay="100">
                                <div class="card-body">
                                    <span class="text-gradient fw-bold card-number"> 01 </span>
                                    <h5 class="fw-bold text-gradient">Understanding Your Needs</h5>
                                
                                    Gathering needs from stakeholders for project understanding.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 mb-3">
                            <div class="card h-100 border-0" 
                                data-aos-easing="linear"
                                data-aos-duration="500"
                                data-aos="fade-up" data-aos-delay="200">
                                <div class="card-body">
                                    <span class="text-gradient fw-bold card-number"> 02 </span>
                                    <h5 class="fw-bold text-gradient">Analysis and
                                        Brainstorming</h5>
                                        Design your needs based on exchanged ideas.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 mb-3">
                            <div class="card h-100 border-0" 
                                data-aos-easing="linear"
                                data-aos-duration="500"
                                data-aos="fade-up" data-aos-delay="300">
                                <div class="card-body">
                                    <span class="text-gradient fw-bold card-number"> 03 </span>
                                    <h5 class="fw-bold text-gradient">Development
                                        & Prototyping</h5>
                                    Deploying and integrating software.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 mb-3">
                            <div class="card h-100 border-0" 
                                data-aos-easing="linear"
                                data-aos-duration="500"
                                data-aos="fade-up" data-aos-delay="400">
                                <div class="card-body">
                                    <span class="text-gradient fw-bold card-number"> 04 </span>
                                    <h5 class="fw-bold text-gradient">Deployment & Training</h5>
                                    We conduct different trainings before implementation
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 mb-3">
                            <div class="card h-100 border-0" 
                                data-aos-easing="linear"
                                data-aos-duration="500"
                                data-aos="fade-up" data-aos-delay="500">
                                <div class="card-body">
                                    <span class="text-gradient fw-bold card-number"> 05 </span>
                                    <h5 class="fw-bold text-gradient">Ongoing Support
                                        and Care</h5>
                                    Ongoing software care.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="clients" class="bg-gradient-light d-flex justify-content-center align-items-center">
                <div class="section-border"></div>
                <div class="section-title mt-5">
                    Clients & Partners
                </div>
                <div class="px-4 py-5 my-5 container">
                    <div class="row">
                        <div class="col-lg-12 mb-5" >
                            <h1 class="text-gradient fw-bold text-body-emphasis display-5" data-aos="fade-left" data-aos-delay="400">Who’s Growing With Us?</h1>
                            <h2 class="fw-bold text-gradient" data-aos="fade-left" data-aos-delay="200">Our Clients</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 col-6 mb-3">
                            <div class="card h-100 border-0" data-aos="fade-up" data-aos-delay="500">
                                <div class="card-body">
                                    <img src="/images/c1.png" class="w-100" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 mb-3">
                            <div class="card h-100 border-0" data-aos="fade-up" data-aos-delay="500">
                                <div class="card-body mt-auto mb-auto">
                                    <img src="/images/c2.png" class="w-100" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 mb-3">
                            <div class="card h-100 border-0" data-aos="fade-up" data-aos-delay="500">
                                <div class="card-body mt-auto mb-auto">
                                    <img src="/images/c6.png" class="w-100" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 mb-3">
                            <div class="card h-100 border-0" data-aos="fade-up" data-aos-delay="500">
                                <div class="card-body mt-auto mb-auto">
                                    <img src="/images/c3.png" class="w-100" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 mb-3">
                            <div class="card h-100 border-0" data-aos="fade-up" data-aos-delay="500">
                                <div class="card-body mt-auto mb-auto">
                                    <img src="/images/c7.jpg" class="w-100" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 mb-3">
                            <div class="card h-100 border-0" data-aos="fade-up" data-aos-delay="500">
                                <div class="card-body mt-auto mb-auto">
                                    <img src="/images/c4.png" class="w-100" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 mb-5" >
                            <h2 class="fw-bold text-gradient" data-aos="fade-left" data-aos-delay="200">Our Partners</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 col-6 mb-3">
                            <div class="card h-100 border-0  mt-auto mb-auto" data-aos="fade-up" data-aos-delay="500">
                                <div class="card-body">
                                    <img src="/images/p1.png" class="w-100 mt-3" alt="">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 mb-3">
                            <div class="card h-100 border-0" data-aos="fade-up" data-aos-delay="500">
                                <div class="card-body mt-auto mb-auto">
                                    <img src="/images/p2.png" class="w-100" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 mb-3">
                            <div class="card h-100 border-0" data-aos="fade-up" data-aos-delay="500">
                                <div class="card-body mt-auto mb-auto">
                                    <img src="/images/p3.png" class="w-100 mt-3" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 mb-3">
                            <div class="card h-100 border-0" data-aos="fade-up" data-aos-delay="500">
                                <div class="card-body mt-auto mb-auto">
                                    <img src="/images/p4.png" class="w-100 mt-3" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 mb-3">
                            <div class="card h-100 border-0" data-aos="fade-up" data-aos-delay="500">
                                <div class="card-body mt-auto mb-auto">
                                    <img src="/images/p5.jpg" class="w-100" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
           
            <section id="products"  class="bg-gradient-light  d-flex justify-content-center align-items-center">
                <div class="section-border"></div>
                <div class="section-title mt-5">
                    Portfolio
                </div>
                <div class="px-4 py-5 my-5 container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="display-5 fw-bold text-body-emphasis mb-5" data-aos="fade-left" data-aos-delay="100">Our Portfolio</h1>
                        </div>
                        <div class="col-12">
                            {{--
                            <img src="https://images.pexels.com/photos/7130560/pexels-photo-7130560.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="w-100" alt=""> --}}
                            <div class="swiper product-swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide text-center product-swiper-slide" >
                                        <h3 class="text-gradient fw-bold">School App</h3>
                                        <img src="/images/FP1.png" class="w-100" alt="">
                                    </div>
                                    <div class="swiper-slide text-center product-swiper-slide" >
                                        <h3 class="text-gradient fw-bold">Online Admission System</h3>
                                        <img src="/images/FP2.png" class="w-100" alt="">
                                    </div>
                                    <div class="swiper-slide text-center product-swiper-slide" >
                                        <h3 class="text-gradient fw-bold">Gym App</h3>
                                        <img src="/images/FP3.png" class="w-100" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="careers"  class="career-bg  d-flex justify-content-center align-items-center">
                <div class="section-border"></div>
                <div class="section-title mt-5">
                    Careers
                </div>
                <div class="px-4 py-5 my-5 container">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <h1 class="display-5 fw-bold text-body-emphasis mb-3" data-aos="fade-left" data-aos-delay="100">Careers</h1>
                        </div>
                        <div class="col-md-5 text-justify mb-auto mt-auto">
                            <center>
                                <img src="/images/job.svg" class="w-75" alt="">
                            </center>
                            <p></p>
                            At <b class="fw-bold">INNOVATIX Systems Services</b>, we are more than just a tech
                            company - we are a dynamic team of innovators, problem-solvers, and forward-thinkers 
                            commitred to shaping the future of technology. If you're passionate
                            about making a difference and eager to work in a collaborative environment, you're in the right place.
                            
                            <br><br>
                            <b class="fw-bold">Join us and help drive technological advancements that impact the world.</b>
                            <br>
                        </div>
                        <div class="col-md-7">
                            
                            <h2 class="text-gradient mt-5">Available Jobs</h2>
                            <div class="row">
                                <div class="col-md-12 mb-2">
                                    <div class="h-100 card border-gradient">
                                        <div class="card-body text-center h6">
                                            Software Engineer - Apigee API Management
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <div class="h-100 card border-gradient">
                                        <div class="card-body text-center h6">
                                            Dynamics 365 Consultant
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <div class="h-100 card border-gradient">
                                        <div class="card-body text-center h6">
                                            Oracle EBS Consultant
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <div class="h-100 card border-gradient">
                                        <div class="card-body text-center h6">
                                            Cloud Architect / Engineer
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center mt-3">
                                    <b>For more information, contact us on <span class="text-gradient">contact@innovatixsystems.com</span></b>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                   
                </div>
            </section>
            <section id="contact" class=" d-flex justify-content-center align-items-center">
                <div class="section-border"></div>
                <div class="section-title mt-5">
                    Contact Us
                </div>
                <div class="px-4 py-5 my-5 container">
                    <div class="row">
                        <div class="col-lg-12 mb-5" >
                            <h1 class="display-5 fw-bold text-body-emphasis" data-aos="fade-left" data-aos-delay="200">Contact Us </h1>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.0175033784158!2d51.50642587612486!3d25.269996628746817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45db000f0b54ed%3A0x6b0d132ca081cad9!2sInnovatix%20Systems!5e0!3m2!1sen!2sqa!4v1721548994315!5m2!1sen!2sqa" 
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="col-lg-6 mb-3 justify-content-center mb-auto mt-auto align-items-center">
                            <div class="mb-3 text-center">
                                <b class="text-gradient h5 fw-bold"> Our team are happy to help.</b> <br>
                                Contact us during standard business hours (Sunday - Thursday, 7:30 AM to 3:30 PM) or email us 24/7 and we'll get back to you.
                            </div>
                            <div class="mb-3 card border-gradient">
                               <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-4 col-5 text-gradient fw-bold">
                                            <img src="https://cdn-icons-png.flaticon.com/512/10630/10630679.png " height="30">
                                            Mobile :
                                        </div>
                                        <div class="col-lg-8 col-7"> +974 4491 5428</div>
                                    </div>
                               </div>
                            </div>
                            <div class="mb-3 card border-gradient">
                                <div class="card-body">
                                     <div class="row">
                                         <div class="col-lg-4 col-5 text-gradient fw-bold">
                                             <img src="https://cdn-icons-png.flaticon.com/512/10628/10628633.png " height="30">
                                            Email :
                                         </div>
                                         <div class="col-lg-8 col-7"> <a href="mailto:info@innovatixsystems.com">info@innovatixsystems.com</a></div>
                                     </div>
                                </div>
                             </div>
                            <div class="text-center mb-3">
                                <h4 class="fw-bold">Follow Us</h4>
                                <a target="_blank" href="https://qa.linkedin.com/company/innovatixsystems">
                                    <img src="https://cdn-icons-png.flaticon.com/128/2504/2504923.png" width="30" class="me-1 ms-1" alt=""></a>
                                <a target="_blank" href="https://www.facebook.com/InnovatixSystems">
                                    <img src="https://cdn-icons-png.flaticon.com/128/2504/2504903.png" width="30" class="me-1 ms-1" alt=""></a>
                                <a target="_blank" href="https://www.instagram.com/innovatixsystems">
                                    <img src="https://cdn-icons-png.flaticon.com/128/2504/2504918.png" width="30" class="me-1 ms-1" alt=""></a>
                                <a target="_blank" href="https://twitter.com/InnovatixSystem"><img src="https://cdn-icons-png.flaticon.com/128/5968/5968830.png" width="30" class="me-1 ms-1" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section></section>
            {{-- <div id="scrollToTopBtn" >
                <label for="" class="scroll-label">
                    BACK TO TOP
                </label>
            </div> --}}
        </main>
    
        <!-- Footer -->
        <footer class="footer mt-auto py-3 bg-dark">
            <div class="container text-center">
                <span class="text-light">
                    © Innovatix Systems Services 2024 ❤️
                </span>
            </div>
        </footer>
        {{-- Scripts libs--}}
            {{-- Core --}}
            <script src="assets/libs/jquery/jquery.min.js"></script>
            <script src="https://unpkg.com/@popperjs/core@2"></script>
            <script src="assets/libs/bootstrap5/js/bootstrap.min.js"></script>
            {{-- Cursor --}}
            <script src="assets/theme/cursor/cursor.js"></script>
            <script src="assets/libs/aos/aos.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
            <script src="assets/theme/theme.js"></script>
        {{-- End of Scripts libs--}}
    </body>
</html>
