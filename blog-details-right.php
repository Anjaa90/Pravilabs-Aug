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
                            <a class="topbar-one__info__item__email"
                                href="mailto:care@pravilabs.in">care@pravilabs.in</a>
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
                                <li class=" scrollToLink current"><a
                                        href="https://pravilabs.in">Home</a></li>
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
                                        href="https://pravilabs.in">Home</a></li>
                                <li class="scrollToLink"><a href="https://pravilabs.in/#about">About Us</a></li>
                                <li class="scrollToLink"><a href="https://pravilabs.in/#our_features">Our Features</a>
                                </li>
                                <li class="scrollToLink"><a href="https://pravilabs.in/#lab_test">Lab Tests</a></li>
                               
                                <li class="scrollToLink"><a href="doctors.php">Doctors</a></li>
                                <li class="scrollToLink"><a href="chemists.php">Chemists</a></li>
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
                font-display: swap;
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

        <section class="page-header">
            <div class="page-header__bg"
                style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2 class="page-header__title">Full Body Checkups with a Special Attention to Diabetes Screening</h2>
                <ul class="nionx-breadcrumb list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><span>Blog</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="blog-one blog-one--page ">
            <div class="container ">
                <div class="row gutter-y-60 justify-content-center">
                    <div class="col-lg-8">
                        <div class="blog-details">
                            <div class="blog-card__two">
                                <div class="blog-card__two__image">
                                    <img src="assets/images/blog/blog-d-1-1.jpg" alt="laboix">
                                    <!-- <div class="blog-card__two__date"> <span class="blog-card__two__date__day">02</span>AUG</div> -->
                                </div>
                                <div class="blog-card__two__content">
                                    <!-- <ul class="list-unstyled blog-card__two__meta">
                                        <li class="blog-card__two__meta__item"><a href="team.html"> <i class="icon-user"></i>By admin</a></li>
                                        <li class="blog-card__two__meta__item"><a href="blog-details.html"> <i class="icon-chatting2"></i> 2 Comment</a></li>
                                    </ul> -->
                                    <h3 class="blog-card__two__title blog-card__two__title--two"><a
                                            href="blog-details-right.php">Full Body Checkups with a Special Attention
                                            to Diabetes Screening</a></h3><!-- /.blog-card__two__title -->
                                    <p class="blog-card__two__text blog-card__two__text--two">Diabetes is a common
                                        health condition that can impact individuals of any age. Reports show that about
                                        10.5% of adults aged 20-79 have diabetes, and nearly half of them are unaware of
                                        their condition. It is projected that by 2045, approximately 1 in 8 adults, or
                                        around 783 million people, will have diabetes, representing a 46% increase from
                                        the current number.</p><!-- /.blog-card__two-two__text -->
                                    <p class="blog-card__two__text blog-card__two__text--two">Everyone is aware of the
                                        dangers of diabetes. Detecting it early is important to prevent serious issues
                                        later on. The best approach is to have regular full-body checkups, which consist
                                        of physical exams and preventive care. Preventive care involves screening tests
                                        like blood tests to catch diseases like diabetes in the early stages when
                                        treatment is more effective. It's essential to undergo these tests regularly,
                                        not just when you're feeling unwell.</p><!-- /.blog-card__two-two__text -->
                                    <h4>Understanding Screening for Diabetes</h4>
                                    <p>Diabetes happens when the body doesn't make enough insulin or can't use it
                                        properly, causing high blood sugar. It is usually a long-term condition but can
                                        be controlled with medicine and changes in lifestyle. There are different types
                                        of diabetes, with the most common ones being.</p>
                                    <h4>Type 1 diabetes:</h4>
                                    <p>Cells that make insulin are attacked by the immune system. It's commonly
                                        diagnosed in children and young adults.</p>
                                    <h4>Type 2 diabetes:</h4>
                                    <p>The body doesn't produce adequate insulin or cells don't react correctly to
                                        insulin. Primarily seen in adults, but children can also be affected.</p>
                                    <h4>Prediabetes:</h4>
                                    <p>The glucose levels are higher than usual, but they do not suggest a Type 2
                                        diabetes diagnosis.</p>
                                    <p>High blood sugar, if untreated, can damage blood vessels, nerves, and organs,
                                        leading to numerous problems. Early detection and treatment of diabetes can help
                                        decrease these risks. It is crucial to have regular full body checkups and
                                        screenings to detect diabetes early, even without significant symptoms. Early
                                        detection enables healthcare providers to promptly start treatment to manage
                                        blood sugar levels. And also promotes lifestyle changes for better management
                                        and improved quality of life.</p>
                                    <h4>Complete Diabetes Testing in Full Body Checkups.</h4>
                                    <p>Getting a full body check-up is crucial for everyone, regardless of age. Doctors
                                        examine your entire body to catch any signs of diseases early on. These
                                        check-ups usually include various tests to spot any health problems or risks
                                        early.</p>
                                    <p>Doctors perform various tests to detect prediabetes, diabetes, and
                                        diabetes-related issues. The specific tests administered are based on whether
                                        you currently have diabetes, exhibit symptoms, have risk factors, or not. Common
                                        tests conducted during diabetes screening include:</p>
                                    <h4>Fasting plasma glucose test:</h4>
                                    <p>Checks blood glucose levels after an 8-hour period of fasting.</p>
                                    <h4>HbA1C test:</h4>
                                    <p>Shows the average blood glucose levels across a three-month period.</p>
                                    <h4>Random plasma glucose test:</h4>
                                    <p>Completed without fasting when signs of diabetes are shown.</p>
                                    <h4>Oral glucose tolerance test (OGTT):</h4>
                                    <p>Tests sugar levels before and after drinking a sweet beverage, helps diagnose
                                        type 2 diabetes, prediabetes, and gestational diabetes.</p>
                                    <h4>Urine tests:</h4>
                                    <p>Urinalysis can find early signs of diabetes by checking glucose levels and
                                        spotting possible kidney damage, which is a common problem for people with
                                        diabetes.</p>
                                    <h4>Liver and kidney tests:</h4>
                                    <p>Liver and kidney tests are important for finding complications from diabetes.
                                        Over time, diabetes can harm these organs, causing serious health problems if
                                        not treated.</p>
                                    <h4>Lipid profile:</h4>
                                    <p>Lipid profile tests check cholesterol levels. Abnormal levels can raise the
                                        chances of getting type 2 diabetes and heart problems in people with diabetes.
                                    </p>
                                    <h4>Our Health Checkup Packages</h4>
                                    <p>Timely testing is crucial for managing diabetes risk. Pravi Labs offers a
                                        complete diabetes care package with essential tests like Lipid Profile, Fasting
                                        Glucose, Postprandial Glucose, Liver Function Test, Kidney Function Test, HbA1c,
                                        Microalbumin Creatinine Ratio, and Urine test. Our at-home sample collection
                                        makes it easy for you to monitor and manage your diabetes. Take control of your
                                        health today with our Diabetes care package
                                    </p>
                                    <p>Diabetes is a major health concern worldwide, affecting millions of people who
                                        may not even know they have it. It's important to catch it early with regular
                                        checkups to avoid serious complications like heart and kidney problems. Making
                                        lifestyle changes and getting regular screenings, like the ones offered by Pravi
                                        Labs, are key to managing diabetes and staying healthy.</p>


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
                            </div>
                        </div> -->

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
                                </div>

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
                                            </h6>
                                        </li>
                                    </ul>
                                </div>

                            </aside>
                        </div>
                    </div> -->
                    </div>
                </div><!-- /.container -->
        </section><!-- /.blog-one blog-one--page -->

        <!-- footer -->

        <?php include ('includes/footer.php');?>