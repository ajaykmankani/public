@extends('frontend.layout.app')
@section('content')

<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/main/bg-better.webp);"></div>
    <div class="container">
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="index.php">Home</a></li>
            <li>/</li>
            <li><span>Contact Us</span></li>
        </ul>
        <h2>Contact Us</h2>
    </div>
</section>

<section class="contact-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-one__content">
                    <div class="block-title">
                        <p class="small-title">Get in touch with us</p>
                        <h2 class="title-block">Ask for your query</h2>
                    </div>
                    <div class="contact-one__box">
                        <i class="pylon-icon-telephone"></i>
                        <div class="contact-one__box-content">
                            <h4>Call Now</h4>
                            <a href="tel:+91-7400041121"> +91-7400041121</a>
                        </div>
                    </div>
                    <div class="contact-one__box">
                        <i class="pylon-icon-email1"></i>
                        <div class="contact-one__box-content">
                            <h4> Email</h4>
                            <a href="mailto:admin@stockbenifits.com"> admin@stockbenifits.com</a>
                        </div>
                    </div>
                    <div class="contact-one__box">
                        <i class="pylon-icon-pin1"></i>
                        <div class="contact-one__box-content">
                            <h4>Office Address</h4>
                            <a href="javascript:;"> 1502, Kamdhenu Building, Sector 14 Kharghar Navi Mumbai, Maharashtra
                                - 410210</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST"
                    class="contact-one__form">
                    <div class="row low-gutters">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" placeholder="Your Name" class="form-control contact-one__form-input"
                                    name="name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" placeholder="Your Email"
                                    class="form-control contact-one__form-input" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" placeholder="Phone Number"
                                    class="form-control contact-one__form-input" name="phone" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" placeholder="Subject" class="form-control contact-one__form-input"
                                    name="subject">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="message" placeholder="Write Message"
                                    class="contact-one__form-input"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="6Ldqm8wkAAAAAMlKYYlHhJ-xLODbWxDFyKgX8WuF"></div>
                                <script
                                    src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
                                    async defer>
                                </script>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button class="thm-btn" type="submit" name="btnContactSubmit">Send A Message</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
</section>
<div class="google-map__home-two">
    <iframe title="template google map"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7542.992886519717!2d73.0646776260767!3d19.041898440207174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c2103fffffff%3A0x491cda48dec6fb83!2sNAVI%20MUMBAI%20INTERNATIONAL%20TRADE%20CENTRE!5e0!3m2!1sen!2sin!4v1641974399155!5m2!1sen!2sin"
        class="map__home-two" allowfullscreen></iframe>
</div>

@endsection