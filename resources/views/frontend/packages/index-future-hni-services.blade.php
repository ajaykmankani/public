@extends('frontend.layout.app')
@section('content')

<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/main/bg-better.webp);"></div>
    <div class="container">
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="index">Home</a></li>
            <li>/</li>
            <li><span>Index Future HNI Services</span></li>
        </ul>
        <h2>Index Future HNI Services</h2>
    </div>
</section>

@include('frontend.packages.all-services')

@include('frontend.packages.package')

<section class="counter-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-7 m-md-auto">
                <div class="main-form-content">
                    <h3>Benefits of stock market:</h3>
                    <p>To provide the best Research i.e. Trading & Investment Ideas & Options Strategies to our clients for their consistent short-term & long-term capital growth. To provide personalized services to our clients to achieve their financial goals & Objectives post-understanding their risk capacity.</p>
                    <ul>
                        <li>1. Takes advantage of a growing economy</li>
                        <li>2. Best way to stay ahead of inflation</li>
                        <li>3. Easy to buy</li>
                        <li>4. Easy to sell</li>
                        <li>5. Flexibility To Invest in Smaller Amounts</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5">
                <div class="counter-form-bg">
                    <div class="counter-form">
                        <h4>Grow Your Business </h4>
                        @include('frontend.forms.ask_for_expert_advice')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.review.index')

@endsection
