@extends('frontend.layout.app')
@section('content')

<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{ asset('frontend/assets/images/main/bg-better.webp') }});"></div>
    <div class="container">
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="index.php">Home</a></li>
            <li>/</li>
            <li><span>Payment Option </span></li>
        </ul>
        <h2>Payment Option</h2>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <div class="payment-box">
                    <img src="{{ asset('frontend/assets/images/icici-bank-vector-logo.webp') }}" alt="" width="100%">
                    <h4>ICICI Bank</h4>
                    <p><b>Name</b> : Stock Benefits Financial Services </p>
                    <p><b>Current A/c No</b> : 387605000549</p>
                    <p><b>IFSC Code</b> : ICIC0003876</p>
                    <p><b>Branch</b> : LUCKNOW BRANCH </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="payment-box">
                    <div class="text-center">
                        <img class="" src="{{ asset('frontend/assets/images/barcode.webp') }}" alt="" width="100%">
                    </div>
                    <h4>UPI</h4>
                    <p><b>Name</b> : Stock Benefits Financial Services </p>
                    <p><b>Mobile No</b> : 9511001267</p>
                </div>
            </div>
            <div class="col-md-2"></div>

        </div>
    </div>
</section>


@endsection
