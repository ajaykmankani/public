

    <div class="page-wrapper">
        <header class="main-header">
            <div class="topbar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="topbar__right">
                                <a href="tel:+91-7400041121" class="blink-call"><i
                                        class="flaticon-telephone-1 blink-call"></i> Call Us : +91-7400041121</a>
                                <span class="blink-rno"> || SEBI Registration No. INA100007745 ||</span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="top_menu">
                                <ul>
                                    <li><a href="{{ route('about_us') }}"> About Us</a></li>
                                    <li><a href="{{ route('updates') }}"> Updates</a></li>
                                    <li><a href="{{ route('blogs.index') }}"> Blog</a></li>
                                    <li><a href="{{ route('contact_us') }}"> Contact Us</a></li>
                                    @if(Auth::id())
                                    <li><a href="{{ route('admin') }}"> User Panel </a></li>
                                    @else
                                    <li><a href="{{ route('login') }}"> Login </a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        {{-- <div class="col-md-2">
                            <div class="topbar__left">
                                <div class="topbar__social">
                                    <a href="#" class="fab fa-facebook-square"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-instagram"></a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <nav class="main-menu">
                <div class="container">
                    <div class="logo-box">
                        <a href="{{ route('index') }}" aria-label="logo image">
                            <img src="{{  asset('frontend/assets/images/logo.webp') }}" width="155" alt="">
                        </a>
                        <span class="fa fa-bars mobile-nav__toggler"></span>
                    </div>
                    <ul class="main-menu__list">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li class="dropdown">
                            <a href="{{ route('services') }}" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-expanded="false">Service</a>
                            <ul>
                                <li><a href="{{ route('future_package') }}">Future Packages </a></li>
                                <li><a href="{{ route('equity_package') }}">Equity Packages </a></li>
                                <li><a href="{{ route('option_package') }}">Option Packages </a></li>
                                <li><a href="{{ route('index_future_hni_services') }}">Index Future HNI Services</a></li>
                                <li><a href="{{ route('sb_premium_packages') }}">SBFS Premium Packages </a></li>
                                <li><a href="{{ route('hni_packages') }}">HNI Packages</a></li>
                                <li><a href="{{ route('ags_trades_package') }}">AGS Trades Package</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('payment_option') }}">Payment Option</a></li>
                        <li><a href="{{ route('past_performance') }}">Past Performance</a></li>
                        <li><a href="{{ route('user_agreement') }}">User Agreement</a></li>
                        <li><a href="{{ route('invester_charter') }}">Investor Charter</a></li>
                        <li><a href="{{ route('complaint_data') }}">Complaint Board</a></li>
                        <li><a href="{{ route('grievance') }}">Grievance</a></li>
                    </ul>

                    <div class="main-header__info">
                        <div class="main-header__info-phone">
                            <i class="pylon-icon-tech-support"></i>
                            <div class="main-header__info-phone-content">
                                <span>Call Now</span>
                                <h3><a href="tel:+91-7400041121">+91-7400041121</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>
