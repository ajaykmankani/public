@extends('admin.layouts.app')
@section('data')


<style>
    .single-pricing {
    box-shadow: 0px 0px 27px 1.74px rgb(26 26 26 / 8%);
    background: #fff;
    padding: 40px 35px;
    text-align: center;
    transition: all .3s linear;
    overflow: hidden;
    position: relative;
    -moz-transition: all .3s linear;
    -ms-transition: all .3s linear;
    -o-transition: all .3s linear;
    -webkit-transition: all .3s linear;
}

.single-pricing h2 {
    margin-bottom: 30px;
    color: #333;
    font-size: 30px;
}
.single-pricing ul li {
    text-align: left;
    margin-bottom: 15px;

    font-size: 16px;
    font-weight: 400;
    color: #333;
}
.single-pricing ul li i {
    font-size: 18px;
    font-weight: 400;
    color: #659DBD;
}
.price {
    font-size: 20px !important;
    font-weight: 700;
    color: #363636;
}
.price-content {
    margin-top: 10px;
    font-size: 15px !important;
    color: #363636;
}
.pricing {
    color: #363636;
    margin-bottom: 20px;
    font-weight: 600;
    line-height: 1;
    display: grid;
    font-size: 35px;
}
.thm-btn {
    display: inline-block;
    vertical-align: middle;
    -webkit-appearance: none;
    border: none;
    outline: none !important;
    background-color:#008204 !important;
    color: #fff;
    text-align: center;
    font-size: 16px;
    border-radius: 4px;
    font-weight: 500;
    font-family: var(--thm-font);
    padding: 15px 30px;
    transition: 500ms;
    background-color: var(--thm-base);
    color: #fff;
}
</style>
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
                                <h4 class="card-title">Packages</h4>

                                @include('admin.packages.package')
                            </div>
                        </div>
                    </div>


                    <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Payment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="payment-box">
                <div class="text-center">
                    <img class="" src="{{ asset('frontend\assets\images\barcode.webp') }}" alt="" width="50%">
                </div>
                <h4>UPI</h4>
                <p><b>Name</b> : Stock Benefits Financial Services </p>
                <p><b>Mobile No</b> : 9511001267</p>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>
                </div>
            </div>



            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
        @endsection
