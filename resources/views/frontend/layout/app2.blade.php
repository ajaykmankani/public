<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Benefits</title>
    <meta name="description" content="">
    <!-- Fonts -->

    <link rel="shortcut icon" href="assets/images/favicon.webp">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/pylon-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nouislider.pips.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/flaticon.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">

    <!-- i am not a robot -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- i am not a robot -->
    <!-- microsoft clarity -->
    <script type="text/javascript">
        (function(c, l, a, r, i, t, y) {
            c[a] = c[a] || function() {
                (c[a].q = c[a].q || []).push(arguments)
            };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "gi5hjz406h");
    </script>
</head>

<body>

@include('frontend.partials.navbar')
@yield('content')



    <div id="model-complaint-board">
        <a href="javascript:;" class="modal-close"><i class="fa fa-times"></i></a>
        <div class="model-complanit-content">
            <?php $currentDate = date('jS F\'Y'); ?>
            <h4 class="">Number of complaints as on <?= $currentDate ?></h4>

            <table style="background: #fff; text-align: center;" width="100%" cellspacing="0" cellpadding="0">
                <thead>
                    <tr style="background: #f1f1f1;">
                        <th colspan="1" rowspan="1">No. of Complaints</th>
                        <th colspan="1" rowspan="1">At the Begining of Month</th>
                        <th colspan="1" rowspan="1">Received During The Month</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 10px;">4</td>
                        <td style="padding: 10px;">0</td>
                        <td style="padding: 10px;">0</td>
                    </tr>
                    <tr style="background: #f1f1f1;">
                        <td style="padding: 10px;"><strong>Pending at the end of the Month</strong></td>
                        <td style="padding: 10px;"><strong>Reason for Pendency</strong></td>
                        <td style="padding: 10px;"><strong>Total Complaint Resolved</strong></td>
                    </tr>
                    <tr>
                        <td style="padding: 10px;">0</td>
                        <td style="padding: 10px;">-</td>
                        <td style="padding: 10px;">4</td>
                    </tr>
                    <tr style="background: #f1f1f1;">
                        <td style="padding: 10px;"><strong>Total Clients Served so far</strong></td>
                        <td style="padding: 10px;"><strong>Total Complaint Received so far</strong></td>
                        <td style="padding: 10px;"><strong>% of the complaints as per overall client base</strong></td>
                    </tr>
                    <tr>
                        <td style="padding: 10px;">450</td>
                        <td style="padding: 10px;">4</td>
                        <td style="padding: 10px;">0.88</td>
                    </tr>
                </tbody>
            </table>


            <h5>PLEASE NOTE</h5>
            <ul>
                <li>In order to receive any services from us it is mandatory that first you should provide correct
                    information about your Risk Profile through our website to check suitability of services</li>
                <li>Please do not opt for service or make any payment without filling Risk profile details on our
                    website as it is your responsibility as well and it is also important for you to get right advice
                    and services.</li>
                <li>We do not accept part payments against any of our services, in case if any short or excess amount is
                    paid against any of our service mentioned on our website then number of days for opted service will
                    be adjusted according to actual service fees.</li>
                <li>Trading and Investment in Security & Commodity Market is subject to Market Risk, please note that
                    your capital is at RISK.</li>
                <li>Please do not make payment via Cash or payment gateway, kindly do the payment only through direct
                    credit in Stock Benefits Financial Services account VIA NEFT/RTGS/IMPS/UPI or by account payee
                    cheque or DD.</li>
                <li>Past Performance & Records of advice do not guarantee future profit or Future Performance.</li>
                <li>Before taking any Stock Benefits Financial Services services or recommendations clients should go
                    through all the Policies, Disclaimer, and Disclosure and Terms & Conditions.</li>
                <li>Stock Benefits Financial Services provide fees only service for products/plan which are mentioned on
                    our website and we do not have any telegram or personal Whatsapp facilities for services and
                    communication.</li>
                <li>We do not offer product/services which are not mentioned on our website for example Guaranteed or
                    Assured Returns Services, Profit or Loss Sharing, Portfolio Management, Bucket Trading or loss
                    recovery, lock in period or Demat Account Services etc.</li>
                <li>If any person communicate you about any such services kindly call us immediately on +91-7400041121
                    or email us at <a href="mailto:contact@stockbenfits.com">contact@stockbenfits.com</a></li>
                <li>If any person mislead you or guide you to deviate you from all these important points then call us
                    immediately on +91-7400041121 or email us at <a
                        href="mailto:contact@stockbenfits.com">contact@stockbenfits.com</a></li>
                <li>Our SEBI Registration number is: INA100007745.</li>
            </ul>
        </div>
    </div>

<div class="left-side">
        <a href="{{ ('user_agreement') }}">User Agreement</a>
        <a href="javascript:;">Complaint Board</a>

    </div>
    <div class="right-side">
        <a href="javascript:;" data-toggle="modal" data-target="#exampleModal">Enquire Now</a>
    </div>

    <div class="model-form-custom">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('frontend/assets/images/main/enqury.webp') }}" alt="" width="100%" height="100%">
                            </div>
                            <div class="col-md-6 m-md-auto">
                                <div class="popup-content-main">

                                    <h3>Get A Quote</h3>
                                    @include('frontend.forms.ask_for_expert_advice')
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-12">
                    <div class="footer-widget footer-widget__about">
                        <h5>About Us</h5>
                        <p>We have leading Research Analysts who are working on In-house "Harmonic Price & Time Study".
                            This method is a "Lead" Indicator generating advance signals compare to other’s Technical
                            laggard indicators which most of other analysts are using in the Industry Stock Benefits
                            Financial Services is a pioneering Research Advisory and Coaching having a team of
                            specialized financial .......<a href="{{ ('about_us') }}"> Read More</a> </p>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="footer-widget footer-widget__link" id="footer-menu">
                                <h3 class="footer-widget__title">Company Profile</h3>
                                <ul class="list-unstyled footer-widget__link-list">
                                    <li><a href="{{ ('index') }}"><i class="fas fa-angle-right"></i> Home</a></li>
                                    <li><a href="{{ ('about_us') }}"><i class="fas fa-angle-right"></i> About Us</a></li>
                                    <li><a href="{{ ('future-package') }}"><i class="fas fa-angle-right"></i> Packages</a>
                                    </li>
                                    <li><a href="{{ ('past_performance') }}"><i class="fas fa-angle-right"></i> Past
                                            Performance</a></li>
                                    <li><a href="{{ ('expert_advice') }}"><i class="fas fa-angle-right"></i> Expert
                                            Advice</a></li>
                                    <li><a href="{{ ('user_agreement') }}"><i class="fas fa-angle-right"></i> Risk
                                            Profile</a></li>
                                    <li><a href="{{ ('career') }}"><i class="fas fa-angle-right"></i> Career</a></li>
                                    <li><a href="{{ ('updates') }}"><i class="fas fa-angle-right"></i> Updates</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="footer-widget footer-widget__link" id="footer-menu">
                                <h3 class="footer-widget__title">Our Services</h3>
                                <ul class="list-unstyled footer-widget__link-list">
                                    <li><a href=""><i class="fas fa-angle-right"></i> Customer's Login</a></li>
                                    <li><a href="{{ ('compliance') }}"><i class="fas fa-angle-right"></i> Compliance</a>
                                    </li>
                                    <li><a href="{{ ('complaint_data') }}"><i class="fas fa-angle-right"></i> Complaint
                                            Board</a></li>
                                    <li><a href="{{ ('invester_charter') }}"><i class="fas fa-angle-right"></i> Invester
                                            Charter</a></li>
                                    <li><a href="{{ ('privacy_policy') }}"><i class="fas fa-angle-right"></i> Privacy
                                            Policy</a></li>
                                    <li><a href="{{ ('refund_policy') }}"><i class="fas fa-angle-right"></i> Refund
                                            Policy</a></li>
                                    <li><a href="{{ ('discloser') }}"><i class="fas fa-angle-right"></i> Disclosure</a></li>
                                    <li><a href="{{ ('terms_and_conditions') }}"><i class="fas fa-angle-right"></i> Terms
                                            and conditions</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-12">
                    <div class="footer-widget footer-widget__contact">
                        <h3>Contact Us</h3>
                        <ul class="list-unstyled footer-widget__contact-list">
                            <li> Type of Registration - Proprietorship </li>
                            <li> License Holder’s Name - Mr. Amit Guruh Sachdeva</li>
                            <li> Validty of Registration- Perpetual</li>
                            <li>
                                <a href="mailto:contact@stockbenfits.com"><i class="pylon-icon-email1"></i>
                                    contact@stockbenfits.com</a>
                            </li>
                            <li>
                                <a href="tel:+91-7400041121"><i class="pylon-icon-telephone"></i> +91-7400041121</a>
                            </li>
                            <li>
                                <a href="javascript:;"><i class="pylon-icon-clock2"></i> Mon-Sat - 9:00 AM - 6:00
                                    PM</a>
                            </li>
                            <li>
                                <a href="javascript:;"><i class="pylon-icon-pin1"></i> 1502, Kamdhenu Building, Sector
                                    14 Kharghar Navi Mumbai, Maharashtra - 410210</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-content">
                        <h4>Attention Investors !</h4>
                        <h5>Risk Disclosures:</h5>
                        <ul>
                            <li>Investment in securities market is subject to market risk , we do not offer any
                                guaranteed profit service. Before taking Expert Advice & any services with Stock
                                Benefits Financial Services, Client should read disclaimer, terms and conditions,
                                Disclosure and refund policy of the company.</li>
                            <li>We do not accept advisory fee in any personal or Individual bank account , any payment
                                made should be in favor of Stock Benefits Financial Services. All trades will be
                                exclusively on specific advice of Stock Benefits Financial Services no advice should be
                                taken from anyone else by client.</li>

                            <li>Risk of loss in trading & investment can be substantial and can even wipe-out complete
                                capital at stake. Investment in securities market are subject to market risks, you are
                                requested to carefully consider whether trading/investment is appropriate for you in
                                light of your experience, objectives, financial resources and other relevant
                                circumstances. </li>
                            <li>Stock Benefits Financial Services Platform attempts to provide the best suitable
                                research & trading ideas as per Technical and Derivative Analysis. One need to trade
                                inputs as per personal risk-appetite & with strict stop-losses. Stock Benefits Financial
                                Services and any of its employees, shall not be liable for losses, if any, incurred by
                                you.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="bottom-footer">
        <div class="container">
            <p>©Copyright 2023 Developed & Marketed by <a href="https://mindyourads.com/">MindYourAds</a> All Rights
                Reserved.</p>
            <div class="bottom-footer__social">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-pinterest-p"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
        </div>
    </div>

    </div>


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>

        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"></span>
            <div class="logo-box">
                <a href="index') }}" aria-label="logo image">
                    <img src="{{ asset('frontend/assets/images/logo.webp') }}" width="155" alt="" />
                </a>
            </div>
            <div class="mobile-nav__container"></div>

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="pylon-icon-email1"></i>
                    <a href="mailto:contact@stockbenfits.com"> contact@stockbenfits.com</a>
                </li>
                <li>
                    <i class="pylon-icon-telephone"></i>
                    <a href="tel:7400041121">(+91) 7400041121</a>
                </li>
            </ul>
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                    <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

        </div>

    </div>

    <div id="fixed-footer-main" style="background-color:red;">
        <marquee width="97.5%" direction="left" onMouseOver="this.stop()" onMouseOut="this.start()">
            Investment in securities market is subject to market risk , we do not offer any guaranteed profit service.
            Before taking Expert Advice & any services with Stock Benefits Financial Services, Client should read
            disclaimer, terms and conditions, Disclosure and refund policy of the company.
        </marquee>
        <i class="fa fa-times" id="close-icon"></i>
    </div>


</body>



<a href="javascript:;" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

<!--<a href="javascript:;" class="" id="whatsapp-new"><i class="fab fa-whatsapp"></i></a>-->

<script src="{{ asset('frontend/assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/wow.js') }}"></script>
<script src="{{ asset('frontend/assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.appear.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/wNumb.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/nouislider.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- Js -->
<script src="{{ asset('frontend/assets/js/theme.js') }}"></script>

</html>
