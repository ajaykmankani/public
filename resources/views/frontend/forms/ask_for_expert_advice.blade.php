
  <form action="{{ route('function') }}" method="post">
    @csrf
      <div class="form-group">
          <input class="form-control" type="text" name="" placeholder="Enter Your Name" required>
      </div>
      <div class="form-group">
          <input class="form-control" type="tel" maxlength="10" name="" placeholder="Enter Phone No." required>
      </div>
      <div class="form-group">
          <input class="form-control" type="email" name="" placeholder="Enter Email Id" required>
      </div>
      <div class="form-group">
          <textarea name="" cols="30" rows="4" class="form-control" placeholder="Enter Message"></textarea>
      </div>
      <div class="form-group">
          <input class="thm-btn btn-block" type="Submit" name="Submit_ask_for_expert" value="Submit">
          @if(Session('success'))
  <span style="color:green" >Form Submitted Successfully.</span>
  @elseif(Session('error'))
  <span style="color:red" >Something Went Wrong.</span>
  @endif
      </div>
  </form>
