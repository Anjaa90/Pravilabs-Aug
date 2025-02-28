<?php include ('includes/header.php');?>

<body class="custom-cursor">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M3HGNMSL"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
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
                                <li class="scrollToLink"><a href="chemists.php">Chemists</a></li>
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
                                <li class="scrollToLink"><a href="chemists.php">Chemists</a></li>
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
                    <div class="col-md-6 pravi-popup" >
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


        <section class="page-header">
            <div class="page-header__bg"
                style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2 class="page-header__title">Stool Test</h2>
                <ul class="nionx-breadcrumb list-unstyled">
                    <li><a href="">Home</a></li>
                    <li><span>Lab Tests</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->
        <section class="service-details">
            <div class="container">
                <div class="row gutter-y-30">
                    <div class=" col-lg-4">
                        <div class="service-sidebar">

                            <div class="service-sidebar__single  wow fadeInUp" data-wow-delay='500ms'>
                                <h3 class="service-sidebar__title">All Service</h3><!-- /.service-sidebar__title -->
                                <ul class="list-unstyled service-sidebar__nav">
                                    <li><a href="Blood-Test.php">Blood Tests</a></li>
                                    <li><a href="Urine-Test.php">Urine Tests</a></li>
                                    <li><a href="Stool-Test.php">Stool Tests</a></li>
                                    <li><a href="Genetics-Test.php">Genetic Tests</a></li>
                                    <li><a href="Biopsy-Test.php">Biopsy</a></li>
                                    <!-- <li><a href="service-d-diagnoses.html">Safe diagnoses</a></li> -->
                                </ul><!-- /.list-unstyled service-sidebar__nav -->
                            </div><!-- /.service-sidebar__single -->

                            <div class="service-sidebar__single  wow fadeInUp" data-wow-delay='500ms'>
                                <div class="service-sidebar__contact">
                                    <h3 class="service-sidebar__contact-title">Get a free quick solution of website</h3>
                                    <!-- /.service-sidebar__contact__title -->
                                    <div class="service-sidebar__contact-btn">
                                        <a href="contact.php" class="laboix-btn laboix-btn--submite">Contact</a>
                                    </div><!-- /.service-sidebar__contact__icon -->
                                    <div class="service-sidebar__contact-image">
                                        <img src="assets/images/service/service-man-1.png" alt="" class="lazyload">
                                    </div>
                                    <div class="service-sidebar__contact-angle">
                                        <img src="assets/images/shapes/service-shape.png" alt="" class="lazyload">
                                    </div>
                                </div><!-- /.service-sidebar__contact -->
                            </div>
                        </div><!-- /.sidebar -->
                    </div><!-- /. col-lg-4 -->
                    <div class=" col-lg-8">
                        <div class="service-details__content">
                            <div class="service-details__single">
                                <div class="service-details__thumbnail wow fadeInUp" data-wow-delay='300ms'>
                                    <img src="assets/images/service/service-d-1-3.png" alt="Pathology testing"
                                        class="lazyload">
                                </div><!-- /.service-details__thumbnail -->

                                <h3 class="service-details__title wow fadeInUp" data-wow-delay='300ms'>Stool Test</h3>
                                <!-- /.service-details__title -->

                                <p class="service-details__text wow fadeInUp" data-wow-delay='350ms'>Stool testing is
                                    also a part of the pathology test list that is performed to check for various health
                                    conditions. The most common stool tests are the following:
                                    <li>Occult Blood Test looks for hidden (occult) blood in the stool, which can be a
                                        sign of
                                        colorectal cancer or other gastrointestinal disorders.</li>
                                    <li>C-Reactive Protein (CRP) Stool Test looks for CRP, a protein produced by the
                                        liver in
                                        response to inflammation in the stool. High levels of CRP in the stool can be a
                                        sign of
                                        inflammatory bowel disease or other gastrointestinal disorders.</li>

                                </p>

                                <!-- <h3 class="service-details__sub-title wow fadeInUp" data-wow-delay='300ms'>Nullam sed mi non odio feugiat volutpat sit amet</h3> -->
                                <!-- /.service-details__text -->
                                <!-- <p class="service-details__text wow fadeInUp" data-wow-delay='350ms'>Nam vel lacus eu nisl bibendum accumsan vitae vitae nibh. Nam nec eros id magna hendrerit sagittis. Nullam sed mi non odio feugiat volutpat sit amet nec elit. Maecenas</p> -->
                            </div>

                            <!-- <div class="service-details__single">
                                <div class="service-details__single-inner">
                                    <h3 class="service-details__title">Why choose?</h3>
                                    <div class="row gutter-y-30">
                                        <div class="col-md-6">
                                            <div class="service-details__inner-item wow fadeInUp " data-wow-delay="300ms">
                                                <div class="item-icon">
                                                    <div class="icon">
                                                        <i class="icon-chemistry-1"></i>
                                                    </div>
                                                </div>
                                                <div class="item-content">
                                                    <h4 class="item__title"><a href="about.html">Latest equipment</a></h4>
                                                    <p class="item__dec">Lorem Ipsum is simply dummy typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="service-details__inner-item wow fadeInUp " data-wow-delay="300ms">
                                                <div class="item-icon">
                                                    <div class="icon">
                                                        <i class="icon-safe"></i>
                                                    </div>
                                                </div>
                                                <div class="item-content">
                                                    <h4 class="item__title"><a href="about.html">Safe diagnoses</a></h4>
                                                    <p class="item__dec">Lorem Ipsum is simply dummy typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="service-details__single wow fadeInUp" data-wow-delay='300ms'>
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <div class="service-details__image__item">
                                            <img src="assets/images/service/service-s-1-1.png" alt="service-details__image__item">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="service-details__benefit">
                                            <h3 class="service-details__benefit__title">Our few benefits</h3>
                                            <p class="service-details__benefit__text">Nam vel lacus eu nisl bibendum accumsan vitae vite nibh. Nam nec eros id magna hendrerit sagittis. </p>
                                            <h4 class="service-details__benefit__sub_title">Nam nec eros id magna hendrerit</h4>
                                            <ul class="list-unstyled service-details__list">
                                                <li class="service-details__list__item"><i class="fas fa-check-circle"></i> Nibh. Nam nec eros id magna hend</li>
                                                <li class="service-details__list__item"><i class="fas fa-check-circle"></i> Vitae nibh. Nam nec eros id magna he</li>
                                                <li class="service-details__list__item"><i class="fas fa-check-circle"></i> Nam nec eros id magna </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <div class="service-details__single">
                                <div class="faq-page__accordion laboix-accrodion" data-grp-name="laboix-accrodion">
                                    <!-- <div class="accrodion">
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
                                    </div> -->
                                    <!-- <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4 class="accrodion-title__text">How is a urine sample collected?<span class="accrodion-title__icon"></span></h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p class="inner__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteradution in some form by injected humour, or randomised words which don't look even slightly believable. If you are going There are many variations</p>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div><!-- / -->
                        </div><!-- /.service-details__content -->
                    </div><!-- /.col-md-12 col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-details -->


        <!-- footer -->
        <?php include ('includes/footer.php');?>