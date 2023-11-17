@extends('admin.layouts.app')
@section('data')
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        @include('admin.partials.navbar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title"> </h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Tables</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                        </ol>
                    </nav>
                </div>

                <div class="row">

                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Help & Support</h4>
                               <div class="row">
                                <h3 class="mb-5">Need Help?</h3>
                                <div class="col-6">
                                    <a href="tel:+91-7400041121"><i class="mdi mdi-phone" style="font-size: 50px"></i></a>
                                    <br/>
                                    <a href="tel:+91-7400041121">+91-7400041121</a>
                                </div>
                                <div class="col-6">
                                    <a href="https://wa.me/917400041121" target="__blank"><i class="mdi mdi-whatsapp" style="font-size: 50px"></i></a>
                                    <br/>
                                    <a href="https://wa.me/917400041121" target="__blank">StockBenifits Whatsapp</a>
                                </div>
                               </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
        @endsection
