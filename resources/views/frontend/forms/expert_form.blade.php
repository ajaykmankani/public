

<form action="{{ route('function') }}" method="POST" data-interest-rate="15" class="about-one__form wow fadeInUp" data-wow-duration="1500ms">
    @csrf
    <h3>Ask on Expert</h3>
    <div class="about-one__form-content">
        <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="Enter Your Name :" required>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="phone" placeholder="Enter Phone No. :" required>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="email" placeholder="Enter Email " required>
        </div>
        <div class="form-group">
            <select name="state" class="form-control" required>
                <option value="">State</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Delhi">Delhi</option>
                <option value="Bihar">Bihar</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="Uttar Pradesh ">Uttar Pradesh</option>
                <option value="West Bengal ">West Bengal</option>
            </select>
        </div>
        <div class="form-group">
            <select class="form-control" name="investment" required>
                <option value="">Investment</option>
                <option value="Above Rs 50000">Above Rs 50000</option>
                <option value="Above Rs 1 lac">Above Rs 1 lac</option>
                <option value="Above 3 Lac">Above 3 Lac</option>
                <option value="Above 5 Lac">Above 5 Lac</option>
            </select>
        </div>
        <div class="form-group">
            <select name="segment" class="form-control" required>
                <option value="">Segment</option>
                <option value="Equity Cash / Intraday">Equity Cash / Intraday</option>
                <option value="Option (Call - Put)">Option (Call - Put)</option>
                <option value="Future (Derivatives)">Future (Derivatives )</option>
                <option value="Index">Index </option>
            </select>
        </div>
        <div class="g-recaptcha" data-sitekey="6Ldqm8wkAAAAAMlKYYlHhJ-xLODbWxDFyKgX8WuF"></div>
        <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>
        </script>
        <div class="row form-group">
            <div class="col-md-12">
                <input type="checkbox" name="agreecheck" required>&nbsp;&nbsp; <label>Yes I agree with<a href="https://stockbenifits.com/terms-and-conditions.php"> Terms & Conditions.
                    </a></label>
            </div>
        </div>
        <div class="form-group">
            <input class="thm-btn" type="submit" value="Submit" name="btnExprtSubmit">
             @if(Session('success'))
  <span style="color:green" >Form Submitted Successfully.</span>
  @elseif(Session('error'))
  <span style="color:red" >Something Went Wrong.</span>
  @endif
        </div>
    </div><!-- /.about-one__from-content -->
</form><!-- /.about-one__form -->
