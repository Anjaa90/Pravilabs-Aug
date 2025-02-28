<?php include('includes/header.php'); ?>

<body class="custom-cursor">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M3HGNMSL" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Custom Cursor -->
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <!-- Preloader Start-->
    <div class="preloader">
        <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>
    </div>
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
                            <a href="index.php">
                                <img src="assets\images\pravi lab LOGO white.png" alt="Laboix HTML" width="130">
                            </a>
                        </div><!-- /.main-header__logo -->
                        <nav class="main-header__nav main-menu">
                            <ul class="main-menu__list one-page-scroll-menu">
                                <li class=" scrollToLink current"><a href="https://pravilabs.in">Home</a></li>
                                <li class="scrollToLink"><a href="https://pravilabs.in/#about">About Us</a></li>
                                <li class="scrollToLink"><a href="https://pravilabs.in/#our_features">Our Features</a>
                                </li>
                                <li class="scrollToLink"><a href="https://pravilabs.in/#lab_test">Lab Tests</a></li>

                                <li class="scrollToLink"><a href="doctors.php">Doctors</a></li>
                                <li class="scrollToLink"><a href="chemists.php">Chemists</a></li>
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
                                <li class="scrollToLink current"><a href="https://pravilabs.in">Home</a></li>
                                <li class="scrollToLink"><a href="https://pravilabs.in/#about">About Us</a></li>
                                <li class="scrollToLink"><a href="https://pravilabs.in/#our_features">Our Features</a>
                                </li>
                                <li class="scrollToLink"><a href="https://pravilabs.in/#lab_test">Lab Tests</a></li>

                                <li class="scrollToLink"><a href="doctors.php">Doctors</a>
                                </li>
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
            <p class="para3 p-1" style="color:#dbcaca">Serving Navi Mumbai, including Vashi, Sanpada, Juinagar,
                Koperkhairane, and Turbhe, as well as Mumbai, covering Wadala and Dadar.</p>


            <div class="container">
                <div class="row">
                    <!-- Column 1 -->
                    <div class="col-md-6 pravi-popup ">
                        <p><i class="fa-solid fa-house"></i> Home Visit in 60 Mins - Fast</p>
                        <p><i class="fa-solid fa-user-doctor"></i> Verified by MD Doctors</p>
                    </div>

                    <!-- Column 2 -->
                    <div class="col-md-6 pravi-popup" ">
                        <p><i class=" fa-regular fa-file"></i> Correct Reports</p>
                        <p><i class="fa-solid fa-vial"></i> Accurate Testing</p>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-1"></div>
                    <div class="col-5 d-flex justify-content-center">
                        <a href="https://api.whatsapp.com/send/?phone=918104022721&text&type=phone_number&app_absent=0"
                            target="_blank" class="whatsapp" style="text-decoration: none;">
                            <button class="whatsapp"><i class="fa-brands fa-whatsapp""></i> WhatsApp</button>
                        </a>
                    </div>
                    
                    <div class=" col-5 d-flex justify-content-center">
                                    <a href="tel:+91 8104022721" class="call" style="text-decoration: none;">
                                        <button class="call"><i class="fa-solid fa-phone"></i> Call</button>
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
                color: #ffffff;
                /* Text color */
                text-shadow: 2px 2px 4px #e21414e3;
                /* Subtle white glow */
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

            .whatsapp i {
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
            button.whatsapp,
            button.call {
                background-color: #25D366;
                /* WhatsApp green for WhatsApp button */
                border: none;
                color: #ffffff;
                font-size: 16px;
                padding: 12px 20px;
                border-radius: 8px;
                cursor: pointer;
                width: 100%;
                max-width: 200px;
                text-align: center;
                margin: 10px;
                /* Add margin between buttons */
                transition: background-color 0.3s ease;
            }

            button.call {
                background-color: #e21414e3;
                /* Red for Call Now button */
                padding: 12px 40px;

            }

            /* Hover effects */
            button.whatsapp:hover {
                background-color: #20b358;
                /* Slightly darker green */
            }

            button.call:hover {
                background-color: #e21414e3;
                /* Slightly darker red */
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
                    flex-direction: row;
                    /* Align buttons horizontally */
                    justify-content: center;
                    gap: 10px;
                    /* Add space between buttons */
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
                    flex-direction: row;
                    /* Align buttons horizontally */
                    justify-content: center;
                    gap: 8px;
                    /* Add space between buttons */
                }
            }
        </style>


        <section class="page-header">
            <div class="page-header__bg"
                style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2 class="page-header__title">Why Getting Regular Blood Tests is Crucial for Your Health</h2>
                <ul class="nionx-breadcrumb list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><span>Blog</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="blog-one blog-one--page">
            <div class="container">
                <div class="row gutter-y-60 justify-content-center">
                    <!-- <div class="col-lg-4">
                        <div class="sidebar">
                            <aside class="widget-area">
                                <div class="sidebar__single--search wow fadeInUp" data-wow-delay='300ms'>
                                    <form action="#" class="sidebar__search">
                                        <button type="submit" aria-label="search submit">
                                            <span><i class="icon-search"></i></span>
                                        </button>
                                        <input type="text" placeholder="Type here">
                                    </form>
                                </div><

                                <div class="sidebar__single wow fadeInUp" data-wow-delay='300ms'>
                                    <h4 class="sidebar__title">Latest post</h4>
                                    <ul class="sidebar__posts list-unstyled">
                                        <li class="sidebar__posts__item">
                                            <div class="sidebar__posts__image">
                                                <img src="assets/images/blog/lp-1-1.jpg" alt="laboix">
                                            </div>
                                            <div class="sidebar__posts__content">
                                                <p class="sidebar__posts__meta"><a href="#"><i class="icon-clock-1"></i>26 Mar, 2023</a></p>
                                                <h4 class="sidebar__posts__title"><a href="blog-details-right.html">The complete web developer guideline </a></h4>
                                            </div>
                                        </li>

                                        <li class="sidebar__posts__item">
                                            <div class="sidebar__posts__image">
                                                <img src="assets/images/blog/lp-1-2.jpg" alt="laboix">
                                            </div>
                                            <div class="sidebar__posts__content">
                                                <div class="sidebar__posts__content">
                                                    <p class="sidebar__posts__meta"><a href="#"><i class="icon-clock-1"></i>26 Mar, 2023</a></p>
                                                    <h4 class="sidebar__posts__title"><a href="blog-details-right.html">The complete web developer guideline </a></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="sidebar__posts__item">
                                            <div class="sidebar__posts__image">
                                                <img src="assets/images/blog/lp-1-3.jpg" alt="laboix">
                                            </div>
                                            <div class="sidebar__posts__content">
                                                <div class="sidebar__posts__content">
                                                    <p class="sidebar__posts__meta"><a href="#"><i class="icon-clock-1"></i>26 Mar, 2023</a></p>
                                                    <h4 class="sidebar__posts__title"><a href="blog-details-right.html">The complete web developer guideline</a></h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="sidebar__single wow fadeInUp" data-wow-delay='300ms'>
                                    <h4 class="sidebar__title">Categories</h4>
                                    <ul class="sidebar__categories list-unstyled">
                                        <li class="sidebar__categories__item"><a href="#">Luxury sofa</a></li>
                                        <li class="sidebar__categories__item"><a href="#">Villa residency</a></li>
                                        <li class="sidebar__categories__item"><a href="#">Free testing</a></li>
                                        <li class="sidebar__categories__item"><a href="#">Laboratory</a></li>
                                        <li class="sidebar__categories__item"><a href="#">Digital solution</a></li>
                                    </ul>
                                </div>
                                <div class="sidebar__single wow fadeInUp" data-wow-delay='300ms'>
                                    <h4 class="sidebar__title">Tags</h4>
                                    <div class="sidebar__tags">
                                        <a class="sidebar__tag__item" href="#">Marketing</a>
                                        <a class="sidebar__tag__item" href="#">Development</a>
                                        <a class="sidebar__tag__item" href="#">Digital</a>
                                        <a class="sidebar__tag__item" href="#">Design</a>
                                    </div>
                                </div>

                                <div class="sidebar__single wow fadeInUp" data-wow-delay='300ms'>
                                    <h4 class="sidebar__title">Comments</h4>
                                    <ul class="sidebar__comments list-unstyled">
                                        <li class="sidebar__comments__item">
                                            <div class="sidebar__comments__icon"> <i class="icon-chat2"></i></div>
                                            <h6 class="sidebar__comments__title">
                                                <a href="#">There are maniey free variations Lorem available Here</a>
                                            </h6>
                                        </li>
                                        <li class="sidebar__comments__item">
                                            <div class="sidebar__comments__icon"> <i class="icon-chat2"></i> </div>
                                            <h6 class="sidebar__comments__title">
                                                <a href="#">There are maniey free variations Lorem available Here</a>
                                            </h6>
                                        </li>
                                        <li class="sidebar__comments__item">
                                            <div class="sidebar__comments__icon"> <i class="icon-chat2"></i> </div>
                                            <h6 class="sidebar__comments__title">
                                                <a href="#">There are maniey free variations Lorem available Here</a>
                                            </h6>
                                        </li>
                                        <li class="sidebar__comments__item">
                                            <div class="sidebar__comments__icon"> <i class="icon-chat2"></i> </div>
                                            <h6 class="sidebar__comments__title">
                                                <a href="#">There are maniey free variations Lorem available Here</a>
                                            </h6
                                        </li>
                                    </ul>
                                </div>

                            </aside>
                        </div>
                    </div> -->
                    <div class="col-lg-8">
                        <div class="blog-details">
                            <div class="blog-card__two">
                                <div class="blog-card__two__image">
                                    <img src="assets/images/blog/blog-d-1-1.jpg" alt="laboix">

                                </div>
                                <div class="blog-card__two__content">
                                    <!-- <ul class="list-unstyled blog-card__two__meta">
                                        <li class="blog-card__two__meta__item"><a href="team.html"> <i class="icon-user"></i>By admin</a></li>
                                        <li class="blog-card__two__meta__item"><a href="blog-details.html"> <i class="icon-chatting2"></i> 2 Comment</a></li>
                                    </ul> -->
                                    <h3 class="blog-card__two__title blog-card__two__title--two"><a
                                            href="blog-details-right.php">Why Getting Regular Blood Tests is Crucial
                                            for Your Health</a></h3><!-- /.blog-card__two__title -->
                                    <p class="blog-card__two__text blog-card__two__text--two">In the quest for optimal
                                        health and well-being, many of us focus on diet, exercise, and lifestyle
                                        choices. However, there's a critical component that often gets overlooked:
                                        regular blood tests. While they may seem like a routine part of healthcare,
                                        these tests provide invaluable insights into your body's internal workings and
                                        can be key to catching potential issues early. Here's why getting blood tests
                                        done regularly is important and what you should keep in mind.
                                    <h4>1. Early Detection of Health Issues</h4>
                                    </p><!-- /.blog-card__two-two__text -->
                                    <p class="blog-card__two__text blog-card__two__text--two">One of the primary
                                        benefits of blood tests is their ability to detect potential health issues
                                        before symptoms even appear. For instance:</p>
                                    <!-- /.blog-card__two-two__text -->
                                    <h5>Cholesterol Levels:</h5>
                                    <p>Regular checks can identify high cholesterol, a risk factor for heart disease.
                                    </p>
                                    <h5>Blood Sugar Levels:</h5>
                                    <p>Monitoring glucose can help diagnose diabetes or prediabetes early.</p>
                                    <h5>Thyroid Function:</h5>
                                    <p>Thyroid tests can reveal dysfunctions that might be causing unexplained weight
                                        changes, fatigue, or mood swings.</p>
                                    <h4>2. Monitoring Chronic Conditions</h4>
                                    <p>If you have a chronic condition like diabetes, hypertension, or thyroid disease,
                                        regular blood tests are essential for monitoring your health status and
                                        adjusting treatments. They help ensure that your medications are working as
                                        intended and can alert your doctor to any necessary changes.</p>

                                    <h4>3. Assessing Organ Function</h4>
                                    <p>Blood tests provide crucial information about how well your organs are
                                        functioning:</p>
                                    <h5>Liver Function Tests:</h5>
                                    <p>These measure enzymes and proteins in the blood to assess liver health.</p>
                                    <h5>Kidney Function Tests: </h5>
                                    <p> Tests like creatinine and BUN help evaluate how well your kidneys are filtering
                                        waste.</p>
                                    <h5>Complete Blood Count (CBC):</h5>
                                    <p>This test provides a comprehensive view of your blood cells and can indicate
                                        issues with bone marrow or immune system function.</p>
                                    <h4>4. Evaluating Nutritional Deficiencies</h4>
                                    <p>Blood tests can reveal deficiencies in essential nutrients, such as:</p>
                                    <h5>Vitamin D:</h5>
                                    <p> Important for bone health and immune function.</p>
                                    <h5>Iron:</h5>
                                    <p> Essential for oxygen transport in the blood; deficiency can lead to anemia.</p>
                                    <h5>B Vitamins:</h5>
                                    <p> Vital for energy production and brain function.

                                    </p>
                                    <h4>5. Guiding Treatment Decisions</h4>
                                    <p>For those undergoing treatment for various conditions, blood tests are critical
                                        for assessing how well the treatment is working. For example:</p>
                                    <p>Cancer Treatments: Regular tests can monitor tumor markers and assess treatment
                                        effectiveness.</p>
                                    <p>Medication Monitoring: Some medications require regular blood level checks to
                                        avoid toxicity and ensure efficacy.</p>
                                    <h4>6. Personalized Health Insights
                                    </h4>
                                    <p>With advancements in medical science, blood tests can now provide personalized
                                        health insights. Genetic and advanced biomarkers can help tailor health
                                        strategies specifically for you, based on your unique genetic makeup and
                                        lifestyle.</p>
                                    <h4>When to Get Blood Tests Done</h4>
                                    <p>The frequency and type of blood tests you need can depend on several factors:</p>
                                    <h5>Age:</h5>
                                    <p>Regular testing may be recommended as you age.</p>
                                    <h5>Family History:</h5>
                                    <p> If you have a family history of certain diseases, you might need more frequent
                                        tests.

                                    </p>
                                    <h5>Lifestyle Factors:</h5>
                                    <p>Diet, exercise, and lifestyle choices can influence the frequency and type of
                                        tests required.</p>
                                    <h5>Current Health Conditions:</h5>
                                    <p> Existing health conditions or medications may necessitate regular monitoring.
                                    </p>
                                    <p>Regular blood tests are a powerful tool for maintaining and improving your
                                        health. They offer early detection of potential problems, help monitor chronic
                                        conditions, assess organ function, and guide treatment decisions. Whether you're
                                        looking to catch issues early, manage a chronic condition, or just stay on top
                                        of your overall health, blood tests are a vital component of proactive
                                        healthcare.</p>
                                    <p>PraviLabs is always available to collect blood samples at your doorstep. Just
                                        visit our website, www.pravilabs.in or you can just search for Best pathology
                                        lab in Vashi. We are there to help you throughout your blood test. We provide
                                        services for Vashi, Sanpada, Turbhe, Koparkhairne, and Juinagar.</p>




                                </div><!-- /.blog-card-two__content -->
                            </div><!-- /.blog-card -->

                            <!-- <div class="blog-details__meta">
                                <div class="blog-details__tags wow fadeInUp" data-wow-delay='300ms'>
                                    <h4 class="blog-details__tags__title">Post in: </h4>
                                    <div class="sidebar__tags">
                                        <button class="laboix-btn">Laboratory</button>
                                        <button class="laboix-btn">Science</button>
                                    </div>
                                </div>

                                <div class="blog-details__tags wow fadeInUp" data-wow-delay='500ms'>
                                    <h4 class="blog-details__tags__title">Tags: </h4>
                                    <div class="sidebar__tags2">
                                        <a href="#">Safty</a> <span> , </span> <a href="#">Learning</a>
                                    </div>
                                </div>
                            </div> -->
                        </div>

                        <!-- <div class="comments-one">
                            <h3 class="comments-one__title wow fadeInUp" data-wow-delay='300ms'>2 comments</h3>
                            <ul class="list-unstyled comments-one__list">
                                <li class="comments-one__card wow fadeInUp" data-wow-delay='300ms'>
                                    <div class="comments-one__card__image">
                                        <img src="assets/images/blog/blog-comment-1-1.png" alt="">
                                    </div>
                                    <div class="comments-one__card__content">
                                        <h3 class="comments-one__card__title">David shon</h3>
                                        <p class="comments-one__card__text">Nam vel lacus eu nisl bibendum accumsan vitae vitae nibh. Nam nec eros id magna hendrerit sagittis. Nullam sed mi non odio feugiat volutpat sit amet nec elit. </p>
                                        <div class="comments-one__card__btn">
                                            <a href="blog-details-right.html" class="laboix-btn comments-one__card__reply">Reply</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="comments-one__card wow fadeInUp" data-wow-delay='300ms'>
                                    <div class="comments-one__card__image">
                                        <img src="assets/images/blog/blog-comment-1-2.png" alt="">
                                    </div>
                                    <div class="comments-one__card__content">
                                        <h3 class="comments-one__card__title">Jhon watchson</h3>
                                        <p class="comments-one__card__text">Nam vel lacus eu nisl bibendum accumsan vitae vitae nibh. Nam nec eros id magna hendrerit sagittis. Nullam sed mi non odio feugiat volutpat sit amet nec elit.
                                        </p>
                                        <div class="comments-one__card__btn">
                                            <a href="blog-details-right.html" class="laboix-btn comments-one__card__reply">Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> -->

                        <!-- <div class="comments-form">
                            <h3 class="comments-form__title wow fadeInUp" data-wow-delay='300ms'>Add a review</h3>
                            <form class="comments-form__form contact-form-validated form-one wow fadeInUp" data-wow-delay='300ms'>
                                <div class="form-one__group">
                                    <div class="form-one__control">
                                        <input type="text" name="name" placeholder="Your Name">
                                    </div>
                                    <div class="form-one__control">
                                        <input type="email" name="email" placeholder="Email Address">
                                    </div>
                                    <div class="form-one__control form-one__control--full">
                                        <textarea name="message" placeholder="Write a Message"></textarea>
                                    </div>
                                    <div class="form-one__control">
                                        <button type="submit" class="laboix-btn laboix-btn--secondary">Submit a Review</button>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div>
                        </div> -->
                    </div><!-- /.col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-one blog-one--page -->


        <?php include('includes/footer.php'); ?>