<?php include ('includes/header.php');?>
<body class="custom-cursor">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M3HGNMSL"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Custom Cursor -->
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

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

        <style>
            .blink-text {
                color: red;
                animation: blink 2s infinite;

            }

            @keyframes blink {
                0% {
                    opacity: 1;
                }

                50% {
                    opacity: 0;
                }

                100% {
                    opacity: 1;
                }
            }
        </style>

        <header class="main-header sticky-header main-header--three sticky-header--normal">
            <div class="main-header__middle">
                <div class="container">
                    <div class="main-header__inner">
                        <div class="main-header__logo logo-laboix">
                            <a href="">
                                <img src="assets\images\pravi lab LOGO white.png" alt="Laboix HTML" width="130"
                                    class="lazyload">
                            </a>
                        </div><!-- /.main-header__logo -->
                        <nav class="main-header__nav main-menu">
                            <ul class="main-menu__list one-page-scroll-menu">
                                <li class="scrollToLink current"><a
                                        href="https://pravilabs.in">Home</a></li>
                                <li class="scrollToLink"><a href="https://pravilabs.in/#about">About Us</a></li>
                                <li class="scrollToLink"><a href="https://pravilabs.in/#our_features">Advantage</a></li>
                                <li class="scrollToLink"><a href="https://pravilabs.in/#lab_test">Lab Test</a></li>
                               
                                <li class="scrollToLink"><a href="doctors.php">Doctors</a></li>
                                    
                                <li class="scrollToLink"><a href="chemists.php">Chemists</a> </li>
                            
                                <!-- <li class="scrollToLink"><a href="#blog">Contact Us</a></li> -->
                                <li class="scrollToLink"><a href="https://pravilabs.in/#blog">Blog</a></li>
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
                                        href="https://pravilabs.in">Home</a></li>
                                <li class="scrollToLink"><a href="https://pravilabs.in/#about">About Us</a></li>
                                <li class="scrollToLink"><a href="https://pravilabs.in/#our_features">Advantage</a></li>
                                <li class="scrollToLink"><a href="https://pravilabs.in/#lab_test">Lab Tests</a></li>
                               
                                <li class="scrollToLink"><a href="doctors.php">Doctors</a></li>
                                    
                                <li class="scrollToLink"><a href="chemists.php">Chemists</a> </li>
                            
                                <!-- <li class="scrollToLink"><a href="#blog">Contact Us</a></li> -->
                                <li class="scrollToLink"><a href="https://pravilabs.in/#blog">Blog</a></li>

                            </ul>
                        </nav><!-- /.main-header__nav -->
                        <div class="main-header__link">
                            <a href="#contact" class="laboix-btn main-header__btn">Appoinment</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
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
                font-display: swap;
                display: inline-block;
                /* Ensure it fits the content */
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
    <p class="para3 p-1" style="color:#dbcaca">Serving Navi Mumbai, including Vashi, Sanpada, Juinagar, Koperkhairane, and Turbhe, as well as Mumbai, covering Wadala and Dadar.
    </p>
    
    
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
        <!-- About Us section Start -->
        <section class="about-fore" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-fore__left">
                            <div class="about-fore__top">
                                <div class="sec-title text-start wow fadeInUp" data-wow-duration='700ms'>
                                    <!-- <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-1.png"
                                            alt="About Us" class="sec-title__img"class="lazyload">Medical health at its best</h6> -->
                                    <!-- /.sec-title__tagline -->
                                    <h1 class="sec-title__title">Pravi Labs Turbhe, Sector 20 Near Janta Market </h1>
                                    <!-- /.sec-title__title -->
                                </div><!-- /.sec-title -->
                                <p class="about-fore__top__text">Pravi Labs in Sector 20 , Turbhe offers complete blood tests, urine tests, hormonal tests, and more . Our comprehensive health packages are designed to meet your wellness needs and help you stay proactive about your health.</p>
                                <p class="about-fore__top__text">With our free home blood collection service in 60 minutes, testing is simple and hassle-free. Get fast results delivered online within 3-4 hours.</p>
                                <strong>Book your test today with Pravi Labs in Sector 20, Turbhe.</strong>
                            </div>
                            <div class="Test-section" style="background-color: #f0f0f0; padding-top: 20px; padding-bottom: 20px;">
                                <div class="container">
                                    <div class="section-title text-center">
                                        <h2>Some of the Tests offered by Pravi Labs</h2>
                 
                                        <p>Be it common and regular Tests or Specilized Tests, We offer Everything at Pravi Labs</p>
                                    </div>

                                    <br>


                                    <div class="row">
                                        <!-- Updated Test Card 1 -->
                                        <div class="col-md-3">
                                            <div class="Test-card">
                                                <ul class="tests">
                                                    <li>CBC</li>
                                                    <li>Liver Function Test (LFT)</li>
                                                    <li>Kidney Function Test (KFT)</li>
                                                    <li>Malaria</li>
                                                    <li>Lipid Profile</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Updated Test Card 2 -->
                                        <div class="col-md-3">
                                            <div class="Test-card">
                                                <ul class="tests">
                                                    <li>Diabetes Panel</li>
                                                    <li>Blood Sugar Level (HbA1c)</li>
                                                    <li>Vitamin B12</li>
                                                    <li>Vitamin D3</li>
                                                    <li>Dengue</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Updated Test Card 3 -->
                                        <div class="col-md-3">
                                            <div class="Test-card">
                                                <ul class="tests">
                                                    <li>Typhoid</li>
                                                    <li>Thyroid Function Tests</li>
                                                    <li>Blood Glucose Test</li>
                                                    <li>Progesterone Test</li>
                                                    <li>Chikungunya Tests</li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Updated Test Card 4 -->
                                        <div class="col-md-3">
                                            <div class="Test-card">
                                                <ul class="tests">
                                                    <li>Rheumatoid Factor (RF)</li>
                                                    <li>Insulin Levels</li>
                                                    <li>Oral Glucose Tolerance Test</li>
                                                    <li>Calcium Test</li>
                                                    <li>Parathyroid Hormone</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <p class="section-title text-center">Book your test with Pravi Labs today for fast, accurate results and free home blood collection!</p>
                            </div>
                            <br>

        <style>
                ul li {
                        list-style: none; /* Removes default bullets */
                        position: relative;
                        font-size: 14px;
                        font-weight: 700;
                        color: #332f2f;
                }

                .Test-section ul li::before {
                        content: "\f00c"; /* Unicode for check icon */
                        font-family: "Font Awesome 5 Free"; /* Correct Font Awesome family */
                        font-size: 16px;
                        font-weight: 900; /* Solid style */
                        color: #283779; /* Icon color */
                        margin-right: 10px; /* Add space between icon and text */
                }
           

        </style>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- About Us section End -->


        <style>
            .container-card {
                display: flex;
                justify-content: center;
                /* Center the cards */
                margin: 80px;
                /* Adjust the container margin as needed */
                flex-wrap: wrap;
            }

            .card {
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                border-radius: 8px;
                overflow: hidden;
                margin: 10px;
                /* Reduce the margin to decrease the gap */
                background-color: #f9f9f9;
            }

            .card-content {
                padding: 20px;
                background-color: #f9f9f9;
            }

            .card-image {
                width: 700px;
                height: 450px;
                overflow: hidden;
                position: relative;
            }

            .card-image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                position: absolute;
                top: 0;
                left: 100%;
                transition: left 1s ease-in-out;
            }

            .card-content-card {
                width: 500px;
                /* Decreased width for the content card */
            }

            .card-image img.active {
                left: 0;
            }

            .card-image img.last-active {
                left: 100%;
            }




            @media (max-width: 768px) {
                .container-card {
                    margin: 20px;
                }

                .card {
                    width: 100%;
                    /* Full width on small devices */
                    margin: 10px 0;
                    /* Reduce margin to fit better */
                }

                .card-image {
                    height: 300px;
                    /* Adjust height for smaller screens */
                }
            }

            @media (max-width: 480px) {
                .card-image {
                    height: 200px;
                    /* Further adjust height for very small screens */
                }
            }

            .about-fore {
                padding-bottom: 0;
            }
        </style>

        <div class="container-card">
            <div class="card card-content-card">
                <div class="card-content">
                    <h3>Pathology Lab & home blood collection services in Turbhe Sector 20</h3>
                    <p><strong>Pravilabs || Laboratory & Research</strong></p>
                    <p><strong>8104022721</strong></p>
                    <p>Open until 9:00 PM</p>
                    <!--<p><strong>OPEN NOW</strong></p>-->
                    <a href="#contact" style="text-decoration: none;">
                        <button>Book an Appointment</button>
                    </a>
                </div>
            </div>
            <div class="card card-image">
                <img src="assets/images/pravilabs _Janta Market Turbhe.jpg" alt="Image 1" class="slider-image active"
                    class="lazyload">
                <img src="assets\images\pravilabs_pravilabsAll.jpg" alt="Image 2" class="slider-image" class="lazyload">
            </div>
        </div>

        <script>
            let currentImageIndex = 0;
            const images = document.querySelectorAll('.slider-image');

            function showNextImage() {
                const lastImageIndex = currentImageIndex;
                images[lastImageIndex].classList.remove('active');
                images[lastImageIndex].classList.add('last-active');

                currentImageIndex = (currentImageIndex + 1) % images.length;

                images[currentImageIndex].classList.add('active');

                setTimeout(() => {
                    images[lastImageIndex].classList.remove('last-active');
                }, 250); // Match this timeout to the CSS transition duration
            }

            setInterval(showNextImage, 3000);

        </script>

        <section class="contact-two" id="contact" style="margin-bottom:30px;">
            <div class="container" style="padding: 20px 0;">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="contact-two__left wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                            <div class="contact-two__content">
                                <div class="contact-two__content__top">
                                    <h6 class="contact-two__content__top__title">Ask Your Doubts</h6>
                                </div>
                                <ul class="contact-two__content__list list-unstyled">
                                    <li class="contact-two__content__list__item">
                                        <div class="contact-two__content__icon">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </div>
                                        <div class="contact-two__content__inner">
                                            <span class="contact-two__content__title">Have Questions? Call or WhatsApp Us                                            </span>
                                            <h4 class="contact-two__content__text"><a href="tel:8104022721">
                                                    8104022721</a></h4>
                                        </div>
                                    </li>
                                    <li class="contact-two__content__list__item">
                                        <div class="contact-two__content__icon">
                                            <i class="icon-email1"></i>
                                        </div>
                                        <div class="contact-two__content__inner">
                                            <span class="contact-two__content__title">Email us now</span>
                                            <h4 class="contact-two__content__text"><a
                                                    href="mailto:care@pravilabs.in">care@pravilabs.in</a></h4>
                                        </div>
                                    </li>
                                    <li class="contact-two__content__list__item">
                                        <div class="contact-two__content__icon">
                                            <i class="icon-pin"></i>
                                        </div>
                                        <div class="contact-two__content__inner">
                                            <span class="contact-two__content__title">Reach out to us</span>
                                            <h4 class="contact-two__content__text">
                                                Backoffice : Office F-09, Nano Wing, Vashi Fantasia Business Park,
                                                Sector 30A, Vashi, Navi Mumbai 400703</h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="contact-two__right wow fadeInUp" data-wow-duration="700ms" data-wow-delay="700ms">
                            <div class="sec-title sec-title--two text-start wow fadeInUp" data-wow-duration='1500ms'>
                                <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-2.png"
                                        alt="Contact With Us" class="sec-title__img" class="lazyload">Contact With Us
                                </h6>
                                <h5 style="color: #fff;">Schedule Your Free Home Collection Today
                                    </h5>
                            </div>
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
            </div>
            <div class="contact-two__map">
                <div class="google-map google-map__contact">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.9426746089325!2d72.99650747520514!3d19.06625788213628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c1e111515509%3A0xcc944b515063cbcc!2sPravi%20Labs%20(Corporate%20Office)!5e0!3m2!1sen!2sin!4v1722338478591!5m2!1sen!2sin"
                        width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="google-map__contact__pin">
                        <img src="assets/images/shapes/pin-1-2.png" alt="laboix icon" class="lazyload">
                    </div>
                </div>
            </div>
    </div>
    </section>
    <style>
        .contact-form {
            width: 100%;
            max-width: 500px;
            /* Adjust this value to set the maximum width of the form */
            margin: 0 auto;
            /* Center the form */
        }

        .form-group {
            margin-bottom: 1rem;
            /* Reduced margin to decrease length */
        }

        .form-group label {
            display: block;
            font-weight: bold;
            font-display: swap;
            margin-bottom: 0.5rem;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-group input[type="date"],
        .form-group input[type="time"] {
            max-width: 100%;
        }

        .form-group textarea {
            height: 80px;
            /* Reduced height of textarea */
            resize: vertical;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            font-display: swap;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
    <!-- footer -->

    <?php include ('includes/footer.php');?>