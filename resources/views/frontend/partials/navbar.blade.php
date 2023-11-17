
        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box clearfix">
                    <figure class="logo-box pull-left"><a href="{{ route('index') }}"><img src="{{ asset('frontend/assets/images/logo.png') }}" alt=></a></figure>
                    <div class="close-search pull-right"><i class="fa-solid fa-xmark"></i></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
                        <form method="post" action="https://azim.hostlin.com/Bullion/{{ route('index') }}">
                            <div class="form-group">
                                <fieldset>
                                    <input type="search" class="form-control" name="search-input" value="" placeholder="Type your keyword and hit" required >
                                    <button type="submit"><i class="flaticon-loupe"></i></button>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- main header -->
        <header class="main-header">
            <!-- header-top -->
            <div class="header-top">
                <div class="outer-container">
                    <div class="support-box">
                        <div class="icon-box"><img src="{{ asset('frontend/assets/images/icons/icon-1.png') }}" alt=""></div>
                        <p><a href="tel:{{ env('PHONE') }}">{{ env('PHONE') }}</a> or Request for a <a href="tel:{{ env('PHONE') }}"><span>call back</span></a></p>
                    </div>
                    <div class="text">
                        <div class="icon-box"><img src="{{ asset('frontend/assets/images/icons/icon-2.png') }}" alt=""></div>
                        <p>£20 Discount & Get 24/7 Free Assistance</p>
                    </div>
                    <div class="right-column">
                        <div class="guide-box">
                            <div class="icon-box"><img src="{{ asset('frontend/assets/images/icons/icon-3.png') }}" alt=""></div>
                            <p><a href="{{ route('index') }}">Free Trading Guides</a></p>
                        </div>
                        <div class="help-center">
                            <div class="icon-box"><img src="{{ asset('frontend/assets/images/icons/icon-4.png') }}" alt=""></div>
                            <p><a href="{{ route('index') }}">Help Center</a></p>
                        </div>
                        <div class="language-box">
                            <div class="icon-box"><img src="{{ asset('frontend/assets/images/icons/icon-5.png') }}" alt=""></div>
                            <div class="select-box">
                                <select class="wide">
                                   <option data-display="English">English</option>
                                   <option value="1">Chinese</option>
                                   <option value="2">Hindi</option>
                                   <option value="3">Spanish</option>
                                   <option value="4">Turky</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="outer-container">
                    <div class="outer-box">
                        <div class="menu-area">
                            <div class="logo-box">
                                <figure class="logo"><a href="{{ route('index') }}"><img src="{{ asset('frontend/assets/images/logo.png') }}" alt=""></a></figure>
                            </div>
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current dropdown"><a href="{{ route('index') }}">Home</a>
                                            <ul>
                                                <li><a href="{{ route('index') }}">Home One</a></li>
                                                <li><a href="{{ route('index') }}-2">Home Two</a></li>
                                                <li><a href="{{ route('index') }}-3">Home Three</a></li>
                                            </ul>
                                        </li>  
                                        <!-- <li class="dropdown"><a href="{{ route('index') }}">Markets</a>
                                            <ul>
                                                <li><a href="markets">Markets</a></li>
                                                <li><a href="market-details">Details Page</a></li>
                                            </ul>
                                        </li> -->
                                        <li class="dropdown"><a >Packages</a>
                                            <ul>
                                            <li><a href="{{ route('future_package') }}">Future Packages </a></li>
                                <li><a href="{{ route('equity_package') }}">Equity Packages </a></li>
                                <li><a href="{{ route('option_package') }}">Option Packages </a></li>
                                <li><a href="{{ route('index_future_hni_services') }}">Index Future HNI Services</a></li>
                                <li><a href="{{ route('sb_premium_packages') }}">SBFS Premium Packages </a></li>
                                <li><a href="{{ route('hni_packages') }}">HNI Packages</a></li>
                                <li><a href="{{ route('ags_trades_package') }}">AGS Trades Package</a></li>
                                                <!-- <li><a href="platform">Platform</a></li>
                                                <li><a href="account">Our Accounts</a></li>
                                                <li><a href="account-details">Standard Account</a></li>
                                                <li><a href="account-details-2">Commision Account</a></li>
                                                <li><a href="account-details-3">STP Pro Account</a></li> -->
                                            </ul>
                                        </li> 
                                        <!-- <li class="dropdown"><a href="{{ route('index') }}">Education</a>
                                            <ul>
                                                <li><a href="education">Education</a></li>
                                                <li><a href="education-details">Detail Page</a></li>
                                            </ul>
                                        </li>  -->
                                        <!-- <li class="dropdown"><a href="{{ route('index') }}">About</a>
                                            <ul>
                                                <li><a href="about">Company</a></li>
                                                <li><a href="history">History</a></li>
                                                <li><a href="team">Team</a></li>
                                                <li class="dropdown"><a href="{{ route('index') }}">Blog</a>
                                                    <ul>
                                                        <li><a href="blog">3 Columns</a></li>
                                                        <li><a href="blog-2">3 Columns Sidebar</a></li>
                                                        <li><a href="blog-3">List View 01</a></li>
                                                        <li><a href="blog-4">List View 02</a></li>
                                                        <li><a href="blog-details">Single Post</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact">Contact</a></li>
                                                <li><a href="faq">Faq’s</a></li>
                                                <li><a href="error">404</a></li>
                                            </ul>
                                        </li>  -->
                                        <li><a href="{{ route('payment_option') }}">Payment Option</a></li>
                        <li><a href="{{ route('past_performance') }}">Past Performance</a></li>
                        <li><a href="{{ route('user_agreement') }}">User Agreement</a></li>
                        <li><a href="{{ route('invester_charter') }}">Investor Charter</a></li>
                        <li><a href="{{ route('complaint_data') }}">Complaint Board</a></li>
                        <li><a href="{{ route('grievance') }}">Grievance</a></li> 
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-right-content">
                            <div class="search-box-outer search-toggler"><i class="flaticon-search"></i></div>
                            <div class="clients-box">
                                <div class="icon-box"><img src="{{ asset('frontend/assets/images/icons/icon-6.png') }}" alt=""></div>
                                <a href="{{ route('index') }}">Client Portal<i class="flaticon-right-down"></i></a>
                            </div>
                            <div class="btn-box"><a href="{{ route('index') }}" class="theme-btn btn-one"><span>Open an A/c</span></a></div>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-container">
                    <div class="outer-box">
                        <div class="menu-area">
                            <div class="logo-box">
                                <figure class="logo"><a href="{{ route('index') }}"><img src="{{ asset('frontend/assets/images/logo.png') }}" alt=""></a></figure>
                            </div>
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <div class="menu-right-content">
                            <div class="search-box-outer search-toggler"><i class="flaticon-search"></i></div>
                            <div class="clients-box">
                                <div class="icon-box"><img src="{{ asset('frontend/assets/images/icons/icon-6.png') }}" alt=""></div>
                                <a href="{{ route('index') }}">Client Portal<i class="flaticon-right-down"></i></a>
                            </div>
                            <div class="btn-box"><a href="{{ route('index') }}" class="theme-btn btn-one"><span>Open an A/c</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="{{ route('index') }}"><img src="{{ asset('frontend/assets/images/logo-2.png') }}" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:{{ env('PHONE') }}">{{ env('PHONE') }}</a></li>
                        <li><a href="mailto:{{ env('EMAIL') }}">{{ env('EMAIL') }}</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="{{ route('index') }}"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="{{ route('index') }}"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="{{ route('index') }}"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="{{ route('index') }}"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="{{ route('index') }}"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->