<form action="{{ route('function') }}" method="POST">
    @csrf
    <div class="row form-group">
        <div class="col-sm-6">
            <input type="text" name="name" class="form-control" placeholder="Name*" required>
        </div>
        <div class="col-sm-6">
            <input type="email" name="email" class="form-control" placeholder="Email*" required>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-sm-6">
            <input type="text" name="phone" class="form-control" placeholder="Phone No.*" required>
        </div>
        <div class="col-sm-6">
            <input type="text" name="subject" class="form-control" placeholder="Subject*" required>
        </div>
    </div>
    <div class="form-group">
        <textarea name="message" cols="10" rows="5" class="form-control" placeholder="Message*"></textarea>
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
        <input class="btn-submit" type="submit" value="Submit" name="btnSupportSubmit">
        @if(Session('success'))
  <span style="color:green" >Form Submitted Successfully.</span>
  @elseif(Session('error'))
  <span style="color:red" >Something Went Wrong.</span>
  @endif
    </div>
</form>
