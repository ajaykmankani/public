<section class="section-one Banner" style=" background-image: url(stock-market/images/banner.webp);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center; height:720px; width: 100%;">

    <div class="container space">
        <div class="row">
            <div class="col-md-8">
                <h1 class="text-white banner-h1 slide-up fs-1 fw-bold" id="my-element">We know the secret of <br> <span class="p-2 text-white mx-2 animated-text">Ultimate Trading </span> Success.</h1>
                <p class="text-white fs-4">Lets make money whether stocks go up or down with help of our expert team.
                </p>
                <button class="btn btn-call-head text-white" type="btn btn-primary" onclick="showForm();">START TRADING
                    RISK FREE</button>
            </div>

        </div>

    </div>
</section>
<div class="shape-divider shape-divider-bottom header-divider">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 576" preserveAspectRatio="xMinYMin">
        <path class="custom-svg-fill-color-tertiary" d="M-12,66c13.35,40.03,28.35,72.62,41,97c12.78,24.63,30.56,58.44,62,97c19.57,24,36.66,40.31,49,52
								c41.02,38.87,77.1,62.82,85,68c53.78,35.23,100.92,51.3,148,67c87.6,29.21,158.49,37.98,201,43c63.9,7.55,112.08,7.78,160,8
								c16.52,0.08,84.41,0.17,181-8c98.88-8.36,172.43-20.7,233-31c42.88-7.29,141.31-24.85,267-56c127.06-31.5,220.66-61.69,296-86
								c89.27-28.8,159.58-54.68,174-60c16.6-6.13,30.39-11.34,40-15c0,113.33,0,226.67,0,340c-644.33,0-1288.67,0-1933,0
								C-9.33,410-10.67,238-12,66z"></path>
        <path fill="#FFF" d="M-5,3c1.21,5.32,2.98,13.29,5,23c4.38,21.08,6.71,34.95,8,42c7.08,38.6,19.7,71.54,26,88
								c8.52,22.26,16.34,38.54,19,44c5.4,11.07,16.38,32.61,33,58c28.88,44.11,57.48,73.41,64,80c6.89,6.97,38.98,38.97,91,72
								c57.09,36.25,106.11,53.37,143,66c66.98,22.93,119.93,31.44,162,38c81,12.63,143.81,13.53,189,14c62.45,0.65,109.33-2.68,156-6
								c35.74-2.54,89.63-7.16,155-16c68.17-9.22,117.88-18.83,170-29c110.32-21.52,194.58-42.54,224-50c131.43-33.34,227.73-64.9,286-84
								c93.88-30.77,155.18-54.57,184-66c6.29-2.49,11.48-4.58,15-6c0,102.67,0,205.33,0,308c-643.33,0-1286.67,0-1930,0C-5,387-5,195-5,3z
								"></path>
    </svg>
</div>

<div class="container position-relative z-index-1 form-sec-header">
    <div class="row">
        <div class="col-md-6">
            <div class="header-from slide-up px-4 py-5 shadow-lg rounded bg-white">
                <form method="POST" action="contactthanks.php" id="form1" name="form1" onSubmit="return checkform(this);">
                    <div class="col-12">
                        <h4 class="fw-800">Request a Callback</h4>
                        <p>Enter your details in the form and we will call you back.</p>
                    </div>

                    <div class="col-12 mt-4">

                        <div class="form-input mt-2 ">
                            <input type="text"  name="name" placeholder="Name" required>

                        </div>
                    </div>
                    <div class="col-12 mt-4">

                        <div class="form-input mt-2 ">
                            <input type="phone"  name="phone" placeholder="Phone" required>

                        </div>

                    </div>

                    <div class="col-12 mt-4">

                        <div class="form-input mt-2 ">
                            <input type="email"  name="email" placeholder="Email" required>

                        </div>

                    </div>
                    <div class="col-12 mt-4">

                        <button class="btn2 mt-4 rounded" id="frm_submit_btn2" type="btn btn-primary submit" name="btnsubmit">Call Me Back
                        </button>

                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6 form-right-sec d-flex align-item-center justify-content-center flex-column text-end">
            <p>CALL US NOW: <span class="fs-4 fw-bold" style="color:var(--blue);"><?= $phone ?></span></p>
            <p>SEND AN EMAIL: <span class="fs-5" style="color:var(--light-blue);"><?= $mail ?></span></p>
        </div>
    </div>
</div>