<?php

$currentSegment = request()->segment(1);

if ($currentSegment == 'admin_future_package') {
    $data = array(
        array('plan' => 'Future Platinum', 'sub' => 'HNI Future', 'pointer' => array(
            'Get 2-3 ideas daily (Positional + intraday)',
            'Minimum 2 lot trading in each idea',
            'Get Complimentary ideas from AGS',
            'Proper Entry & Exit Level ,Follow Ups & Updates',
            'Accuracy up to 70-80%.',
            'Get Live Market Guidance Thru Call, SMS and WhatsApp Notifications',
        )),
        array('plan' => 'Stock Future Premium', 'sub' => 'HNI', 'pointer' => array(
            'Get 2-3 ideas daily (Positional + intraday)',
            'Minimum 2 lot trading in each idea',
            'Get Complimentary ideas from AGS',
            'Proper Entry & Exit Level ,Follow Ups & Updates',
            'Accuracy up to 70-80%.',
            'Get Live Market Guidance Thru Call, SMS and WhatsApp Notifications',
        )),
        array('plan' => 'Stock Future Intraday', 'sub' => 'PPI', 'pointer' => array(
            'Get 2-3 ideas daily (Positional + intraday)',
            'Minimum 2 lot trading in each idea',
            'Get Complimentary ideas from AGS',
            'Proper Entry & Exit Level ,Follow Ups & Updates',
            'Accuracy up to 70-80%.',
            'Get Live Market Guidance Thru Call, SMS and WhatsApp Notifications',
        )),

    );
}

if ($currentSegment == 'admin_equity_package') {
    $data = array(
        array('plan' => 'Regular Package', 'sub' => 'Equity Int', 'pointer' => array(
            'Get 2-3 ideas daily (Positional + intraday)',
            'Minimum 2 lot trading in each idea',
            'Get Complimentary ideas from AGS',
            'Proper Entry & Exit Level ,Follow Ups & Updates',
            'Accuracy up to 70-80%.',
            'Get Live Market Guidance Thru Call, SMS and WhatsApp Notifications',
        )),
        array('plan' => 'Premium Services', 'sub' => 'Cash Intraday', 'pointer' => array(
            'Get 2-3 ideas daily (Positional + intraday)',
            'Minimum 2 lot trading in each idea',
            'Get Complimentary ideas from AGS',
            'Proper Entry & Exit Level ,Follow Ups & Updates',
            'Accuracy up to 70-80%.',
            'Get Live Market Guidance Thru Call, SMS and WhatsApp Notifications',
        )),
        array('plan' => 'Cash Intraday', 'sub' => 'PPI', 'pointer' => array(
            'Get 2-3 ideas daily (Positional + intraday)',
            'Minimum 2 lot trading in each idea',
            'Get Complimentary ideas from AGS',
            'Proper Entry & Exit Level ,Follow Ups & Updates',
            'Accuracy up to 70-80%.',
            'Get Live Market Guidance Thru Call, SMS and WhatsApp Notifications',
        )),

    );
}

if ($currentSegment == 'admin_option_package') {
    $data = array(
        array('plan' => 'Options Intraday', 'sub' => 'Platinum', 'pointer' => array(
            '1 Ideas Daily Basis',
            'Minimum Investment 30k',
            'Daily Possible Profit Rs 3k to 4k on Positive advice.',
            'Accuracy up to 70-80%.',
            'Get Live Market Guidance Thru Call, SMS and WhatsApp Notifications',
        )),
        array('plan' => 'Options Positional', 'sub' => '', 'pointer' => array(
            '2-3 Ideas on a Weekly Basis',
            'Holding Period 2-3 days',
            'Accuracy up to 70-80%.',
            'Get Live Market Guidance Thru Call, SMS and WhatsApp Notifications',
        )),
        array('plan' => 'Options Intraday', 'sub' => 'PPI', 'pointer' => array(
            ' Get 1 idea per day',
            'Minimum investment 1 Lac.',
            'Average Possible Profit Rs 5k to 10k Per Positive Advices.',
            'Get 4 to 5 complimentary ideas per month from AGS',
            'Packages to remain active till 20 positive ideas are delivered',
            'At best, for 20 Positive Ideas takes minimum 24 Trading Days however for every negative ideas your services gets extended.',
            'Accuracy up to 70-80%.',
            'Get Live Market Guidance Thru Call, SMS and WhatsApp Notifications',
        )),

    );
}

if ($currentSegment == 'admin_ags_trades_package') {
    $data = array(
        array('plan' => 'AGS Trades Package', 'sub' => 'INDEX', 'pointer' => array(
            ' Get 2-3 ideas daily (GET NIFTY & BANK NIFTY IDEAS.Positional + intraday)',
            'GET 4 TO 5 IDEAS PER WEEK.',
            'INTRADAY + POSITIONAL IDEAS (MINIMUM ONE OPEN POSITION AT A TIME, HOLDING PERIOD FOR A WEEK)',
            'Average Possible Profit Upto Rs 8k to 10k on Per Positive advice.',
            'Accuracy up to 70-80%.',
            'Get Live Market Guidance Thru Call, SMS and WhatsApp Notifications',
        )),
        array('plan' => 'AGS Trades Package', 'sub' => 'STOCK', 'pointer' => array(
            ' Get Best Stock Option Ideas',
            'GET 2 TO 3 IDEAS PER WEEK.',
            'Average Possible Profit Upto Rs 25k to 30k on Per Positive Ideas (Q-2 Lots)',
            'Follow ups & all important news from your Relationship Manager',
            'Accuracy up to 70-80%.',
            'Get Live Market Guidance Thru Call, SMS and WhatsApp Notifications',
        )),

    );
}

if ($currentSegment == 'admin_hni_packages') {
    $data = array(

        array('plan' => 'HNI Platinum Delivery', 'sub' => 'HNI', 'pointer' => array(
            '2 ideas on a weekly Basis',
            'Holding Period 1-3 Months (Subject to market momentum)',
            'Average Return 10-12% on Each Profitable Ideas',
            'Accuracy up to 70-80%.',
            'Get Live Market Guidance Thru Call, SMS and WhatsApp Notifications',
        )),


    );
}

if ($currentSegment == 'admin_index_future_hni_services') {
    $data = array(

        array('plan' => 'Index Future', 'sub' => 'HNI Services', 'pointer' => array(
            ' Get Bank Nifty & Nifty Ideas',
            '1 Idea on daily basis',
            'All Recommendation is given by SEBI Registered Investment Advisor',
            'Accuracy up to 70-80%.',
            'Get Live Market Guidance Thru Call, SMS and WhatsApp Notifications Buy Now',
        )),


    );
}

if ($currentSegment == 'admin_sb_premium_packages') {
    $data = array(

        array('plan' => 'SB Premium Combo', 'sub' => '', 'pointer' => array(
            'Get best Ideas from all segments.',
            'Most Economical Package',
            'Personal Support By our Research Team',
            'Accuracy up to 70-80%.',
            'Get Live Market Guidance Thru Call, SMS and WhatsApp Notifications',
        )),


    );
}


$data2 = array(
    array('price' => '12500', 'duration' => 'Per Month', 'duration2' => 'Monthly', 'link' => 'https://paytm.me/gsb-0AH'),
    array('price' => '36500', 'duration' => 'Per Quarter', 'duration2' => 'Quarterly', 'link' => 'https://paytm.me/vv-b0AH'),
    array('price' => '72500', 'duration' => 'Half Yearly', 'duration2' => 'Half Yearly', 'link' => 'https://paytm.me/7Xw0-wH'),
    array('price' => '1.47 lac', 'duration' => 'Yearly', 'duration2' => 'Yearly', 'link' => 'https://paytm.me/yC-3MFw'),
);
?>

<section class="pricing-main" id="future-package">
    <div class="container">

        <div class="row">
            <?php if ($currentSegment == 'admin_hni-packages.php' || $currentSegment == 'admin_index-future-hni-services.php' || $currentSegment == 'admin_sb-premium-packages.php') { ?>
            <div class="col-lg-4"></div>
            <?php  } ?>
            <?php foreach ($data as $key => $value) { ?>
            <div class="col-lg-4 col-sm-12">
                <div class="single-pricing">
                    <div class="pricing">


                    </div>
                    <h2><?= $value['plan'] ?> </h2>
                    <h4><?= $value['sub'] ?> </h4>
                    <ul>
                        <?php foreach ($value['pointer'] as $key => $value) { ?>
                        <li><i class="fa fa-check"></i> <?= $value ?></li>

                        <?php } ?>
                    </ul>

                </div>
            </div>
            <?php  } ?>

            <?php if ($currentSegment == 'admin_hni-packages.php' || $currentSegment == 'admin_index-future-hni-services.php' || $currentSegment == 'admin_sb-premium-packages.php') { ?>
            <div class="col-lg-4"></div>
            <?php  } ?>

        </div>
    </div>
    <div class="clear"></div>
</section>

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <p><b>1. Service Fees should be paid ONLY as mentioned on website which is Inclusive of 18% Service Tax
                    (G.S.T.).</b></p>
            <p><b>2. Service Fees should always be paid as per Bank Details shared on Website.</b></p>
            <p><b>3. All trades are recommended through WhatsApp Broadcast List & Selective RM Personal Service.</b></p>
            <p><b>4. We do not Promise Or Assure any guaranteed returns or Capital Safety.</b></p>
            <p><b>5. Always Trades with Strict Stop-Losses & As per Personal Risk-Appetite.</b></p>
            <p><b>6. If Client found unprofessional approach from RM please Inform Team Head & Proprietor directly.</b>
            </p>
            <p><b>7. Derivative F&O Trading is High Risk Tradings & Client should use his discreation & Risk of
                    Capital.</b></p>
        </div>
    </div>
</div>

<section class="pricing-main" id="future-package">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12 text-center mb-3">
                <h5>PRICING</h5>
                <h1>Pick a plan that fits your needs</h1>
            </div>
            <?php foreach ($data2 as $key => $value) { ?>
            <div class="col-lg-3 col-sm-12">
                <div class="single-pricing">


                    <div class="pricing">
                        <span class="price-content mb-5" style="font-size: 38px;"><?= $value['duration2'] ?> </span>
                        <span class="price">₹ <?= $value['price'] ?></span>
                        <span class="price-content"><?= $value['duration'] ?> </span>
                    </div>
                    <!-- <a href="<?= $value['link'] ?>" class="thm-btn">Buy Now</a> -->
                    <button type="button" class="thm-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Buy Now
                    </button>
                </div>
            </div>
            <?php  } ?>
        </div>
    </div>
    <div class="clear"></div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Make Payment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="payment-box">
                    <div class="text-center">
                        <img class="" src="{{ asset('assets/images/barcode.jpg') }}" alt="" width="100%">
                    </div>
                    <h4>UPI</h4>
                    <p><b>Name</b> : Stock Benefits Financial Services </p>
                    <p><b>Mobile No</b> : 9511001267</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
