<div>

<section class="risk-profile-form">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <form action="{{ route('store_enquiry') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label>Name :</label>
                            <input value="{{ old('name') }}" class="form-control" type="text" name="name" required>
                        </div>
                        <div class="col-md-6">
                            <label>Email Id :</label>
                            <input value="{{ old('email') }}" class="form-control" type="email" name="email" required>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-6">
                            <label>Phone Number. :</label>
                            <input value="{{ old('phone') }}" class="form-control" type="tel" name="phone" required>
                        </div>
                        <div class="col-md-6">
                            <label>Date of Enrolment:</label>
                            <input value="{{ old('boe') }}" class="form-control" type="date" name="boe" required>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-6">
                            <label>Date of Birth:</label>
                            <input value="{{ old('dob') }}" class="form-control" type="date" name="dob" required>
                        </div>
                        <div class="col-md-6">
                            <label>Age Group</label>
                            <select name="age_group" class="form-control" required>.
                                <option value="under 25">Under 25</option>
                                <option value="26-45">26-45</option>
                                <option value="46-60">46-60</option>
                                <option value="above 60">Above 60</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label>Adhar Number. :</label>
                            <input value="{{ old('adhar') }}" class="form-control" type="text" name="adhar" required>
                        </div>
                        <div class="col-md-3">
                            <label>Upload Adhar Card Front</label>
                            <div class="file-upload">
                                <input type="file" class="From-control" name="adhaar_card_front" required>
                                <!--<label class="custom-file-label" for="customFile">Choose file</label>-->
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Upload Adhar Card Back</label>
                            <div class="file-upload">
                                <input type="file" class="From-control" name="adhaar_card_back" required>
                                <!--<label class="custom-file-label" for="customFile">Choose file</label>-->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Pan Number. :</label>
                            <input value="{{ old('pan') }}" class="form-control" type="text" name="pan" style=" text-transform: uppercase;"
                                required>
                        </div>
                        <div class="col-md-6">
                            <label>Upload PAN Card </label>
                            <div class="file-upload">
                                <input type="file" class="From-control" name="pan_card">
                                <!--<label class="custom-file-label" for="customFile">Choose file</label>-->
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label>What is total no of years experience -in stock market</label>
                            <select name="experience" class="form-control" required>
                                <option value="0-1 yrs">0-1 Yrs</option>
                                <option value="2-5 yrs">2-5 Yrs</option>
                                <option value="above 5 yrs">Above 5 Yrs</option>
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-6">
                            <label>Trading goal</label>
                            <select name="trading_goal" class="form-control" required>

                                <option value="Speculative Derivatives Trading Gains">Speculative
                                    Derivatives Trading Gains</option>

                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Trading amount</label>
                            <select name="trading_amount" class="form-control" required>
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
                            <select name="trading_type" class="form-control" required>
                                <option value="intraday">Intraday</option>
                                <option value="short term">Short Term </option>
                                <!--<option value="MID-TERM">MID-TERM</option>-->
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Annual Income</label>
                            <select name="annual_income" class="form-control" required>
                                <option value="LESS THAN 3 LACS">LESS THAN 3 LACS</option>
                                <option value="3-7 LACS">3-7 LACS</option>
                                <option value="ABOVE 7 LACS">ABOVE 7 LACS</option>
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-6">
                            <label>Source of Income</label>
                            <select name="income_source" class="form-control" required>
                                <option value="salary">Salary</option>
                                <option value="business">Business</option>
                                <option value="house rent income">House Rent Income</option>
                                <option value="other income">Other Income</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Earning Persons in Family</label>
                            <select name="earning_person" class="form-control" required>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-6">
                            <label>Number of Dependents in Family</label>
                            <select name="dependent_family" class="form-control" required>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="more than 3">More Than 3</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Existing Investment </label>
                            <select name="existing_investment" class="form-control" required>
                                <option value="YES">Yes</option>
                                <option value="NO">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-6">
                            <label>Size of Emergency Fund </label>
                            <select name="emergency" class="form-control" required>
                                <option value="1-4 lac">1-4 Lac</option>
                                <option value="4-8 lac">4-8 Lac</option>
                                <option value="above 10 lac">Above 10 Lac</option>
                                <option value="don’t have">Don’t Have</option>
                            </select>
                        </div>
                        <div class="col-md-6">

                                <label>Total Existing Investment</label>
                                <input value="{{ old('total_exist_investment') }}" name="total_exist_investment" type="text" class="form-control">

                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label>Preferred Segment </label>
                            <select name="preferred_segment" class="form-control" required>
                                <!--<option value="options">Options</option>-->
                                <option value="Derivatives (Future & Options)- High Risk">Derivatives (Future &
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

                    <div class="row form-group" required>
                        <div class="col-md-12">
                            <label>Trading and exposure to derivatives have unlimited risk. Agree with the risk involved
                                in derivative trading</label>
                            <select name="preference" class="form-control">
                                <option value="yes">YES</option>

                            </select>
                        </div>
                    </div>

                    <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_SITE_KEY') }}"></div>
                    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async
                        defer>
                    </script>
                    <!--<div class="row form-group">-->
                    <!--       <div class="col-md-6">-->
                    <!--        <label>Adhar Number. :</label>-->
                    <!--        <input value="{{ old('') }}" class="form-control" type="text" name="adhar" required>-->
                    <!--    </div>-->
                    <!--    <div class="col-md-6">-->
                    <!--        <label>Adhaar Card </label>-->
                    <!--        <div class="file-upload">-->
                    <!--            <input value="{{ old('') }}"type="file" class="custom-file-input From-control" name="adhaar_card" required>-->
                    <!--            <label class="custom-file-label" for="customFile">Choose file</label>-->
                    <!--        </div>-->
                    <!--    </div> -->
                    <!--    <div class="col-md-6">-->
                    <!--        <label>Pan Number. :</label>-->
                    <!--        <input value="{{ old('') }}" class="form-control" type="text" name="pan" required>-->
                    <!--    </div>-->
                    <!--    <div class="col-md-6">-->
                    <!--        <label>PAN Card </label>-->
                    <!--        <div class="file-upload">-->
                    <!--            <input value="{{ old('') }}"type="file" class="custom-file-input From-control" name="pan_card" required>-->
                    <!--            <label class="custom-file-label" for="customFile">Choose file</label>-->
                    <!--        </div>-->
                    <!--    </div> -->
                    <!--</div>    -->
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="checkbox" name="agreecheck" required>&nbsp;&nbsp; <label>Yes I agree with<a
                                    href="{{ route('terms_and_conditions') }}"> Terms & Conditions.
                                </a></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input  class="thm-btn" type="submit" name="btnRiskProfileSubmit" value="Submit">
                    </div>
                    <?php

                    $ipaddress = '';
                    if (getenv('HTTP_CLIENT_IP')) {
                        $ipaddress = getenv('HTTP_CLIENT_IP');
                    } else if (getenv('HTTP_X_FORWARDED_FOR')) {
                        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
                    } else if (getenv('HTTP_X_FORWARDED')) {
                        $ipaddress = getenv('HTTP_X_FORWARDED');
                    } else if (getenv('HTTP_FORWARDED_FOR')) {
                        $ipaddress = getenv('HTTP_FORWARDED_FOR');
                    } else if (getenv('HTTP_FORWARDED')) {
                        $ipaddress = getenv('HTTP_FORWARDED');
                    } else if (getenv('REMOTE_ADDR')) {
                        $ipaddress = getenv('REMOTE_ADDR');
                    } else {
                        $ipaddress = 'UNKNOWN';
                    }

                    ?>
                    <input value="{{ old('') }}"type="hidden" name="client_ip" value="<?= $ipaddress ?>">
                </form>
            </div>
        </div>
    </div>
</section>

</div>
