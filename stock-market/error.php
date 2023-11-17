<?php include('global-variables.php') ?>
<?php include($website . '/includes/header.php') ?>
<!------------------------------>
<section class="thankyousec">

    <div class="container p-5">
        <div class="row text-center">
            <div class="col-md-12">
                <div id="lottie-animation" style="height:198px; margin-top: 40px;"></div>
                <h1 class="text-b">Some error occurred while submitting your form...</h1>
                <p class="mb-5">We will fix this soon. If you have any further questions or concerns,
                    please don't hesitate to contact us at <b>contact@goinggly.com</b>.</p>
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
    path: '<?= $website ?>/lottie/error.json',
    renderer: 'svg',
    loop: true,
    autoplay: true,
    name: "Lottie Animation"
});
</script>