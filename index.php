<?php include ('includes/header.php');?>

<body class="custom-cursor">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M3HGNMSL" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Custom Cursor -->
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>
    <!-- Preloader Start-->
    <!-- <div class="preloader">
        <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>
    </div> -->
    <!-- Preloader End-->
    <div class="page-wrapper">
        <div class="topbar-one topbar-one--two">
            <div class="container">
                <div class="topbar-one__inner">
                    <ul class="list-unstyled topbar-one__info">
                        <li class="topbar-one__info__item">
                            <i class="icon-pin topbar-one__info__icon"></i>
                            <span class="topbar-one__info__item__location">Serving Areas : Vashi, Sanpada, JuiNagar,
                                Turbhe and Koparkhairane</span>
                        </li>
                        <li class="topbar-one__info__item">
                            <i class="icon-email topbar-one__info__icon"></i>
                            <a class="topbar-one__info__item__email" href="mailto:care@pravilabs.in">
                                care@pravilabs.in</a>
                        </li>
                    </ul><!-- /.list-unstyled topbar-one__info -->
                    <div class="topbar-one__right">
                        <p class="topbar-one__text">
                            <i class="icon-clock1 topbar-one__right__icon"></i>
                            <span class="blink-text"><b>Open all Day - 7:00 am to 9:00 pm</b></span>
                        </p><!-- /.topbar-one__text -->
                    </div><!-- /.topbar-one__right -->
                </div><!-- /.topbar-one__inner -->
            </div><!-- /.container-fluid -->
        </div><!-- /.topbar-one -->
        <header class="main-header sticky-header main-header--three sticky-header--normal">
            <div class="main-header__middle">
                <div class="container">
                    <div class="main-header__inner">
                        <div class="main-header__logo logo-laboix">
                            <a href="#">
                                <img src="assets\images\pravi lab LOGO white.png" alt="Laboix HTML" width="130"
                                    class="lazyload">
                            </a>
                        </div><!-- /.main-header__logo -->
                        <nav class="main-header__nav main-menu">
                            <ul class="main-menu__list one-page-scroll-menu">
                                <li class="scrollToLink current"><a
                                        href="https://pravilabs.in/">Home</a></li>
                                <li class="scrollToLink"><a href="#about">About Us</a></li>
                                <li class="scrollToLink"><a href="#our_features">Advantage</a></li>
                                <li class="scrollToLink"><a href="#lab_test">Lab Test</a></li>

                                <li class="scrollToLink"><a href="doctors.php">Doctors</a></li>
                                <li class="scrollToLink"><a href="chemists.php">Chemists</a></li>
                                <!-- <li class="scrollToLink"><a href="#blog">Contact Us</a></li> -->
                                <li class="scrollToLink"><a href="#blog">Blog</a></li>
                            </ul>
                        </nav><!-- /.main-header__nav -->
                        <div class="main-header__right">
                            <a href="tel:+91 8104022721" class="main-header__right__call">
                                <div class="main-header__right__icon">
                                    <i class="icon-telephone-call-1"></i>
                                </div>
                                <div class="main-header__right__content">
                                    <span class="main-header__right__content__text">Home Visit Booking</span>
                                    <h6 class="main-header__right__content__number">+91 8104022721</h6>
                                </div>
                            </a>
                            <!-- <div class="main-header__right__info">
                                <a href="#" class="search-toggler main-header__right__info__item"> <i class="icon-search" aria-hidden="true"></i> <span class="sr-only">Search</span> </a>
                                <a href="cart.html" class="main-header__right__info__item"> <i class="icon-trolley" aria-hidden="true"></i> <span class="sr-only">Search</span> </a>
                            </div> -->
                            <div class="mobile-nav__btn mobile-nav__toggler">
                                <span></span><span></span><span></span>
                            </div><!-- /.mobile-nav__toggler -->
                        </div><!-- /.main-header__right -->
                    </div><!-- /.main-header__inner -->
                </div><!-- /.container-fluid -->
            </div>
            <div class="main-header__bootom">
                <div class="container">
                    <div class="main-header__bootom__inner">
                        <nav class="main-header__nav main-menu">
                            <ul class="main-menu__list one-page-scroll-menu">
                                <li class="scrollToLink current"><a
                                        href="https://pravilabs.in/">Home</a></li>
                                <li class="scrollToLink"><a href="#about">About Us</a></li>
                                <li class="scrollToLink"><a href="#our_features">Advantage</a></li>
                                <li class="scrollToLink"><a href="#lab_test">Lab Tests</a></li>

                                <li class="scrollToLink"><a href="doctors.php">Doctors</a></li>
                                <li class="scrollToLink"><a href="chemists.php">Chemists</a></li>
                                <li class="scrollToLink"><a href="#blog">Blog</a></li>

                            </ul>
                        </nav><!-- /.main-header__nav -->
                        <div class="main-header__link">
                            <a href="#contact" class="laboix-btn main-header__btn">Appoinment</a>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /.main-header -->
        <style>
            .main-header__btn {
                background-color: red;
                /* Red background color */
                color: white;
                /* White text color */
                border: none;
                /* Remove border if you want a solid color button */
                padding: 10px 20px;
                /* Adjust padding as needed */
                text-align: center;
                /* Center the text */
                text-decoration: none;
                /* Remove underline from links */
                font-size: 17px;
                display: inline-block;
                /* Ensure it fits the content */
                font-display: swap;
            }
        </style>

<!-------------- POPUP-------------->
<div class="popup" id="popup">
    <span class="close" onclick="closePopup()">&times;</span>
    <div class="icon">
        <i class="fa-solid fa-phone-volume"></i>
    </div>
    <h1 class="para1"><strong>बाजारभावापेक्षा कमी दरात</strong></h1>
    <p class="para">Blood Test at your Home! Affordable Rates!</p>
    <p class="para3 p-1" style="color:#dbcaca">Serving Navi Mumbai, including Vashi, Sanpada, Juinagar, Koperkhairane, and Turbhe, as well as Mumbai, covering Wadala and Dadar.</p>
    
    
    <div class="container">
        <div class="row">
            <!-- Column 1 -->
            <div class="col-md-6 pravi-popup ">
                <p><i class="fa-solid fa-house"></i> Home Visit in 60 Mins - Fast</p>
                <p><i class="fa-solid fa-user-doctor"></i> Verified by MD Doctors</p>
            </div>
            
            <!-- Column 2 -->
            <div class="col-md-6 pravi-popup" ">
                <p><i class="fa-regular fa-file"></i> Correct Reports</p>
                <p><i class="fa-solid fa-vial"></i> Accurate Testing</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-1"></div>
            <div class="col-5 d-flex justify-content-center">
                <a href="https://api.whatsapp.com/send/?phone=918104022721&text&type=phone_number&app_absent=0" target="_blank" class="whatsapp" style="text-decoration: none;">
                    <button class="whatsapp"><i class="fa-brands fa-whatsapp""></i> WhatsApp</button>
                </a>
            </div>
            
            <div class="col-5 d-flex justify-content-center">
                <a href="tel:+91 8104022721" class="call" style="text-decoration: none;">
                    <button class="call"><i class="fa-solid fa-phone" ></i> Call</button>
                </a>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    
</div>

<script>
    // Close popup function
    function closePopup() {
        const popup = document.getElementById('popup'); // Get popup element
        if (popup) {
            popup.style.display = 'none'; // Hide the popup
        } else {
            console.error('Popup element not found!');
        }
    }
</script>


<style>
/* Base styles */
.para1 {
color: #ffffff; /* Text color */
text-shadow: 2px 2px 4px #e21414e3; /* Subtle white glow */
}
.para {
color: #fff;
}

.para3 p-1 {
color: #dbcaca;
}

.pravi-popup p {
color: #ffffff;
font-size: 16px;
padding-left: 16px;
margin-left: 45px;
display: flex;
align-items: center;
}
.whatsapp i{
font-size: 22px;
}
/* Styling for icons */
.pravi-popup i {
color: #ffffff;
font-size: 20px;
margin-right: 10px;
}

/* Row adjustments */
.row {
display: flex;
flex-wrap: wrap;
justify-content: space-between;
align-items: center;
}

/* Button styling */
button.whatsapp, button.call {
background-color: #25D366; /* WhatsApp green for WhatsApp button */
border: none;
color: #ffffff;
font-size: 16px;
padding: 12px 20px;
border-radius: 8px;
cursor: pointer;
width: 100%;
max-width: 200px;
text-align: center;
margin: 10px; /* Add margin between buttons */
transition: background-color 0.3s ease;
}

button.call {
background-color: #e21414e3; /* Red for Call Now button */
padding: 12px 40px;

}

/* Hover effects */
button.whatsapp:hover {
background-color: #20b358; /* Slightly darker green */
}

button.call:hover {
background-color: #e21414e3; /* Slightly darker red */
}

.popup {
display: block;
position: fixed;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
width: 50%;
max-width: 693px;
background-color: #2d3c7e;
border: 1px solid #ccc;
border-radius: 20px;
box-shadow: 0 4px 8px rgba(148, 128, 128, 0.2);
z-index: 1000;
text-align: center;
}

.popup .close {
position: absolute;
top: 5px;
right: 10px;
cursor: pointer;
font-size: 20px;
color: #d4d0d0;
}

.popup .icon {
background-color: #e21414;
color: #fff;
width: 60px;
height: 60px;
border-radius: 50%;
display: flex;
justify-content: center;
align-items: center;
font-size: 24px;
margin: -30px auto 10px;
transform: rotate(-35deg); 
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
}
.popup h2 {
font-size: 22px;
margin: 10px 0;
}

.popup input {
width: calc(100% - 40px);
padding: 10px;
margin: 10px 20px;
border: 1px solid #ced4da;
border-radius: 5px;
}

.popup .buttons {
display: flex;
justify-content: space-between;
padding: 20px;
}

.popup .buttons button {
padding: 10px 40px;
border: none;
border-radius: 5px;
cursor: pointer;
}

.popup .buttons .whatsapp {
background-color: #f8f9fa;
color: #283779;
}

.popup .buttons .call {
background-color: #283779;
color: #fff;
}

/* Media queries for small devices */
@media (max-width: 768px) {
.popup {
width: 90%;
padding: 15px;
}

.popup h2 {
font-size: 20px;
}

.popup input {
width: calc(100% - 30px);
padding: 8px;
}

button.whatsapp {
font-size: 14px;
padding: 10px 15px;
}

.whatsapp i {
font-size: 16px;
}

button.call {
font-size: 14px;
padding: 10px 20px;
}

.pravi-popup p {
font-size: 14px;
margin-left: 0;
padding-left: 0;
}

.row {
flex-direction: row;
align-items: center;
}

/* Ensure buttons stay horizontal */
.popup .buttons {
display: flex;
flex-direction: row; /* Align buttons horizontally */
justify-content: center;
gap: 10px; /* Add space between buttons */
}
}

/* Media queries for very small devices (max-width: 375px) */
@media (max-width: 375px) {
.popup {
width: 95%;
padding: 10px;
}

.popup h2 {
font-size: 18px;
}

.popup input {
width: calc(100% - 20px);
padding: 6px;
}

button.whatsapp {
font-size: 16px;
padding: 8px 10px;
}

.whatsapp i {
font-size: 16px;
}

button.call {
font-size: 16px;
padding: 8px 24px;
}

.pravi-popup p {
font-size: 12px;
margin-left: 40px;
}

.popup .icon {
width: 50px;
height: 50px;
font-size: 20px;
}

/* Ensure buttons stay horizontal */
.popup .buttons {
display: flex;
flex-direction: row; /* Align buttons horizontally */
justify-content: center;
gap: 8px; /* Add space between buttons */
}
}
</style>

        <!-- main-slider-start -->
        <!-- main-slider-start -->
        <section class="main-slider-three">
            <div class="main-slider-three__carousel laboix-owl__carousel owl-carousel" data-owl-options='{
                "loop": true,
                "animateOut": "fadeOut",
                "animateIn": "fadeIn",
                "items": 1,
                "autoplay": true,
                "autoplayTimeout": 7000,
                "smartSpeed": 1000,
                "nav": false,
                "dots": true,
                "margin": 0
                }'>
                <!-- item -->
                <div class="item">
                    <div class="main-slider-three__item">
                        <div class="main-slider-three__bg"
                            style="background-image: url(assets/images/backgrounds/slider\ 1.webp);"
                            alt="Comprehensive testing and Home Visit"></div>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <div class="main-slider-three__content">
                                        <h1 class="main-slider-three__title">Convenient Home Blood Collection in Vashi,
                                            Sanpada, & Koparkhairane – Book Today!</h1>
                                        <!-- <h4 class="main-slider-three__title" style="color: #fff; font-size: 35px; font-display: swap;">Quality diagnostics right to your doorstep.</h4> -->
                                        <div class="main-slider-three__btn">
                                            <a href="#contact" class="laboix-btn">Appoinment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="main-slider-three__shape">
                            <img src="assets/images/shapes/hero-shape-4-1.png" alt="" class="lazyload">
                        </div> -->
                        <!-- <div class="main-slider-three__shape__two main-slider-three__shape__two--one">
                            <img src="assets/images/shapes/hero-shape-4-2.png" alt="" class="lazyload">
                        </div> -->
                        <div class="main-slider-three__shape__two main-slider-three__shape__two--two">
                            <img src="assets/images/shapes/hero-shape-4-3.png" alt="" class="lazyload">
                        </div>
                    </div>
                </div>
                <!-- item -->
                <div class="item">
                    <div class="main-slider-three__item">
                        <div class="main-slider-three__bg"
                            style="background-image: url(assets/images/backgrounds/slider\ 2.webp);"
                            alt="9001 certified lab"></div>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <div class="main-slider-three__content">
                                        <h1 class="main-slider-three__title">Our Pathology Lab in Vashi covers a wide spectrum of diagnostic needs</h1>
                                        <!-- <h4 class="main-slider-three__title" style="color: #fff; font-size: 35px;font-display: swap;">ISO 9001 certified lab with Highest Accuracy.</h4> -->
                                        <div class="main-slider-three__btn">
                                            <a href="#contact" class="laboix-btn">Appoinment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="main-slider-three__shape">
                            <img src="assets/images/shapes/hero-shape-4-1.png" alt="" class="lazyload">
                        </div> -->
                        <!-- <div class="main-slider-three__shape__two main-slider-three__shape__two--one">
                            <img src="assets/images/shapes/hero-shape-4-2.png" alt="" class="lazyload">
                        </div> -->
                        <div class="main-slider-three__shape__two main-slider-three__shape__two--two">
                            <img src="assets/images/shapes/hero-shape-4-3.png" alt="" class="lazyload">
                        </div>
                    </div>
                </div>
                <!-- item -->
                <div class="item">
                    <div class="main-slider-three__item">
                        <div class="main-slider-three__bg"
                            style="background-image: url(assets/images/backgrounds/slider\ 3.webp);"
                            alt="ICMR approved and NABH accredited"></div>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <div class="main-slider-three__content">
                                        <h1 class="main-slider-three__title">Free Home Visit Blood Sample Collection Facility Available</h1>
                                        <!-- <h4 class="main-slider-three__title" style="color: #fff; font-size: 35px;font-display: swap;">From Blood Tests to Hormone Checks for your Health.</h4> -->
                                        <div class="main-slider-three__btn">
                                            <a href="#contact" class="laboix-btn">Appoinment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="main-slider-three__shape">
                            <img src="assets/images/shapes/hero-shape-4-1.png" alt="" class="lazyload">
                        </div> -->
                        <!-- <div class="main-slider-three__shape__two main-slider-three__shape__two--one">
                            <img src="assets/images/shapes/hero-shape-4-2.png" alt="" class="lazyload">
                        </div> -->
                        <div class="main-slider-three__shape__two main-slider-three__shape__two--two">
                            <img src="assets/images/shapes/hero-shape-4-3.png" alt="" class="lazyload">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- main-slider-end -->
        <!-- service section Start -->
        <!-- <section class="service-three" id="services">
            <div class="container">
                <ul class="service-three__list list-unstyled wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                    <li class="service-three__list__item">
                        <div class="service-three__list__icon">
                            <i class="icon-chemistry-1"></i>
                        </div>
                        <div class="service-three__list__content">
                            <h4 class="service-three__list__title"><a href="services.html">Latest equipment</a></h4>
                            <p class="service-three__list__text">There are inmny variations free passages of Lorem Ip available inmny variations free </p>
                        </div>
                    </li>
                    <li class="service-three__list__item">
                        <div class="service-three__list__icon">
                            <i class="icon-research-1"></i>
                        </div>
                        <div class="service-three__list__content">
                            <h4 class="service-three__list__title"><a href="services.html">Highest quality results</a></h4>
                            <p class="service-three__list__text">There are inmny variations free passages of Lorem Ip available inmny variations free </p>
                        </div>
                    </li>
                    <li class="service-three__list__item">
                        <div class="service-three__list__icon">
                            <i class="icon-safe"></i>
                        </div>
                        <div class="service-three__list__content">
                            <h4 class="service-three__list__title"><a href="services.html">Safe diagnoses</a></h4>
                            <p class="service-three__list__text">There are inmny variations free passages of Lorem Ip available inmny variations free </p>
                        </div>
                    </li>
                </ul>
            </div>
        </section> -->
        <!-- service section End -->
        <!-- About Us section Start -->
        <section class="about-fore" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-fore__left">
                            <div class="about-fore__top">
                                <div class="sec-title text-start wow fadeInUp" data-wow-duration='700ms'>
                                    <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-1.png"
                                            alt="About Us" class="sec-title__img" class="lazyload">Medical health at its
                                        best</h6>
                                    <!-- /.sec-title__tagline -->
                                    <h1 class="sec-title__title">Certified Pathology Lab for Blood Tests and Diagnostic Services</h1>
                                    <!-- /.sec-title__title -->
                                </div><!-- /.sec-title -->
                                <p class="about-fore__top__text">Quality Assurance : As an ISO 9001 Certified Pathology Lab, we adhere to the highest quality assurance standards. Our state-of-the-art diagnostic facilities, advanced pathology equipment, and skilled lab professionals ensure accurate and reliable test results.</p>
                            </div>
                            <ul class="about-fore__feature list-unstyled">
                                <li class="about-fore__feature__item">
                                    <div class="about-fore__feature__icon">
                                        <i class="icon-trophy-1"></i>
                                    </div>
                                    <div class="about-fore__feature__content">
                                        <h3 class="about-fore__feature__title">ICMR Approved</h3>
                                        <p class="about-fore__feature__text">Our ICMR-approved pathology lab reflects our commitment to scientific rigor, credibility, and accuracy. Affiliated with the Indian Council of Medical Research (ICMR), we comply with stringent testing standards and national regulatory protocols.</p>
                                    </div>
                                </li>
                                <li class="about-fore__feature__item">
                                    <div class="about-fore__feature__icon">
                                        <i class="icon-target-1"></i>
                                    </div>
                                    <div class="about-fore__feature__content">
                                        <h3 class="about-fore__feature__title">NABH Accredited</h3>
                                        <p class="about-fore__feature__text">Our NABH-accredited pathology processing centers exemplify our patient-focused approach and dedication to quality healthcare. The National Accreditation Board for Hospitals & Healthcare Providers (NABH) accreditation highlights our commitment to diagnostic service safety, reliability, and transparency.</p>
                                    </div>
                                </li>
                            </ul>
                            <!-- <div class="about-fore__link">
                                <a href="#" class="laboix-btn laboix-btn--base">Discover More</a>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-fore__right wow fadeInRight" data-wow-duration="700ms" data-wow-delay="500ms">
                            <div class="about-fore__item">
                                <div class="about-fore__item__image">
                                    <img src="assets/images/about/about us.webp"
                                        alt="ICMR approved and NABH accredited state of the art Lab" class="lazyload">
                                    <!-- <div class="about-fore__item__logo">
                                        <a href=""><img src="assets/images/loder-light.png" width="60" alt="laboix logo"></a>
                                    </div> -->
                                </div>
                                <!-- <div class="about-fore__item__funfact">
                                    <div class="about-fore__item__funfact__bg"
                                        style="background-image: url(assets/images/about/about-s-4-1.png);"></div>
                                    <h2 class="about-fore__item__funfact__count count-box">
                                        <span class="count-text" data-stop="2" data-speed="1500"></span>
                                        <span class="pluse">+</span>
                                    </h2>
                                    <p class="about-fore__item__funfact__text">Years <br> Experience</p>
                                    <div class="about-fore__item__funfact__shape">
                                        <img src="assets/images/shapes/about-shape-3-1.png" alt="
                                        " class="lazyload">
                                    </div>
                                </div> -->
                                <div class="about-fore__item__call">
                                    <div class="about-fore__item__icon">
                                        <i class="icon-chatting"></i>
                                    </div>
                                    <div class="about-fore__item__content">
                                        <span class="about-fore__item__subtitle">Call to questions</span>
                                        <h5 class="about-fore__item__number"><a href="tel:+91 8104022721">+91
                                                8104022721</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us section End -->
        <style>
            @media only screen and (max-width: 767px) {

                /* Stack the columns vertically */
                .about-fore .row {
                    flex-direction: column;
                }

                .about-fore__left,
                .about-fore__right {
                    margin-bottom: 20px;
                }

                /* Adjust padding and margin for smaller screens */
                .about-fore__top__text,
                .about-fore__feature__text {
                    font-size: 14px;
                    font-display: swap;
                }

                .about-fore__feature__title {
                    font-size: 18px;
                    font-display: swap;
                }

                .about-fore__top,
                .about-fore__feature,
                .about-fore__item__content {
                    padding: 10px;
                }

                .about-fore__link .laboix-btn {
                    font-size: 14px;
                    padding: 8px 20px;
                    font-display: swap;
                }

                /* Hide or adjust the background image and other large images */
                .about-fore__item__funfact__bg {
                    display: none;
                }

                .about-fore__item__image img {
                    width: 100%;
                    height: auto;
                }

                /* Remove the shape image */
                .about-fore__item__funfact__shape img {
                    display: none;
                }

                /* Adjust the title and headings */
                .sec-title__title {
                    font-size: 22px;
                    font-display: swap;
                }

                .sec-title__tagline {
                    font-size: 14px;
                    font-display: swap;
                }
            }
        </style>
        <!-- service section start -->
        <section id="our_features" class="service-fore">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="sec-title text-center wow fadeInUp" data-wow-duration='700ms'>
                            <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-1.png"
                                    alt="our Service" class="sec-title__img" class="lazyload">Advantage</h6>
                            <!-- /.sec-title__tagline -->
                            <h2 class="sec-title__title">Key Advantages</h2><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                    </div>
                </div>
                <div class="row gutter-y-30">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-fore__card wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                            <div class="service-fore__top">
                                <h3 class="service-fore__title">ICMR Approved
                                </h3>
                                <p style="text-align: center; color: #ffff;">Pravi Labs has testing facilitites approved
                                    from ICMR for reportings.</p><br>
                                <div class="service-fore__icon">
                                    <img src="assets/images/favicons/ICMR.png" style="width: 40px; height: 40px;"
                                        alt="ICMR Approved" class="icon-telephone-call-1" class="lazyload">
                                </div>
                            </div>
                            <!-- <div class="service-fore__thumb">
                                <img src="assets/images/service/service-4-1.html" alt="laboix image">
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-fore__card wow fadeInUp" data-wow-duration="700ms" data-wow-delay="600ms">
                            <div class="service-fore__top">
                                <h3 class="service-fore__title">Fast
                                    Reporting</h3>
                                <p style="text-align: center; color: #ffff;">Pravi Labs undertakes prompt collection and
                                    processing, precise, and accurate reporting in quickest time.</p>
                                <div class="service-fore__icon">
                                    <img src="assets/images/favicons/fast-reporting.png"
                                        style="width: 40px; height: 40px;" alt="Fast
                                    Reporting" class="icon-telephone-call-1" class="lazyload">
                                </div>
                            </div>
                            <!-- <div class="service-fore__thumb">
                                <img src="assets/images/service/service-4-2.html" alt="laboix image">
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-fore__card wow fadeInUp" data-wow-duration="700ms" data-wow-delay="800ms">
                            <div class="service-fore__top">
                                <h3 class="service-fore__title">Daily Blood Collection

                                </h3>
                                <p style="text-align: center; color: #ffff;">Pravi Labs' priority Home Blood Collection is available for 365 Days
                                </p><br>
                                <div class="service-fore__icon">
                                    <img src="assets/images/favicons/Daily-collection.png"
                                        style="width: 40px; height: 40px;" alt="Daily Collection"
                                        class="icon-telephone-call-1" class="lazyload">
                                </div>
                            </div>
                            <!-- <div class="service-fore__thumb">
                                <img src="assets/images/service/service-4-3.html" alt="laboix image">
                            </div> -->
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="row gutter-y-30">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-fore__card wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                            <div class="service-fore__top">
                                <h3 class="service-fore__title">NABL Accredited
                                </h3>
                                <p style="text-align: center; color: #ffff;">Pravi Labs has Blood testing facilities with approval by NABL for reporting and testing.</p><br>
                                <div class="service-fore__icon">
                                    <img src="assets/images/favicons/NABL-certified.png"
                                        style="width: 40px; height: 40px;" alt="NABL Accredited"
                                        class="icon-telephone-call-1" class="lazyload">
                                </div>
                            </div>
                            <!-- <div class="service-fore__thumb">
                                <img src="assets/images/service/service-4-1.html" alt="laboix image">
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-fore__card wow fadeInUp" data-wow-duration="700ms" data-wow-delay="600ms">
                            <div class="service-fore__top">
                                <h3 class="service-fore__title">QR Code /
                                    BarCode</h3>
                                <p style="text-align: center; color: #ffff;">Pravi Labs reports include all mandatory
                                    fields for advanced reporting and details for verifications.</p><br>
                                <div class="service-fore__icon">
                                    <img src="assets/images/favicons/Qr-Code.png" style="width: 40px; height: 40px;"
                                        alt="QR Code /
                                    BarCode" class="icon-telephone-call-1" class="lazyload">
                                </div>
                            </div>
                            <!-- <div class="service-fore__thumb">
                                <img src="assets/images/service/service-4-2.html" alt="laboix image">
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-fore__card wow fadeInUp" data-wow-duration="700ms" data-wow-delay="800ms">
                            <div class="service-fore__top">
                                <h3 class="service-fore__title">Travel Approved
                                </h3>
                                <p style="text-align: center; color: #ffff;">Pravi Labs provides reports needed for
                                    domestic /International travels as per government guidelines.</p><br>
                                <div class="service-fore__icon">
                                    <img src="assets/images/favicons/identification.png"
                                        style="width: 40px; height: 40px;" alt="Travel Approved"
                                        class="icon-telephone-call-1" class="lazyload">
                                </div>
                            </div>
                            <!-- <div class="service-fore__thumb">
                                <img src="assets/images/service/service-4-3.html" alt="laboix image">
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service section End -->
        <br><br><br>
        <!-- choose-us-two section Start -->
        <section class="choose-us-two">
            <div class="container">
                <br><br><br>
                <div class="sec-title sec-title--two text-start wow fadeInUp" data-wow-duration='700ms'>
                    <h6 class="sec-title__tagline" style="align-items: center;"><img
                            src="assets/images/shapes/sec-title-s-2.png" alt="Why choose us" class="sec-title__img">Why
                        choose us</h6><!-- /.sec-title__tagline -->
                    <h2 class="sec-title__title" style="align-items: center;">All Type of Blood Tests are Available</h2>
                    <!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <!-- <p class="choose-us-two__top__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,vable.</p> -->
                <div class="row">
                    <!-- <div class="col-lg-6">
                        <div class="choose-us-two__left">
                            <div class="choose-us-two__thumb">
                                <div class="choose-us-two__thumb__item">
                                    <img src="assets/images/about/why-choos-2-1.png" alt="laboix">
                                </div>
                                <div class="choose-us-two__thumb__shape">
                                    <img src="assets/images/shapes/why-choos-1-2.png" alt="laboix">
                                </div>
                                <div class="choose-us-two__thumb__shape choose-us-two__thumb__shape--two">
                                    <img src="assets/images/shapes/why-choos-1-1.png" alt="laboix">
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-6">
                        <!-- <div class="choose-us-two__right"> -->
                        <ul class="choose-us-two__list list-unstyled">
                            <li class="choose-us-two__list__item">
                                <div class="choose-us-two__icon">
                                    <img src="assets/images/favicons/urine-test.png" alt="laboix icon" class="lazyload">
                                </div>
                                <div class="choose-us-two__content">
                                    <h3 class="choose-us-two__title">
                                        Urine Test
                                    </h3>
                                    <p class="choose-us-two__text">Evaluates kidney function and detects abnormalities
                                        in the urinary tract. Useful for diagnosing infections, diabetes, and other
                                        conditions.</p>
                                </div>
                            </li>
                            <li class="choose-us-two__list__item">
                                <div class="choose-us-two__icon">
                                    <img src="assets/images/favicons/microscope.png" alt="laboix icon" class="lazyload">
                                </div>
                                <div class="choose-us-two__content">
                                    <h3 class="choose-us-two__title">Microbiology
                                    </h3>
                                    <p class="choose-us-two__text">Analyzes microorganisms like bacteria, viruses, and
                                        fungi to diagnose infections and guide treatment options.</p>
                                </div>
                            </li>
                            <li class="choose-us-two__list__item">
                                <div class="choose-us-two__icon">
                                    <img src="assets/images/favicons/harmonal.png" alt="laboix icon" class="lazyload">
                                </div>
                                <div class="choose-us-two__content">
                                    <h3 class="choose-us-two__title">Hormonal Test
                                    </h3>
                                    <p class="choose-us-two__text">Measures hormone levels in the body to assess
                                        endocrine function and diagnose imbalances or disorders related to metabolism,
                                        reproduction, and more.</p>
                                </div>
                            </li>
                        </ul>
                        <!-- </div> -->
                    </div>
                    <div class="col-lg-6">
                        <!-- <div class="choose-us-two__right"> -->
                        <ul class="choose-us-two__list list-unstyled">
                            <li class="choose-us-two__list__item">
                                <div class="choose-us-two__icon">
                                    <img src="assets/images/favicons/blood-test.png" alt="laboix icon" class="lazyload">
                                </div>
                                <div class="choose-us-two__content">
                                    <h3 class="choose-us-two__title">
                                        Blood Test</h3>
                                    <p class="choose-us-two__text">Provides insights into overall health by analyzing
                                        various blood components. Useful for detecting conditions such as anemia,
                                        infections, and chronic diseases.</p>
                                </div>
                            </li>
                            <li class="choose-us-two__list__item">
                                <div class="choose-us-two__icon">
                                    <img src="assets/images/favicons/dermatology.png" alt="laboix icon"
                                        class="lazyload">
                                </div>
                                <div class="choose-us-two__content">
                                    <h3 class="choose-us-two__title">Dermatology</h3>
                                    <p class="choose-us-two__text">Analyzes skin samples to diagnose conditions and
                                        infections, aiding in effective treatment and management.</p>
                                </div>
                            </li>
                            <li class="choose-us-two__list__item">
                                <div class="choose-us-two__icon">
                                    <img src="assets/images/favicons/cytology.png" alt="laboix icon" class="lazyload">
                                </div>
                                <div class="choose-us-two__content">
                                    <h3 class="choose-us-two__title">Cytology</h3>
                                    <p class="choose-us-two__text">Studies cells from various body fluids or tissues to
                                        detect abnormalities, such as cancerous cells or pre-cancerous conditions.</p>
                                </div>
                            </li>
                        </ul>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- choose-us-two section End -->
        <br><br><br>
        <section>
            <div class="row">
                <div class="col-12">
                    <div class="sec-title text-center wow fadeInUp" data-wow-duration='700ms'>
                        <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-1.png"
                                alt="our Service" class="sec-title__img" class="lazyload">Advantage</h6>
                        <!-- /.sec-title__tagline -->
                        <h2 class="sec-title__title">We Care For Patients</h2><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                </div>
            </div>
            <br><br><br>
            <div class="container">
                <ul class="service-three__list list-unstyled wow fadeInUp animated" data-wow-duration="700ms"
                    data-wow-delay="500ms"
                    style="visibility: visible; animation-duration: 700ms; animation-delay: 500ms; animation-name: fadeInUp;">
                    <li class="service-three__list__item">
                        <div class="service-three__list__icon">
                            <img src="assets/images/favicons/advanced-Technoloy.png" alt="laboix icon" class="lazyload">
                        </div>
                        <div class="service-three__list__content">
                            <h3 class="service-three__list__title">Advance Technology</a></h4>
                                <p class="service-three__list__text">We test samples using the latest techniques to give
                                    our
                                    customers quick, accurate reports.</p>
                        </div>
                    </li>
                    <li class="service-three__list__item">
                        <div class="service-three__list__icon">
                            <img src="assets/images/favicons/door-step-service.png" alt="laboix icon" class="lazyload">
                        </div>
                        <div class="service-three__list__content">
                            <h3 class="service-three__list__title">Door Step Service</a></h4>
                                <p class="service-three__list__text">We serve our customer with Highly Trained
                                    Technician to
                                    your Door step for sample collection with <br>their Identity.</p>
                        </div>
                    </li>
                    <li class="service-three__list__item">
                        <div class="service-three__list__icon">
                            <img src="assets/images/favicons/comphrensive.png" alt="laboix icon" class="lazyload">
                        </div>
                        <div class="service-three__list__content">
                            <h3 class="service-three__list__title">Comprehensive Test</a></h4>
                                <p class="service-three__list__text">Our menu offers almost 5000 tests that cover a wide
                                    spectrum of medical diagnostic procedures.</p>
                        </div>
                    </li>
                </ul>
                <br><br><br><br>
                <ul class="service-three__list list-unstyled wow fadeInUp animated" data-wow-duration="700ms"
                    data-wow-delay="500ms"
                    style="visibility: visible; animation-duration: 700ms; animation-delay: 500ms; animation-name: fadeInUp;">
                    <li class="service-three__list__item">
                        <div class="service-three__list__icon">
                            <img src="assets/images/favicons/home-collection.png" alt="laboix icon" class="lazyload">
                        </div>
                        <div class="service-three__list__content">
                            <h3 class="service-three__list__title">Free Home Collection</a></h4>
                                <p class="service-three__list__text">We ensure accuracy through strict sample collection
                                    and
                                    handling procedures.</p>
                        </div>
                    </li>
                    <li class="service-three__list__item">
                        <div class="service-three__list__icon">
                            <img src="assets/images/favicons/access-reports.png" alt="laboix icon" class="lazyload">
                        </div>
                        <div class="service-three__list__content">
                            <h3 class="service-three__list__title">Online Access to Report</a>
                                </h4>
                                <p class="service-three__list__text">Pravi Labs provides online reports in 24-48 hrs by
                                    Email & Hard copy in 1 day.</p>
                        </div>
                    </li>
                    <li class="service-three__list__item">
                        <div class="service-three__list__icon">
                            <img src="assets/images/favicons/cleaniness.png" alt="laboix icon" class="lazyload">
                        </div>
                        <div class="service-three__list__content">
                            <h3 class="service-three__list__title">Maintained Facilities</a></h4>
                                <p class="service-three__list__text">We ensure our premises and all tools and equipment
                                    are
                                    kept clean and tidy.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- service section End -->
        <br><br><br>
        <!-- lab test -->
        <section id="lab_test" class="service-fore">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="sec-title text-center wow fadeInUp" data-wow-duration='700ms'>
                            <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-1.png"
                                    alt="our Service" class="sec-title__img" class="lazyload">our Service</h6>
                            <!-- /.sec-title__tagline -->
                            <h2 class="sec-title__title">Lab Tests</h2><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                    </div>
                </div>
                <div class="row gutter-y-30">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-fore__card wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                            <div class="service-fore__top">
                                <h3 class="service-fore__title"><a href="Blood-Test.php">Blood Tests</a></h3>
                                <div class="service-fore__icon">
                                    <img src="assets/images/favicons/blood-test.png" style="width: 40px; height: 40px;"
                                        alt="Blood Test" class="icon-telephone-call-1" class="lazyload">
                                </div>
                            </div>
                            <!-- <div class="service-fore__thumb">
                            <img src="assets/images/service/service-4-1.html" alt="laboix image">
                        </div> -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-fore__card wow fadeInUp" data-wow-duration="700ms" data-wow-delay="600ms">
                            <div class="service-fore__top">
                                <h3 class="service-fore__title"><a href="Urine-Test.php">Urine Tests</a></h3>
                                <div class="service-fore__icon">
                                    <img src="assets/images/favicons/urine-test.png" style="width: 40px; height: 40px;"
                                        alt="Urine Test" class="icon-telephone-call-1" class="lazyload">
                                </div>
                            </div>
                            <!-- <div class="service-fore__thumb">
                            <img src="assets/images/service/service-4-2.html" alt="laboix image">
                        </div> -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-fore__card wow fadeInUp" data-wow-duration="700ms" data-wow-delay="800ms">
                            <div class="service-fore__top">
                                <h3 class="service-fore__title"><a href="Stool-Test.php">Stool Tests</a></h3>
                                <div class="service-fore__icon">
                                    <img src="assets/images/favicons/stool-test.png" style="width: 45px; height: 45px;"
                                        alt="Stool Test" class="icon-telephone-call-1" class="lazyload">
                                </div>
                            </div>
                            <!-- <div class="service-fore__thumb">
                            <img src="assets/images/service/service-4-3.html" alt="laboix image">
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- lab test -->
        <!-- testimonial -->
        <!-- testimonial -->
        <section class="testimonials-fore" id="testimonial">
            <div class="container">
                <div class="tow">
                    <div class="col-12">
                        <div class="sec-title text-center wow fadeInUp" data-wow-duration='700ms'>
                            <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-1.png"
                                    alt="Testimonial" class="sec-title__img" class="lazyload">Testimonial</h6>
                            <!-- /.sec-title__tagline -->
                            <h2 class="sec-title__title">Happy Patients</h2><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                    </div>
                </div>
                <div class="row">
                    <div class="testimonials-fore__carousel laboix-owl__carousel laboix-owl__carousel--with-shadow owl-carousel"
                        data-owl-options='{
        "items": 1,
        "margin": 0,
        "loop": true,
        "smartSpeed": 700,
        "nav": false,
        "dots": false,
        "autoplay": true,
        "responsive": {
            "0": {
                "items": 1
            },
            "767": {
                "items": 2,
                "margin": 30
            },
            "992": {
                "items": 3,
                "margin": 30
            }
        }
        }'>
                        <div class="item">
                            <div class="testimonials-fore__card">
                                <div class="testimonials-fore__inner">
                                    <div class="testimonials-fore__content">
                                        <div class="testimonials-fore__thumb">
                                            <div class="testimonials-fore__author__image">
                                                <img src="assets\images\resources\female-worker.png" alt="author image"
                                                    class="lazyload">
                                            </div>
                                            <div class="testimonials-fore__author__quite">
                                                <i class="icon-quite"></i>
                                            </div>
                                        </div>
                                        <div class="testimonials-fore__author">
                                            <h4 class="testimonials-fore__name">Jyoti Shirke</h4>
                                            <!--<span class="testimonials-fore__deg">Senior doctor</span> -->
                                        </div>
                                        <p class="testimonials-fore__text"> Good Home Pickup Service from Pravi Labs. On
                                            time visit and reports in Vashi and nearby area. Good work Team </p> <br>
                                        <div class="testimonials-fore__content__shape">
                                            <img src="assets/images/shapes/testi-shape-1-2.png" alt="" class="lazyload">
                                        </div>
                                    </div>
                                    <div class="testimonials-fore__star">
                                        <span class="fa fa-star" style="color: rgb(236, 185, 15);"></span>
                                        <span class="fa fa-star" style="color: rgb(236, 185, 15);"></span>
                                        <span class="fa fa-star" style="color: rgb(236, 185, 15);"></span>
                                        <span class="fa fa-star" style="color: rgb(236, 185, 15);"></span>
                                        <span class="fa fa-star" style="color: rgb(236, 185, 15);"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-fore__card">
                                <div class="testimonials-fore__inner">
                                    <div class="testimonials-fore__content">
                                        <div class="testimonials-fore__thumb">
                                            <div class="testimonials-fore__author__image">
                                                <img src="assets\images\resources\man-in-suit-and-tie.png"
                                                    alt="author image" class="lazyload">
                                            </div>
                                            <div class="testimonials-fore__author__quite">
                                                <i class="icon-quite"></i>
                                            </div>
                                        </div>
                                        <div class="testimonials-fore__author">
                                            <h4 class="testimonials-fore__name">Aniket Jadhav</h4>
                                            <!--<span class="testimonials-fore__deg">Senior doctor</span> -->
                                        </div>
                                        <p class="testimonials-fore__text">Happy to see professionals working for your
                                            healthcare. Pravi Labs is one of them in Navi Mumbai area, Highly
                                            Recommended </p>
                                        <div class="testimonials-fore__content__shape">
                                            <img src="assets/images/shapes/testi-shape-1-2.png" alt="
                                            " class="lazyload">
                                        </div>
                                    </div>
                                    <div class="testimonials-fore__star">
                                        <span class="fa fa-star" style="color: rgb(236, 185, 15);"></span>
                                        <span class="fa fa-star" style="color: rgb(236, 185, 15);"></span>
                                        <span class="fa fa-star" style="color: rgb(236, 185, 15);"></span>
                                        <!-- <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-fore__card">
                                <div class="testimonials-fore__inner">
                                    <div class="testimonials-fore__content">
                                        <div class="testimonials-fore__thumb">
                                            <div class="testimonials-fore__author__image">
                                                <img src="assets\images\resources\man-in-suit-and-tie.png"
                                                    alt="author image" class="lazyload">
                                            </div>
                                            <div class="testimonials-fore__author__quite">
                                                <i class="icon-quite"></i>
                                            </div>
                                        </div>
                                        <div class="testimonials-fore__author">
                                            <h4 class="testimonials-fore__name">Prabhu Mishra</h4>
                                            <!--<span class="testimonials-fore__deg">Senior doctor</span> -->
                                        </div>
                                        <p class="testimonials-fore__text"> Was looking for urgent home sample pickup
                                            for my Senior Citizen Mother, Pravi Labs gave it on time, will give
                                            reference to my friends also </p>
                                        <div class="testimonials-fore__content__shape">

                                        </div>
                                    </div>
                                    <div class="testimonials-fore__star">
                                        <span class="fa fa-star" style="color: rgb(236, 185, 15);"></span>
                                        <span class="fa fa-star" style="color: rgb(236, 185, 15);"></span>
                                        <span class="fa fa-star" style="color: rgb(236, 185, 15);"></span>
                                        <span class="fa fa-star" style="color: rgb(236, 185, 15);"></span>
                                        <!-- <span class="fa fa-star"></span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-fore__card">
                                <div class="testimonials-fore__inner">
                                    <div class="testimonials-fore__content">
                                        <div class="testimonials-fore__thumb">
                                            <div class="testimonials-fore__author__image">
                                                <img src="assets\images\resources\man-in-suit-and-tie.png"
                                                    alt="author image" class="lazyload">
                                            </div>
                                            <div class="testimonials-fore__author__quite">
                                                <i class="icon-quite"></i>
                                            </div>
                                        </div>
                                        <div class="testimonials-fore__author">
                                            <h4 class="testimonials-fore__name">Dinesh Singh</h4>
                                            <!--<span class="testimonials-fore__deg">Senior doctor</span> -->
                                        </div>
                                        <p class="testimonials-fore__text"> Finest Lab at your doorstep. Quick and
                                            seamless process with humble and well trained staff. Delivers as promised.
                                            Kudos </p>
                                        <div class="testimonials-fore__content__shape">

                                        </div>
                                    </div>
                                    <div class="testimonials-fore__star">
                                        <span class="fa fa-star" style="color: rgb(236, 185, 15);"></span>
                                        <span class="fa fa-star" style="color: rgb(236, 185, 15);"></span>
                                        <span class="fa fa-star" style="color: rgb(236, 185, 15);"></span>
                                        <span class="fa fa-star" style="color: rgb(236, 185, 15);"></span>
                                        <!-- <span class="fa fa-star"></span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-fore__card">
                                <div class="testimonials-fore__inner">
                                    <div class="testimonials-fore__content">
                                        <div class="testimonials-fore__thumb">
                                            <div class="testimonials-fore__author__image">
                                                <img src="assets\images\resources\female-worker.png" alt="author image"
                                                    class="lazyload">
                                            </div>
                                            <div class="testimonials-fore__author__quite">
                                                <i class="icon-quite"></i>
                                            </div>
                                        </div>
                                        <div class="testimonials-fore__author">
                                            <h4 class="testimonials-fore__name">Sayali Sharma</h4>
                                            <!--<span class="testimonials-fore__deg">Senior doctor</span> -->
                                        </div>
                                        <p class="testimonials-fore__text">Pravi Labs is providing good services in
                                            vashi with good price. Thanks</p><br><br>
                                        <div class="testimonials-fore__content__shape">
                                            <img src="assets/images/shapes/testi-shape-1-2.png" alt="" class="lazyload">
                                        </div>
                                    </div>
                                    <div class="testimonials-fore__star">
                                        <span class="fa fa-star" style="color: rgb(236, 185, 15);"></span>
                                        <span class="fa fa-star" style="color: rgb(236, 185, 15);"></span>
                                        <span class="fa fa-star" style="color: rgb(236, 185, 15);"></span>
                                        <!-- <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial End -->
        <!-- testimonial End -->
        <!-- service section End -->
        <!-- Case studies section Start -->
        <!-- <section class="case-studies case-studies--home">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="sec-title text-center wow fadeInUp" data-wow-duration='700ms'>
                            <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-1.png" alt="Case studies" class="sec-title__img">Case studies</h6>
                            <h3 class="sec-title__title">Our latest case studies</h3>
                        </div>
                    </div>
                </div>
                <ul class="case-studies__list list-unstyled">
                    <li class="case-studies__list__item">
                        <div class="case-studies__list__item__content">
                            <div class="case-studies__list__item__thumb">
                                <img src="assets/images/resources/case-stady-1-1.png" alt="laboix">
                            </div>
                            <div class="case-studies__list__item__hover">
                                <h4 class="case-studies__list__item__title"><a href="about.html">Diagnostic imagine</a></h4>
                                <p class="case-studies__list__item__text">Orthopedics, Pediatric</p>
                            </div>
                        </div>
                    </li>
                    <li class="case-studies__list__item">
                        <div class="case-studies__list__item__content">
                            <div class="case-studies__list__item__thumb">
                                <img src="assets/images/resources/case-stady-1-2.png" alt="laboix">
                            </div>
                            <div class="case-studies__list__item__hover">
                                <h4 class="case-studies__list__item__title"><a href="about.html">Diagnostic imagine</a></h4>
                                <p class="case-studies__list__item__text">Orthopedics, Pediatric</p>
                            </div>
                        </div>
                    </li>
                    <li class="case-studies__list__item">
                        <div class="case-studies__list__item__content">
                            <div class="case-studies__list__item__thumb">
                                <img src="assets/images/resources/case-stady-1-3.png" alt="laboix">
                            </div>
                            <div class="case-studies__list__item__hover">
                                <h4 class="case-studies__list__item__title"><a href="about.html">Diagnostic imagine</a></h4>
                                <p class="case-studies__list__item__text">Orthopedics, Pediatric</p>
                            </div>
                        </div>
                    </li>
                    <li class="case-studies__list__item">
                        <div class="case-studies__list__item__content">
                            <div class="case-studies__list__item__thumb">
                                <img src="assets/images/resources/case-stady-1-4.png" alt="laboix">
                            </div>
                            <div class="case-studies__list__item__hover">
                                <h4 class="case-studies__list__item__title"><a href="about.html">Diagnostic imagine</a></h4>
                                <p class="case-studies__list__item__text">Orthopedics, Pediatric</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section> -->
        <!-- Case studies section End -->
        <!-- FAQ section Start -->
        <!-- <section class="faq-two" id="contact">
            <div class="faq-two__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url(assets/images/backgrounds/faq-bg.png);"></div>
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-6">
                        <div class="faq-two__left">
                            <div class="faq-two__top">
                                <div class="sec-title sec-title--two text-start wow fadeInUp" data-wow-duration='700ms'>
                                    <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-2.png" alt="FAQS" class="sec-title__img">FAQS</h6>
                                    <h3 class="sec-title__title">Have questions in your mind? get the answers now</h3>
                                </div>
                            </div>
                            <div class="faq-two__inner">
                                <div class="faq-page__accordion laboix-accrodion" data-grp-name="laboix-accrodion">
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4 class="accrodion-title__text">Why do lab tests sometimes need repeating?<span class="accrodion-title__icon"></span></h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p class="inner__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteradution in some form by injected humour, or randomised words which don't look even slightly believable. If you are going There are many variations</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accrodion active">
                                        <div class="accrodion-title">
                                            <h4 class="accrodion-title__text">Can cancer be detected with a blood test?<span class="accrodion-title__icon"></span> </h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p class="inner__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteradution in some form by injected humour, or randomised words which don't look even slightly believable. If you are going There are many variations</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4 class="accrodion-title__text">How is a blood sample collected?<span class="accrodion-title__icon"></span></h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p class="inner__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteradution in some form by injected humour, or randomised words which don't look even slightly believable. If you are going There are many variations</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4 class="accrodion-title__text">How is a urine sample collected?<span class="accrodion-title__icon"></span></h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p class="inner__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteradution in some form by injected humour, or randomised words which don't look even slightly believable. If you are going There are many variations</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-two__right">
                            <div class="faq-two__image">
                                <img src="assets/images/resources/faq-1-1.png" alt="laboix image">
                            </div>
                            <div class="faq-two__funfact">
                                <div class="faq-two__funfact__icon">
                                    <img src="assets/images/shapes/icon-1-1.png" alt="icon">
                                </div>
                                <h4 class="faq-two__funfact__count count-box">
                                    <span class="count-text" data-stop="500" data-speed="1500"></span>
                                    <span>k+</span>
                                </h4>
                                <p class="faq-two__funfact__text">Satisfied User </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- FAQ section End -->
        <br><br><br>
        <!-- Book An Appointment Now -->
        <section class="faq-two" id="contact">
            <div class="faq-two__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%"
                style="background-image: url(assets/images/backgrounds/faq-bg.webp);"
                alt="For Home Blood Collection Book An Appointment"></div>
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-6">
                        <div class="faq-two__left">
                            <div class="faq-two__top">
                                <div class="sec-title sec-title--two text-start wow fadeInUp" data-wow-duration='700ms'>
                                    <!--<h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-2.png" alt="FAQS" class="sec-title__img">FAQS</h6> /.sec-title__tagline -->
                                    <h2 class="sec-title__title">Book An Appointment Now!</h2>
                                    <!-- /.sec-title__title -->
                                </div><!-- /.sec-title -->
                            </div>
                            <div class="contact-form__inner">
                                <form class="contact-form" action="submit_form.php" method="POST">
                                    <div class="form-group">
                                        <label for="name">Name<span class="required">*</span></label>
                                        <input type="text" id="name" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="contact">Contact No.<span class="required">*</span></label>
                                        <input type="tel" id="contact" name="contact" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="date">Select Appointment Date<span class="required">*</span></label>
                                        <input type="date" id="date" name="date" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="time">select Time<span class="required">*</span></label>
                                        <input type="time" id="time" name="time" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Address (Your Address)</label>
                                        <textarea id="message" name="message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-two__right">
                            <div class="faq-two__image">
                                <img src="assets/images/resources/faq-1-1.webp" alt="laboix image" class="lazyload">
                            </div>
                            <div class="faq-two__funfact">
                                <div class="faq-two__funfact__icon">
                                    <img src="assets/images/shapes/icon-1-1.png" alt="icon" class="lazyload">
                                </div>
                                <h4 class="faq-two__funfact__count count-box">
                                    <span class="count-text" data-stop="180" data-speed="1500"></span>
                                    <span>+</span>
                                </h4>
                                <p class="faq-two__funfact__text">Satisfied Patients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Book An Appointment Now -->
        <style>
            .faq-two {
                position: relative;
                padding: 60px 0;
            }

            .faq-two__bg {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: -1;
            }

            .contact-form__inner {
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
                background-color: #f7f7f7;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .contact-form .form-group {
                margin-bottom: 15px;
            }

            .contact-form label {
                display: block;
                margin-bottom: 5px;
                font-weight: bold;
                font-display: swap;
            }

            .contact-form input,
            .contact-form textarea {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
                font-display: swap;
            }

            .contact-form input[type="date"] {
                padding: 9px;
            }

            .contact-form button {
                padding: 10px 20px;
                background-color: #283779;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 16px;
                font-display: swap;
            }

            .contact-form button:hover {
                background-color: #032146;
            }

            .required {
                color: red;
            }

            .faq-two__left,
            .faq-two__right {
                padding: 20px;
            }

            .faq-two__right .faq-two__image img {
                width: 100%;
                border-radius: 8px;
            }

            .faq-two__funfact {
                display: flex;
                align-items: center;
                margin-top: 20px;
            }

            .faq-two__funfact__icon {
                margin-right: 10px;
            }

            .faq-two__funfact__count {
                font-size: 24px;
                font-weight: bold;
                margin: 0;
                font-display: swap;
            }

            .faq-two__funfact__text {
                margin: 0;
            }

            @media (max-width: 991px) {

                .faq-two__left,
                .faq-two__right {
                    text-align: center;
                }

                .faq-two__funfact {
                    justify-content: center;
                }
            }
        </style>
        <!-- Blog section Start-->
        <section class="blog-two" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="sec-title text-center wow fadeInUp" data-wow-duration='700ms'>
                            <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-1.png"
                                    alt="Article" class="sec-title__img" class="lazyload">Latest Blogs</h6>
                            <!-- /.sec-title__tagline -->
                            <h2 class="sec-title__title">Latest news & articles from <br> the blog posts</h2>
                            <!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                    </div>
                </div>
                <div class="row gutter-y-30">
                    <div class="col-lg-6">
                        <div class="blog-two__card">
                            <div class="blog-two__thumb">
                                <img src="assets/images/blog/blog-2-1.webp" alt="laboix image">
                                <a href="blog-details-right.php" class="blog-two__thumb__link" class="lazyload"></a>
                            </div>
                            <div class="blog-two__content">
                                <!-- <div class="blog-two__content__date"> <span class="blog-card__two__date__day">05 </span>AUG</div>
                                    <div class="blog-two__content__comment"> 
                                    <i class="icon-chatting2"></i>
                                    <a class="blog-two__content__comment__text">2 Comment</a>
                                </div> -->
                                <br>
                                <h4 class="blog-two__content__title"><a href="blog-details-right.php">Full Body
                                        Checkups with a Special Attention to Diabetes Screening</a></h4>
                                <div class="blog-two__content__author">
                                    <!-- <a href="team-details.html" class="blog-two__content__author__item">
                                        <div class="blog-two__content__author__thumb">
                                            <img src="assets/images/blog/blog-author-1-1.png" alt="laboix author">
                                        </div>
                                        <div class="blog-two__content__author__content">
                                            <h5 class="blog-two__content__author__name">Darrell Steward</h5>
                                            <span class="blog-two__content__author__deg">Doctor</span>
                                        </div>
                                    </a> -->
                                    <div class="blog-two__content__link">
                                        <a href="blog-details-right.php" class="blog-two__content__link__btn">Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="blog-two__card__list list-unstyled">
                            <li class="blog-two__card__list__item">
                                <div class="blog-two__card__list__thumb">
                                    <img src="assets/images/blog/blog-s-2-1.webp
                                    " alt="laboix image">
                                    <a href="blog-details-right.php" class="blog-two__card__list__thumb__link"
                                        class="lazyload"></a>
                                </div>
                                <div class="blog-two__card__list__content">
                                    <!-- <ul class="blog-two__card__list__content__meta list-unstyled">
                                        <li class="blog-two__card__list__content__meta__item">
                                            <a><i class="icon-chatting2"></i>2 Comment</a>
                                        </li>
                                        <li class="blog-two__card__list__content__meta__item">
                                            <a><i class="icon-user"></i>by Admin</a>
                                        </li>
                                    </ul> -->
                                    <h4 class="blog-two__card__list__content__title"><a
                                            href="blog-details-right.php">Full Body Checkups with a Special Attention
                                            to Diabetes Screening </a></h4>
                                    <div class="blog-two__card__list__content__link">
                                        <a href="blog-details-right.php"
                                            class="blog-two__card__list__content__link__btn">Read More</a>
                                    </div>
                                </div>
                            </li>
                            <li class="blog-two__card__list__item">
                                <div class="blog-two__card__list__thumb">
                                    <img src="assets/images/blog/blog-s-2-2.webp" alt="laboix image">
                                    <a href="blog-details-right.php" class="blog-two__card__list__thumb__link"
                                        class="lazyload" class="lazyload"></a>
                                </div>
                                <div class="blog-two__card__list__content">
                                    <!-- <ul class="blog-two__card__list__content__meta list-unstyled">
                                        <li class="blog-two__card__list__content__meta__item">
                                           <a> <i class="icon-chatting2"></i>2 Comment</a>
                                        </li>
                                        <li class="blog-two__card__list__content__meta__item">
                                            <a><i class="icon-user"></i>by Admin</a>
                                        </li>
                                    </ul> -->
                                    <h4 class="blog-two__card__list__content__title"><a
                                            href="blog-details-left.php">Why Getting Regular Blood Tests is Crucial for
                                            Your Health </a></h4>
                                    <div class="blog-two__card__list__content__link">
                                        <a href="blog-details-left.php"
                                            class="blog-two__card__list__content__link__btn">Read More</a>
                                    </div>
                                </div>
                            </li>
                            <!-- <li class="blog-two__card__list__item">
                                <div class="blog-two__card__list__thumb">
                                    <img src="assets/images/blog/blog-s-2-3.png" alt="laboix image">
                                    <a href="blog-details-right.html" class="blog-two__card__list__thumb__link"></a>
                                </div>
                                <div class="blog-two__card__list__content">
                                    <ul class="blog-two__card__list__content__meta list-unstyled">
                                        <li class="blog-two__card__list__content__meta__item">
                                            <a href="blog-details-right.html"><i class="icon-chatting2"></i>2 Comment</a>
                                        </li>
                                        <li class="blog-two__card__list__content__meta__item">
                                            <a href="blog-details-right.html"><i class="icon-user"></i>by Admin</a>
                                        </li>
                                    </ul>
                                    <h4 class="blog-two__card__list__content__title"><a href="blog-details-right.html"> Chemical plant for workplace safety topics </a></h4>
                                    <div class="blog-two__card__list__content__link">
                                        <a href="#" class="blog-two__card__list__content__link__btn">Read More</a>
                                    </div>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog section End -->
        <!-- <div class="client-carousel client-carousel-one ">
            <div class="container">
                <div class="client-carousel__one laboix-owl__carousel owl-theme owl-carousel" data-owl-options='{
            "items": 5,
            "margin": 55,
            "smartSpeed": 700,
            "loop":true,
            "autoplay": 6000,
            "nav":true,
            "dots":false,
            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
            "responsive":{
                "0":{
                    "items":1,
                    "margin": 0
                },
                "360":{
                    "items":2,
                    "margin": 0
                },
                "575":{
                    "items":3,
                    "margin": 30
                },
                "768":{
                    "items":3,
                    "margin": 40
                },
                "992":{
                    "items": 4,
                    "margin": 40
                },
                "1200":{
                    "items": 5
                }
            }
            }'>
                    <div class="client-carousel__one__item">
                        <img src="assets/images/resources/brand-2-1.png" alt="laboix">
                    </div>
                    <div class="client-carousel__one__item">
                        <img src="assets/images/resources/brand-2-1.png" alt="laboix">
                    </div>
                    <div class="client-carousel__one__item">
                        <img src="assets/images/resources/brand-2-1.png" alt="laboix">
                    </div>
                    <div class="client-carousel__one__item">
                        <img src="assets/images/resources/brand-2-1.png" alt="laboix">
                    </div>
                    <div class="client-carousel__one__item">
                        <img src="assets/images/resources/brand-2-1.png" alt="laboix">
                    </div>
                    <div class="client-carousel__one__item">
                        <img src="assets/images/resources/brand-2-1.png" alt="laboix">
                    </div>
                    <div class="client-carousel__one__item">
                        <img src="assets/images/resources/brand-2-1.png" alt="laboix">
                    </div>
                    <div class="client-carousel__one__item">
                        <img src="assets/images/resources/brand-2-1.png" alt="laboix">
                    </div>
                    <div class="client-carousel__one__item">
                        <img src="assets/images/resources/brand-2-1.png" alt="laboix">
                    </div>
                    <div class="client-carousel__one__item">
                        <img src="assets/images/resources/brand-2-1.png" alt="laboix">
                    </div>
                </div>
            </div>
        <!-</div>-->
        <!----.client-carousel -->
        <?php include ('includes/footer.php');?>
        