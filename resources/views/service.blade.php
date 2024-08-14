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
        {{-- End of CSS libs --}}
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
    
        <nav class="navbar navbar-expand-lg sticky-top" id="nav">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold" href="/">
                    <img src="/images/innovatix-logo.png" style="width: 150px;" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                <div class="navbar-nav">
                    <a class="nav-link p-3" href="/">Home 
                        <div class="cursor"></div>
                    </a>
                </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main>
            <section  id="about"  class="bg-gradient-light  d-flex justify-content-center align-items-center">
                <div class="section-border"></div>
               
                <div class="px-4 py-5 my-5 container">
                    <div class="row mb-3">
                        <div class="col-lg-12 text-center ">
                            <h1 class="display-5 fw-bold text-gradient" data-aos="fade-left" data-aos-delay="200">
                                Software Development
                            </h1>
                        </div>
                    </div>
                    <p></p>
                    <div class="row">
                        <div class="col-12">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                  <div class="swiper-slide">
                                    <img src="/images/product1.png" height="300" alt="">
                                  </div>
                                  <div class="swiper-slide">
                                    <img src="/images/product2.png" height="300" alt="">
                                  </div>
                                  <div class="swiper-slide">
                                    <img src="/images/product3.png" height="300" alt="">
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 mb-3 mt-3" data-aos="fade-right" data-aos-delay="100">
                            <h3 class="fw-bold">Custom Software Development</h3>
                            <p class="">
                               
                                We design and develop bespoke software solutions tailored to the specific needs and goals of your business.
                                Our team leverages the latest technologies and methodologies to create scalable, secure, and efficient applications. 
                                Whether you need a complete end-to-end solution or want to enhance your existing systems, 
                                we are here to help you streamline your operations and achieve your objectives.
                            </p>
                        </div>
                        <div class="col-md-6 mb-3 mt-3" data-aos="fade-left" data-aos-delay="200">
                            <h3 class="fw-bold">Mobile App Development</h3>
                            <p class="">
                                Our mobile app development services empower your business to connect with customers on the go, 
                                providing seamless experiences on both iOS and Android platforms. 
                                We focus on creating intuitive interfaces and robust functionalities that enhance user engagement and satisfaction.
                                From initial concept to deployment, our team ensures that your app stands out in 
                                the competitive mobile market and delivers real value to your users.
                            </p>
                        </div>
                        <div class="col-md-6 mb-3 mt-3" data-aos="fade-right" data-aos-delay="300">
                            <h3 class="fw-bold">Web Development</h3>
                            <p class="">
                                We specialize in building responsive and dynamic websites that reflect your brand and cater to your audience's needs. 
                                Our web development process includes everything from design and coding to testing and deployment, 
                                ensuring a smooth and effective online presence. With a focus on user experience and search engine optimization, 
                                we help you achieve higher visibility and engagement.
                            </p>
                        </div>
                        <div class="col-md-6 mb-3 mt-3" data-aos="fade-left" data-aos-delay="400">
                            <h3 class="fw-bold"> UI/UX Design</h3>
                            <p class="">
                                Our UI/UX design services focus on creating intuitive and engaging interfaces that enhance user interaction and satisfaction.
                                We conduct thorough research and testing to ensure that your software 
                                is not only visually appealing but also functional and user-friendly. 
                                By prioritizing user experience, we help you increase customer retention and drive conversions.
                            </p>
                        </div>
                        <div class="col-md-6 mb-3 mt-3"  data-aos="fade-right" data-aos-delay="500">
                            <h3 class="fw-bold"> Software Maintenance and Support</h3>
                            <p class="">
                                We provide comprehensive maintenance and support services to ensure your software remains up-to-date, secure, and efficient.
                                Our team is available around the clock to address any issues and implement necessary updates and improvements. 
                                By partnering with us for ongoing support, you can focus on your core business while we take care of your software needs..
                            </p>
                        </div>
                    </div>
                </div>
            </section>
         
            <section id="contact" class="bg-gradient-light d-flex justify-content-center align-items-center">
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
                                <b class="text-gradient h5 fw-bold"> Our team are always happy to help.</b> <br>
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
                                         <div class="col-lg-8 col-7"> info@innovatixsystems.com</div>
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
            <div class="container">
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
            <script>
                var swiper = new Swiper(".mySwiper", {
                slidesPerView: 2,
                spaceBetween: 30,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                });
            </script>
    </body>
</html>
