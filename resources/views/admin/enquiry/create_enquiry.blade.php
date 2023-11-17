@extends('admin.layouts.app')
@section('data')
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        @include('admin.partials.navbar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title"> Form elements </h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                        </ol>
                    </nav>
                </div>
                @if (Session('success'))
                    <div class="alert alert-success alert-dismissible fade show zindex-fixed" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif
                <div class="row">
                    <style>
                        .form-control {
                            color: #fff !important;
                        }
                    </style>
                    @php check_sub() @endphp
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Call</h4>
                                <form action="{{ route('store_enquiry') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row form-group">
                                        <div class="col-md-6">
                                            <label>Name :</label>
                                            <input class="form-control" type="text" name="name" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Email Id :</label>
                                            <input class="form-control" type="email" name="email" required=""
                                                style="background-image: url(&quot;data:image/png;base64,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&quot;) !important; background-repeat: no-repeat; background-size: 20px; background-position: 97% center; cursor: auto;"
                                                data-minemail-com="0">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-md-6">
                                            <label>Phone Number. :</label>
                                            <input class="form-control" type="tel" name="phone" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Date of Enrolment:</label>
                                            <input class="form-control" type="date" name="boe" required="">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-md-6">
                                            <label>Date of Birth:</label>
                                            <input class="form-control" type="date" name="dob" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Age Group</label>
                                            <select name="age_group" class="form-control" required="">.
                                                <option value="under 25">Under 25</option>
                                                <option value="26-45">26-45</option>
                                                <option value="46-60">46-60</option>
                                                <option value="above 60">Above 60</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-6">
                                            <label>State :</label>
                                            <input class="form-control" type="text" name="state"
                                                style=" text-transform: uppercase;" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Adhar Number. :</label>
                                            <input class="form-control" type="number" title="Please enter a 12-digit number" name="adhar" required="" >
                                        </div>
                                    </div>
                                    <div class="row form-group">

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Upload Adhar Card Front</label>
                                                <div class="file-upload">
                                                    <input type="file" class="From-control" name="adhaar_card_front"
                                                        required="">
                                                    <!--<label class="custom-file-label" for="customFile">Choose file</label>-->
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="adhaar_card_back">Upload Adhar Card Back</label>
                                                <div class="file-upload">
                                                    <input id="" type="file" class="From-control"
                                                        name="adhaar_card_back" required="">
                                                    <!--<label class="custom-file-label" for="customFile">Choose file</label>-->
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <label for="pan_card">Upload PAN Card </label>
                                                <div class="file-upload">
                                                    <input type="file" id="pan_card" class="From-control" name="pan_card"
                                                        required="">
                                                    <!--<label class="custom-file-label" for="customFile">Choose file</label>-->
                                                </div>
                                            </div>
                                        </div >

                                    </div>

                                    <div class="row form-group">
                                        <div class="col-md-6">
                                            <label>What is total no of years experience -in stock market</label>
                                            <select name="experience" class="form-control" required="">
                                                <option value="0-1 yrs">0-1 Yrs</option>
                                                <option value="2-5 yrs">2-5 Yrs</option>
                                                <option value="above 5 yrs">Above 5 Yrs</option>
                                            </select>
                                        </div>
                                         <div class="col-md-6">
                                            <label>Pan Number :</label>
                                            <input class="form-control" type="text" name="pan"
                                                style=" text-transform: uppercase;" required="">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-md-6">
                                            <label>Trading goal</label>
                                            <select name="trading_goal" class="form-control" required="">

                                                <option value="Speculative Derivatives&nbsp;Trading&nbsp;Gains">Speculative
                                                    Derivatives&nbsp;Trading&nbsp;Gains</option>

                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Trading amount</label>
                                            <select name="trading_amount" class="form-control" required="">
                                                <option value="less than 2 lac">Less Than 2 Lac</option>
                                                <option value="2-5 lac">2-5 Lac</option>
                                                <option value="5-10 lac">5-10 Lac</option>
                                                <option value="above 10 lac">Above 10 Lac</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-md-6">
                                            <label>Trading type</label>
                                            <select name="trading_type" class="form-control" required="">
                                                <option value="intraday">Intraday</option>
                                                <option value="short term">Short Term </option>
                                                <!--<option value="MID-TERM">MID-TERM</option>-->
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Annual Income</label>
                                            <select name="annual_income" class="form-control" required="">
                                                <option value="LESS THAN 3 LACS">LESS THAN 3 LACS</option>
                                                <option value="3-7 LACS">3-7 LACS</option>
                                                <option value="ABOVE 7 LACS">ABOVE 7 LACS</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-md-6">
                                            <label>Source of Income</label>
                                            <select name="income_source" class="form-control" required="">
                                                <option value="salary">Salary</option>
                                                <option value="business">Business</option>
                                                <option value="house rent income">House Rent Income</option>
                                                <option value="other income">Other Income</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Earning Persons in Family</label>
                                            <select name="earning_person" class="form-control" required="">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-md-6">
                                            <label>Number of Dependents in Family</label>
                                            <select name="dependent_family" class="form-control" required="">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="more than 3">More Than 3</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Existing Investment </label>
                                            <select name="existing_investment" class="form-control" required="">
                                                <option value="YES">Yes</option>
                                                <option value="NO">No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-md-6">
                                            <label>Size of Emergency Fund </label>
                                            <select name="emergency" class="form-control" required="">
                                                <option value="1-4 lac">1-4 Lac</option>
                                                <option value="4-8 lac">4-8 Lac</option>
                                                <option value="above 10 lac">Above 10 Lac</option>
                                                <option value="don’t have">Don’t Have</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="hidden_div">
                                                <label>Total Existing Investment</label>
                                                <input name="total_exist_investment" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <label>Preferred Segment </label>
                                            <select name="preferred_segment" class="form-control" required="">
                                                <!--<option value="options">Options</option>-->
                                                <option value="Derivatives (Future &amp; Options)- High Risk">Derivatives
                                                    (Future &amp;
                                                    Options)- High Risk </option>

                                                <!--<option value="all">All</option>-->
                                            </select>
                                        </div>
                                        <!--<div class="col-md-6"> -->
                                        <!--    <label>Marking it clear market has unlimited risk, your risk tolerance ratio ?</label>-->
                                        <!--    <select name="risk_tolerance" class="form-control" required>-->
                                        <!--        <option value="high">High</option>-->
                                        <!--        <option value="medium">Medium</option>-->
                                        <!--        <option value="low">Low</option>-->
                                        <!--    </select>-->
                                        <!--</div> -->
                                    </div>

                                    <!--<div class="row form-group">-->
                                    <!--    <div class="col-md-12">-->
                                    <!--        <label>What is your preference low risk low return or high risk high return </label>-->
                                    <!--        <select name="preference" class="form-control"> -->
                                    <!--            <option value="low risk low return">Low Risk Low Return</option> -->
                                    <!--            <option value="high risk high return">High Risk High Return</option>-->
                                    <!--        </select>-->
                                    <!--    </div> -->
                                    <!--</div>-->

                                    <div class="row form-group" required="">
                                        <div class="col-md-12">
                                            <label>Trading and exposure to derivatives have unlimited risk. Agree with the
                                                risk involved
                                                in derivative trading</label>
                                            <select name="preference" class="form-control">
                                                <option value="yes">YES</option>

                                            </select>
                                        </div>
                                    </div>



                                    <!--<div class="row form-group">-->
                                    <!--       <div class="col-md-6">-->
                                    <!--        <label>Adhar Number. :</label>-->
                                    <!--        <input class="form-control" type="text" name="adhar" required>-->
                                    <!--    </div>-->
                                    <!--    <div class="col-md-6">-->
                                    <!--        <label>Adhaar Card </label>-->
                                    <!--        <div class="file-upload">-->
                                    <!--            <input type="file" class="custom-file-input From-control" name="adhaar_card" required>-->
                                    <!--            <label class="custom-file-label" for="customFile">Choose file</label>-->
                                    <!--        </div>-->
                                    <!--    </div> -->
                                    <!--    <div class="col-md-6">-->
                                    <!--        <label>Pan Number. :</label>-->
                                    <!--        <input class="form-control" type="text" name="pan" required>-->
                                    <!--    </div>-->
                                    <!--    <div class="col-md-6">-->
                                    <!--        <label>PAN Card </label>-->
                                    <!--        <div class="file-upload">-->
                                    <!--            <input type="file" class="custom-file-input From-control" name="pan_card" required>-->
                                    <!--            <label class="custom-file-label" for="customFile">Choose file</label>-->
                                    <!--        </div>-->
                                    <!--    </div> -->
                                    <!--</div>    -->
                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <input type="checkbox" name="agreecheck" required="">&nbsp;&nbsp;
                                            <label>Yes I
                                                agree with<a href="https://stockbenifits.com/terms-and-conditions.php">
                                                    Terms &amp; Conditions.
                                                </a></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="thm-btn" type="submit"
                                            value="Submit">
                                    </div>
                                    <input type="hidden" name="client_ip"
                                        value="2405:201:4031:312c:e0bd:d00d:d94b:1263">
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
        @endsection
