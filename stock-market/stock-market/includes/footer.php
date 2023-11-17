<section class="footer-sec">
    <div class="container p-4">
        <div class="row">
            <div class="col-md-3 mt-2">
                <p class="fs-5">Our Address </p>
                <p class="fs-6" style="color:#a3b2c7; !important"><?= $address ?></p>

            </div>

            <div class="col-md-3 mt-2">
                <p class="fs-5">Our Contact </p>
                <p class="fs-6"><span style="color:#a3b2c7;">Call Now Us</span><br><?= $phone ?></p>
                <a href="tel:<?= $phone ?>"><button type="btn" class="fs-6 bg-light-blue px-4 py-2 border-0 rounded text-white">REQUEST A CALL </button></a>

            </div>

            <div class="col-md-3 mt-2">
                <p class="fs-5">Our Services </p>
                <ul class="list-none">
                    <li><a href="#">NIFTY / Bank NIFTY</a></li>
                    <li><a href="#">Equity Cash / Intraday</a></li>
                    <li><a href="#">Option (Call - Put)</a></li>
                    <li><a href="#">Future (Derivatives)</a></li>
                    <li><a href="#">Index</a></li>
                </ul>
            </div>
            <div class="col-md-3 mt-2">
                <p class="fs-5">Navigation</p>
                <ul class="list-none">
                    <li><a href="privacy-policy.php">Privacy Policy</a></li>
                    <li><a href="#">Disclaimer</a></li>
                    <li><a href="terms-and-condition">Terms & Conditions</a></li>
                    <li><a href="#">Refund Policy</a></li>
                </ul>
            </div>

        </div>
        <div class="copyright my-4"></div>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-4 mt-2">
                <img src="stock-market/images/logo-light.webp" alt="logo-light" style="width:50%" width="250px" height="70px">
            </div>
            <div class="col-md-8 mt-2">

                <p>Developed & Marketed by <a href="https://www.mindyourads.com">MindYourAds</a> © 2023. All Rights
                    Reserved</p>

            </div>




        </div>
    </div>

</section>

<a class="call-fixed" href="tel:<?= $phone ?>" target="_blank">Call Now
    <span class="text-white">:<?= $phone ?></span></a>

</main>

<script src="stock-market/js/jquery.js"></script>



<script src="stock-market/js/animation.js"></script>

<?php include "stock-market/includes/popup.php"; ?>
</body>

</html>