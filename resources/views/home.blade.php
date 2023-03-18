<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">

    <title>Software Factory - avoCode</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/templatemo-space-dynamic.css')}}">
    <link rel="stylesheet" href="{{asset('css/animated.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.css')}}">

</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo" style="display: flex">
                        <img src="/images/logo.svg" alt="" style="width: 70px;margin-right: 10px;">
                        <h4>avo<span>Code</span></h4>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="#about">About Us</a></li>
                        <li class="scroll-to-section"><a href="#services">Services</a></li>
                        <li class="scroll-to-section"><a href="#contact">Message Us</a></li>
                        <li class="scroll-to-section">
                            <div class="main-green-button"><a href="#contact">Contact Now</a></div>
                        </li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                            <h6>Welcome to <em>avoCode</em></h6>
                            <h2>Build Your <em>Software Solution</em> With <span>Us</span></h2>
                            <p>
                                We are a leading software development company with a passion for creating custom
                                software solutions that help businesses grow.
                            </p>
                            <li class="scroll-to-section">
                                <div class="main-green-button"><a href="#contact">Contact Now</a></div>
                            </li>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="{{asset('images/banner-right-image.png')}}" alt="team meeting">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="about" class="about-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <img src="{{asset('images/about-left-image.png')}}" alt="person graphic">
                </div>
            </div>
            <div class="col-lg-8 align-self-center">
                <div class="services">
                    <div class="row">
                        <div class="col-12">
                            <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                                <p>
                                    At <b style="color: var(--quaternary-color)">avoCode</b>, we are passionate about creating custom software solutions that
                                    help
                                    businesses achieve their goals. Our team of experienced developers and designers
                                    work collaboratively with clients to deliver high-quality, scalable, and
                                    user-friendly software.
                                </p>

                                <p>
                                    Our mission is to provide innovative software solutions that make a positive impact
                                    on businesses and their customers. We pride ourselves on our commitment to quality,
                                    transparency, and customer satisfaction. We understand that every business is
                                    unique, and that's why we offer tailored solutions that meet your specific needs.
                                </p>

                                <p>
                                    Whether you need a mobile app, a web application, or a custom software solution, we
                                    have the expertise to bring your ideas to life. We use the latest technologies and
                                    best practices to deliver cutting-edge solutions that are secure, reliable, and
                                    efficient.
                                </p>

                                <p>
                                    We believe that communication is key to a successful project, which is why we work
                                    closely with our clients throughout the development process. Our agile methodology
                                    ensures that we deliver projects on time and within budget, while keeping you
                                    informed every step of the way.
                                </p>

                                <p>
                                    Get in touch with us today to discuss your software development needs and how we can
                                    help you achieve your business objectives. We look forward to hearing from you!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="services" class="our-services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="left-image">
                    <img src="{{asset('images/services-left-image.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="section-heading">
                    <h2>Take Your <em>Project Ideas</em> To Live</h2>
                    <p>
                        Partner with us to unlock the full potential of your business with our comprehensive software
                        development solutions tailored to your specific needs and objectives.
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="first-bar progress-skill-bar">
                            <h4>Website Development</h4>
                            <span>94%</span>
                            <div class="filled-bar"></div>
                            <div class="full-bar"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="second-bar progress-skill-bar">
                            <h4>Website Design</h4>
                            <span>82%</span>
                            <div class="filled-bar"></div>
                            <div class="full-bar"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="third-bar progress-skill-bar">
                            <h4>Mobile Development</h4>
                            <span>88%</span>
                            <div class="filled-bar"></div>
                            <div class="full-bar"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="fourth-bar progress-skill-bar">
                            <h4>Digital Marketing</h4>
                            <span>78%</span>
                            <div class="filled-bar"></div>
                            <div class="full-bar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="our-portfolio section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <h2>See What Our Agency <em>Offers</em> &amp; What We <span>Provide</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <a href="#">
                    <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="hidden-content">
                            <h4>Website Development</h4>
                            <p>Build a website that stands out and drives results with our expert development
                                services.</p>
                        </div>
                        <div class="showed-content">
                            <img src="{{asset('images/web-coding.png')}}" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="#">
                    <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="hidden-content">
                            <h4>Website Design</h4>
                            <p>Make a lasting impression with a stunning website design that captures your brand's
                                essence.</p>
                        </div>
                        <div class="showed-content">
                            <img src="{{asset('images/web-design.png')}}" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="#">
                    <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="hidden-content">
                            <h4>Mobile Development</h4>
                            <p>Engage your customers on-the-go with a mobile app that delivers a seamless user
                                experience.</p>
                        </div>
                        <div class="showed-content">
                            <img src="{{asset('images/mobile-app.png')}}" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="#">
                    <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="hidden-content">
                            <h4>Digital Marketing</h4>
                            <p>Reach your target audience and grow your business with our data-driven digital marketing
                                solutions.</p>
                        </div>
                        <div class="showed-content">
                            <img src="{{asset('images/advertising.png')}}" alt="">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div id="contact" class="contact-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
                <div class="section-heading">
                    <h2>Feel Free To Send Us a Message About Your Ideas</h2>
                    <p>
                        At <b>avoCode</b>, we are dedicated to providing exceptional customer service and support.
                        Contact us today to discuss your software development needs and turn your ideas into reality.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
                <form id="contact" action="/contact-us" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <fieldset>
                                <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <input type="surname" name="surname" id="surname" placeholder="Surname"
                                       autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                       placeholder="Your Email" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <textarea name="message" type="text" class="form-control" id="message"
                                          placeholder="Message" required=""></textarea>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="main-button ">Send Message</button>
                            </fieldset>
                        </div>
                    </div>
                    <div class="contact-dec">
                        <img src="{{asset('images/contact-decoration.png')}}" alt="">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div style="display: flex;flex-direction: column;align-items: center;">
                <img src="/images/logo.svg" alt="" style="width: 100px;">
                <p>© Copyright {{date('Y')}} avoCode. All Rights Reserved.
            </div>
        </div>
    </div>
</footer>
<!-- Scripts -->
<script src="{{asset('jquery/jquery.min.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/owl-carousel.js')}}"></script>
<script src="{{asset('js/animation.js')}}"></script>
<script src="{{asset('js/imagesloaded.js')}}"></script>
<script src="{{asset('js/templatemo-custom.js')}}"></script>

</body>
</html>
