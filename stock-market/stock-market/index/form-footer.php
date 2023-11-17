<section class="channels space bg-white" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span class="light-text">GET IN TOUCH</span>
                <h3 class="fs-2 fw-bolder text-blue">SEND US MESSAGE</h3>

                <div class="row">
                    <div class="header-from px-4 py-5 shadow rounded">
                        <form class="mt-4" method="POST" action="contactthanks.php" id="form1" name="form1"
                            onSubmit="return checkform(this);">
                            <div class="col-12">
                                <h4 class="fw-800">Request a Callback</h4>
                                <p>Enter your details in the form and we will call you back.</p>
                            </div>

                            <div class="row mt-4">
                                <div class="col-6">

                                    <div class="form-input">
                                        <input type="text" required name="name" placeholder="Name">

                                    </div>
                                </div>
                                <div class="col-6">

                                    <div class="form-input">
                                        <input type="phone" required name="phone" placeholder="Phone">

                                    </div>

                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-6">

                                    <div class="form-input">
                                        <input type="email" required name="email" placeholder="Email">

                                    </div>

                                </div>
                                <div class="col-6">

                                    <div class="form-input">
                                        <input type="text" required name="subject" placeholder="Subject">

                                    </div>

                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12">

                                    <div class="form-input">
                                        <input type="text" required name="message" placeholder="Message">

                                    </div>

                                </div>
                                <div class="col-12">

                                    <button class="btn2 mt-4 rounded" id="frm_submit_btn2" type="btn btn-primary submit"
                                        name="btnsubmit">Call Me Back
                                    </button>

                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>