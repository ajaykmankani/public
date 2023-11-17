<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">



<title>{{ isset($title) ? $title : "Stock Ocean | No 1 stock market website" }}</title>



<!-- Fav Icon -->
<link rel="icon" href="{{ asset('frontend/assets/images/favicon.ico') }}"  type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="{{ asset('frontend/assets/css/font-awesome-all.css') }}"  rel="stylesheet">
<link href="{{ asset('frontend/assets/css/flaticon.css') }}"  rel="stylesheet">
<link href="{{ asset('frontend/assets/css/owl.css') }}"  rel="stylesheet">
<link href="{{ asset('frontend/assets/css/bootstrap.css') }}"  rel="stylesheet">
<link href="{{ asset('frontend/assets/css/jquery.fancybox.min.css') }}"  rel="stylesheet">
<link href="{{ asset('frontend/assets/css/animate.css') }}"  rel="stylesheet">
<link href="{{ asset('frontend/assets/css/nice-select.css') }}"  rel="stylesheet">
<link href="{{ asset('frontend/assets/css/style.css') }}"  rel="stylesheet">
<link href="{{ asset('frontend/assets/css/responsive.css') }}"  rel="stylesheet">


<!-- Styles -->
<link rel="stylesheet" href="{{ asset('frontend/assets2/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets2/css/responsive.css') }}">
</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="b" class="letters-loading">
                                b
                            </span>
                            <span data-text-preloader="u" class="letters-loading">
                                u
                            </span>
                            <span data-text-preloader="l" class="letters-loading">
                                l
                            </span>
                            <span data-text-preloader="l" class="letters-loading">
                                l
                            </span>
                            <span data-text-preloader="i" class="letters-loading">
                                i
                            </span>
                            <span data-text-preloader="o" class="letters-loading">
                                o
                            </span>
                            <span data-text-preloader="n" class="letters-loading">
                                n
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->




@include('frontend.partials.navbar')
@yield('content')




        <!-- main-footer -->
        <footer class="main-footer">
            <div class="widget-section">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget contact-widget">
                                <div class="widget-title">
                                    <h3>Our Community</h3>
                                </div>
                                <div class="widget-content">
                                    <p>Here you'll find regular market updates, expert tips & stories.</p>
                                    <form action="https://azim.hostlin.com/Bullion/contact" method="post">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email address..." required>
                                            <button type="submit"><img src="{{ asset('frontend/assets/images/icons/icon-27.png') }}" alt=""></button>
                                        </div>
                                    </form>
                                    <h3>Follow us</h3>
                                    <ul class="social-links clearfix">
                                        <li><a href="{{ route('index') }}"><i class="fa-brands fa-facebook"></i></a></li>
                                        <li><a href="{{ route('index') }}"><i class="fa-brands fa-square-twitter"></i></a></li>
                                        <li><a href="{{ route('index') }}"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="{{ route('index') }}"><i class="fa-brands fa-square-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Useful Links</h3>
                                </div>
                                <div class="widget-content">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 links-column">
                                            <ul class="links-list clearfix">
                                                <li><a href="{{ route('index') }}">About Us</a></li>
                                                <li><a href="{{ route('index') }}">Careers</a></li>
                                                <li><a href="{{ route('index') }}">Meet Our Team</a></li>
                                                <li><a href="{{ route('index') }}">Process</a></li>
                                                <li><a href="{{ route('index') }}">Mission & Vision</a></li>
                                                <li><a href="{{ route('index') }}">Faq’s</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 links-column">
                                            <ul class="links-list clearfix">
                                                <li><a href="{{ route('index') }}">Education</a></li>
                                                <li><a href="{{ route('index') }}">Trading Tools</a></li>
                                                <li><a href="{{ route('index') }}">Pricing List</a></li>
                                                <li><a href="{{ route('index') }}">Accout Types</a></li>
                                                <li><a href="{{ route('index') }}">Legal Notice</a></li>
                                                <li><a href="{{ route('index') }}">Privacy Policy</a></li>
                                                <li><a href="{{ route('index') }}">Conditions</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget assistance-widget">
                                <div class="widget-content">
                                    <h3>Need assistance?</h3>
                                    <p>Live chat with our service team for information & assistance.</p>
                                    <div class="assistance-box">
                                        <figure class="assistance-thumb"><img src="{{ asset('frontend/assets/images/resource/assistance-1.jpg') }}" alt=""></figure>
                                        <h5>Live Chat With</h5>
                                        <div class="link-box"><a href="{{ route('index') }}"><span>Expert</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="bottom-inner">
                        <div class="copyright">
                            <p>&copy; <span>2023 <a href="{{ route('index') }}">Bullion</a>.</span> All Rights Reserved.</p>
                        </div>
                        <ul class="footer-card clearfix">
                            <li><a href="{{ route('index') }}"><i class="flaticon-symbols"></i></a></li>
                            <li><a href="{{ route('index') }}"><i class="flaticon-tool"></i></a></li>
                            <li><a href="{{ route('index') }}"><i class="flaticon-money"></i></a></li>
                            <li><a href="{{ route('index') }}"><i class="flaticon-symbol"></i></a></li>
                            <li><a href="{{ route('index') }}"><i class="flaticon-symbols-1"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->



        <!-- scroll to top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="flaticon-up-arrow"></i>
        </button>

    </div>


    <!-- jequery plugins -->
    <script src="{{ asset('frontend/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/validation.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/appear.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/scrollbar.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/isotope.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>

    <!-- main-js -->
    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>

</body><!-- End of .page_wrapper -->

</html>
