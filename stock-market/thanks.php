<?php include('global-variables.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="https://example.com/images/char-dham-yatra.jpg">
    <meta property="og:url" content="https://example.com/char-dham-yatra">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="images/logo.webp">
    <title> <?= $sitename ?> </title>
    <link rel="stylesheet" href="stock-market/css/main.css">
    <link rel="stylesheet" href="stock-market/css/animation.css">
    <link rel="stylesheet" href="stock-market/css/bootstrap.css">


    <link rel="stylesheet" href="stock-market/css/bootstrap-icons.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->


    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-MPL7C7V');
    </script>
    <!-- End Google Tag Manager -->
    <!-- End Google Analytics -->
    <!--Bing Tracking -->
    <script>
    (function(w, d, t, r, u) {
        var f, n, i;
        w[u] = w[u] || [], f = function() {
            var o = {
                ti: "97032462",
                enableAutoSpaTracking: true
            };
            o.q = w[u], w[u] = new UET(o), w[u].push("pageLoad")
        }, n = d.createElement(t), n.src = r, n.async = 1, n.onload = n.onreadystatechange = function() {
            var s = this.readyState;
            s && s !== "loaded" && s !== "complete" || (f(), n.onload = n.onreadystatechange = null)
        }, i = d.getElementsByTagName(t)[0], i.parentNode.insertBefore(n, i)
    })(window, document, "script", "//bat.bing.com/bat.js", "uetq");
    </script>
</head>
<?php include($website . '/variables/site_setting.php'); ?>




<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MPL7C7V" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="nav-head">
        <div class="info-bar p-2 hide">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 d-flex align-item-start justify-content-start flex-row">
                        <div class="top-social">
                            <a class="text-dark" href="#"><i class="bi bi-facebook"></i></a>
                            <a class="text-dark" href="#"><i class="bi bi-twitter"></i></a>
                            <a class="text-dark" href="#"><i class="bi bi-instagram"></i></a>

                        </div>
                        <span class="mx-4"> <i class="bi bi-stopwatch"></i> Mon - Sat 9:00am - 6:00pm </span>
                    </div>
                    <div class="col-md-4 text-end">

                        <button class="btn btn-call-head" type="btn btn-primary"><a href="tel:<?= $phone ?>">Get Free
                                Trial</a></button>

                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container fluid px-2">
                <a class="navbar-brand" href="index.php"><img src="<?= $logo ?>" alt="logo" width="250px"
                        height="70px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#performance">Past Performance</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#packages">Packages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                    <div class="d-flex">

                        <a class="hide fw-normal" style="color:var(--para-color)">Call Us Now<br><span
                                class="fs-5 text-light-blue"><?= $phone ?></span></a>
                    </div>
                </div>
            </div>
        </nav>

    </header>
    <!------------------------------>



    <section class="thankyousec">

        <div class="container p-5">
            <div class="row text-center">
                <div class="col-md-12">
                    <div id="lottie-animation" style="height:121px; margin-bottom: 40px; margin-top: 40px;"></div>
                    <h1 class="text-b">Thank You For Submitting...</h1>
                    <p class="mb-5">Thank you for reaching out! If you have any further questions or concerns,
                        please don't hesitate to contact us at <b><?= $mail ?></b>.</p>
                    <a href="index.php" class="backtohomebtn">Home</a>
                </div>
            </div>
        </div>

    </section>



    <!------------------------>


    <?php include($website . '/includes/footer.php') ?>
    <script src="<?= $website ?>/js/lottie.js"></script>
    <script>
    const container = document.getElementById('lottie-animation');
    const animation = bodymovin.loadAnimation({
        container: container,
        path: '<?= $website ?>/lottie/right.json',
        renderer: 'svg',
        loop: true,
        autoplay: true,
        name: "Lottie Animation"
    });
    </script>