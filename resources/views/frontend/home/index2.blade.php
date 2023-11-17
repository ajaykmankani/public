@extends('frontend.layout.app')
@section('content')
<section class="main-slider">
    <div class="top_marquee" style="background-color:red;">
        <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">PLEASE NOTE:-
            STOCK BENEFITS FINANCIAL SERVICES AN INVESTMENT ADVISER, DO NOT PROVIDE ANY PROFIT SHARING SERVICES,
            GUARANTEED SERVICE, PROJECT BASED SERVICES AND SERVICES WHICH ARE NOT MENTIONED IN OUR WEBSITE
            http://www.stockbenifits.com, IF ANY PERSON TRY TO SELL SUCH TYPE OF PRODUCT KINDLY CALL +91-7400041121 OR
            EMAIL US ON admin@stockbenifits.com TO PROVIDE SUCH INFORMATION. कृपया ध्यान देस्टॉक बेनिफिट्स फाइनेंसियल
            सर्विसेजॅws एक निवेश सलाहकार, ऐसी कोई सर्विस उपलब्ध नहीं कराती हैं जो हमारी वेबसाइट
            http://www.stockbenifits.com पर उपलब्ध नहीं हैं जैसे -, गारंटी प्रॉफिट सर्विस, प्रॉफिट और लॉस शेयरिंग सर्विस
            ,पोर्टफोलियो मैनेजमेंट सर्विस अथवा डीमैट ट्रेडिंग सर्विस, यदि कोई व्यक्ति ऐसी कोई सर्विस आपको उपलब्ध करने का
            वादा करता हैं तो आप हमें इस नंबर पर कॉल करे +91-7400041121 अथवा आप हमें admin@stockbenifits.com ईमेल आईडी पर
            मेल करके इस बारे में जानकारी दे सकते है</marquee>
    </div>
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{
                "slidesPerView": 1,
                "loop": true,
                "effect": "fade",
                "autoplay": {
                    "delay": 5000
                },
                "navigation": {
                    "nextEl": "#main-slider__swiper-button-next",
                    "prevEl": "#main-slider__swiper-button-prev"
                }
            }'>
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url({{ asset('frontend/assets/images/main/slider4.webp') }});"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <p>“Learn every day, but especially from the experiences of others. it’s cheaper!”</p>
                            <a href="javascript:;" data-toggle="modal" data-target="#exampleModal" class=" thm-btn">Apply For Enquiry</a>
                            <!-- /.thm-btn dynamic-radius -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url({{ asset('frontend/assets/images/main/slider1.webp') }});"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <p>“We don’t have to be smarter than the rest. We have to be more disciplined than the
                                rest.”</p>
                            <a href="javascript:;" data-toggle="modal" data-target="#exampleModal" class=" thm-btn">Apply For Enquiry</a>
                            <!-- /.thm-btn dynamic-radius -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url({{ asset('frontend/assets/images/main/slider2.webp') }});"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <p>“The stock market is designed to transfer money from the active to the patient.”</p>
                            <a href="javascript:;" data-toggle="modal" data-target="#exampleModal" class=" thm-btn">Apply For Enquiry</a>
                            <!-- /.thm-btn dynamic-radius -->
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /.swiper-wrapper -->

        <!-- If we need navigation buttons -->
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i class="pylon-icon-left-arrow"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i class="pylon-icon-right-arrow"></i>
            </div>
        </div><!-- /.main-slider__nav -->

    </div><!-- /.swiper-container thm-swiper__slider -->
    <div class="feature-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1500ms">
                            <div class="feature-two__box">
                                <i class="flaticon-money"></i>
                                <p>Money Care</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1500ms">
                            <div class="feature-two__box">
                                <i class="flaticon-24-hours-phone-assistance-service"></i>
                                <p>Friendly Assistance</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-xl-7">
                <div class="about-one__content">
                    <div class="block-title text-left">
                        <p>About Us</p>
                        <h2>Company Overview</h2>
                    </div><!-- /.block-title -->
                    <p>We have leading Research Analysts who are working on In-house "Harmonic Price & Time Study". This
                        method is a "Lead" Indicator generating advance signals compare to other’s Technical laggard
                        indicators which most of other analysts are using in the Industry. </p>
                    <p>Stock Benefits Financial Services is a pioneering Research Advisory and Coaching having a team of
                        specialized financial market analysts having massive experience in carrying out capital market
                        research. We deliver reliable tips and advices for stocks, NIFTY, Bank Nifty, Intraday, future
                        and option (F&O) traded in the NSE and BSE, commodities such as bullion and metals traded in the
                        MCX and NCDEX. We offer daily and weekly reports having stock and commodity market overview that
                        assists the investors to identify with the trends of the market and assists in taking smart
                        decisions.</p>
                </div><!-- /.about-one__content -->

            </div>
            <div class="col-lg-12 col-xl-5">
                @include('frontend.forms.expert_form')
            </div>
        </div>
    </div>
</section>

<section class="home-services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-left text-center">
                    <h1> Our Services</h1>
                    <h4>We Are Happy To Help You!</h4>
                    <p> We provide commodity services like bullion, metals traded in MCX. Our customer’s trust and the
                        accuracy of recommendation, which we provide is the base of our establishment and make us
                        different from others.</p>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-12">
                <ul>
                    <li>
                        <a href="/services.php">
                            <div class="icon-box-2 c1">
                                <i class="fas fa-chart-line"></i>
                                <strong>CASH INTRADAY</strong>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/future-package.php#future-package">
                            <div class="icon-box-2 c1">
                                <i class="fas fa-chart-pie"></i>
                                <strong>FUTURE</strong>
                            </div>
                        </a>
                    </li>
                    <li class="option-call-put">
                        <a href="/option-packages.php#option-packages">
                            <div class="icon-box-2 c1">
                                <i class="fas fa-chart-area"></i>
                                <strong>OPTION CALL PUT INTRADAY</strong>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/equity-packages.php#equity-packages">
                            <div class="icon-box-2 c1">
                                <i class="far fa-chart-bar"></i>
                                <strong>EQUITY PREMIUM SERVICES</strong>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/sb-premium-packages.php#sb-premium-packages">
                            <div class="icon-box-2 c1">
                                <i class="fas fa-project-diagram"></i>
                                <strong>FUTURE PREMIUM SERVICES</strong>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/option-packages.php#option-packages">
                            <div class="icon-box-2 c1">
                                <i class="fab fa-buffer"></i>
                                <strong>OPTION PREMIUM SERVICES</strong>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/index-future-hni-services.php#index-future-hni-services">
                            <div class="icon-box-2 c1">
                                <i class="fas fa-chart-line"></i>
                                <strong>INDEX OPTION PACK</strong>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/ags-trades-package.php#ags-trades-package">
                            <div class="icon-box-2 c1">
                                <i class="fas fa-truck"></i>
                                <strong>DELIVERY TRADING</strong>
                            </div>
                        </a>
                    </li>
                </ul>
                <a href="/services.php" class="btn-box"> <span>View All Services</span></a>
            </div>
        </div>
    </div>
</section>

<section class="feature-one">
    <img src="{{ asset('frontend/assets/images/shapes/feature-shape-1-1.webp') }}" alt="" class="feature-one__shape-1">
    <img src="{{ asset('frontend/assets/images/shapes/feature-shape-1-2.webp') }}" alt="" class="feature-one__shape-2">
    <img src="{{ asset('frontend/assets/images/shapes/feature-shape-1-3.webp') }}" alt="" class="feature-one__shape-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 m-md-auto">
                <div class="block-title text-left">
                    <p>Get to Know About</p>
                    <h2>Vision And Mission</h2>
                </div><!-- /.block-title -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-8">
                <p class="block-text">To provide the best Research i.e. Trading & Investment Ideas & Options Strategies
                    to our clients for their consistent short-term & long-term capital growth. To provide personalized
                    services to our clients to achieve their financial goals & Objectives post-understanding their risk
                    capacity.</p>
                <p class="block-text">To be a prominent destination to strengthen the Prosperity of its Clients,
                    Investors, Associates and Employees, always. Maximize our client’s capital by giving them the best
                    services & assistance & reach the highest number of clients. We want to earn and be worthy of our
                    customer's trust and provide them with the finest Indian Stock Market Tips.</p><!-- /.block-text -->
            </div><!-- /.col-lg-8 -->
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="feature-one__box">
                    <i class="pylon-icon-verification"></i>
                    <p>Best Services</p>
                </div><!-- /.feature-one__box -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="feature-one__box">
                    <i class="pylon-icon-finance"></i>
                    <p>One app for all</p>
                </div><!-- /.feature-one__box -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="feature-one__box">
                    <i class="pylon-icon-assets"></i>
                    <p>Trade from anywhere</p>
                </div><!-- /.feature-one__box -->
            </div><!-- /.col-lg-4 -->
        </div>
    </div>
</section>

<section class="trusted-company">
    <div class="trusted-company__bg" style="background-image: url(assets/images/shapes/trust-bg-1-1.webp);"></div>
    <!-- /.trusted-company__bg -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="trusted-company__content">
                    <div class="block-title text-left">
                        <p>Trusted Company</p>
                        <h2>Most of the People Trust on Us For Fast Services</h2>
                    </div><!-- /.block-title -->
                    <div class="trusted-company__image">
                        <p>We have created a one stop shop for managing all your financial needs. With the Best In Class
                            Methods</p>
                    </div><!-- /.trusted-company__image -->
                    <div class="row">
                        <div class="col-sm-5 col-xs-12">
                            <ul class="trusted-company__list">
                                <li class="trusted-company__list-item">
                                    <span>
                                        <i aria-hidden="true" class="far fa-check-circle"></i>
                                    </span>
                                    <span class="trusted-company__list-text">SEBI Registered Advisors</span>
                                </li><!-- /.trusted-company__list-item-->
                                <li class="trusted-company__list-item">
                                    <span>
                                        <i aria-hidden="true" class="far fa-check-circle"></i>
                                    </span>
                                    <span class="trusted-company__list-text">Highest Level of Accuracy</span>
                                </li><!-- /.trusted-company__list-item-->
                                <li class="trusted-company__list-item">
                                    <span>
                                        <i aria-hidden="true" class="far fa-check-circle"></i>
                                    </span>
                                    <span class="trusted-company__list-text">Best Results Oriented Research</span>
                                </li><!-- /.trusted-company__list-item-->
                                <li class="trusted-company__list-item">
                                    <span>
                                        <i aria-hidden="true" class="far fa-check-circle"></i>
                                    </span>
                                    <span class="trusted-company__list-text">Individual Attention to All Clients</span>
                                </li><!-- /.trusted-company__list-item-->

                            </ul><!-- /.trusted-company__list-->
                        </div><!-- /.col-md-5-->
                        <div class="col-sm-6 col-xs-12">
                            <ul class="trusted-company__list trusted-company__list-2">
                                <li class="trusted-company__list-item">
                                    <span>
                                        <i aria-hidden="true" class="far fa-check-circle"></i>
                                    </span>
                                    <span class="trusted-company__list-text">Highly Skilled & Experienced Team</span>
                                </li><!-- /.trusted-company__list-item-->
                                <li class="trusted-company__list-item">
                                    <span>
                                        <i aria-hidden="true" class="far fa-check-circle"></i>
                                    </span>
                                    <span class="trusted-company__list-text">Ethical Business Practices</span>
                                </li><!-- /.trusted-company__list-item-->
                                <li class="trusted-company__list-item">
                                    <span>
                                        <i aria-hidden="true" class="far fa-check-circle"></i>
                                    </span>
                                    <span class="trusted-company__list-text">Chat/Email/Phone Support</span>
                                </li><!-- /.trusted-company__list-item-->
                                <li class="trusted-company__list-item">
                                    <span>
                                        <i aria-hidden="true" class="far fa-check-circle"></i>
                                    </span>
                                    <span class="trusted-company__list-text">Free Trials</span>
                                </li><!-- /.trusted-company__list-item-->
                            </ul><!-- /.trusted-company__list-->
                        </div><!-- /.col-md-6-->
                    </div>
                </div><!-- /.trusted-company__content -->
            </div>
            <div class="col-lg-6">
                <div class="trusted-company__box-wrap">
                    <div class="trusted-company__box">
                        <span>1</span>
                        <p>Spot on Market Predictions</p>
                    </div><!-- /.trusted-company__box -->
                    <div class="trusted-company__box">
                        <span>2</span>
                        <p>Unique Features</p>
                    </div><!-- /.trusted-company__box -->
                    <div class="trusted-company__box">
                        <span>3</span>
                        <p>Affordable Pricing</p>
                    </div><!-- /.trusted-company__box -->
                    <div class="trusted-company__box">
                        <span>4</span>
                        <p>Assistance for Your Growth</p>
                    </div><!-- /.trusted-company__box -->
                    <div class="trusted-company__box">
                        <span>5</span>
                        <p>Chat/Email/Phone Support</p>
                    </div><!-- /.trusted-company__box -->
                </div><!-- /.trusted-company__box-wrap -->
            </div>
        </div>
    </div>
</section>

<section class="call-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="call-inner-container">
                    <div class="row">
                        <div class="col-md-9">
                            <h5>LET’S GET STARTED</h5>
                            <h2>Become a Stock Market Professional / Trader / Investor </h2>
                        </div>
                        <div class="col-md-3 m-md-auto">
                            <a href="tel:+91-9044546300" class="btn-box">
                                <span>View All Plan</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="call-form-section">
    <div class="container-fluid">
        <div class="row nopadding">
            <div class="col-md-6">
                <img src="{{ asset('frontend/assets/images/main/need-help.webp') }}" alt="" width="100%">
            </div>
            <div class="col-md-6">
                <div class="need-help-content">
                    <h3>Need Help?</h3>
                    <p>CONTACT US FOR MORE DETAILS </p>
                   @include('frontend.forms.expert_form1')
                </div>
            </div>
        </div>
    </div>
</section>

<section class="teb-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3 m-md-auto">
                <div class="block-title text-left">
                    <p>Get to Know About</p>
                    <h2>Our Services</h2>
                </div>
            </div>
            <div class="col-md-9">
                <div class="tab-there-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Index F&Os</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Stock F&O</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Premium Combo Package</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Super-tab" data-toggle="tab" href="#Super" role="tab" aria-controls="Super" aria-selected="false">Premium Combo Package</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Pre-Market View & Trading
                                            Levels & Strategy</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Get 1-2 Ideas Daily
                                            (Positional + Intraday)</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Proper Entry & Exit Level.
                                        </li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Regular Follow Up & Updates
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Get Live Market Guidance &
                                            Risk-Management</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Potential Profit Target 15k
                                            Per Trade</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Objective to capture Index
                                            Swings</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Accuracy 80% & Above</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Get 2-3 Ideas Daily
                                            (Positional + Intraday)</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Proper Entry & Exit Level.
                                        </li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Regular Follow Up & Updates
                                        </li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Guidance via Option Risk
                                            Management</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Proper Techncial View, Logic &
                                            Levels for Positional Trades </li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Objective to capture market
                                            momentum UP Or Down</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Accuracy 80% & Above</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Best Filtered trade In Index
                                            OR Stock Trades</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Get 2-3 Positional Trades</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Get 3-4 Intraday Index/ Stock
                                            trades</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Index/ Stock Option Trade</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Customize Package as per
                                            Client Requirement</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Objective wealth Creation</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Accuracy 90% & Above</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Super" role="tabpanel" aria-labelledby="Super-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Personalized Service by our
                                            Head Research Analyst</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Discuss & plan strategy for
                                            maximum pofitable bets</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Special Focus on client
                                            positions</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Personal guideance during
                                            market hours</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Best Option Strategies &
                                            Hedging</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Minimum Risk & Maximum Return
                                            Positional Strategies</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>PAIR TRADING</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Objective utmost satisfcation
                                            & Wealth Creation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials-one">
    <div class="container">
        <div class="block-title text-center">
            <p>Customers Testimonials</p>
            <h2>Customers Testimonials</h2>
        </div><!-- /.block-title -->
        <div class="thm-swiper__slider swiper-container" data-swiper-options='{
                "spaceBetween": 0,
                "slidesPerView": 1,
                "slidesPerGroup": 1,
                "loop":true,
                "autoplay": {
                    "delay": 5000
                },
                "pagination": {
                    "el": ".testimonials-one__swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                },
                "breakpoints": {
                    "0": {
                        "spaceBetween": 0,
                        "slidesPerView": 1,
                        "slidesPerGroup": 1
                    },
                    "375": {
                        "spaceBetween": 0,
                        "slidesPerView": 1,
                        "slidesPerGroup": 1
                    },
                    "667": {
                        "spaceBetween": 30,
                        "slidesPerView": 1,
                        "slidesPerGroup": 1
                    },
                    "767": {
                        "spaceBetween": 30,
                        "slidesPerView": 1,
                        "slidesPerGroup": 1
                    },
                    "991": {
                        "spaceBetween": 30,
                        "slidesPerView": 2,
                        "slidesPerGroup": 2
                    },
                    "1199": {
                        "spaceBetween": 30,
                        "slidesPerView": 3,
                        "slidesPerGroup": 3
                    }
                }}'>
            <div class="swiper-wrapper">
                <!--<div class="swiper-slide">-->
                <!--    <div class="testimonials-one__box">-->
                <!--        <p><span>Stock benefits affords fantastic execution and gadget control services. I am a totally happy client. </span></p>-->
                <!--        <h3>- Harsh Gupta</h3> -->
                <!--    </div>-->
                <!--        <div class="testimonials-one__box-info">-->
                <!--            <img src="{{ asset('frontend/assets/images/resources/testimonials-1-1.webp') }}" alt="">   -->
                <!--        </div>-->
                <!--</div>-->
                <div class="swiper-slide">
                    <div class="testimonials-one__box">
                        <p><span>Dear Stockbenifits Team,
                                i am Too Happy with Deepak sir & Stockbenifits
                                Advisory Firm who have to much help To earned
                                Money from Market.
                                thank you So much Deepak Sir Rating will be IO
                                out of 10 (A+)&
                                Please Keep supporting Us to the same
                                even i know The market is subject to high capital Risk
                                where can Give 100% Return & IOO%lose Also.
                                So i don't have any Problem from Deepak &
                                stockbenifits Company
                                Thanks& Regard
                            </span></p>
                        <h3>- Muntun Singh</h3>
                    </div>
                    <div class="testimonials-one__box-info">
                        <img src="{{ asset('frontend/assets/images/resources/testimonials-munmun.webp') }}" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonials-one__box">
                        <p><span>I am very enthusiastic about your organization as I were gaining knowledge of shares
                                for pretty a while and feature now no longer observed an organization with which I
                                experience snug till I reached your net site.</span></p>
                        <h3>- Rekha Sharma</h3>
                    </div>
                    <div class="testimonials-one__box-info">
                        <img src="{{ asset('frontend/assets/images/resources/testimonials-1-2.webp') }}" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonials-one__box">
                        <p><span>It’s very step-by-step. I got here in understanding not anything in any respect
                                approximately shares, options, and investments. When you don’t recognize what to do, it
                                allows to peer different humans doing it. There’s a lot engagement! </span></p>
                        <h3>- Himanshu Rawat</h3>
                    </div>
                    <div class="testimonials-one__box-info">
                        <img src="{{ asset('frontend/assets/images/resources/testimonials-1-3.webp') }}" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonials-one__box">
                        <p><span>I am studying a lot approximately technical evaluation now that I am a member to Stock
                                Benefits Financial Services. This is my favorite internet site ever! It’s really well
                                worth each penny. I actually have carried out my understanding to my inventory
                                alternatives and now I am making money, without a broker! Thanks!</span></p>
                        <h3>- Ravi Kumar</h3>
                    </div>
                    <div class="testimonials-one__box-info">
                        <img src="{{ asset('frontend/assets/images/resources/testimonials-1-4.webp') }}" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonials-one__box">
                        <p><span>Dear Sir,
This is my pleasure that I was able to choose stock benefits for my daily trading. With the support of your staff and the insight into the right position and the exit strategy, I was able to make a profit in my intraday trading. I bought the 1-year plan and made Rs. 1,47,000 profit in just 20 days. I was able to get daily tips and your support, from which I will make more profit. ill suggest to my fellow traders your platform. Thank you again for your support.</span></p>
                        <h3>- Virandra Singh Chauhan</h3>
                    </div>
                    <div class="testimonials-one__box-info">
                        <img src="{{ asset('frontend/assets/images/resources/testimonials-1-5.webp') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="testimonials-one__swiper-pagination swiper-pagination"></div>
        </div>
    </div>
</section>

<section class="why-choose">
    <img src="{{ asset('frontend/assets/images/shapes/why-choose-shape-1-1.webp') }}" class="why-choose__shape-1" alt="">
    <img src="{{ asset('frontend/assets/images/shapes/why-choose-shape-1-2.webp') }}" class="why-choose__shape-2" alt="">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="why-choose__image">
                    <p><i class="pylon-icon-investment"></i>2 years of working experience</p>
                    <img src="{{ asset('frontend/assets/images/main/why-choose.webp') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="why-choose__content">
                    <div class="block-title text-left">
                        <p>Our Benfits</p>
                        <h2>Why Choose Us?</h2>
                    </div>
                    <p>Stock Benefits Financial Services is a place where we not only help you invest your money but we
                        also help you achieve your goals marked within focused timelines. We help you place your
                        investments based on your goals. We understand that each client is unique and has distinct
                        requirements. Here at Stock Benefits Financial Services we take care of all your needs with
                        personalised services crafted to achieve your goals.</p>
                    <p>Our Services are packaged in a way to provide you maximum exposure to the market without paying a
                        BOMB for it. We have a uniquely bundled the services where you have the option to decide
                        different flavours of the market with playing in commodities, forex, NIFTY, Bank NIFTY, Equity,
                        System Based "Over Night" Speculative Trades, Intraday/Positional/Delivery (Equity F&O), Option
                        Trading, Index Trading and live market updates on your phone throughout the day.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="faq-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('frontend/assets/images/main/faq-img.webp') }}" alt="">
            </div>
            <div class="col-md-6 m-md-auto">
                <div class="block-title text-left">
                    <p>Our Benfits</p>
                    <h2>Frequently Asked Question</h2>
                </div>
                <div class="faq-wrap">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="faq-btn" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                        Can I trade when markets are closed or shut down?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    No, unfortunately, you cannot trade after the market is shut down. The normal
                                    trading hours are between <b>09:15 AM to 03:30 PM.</b>However, some passive traders
                                    can also place orders after the market is closed and that is known as After Market
                                    Orders (AMO). Although several <b>trading positions close during AMO</b> creating
                                    volatility in the markets due to which the value of stocks rises dramatically.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Is it possible to have varied demat and trading accounts?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    yes absolutely you can have a number of demat accounts and trading accounts. But you
                                    cannot have multiple demat and trading accounts with a single stockbroker.
                                    Therefore, you must <b>open more than one demat and trading accounts with different
                                        stockbrokers</b> In case you open multiple accounts with a single stockbroker
                                    you need to pay <b>annual maintenance charges</b> for each account as per their
                                    rules and guidelines.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Can I trade without a stockbroker?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    As a matter of fact, trading without a stockbroker is not possible. NSDL
                                    <b>(National Securities Depository Limited)</b> and CDSL <b>(Central Depository
                                        Securities Limited)</b> are the government-registered depositories that handle
                                    and monitor a plethora of securities such as stocks, equity, derivatives, commodity,
                                    etc. in digital form. The stockbroker acts as a liaison between the <b> Depository
                                        Participant(DP) and the investor</b>.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-toggle="collapse" data-target="#headingFour" aria-expanded="false" aria-controls="headingFour">
                                        Is a demat account compulsory to apply for an IPO in India?
                                    </button>
                                </h2>
                            </div>
                            <div id="headingFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                    You do not require a trading account however, having a demat account is mandatory
                                    since the credit of shares granted to you will be shared in this account.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-toggle="collapse" data-target="#headingFive" aria-expanded="false" aria-controls="headingFive">
                                        What is bottoming out?
                                    </button>
                                </h2>
                            </div>
                            <div id="headingFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                <div class="card-body">
                                    <b>Bottoming out is the phase when the stock</b> falls downwards to its lowest peak
                                    and is expected to reach to rise in the coming days. This phase seems as profitable
                                    by the investors as the stock is expected to rise rapidly.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-home">
    <div class="container">
        <div class="block-title text-center">
            <p>Directly From the Blog</p>
            <h2 class="blog-title__h2">News &amp; Articles</h2>
        </div>
        <div class="row">


            <!--<div class="col-lg-4 wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                    <div class="blog-card">
                        <div class="blog-card__image">
                            <span>20 Sep, 2020</span>
                            <img src="{{ asset('frontend/assets/images/blog/blog-1-3.webp') }}" alt="">
                        </div>
                        <div class="blog-card__content">
                            <div class="blog-card__meta">
                                <a href="index.php"><i class="far fa-user"></i>Admin</a>
                            </div>
                            <h3><a href="blog-details.php">How to get education loan for overseas</a></h3>
                            <div class="blog-card__bottom">
                                <div class="blog-card-bottom-readmore">
                                    <a href="blog-details.php" class="readmore-card-link"><i class="pylon-icon-right-arrow"></i>Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                    <div class="blog-card">
                        <div class="blog-card__image">
                            <span>20 Sep, 2020</span>
                            <img src="{{ asset('frontend/assets/images/blog/blog-1-3.webp') }}" alt="">
                        </div>
                        <div class="blog-card__content">
                            <div class="blog-card__meta">
                                <a href="index.php"><i class="far fa-user"></i>Admin</a>
                            </div>
                            <h3><a href="blog-details.php">Easy way to calculate interest on a loan</a></h3>
                            <div class="blog-card__bottom">
                                <div class="blog-card-bottom-readmore">
                                    <a href="blog-details.php" class="readmore-card-link"><i class="pylon-icon-right-arrow"></i>Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
        </div>
    </div>
</section>

<section class="funfact-one">
    <div class="funfact-one__bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="funfact-one__box">
                    <h3><span class="odometer" data-count="2">00</span></h3>
                    <p>Years Experience </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="funfact-one__box">
                    <h3><span class="odometer" data-count="2">00</span></h3>
                    <p>Total Awards</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="funfact-one__box">
                    <h3><span class="odometer" data-count="18">00</span></h3>
                    <p>Staff Members</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="funfact-one__box">
                    <h3><span class="odometer" data-count="450">00</span></h3>
                    <p>Happy Traders</p>
                </div>
            </div>
        </div>
    </div>
</section>
 <script>
        window.onload = function() {
            $('#model-complaint-board').delay(200).fadeIn("slow");

        };
    </script>
@endsection
