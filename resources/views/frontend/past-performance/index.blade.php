@extends('frontend.layout.app')
@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/main/bg-better.webp);"></div>
        <div class="container">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.php">Home</a></li>
                <li>/</li>
                <li><span>Past Performance</span></li>
            </ul>
            <h2>Past Performance</h2>
        </div>
    </section>

    <!-- <section class="report-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <a href="javascript:;" data-toggle="modal" data-target="#exampleModal">
                            <div class="report-pdf">
                                <img src="assets/images/pdf-file-format-symbol.webp" alt="">
                                <p>DAILY REPORT </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="javascript:;" data-toggle="modal" data-target="#exampleModal">
                            <div class="report-pdf">
                                <img src="assets/images/pdf-file-format-symbol.webp" alt="">
                                <p>DAILY EQUITY NEWS LETTER </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="javascript:;" data-toggle="modal" data-target="#exampleModal">
                            <div class="report-pdf">
                                <img src="assets/images/pdf-file-format-symbol.webp" alt="">
                                <p>WEEKLY NIFTY NEWS LETTER </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="javascript:;" data-toggle="modal" data-target="#exampleModal">
                            <div class="report-pdf">
                                <img src="assets/images/pdf-file-format-symbol.webp" alt="">
                                <p>WEEKLY BANKNIFTY NEWS LETTER </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section> -->

    <!-- <div class="excel-slider-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme" id="excel-slider-top">
                            <div class="item">
                                <div class="card">
                                    <div class="face face1">
                                        <div class="content">
                                            <img src="assets/images/excel.webp">
                                            <h3>NIFTY 50</h3>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <div class="content">
                                            <p>An investment tracking spreadsheet is a very useful tool for any investor. Using this is a simple way for you to keep track of the value of your investments over time.</p>
                                            <a href="javascript:;" data-toggle="modal" data-target="#exampleModal" class="read-more">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <div class="face face1">
                                        <div class="content">
                                            <img src="assets/images/excel.webp">
                                            <h3>SENSEX</h3>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <div class="content">
                                            <p>An investment tracking spreadsheet is a very useful tool for any investor. Using this is a simple way for you to keep track of the value of your investments over time.</p>
                                            <a href="javascript:;" data-toggle="modal" data-target="#exampleModal" class="read-more">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <div class="face face1">
                                        <div class="content">
                                            <img src="assets/images/excel.webp">
                                            <h3>Top Gainers</h3>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <div class="content">
                                            <p>An investment tracking spreadsheet is a very useful tool for any investor. Using this is a simple way for you to keep track of the value of your investments over time.</p>
                                            <a href="javascript:;" data-toggle="modal" data-target="#exampleModal" class="read-more">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <div class="face face1">
                                        <div class="content">
                                            <img src="assets/images/excel.webp">
                                            <h3>Top Decliners</h3>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <div class="content">
                                            <p>An investment tracking spreadsheet is a very useful tool for any investor. Using this is a simple way for you to keep track of the value of your investments over time.</p>
                                            <a href="javascript:;" data-toggle="modal" data-target="#exampleModal" class="read-more">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <div class="face face1">
                                        <div class="content">
                                            <img src="assets/images/excel.webp">
                                            <h3>Top Active Stocks </h3>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <div class="content">
                                            <p>An investment tracking spreadsheet is a very useful tool for any investor. Using this is a simple way for you to keep track of the value of your investments over time.</p>
                                            <a href="javascript:;" data-toggle="modal" data-target="#exampleModal" class="read-more">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

    <section class="table-past">
        <div class="container-fluid">

<div class="row mt-5">
                <div class="col-md-12">
                    <h4>SEPTEMBER </h4>
                    <div class="table-data mt-md-5 table-responsive">
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                    <th>TRADE DATE</th>
                                    <th>RECOMMENDATIONS</th>
                                    <th>BUY AT</th>
                                    <th>AVERAGE AT</th>
                                    <th>STOP LOSS</th>
                                    <th>TARGET</th>
                                    <th>OUTCOME</th>
                                    <th>PROFIT&amp;LOSS/LOT</th>
                                    <th>MAX INVESTMENT/LOT</th>
                                </tr>

                            </thead>
                           <tbody>
        <tr>
            <td >15-Sep</td>
            <td >BUY NIFITY &nbsp;21 SEP 20100 CE&nbsp;</td>
            <td >135</td>
            <td >105</td>
            <td >90</td>
            <td >160/195</td>
            <td >NOT executed</td>
            <td >0</td>
            <td >6750</td>
        </tr>
        <tr>
            <td >18-Sep</td>
            <td >BUY NIFTY 21 SEP 20100 CE</td>
            <td >115</td>
            <td >95</td>
            <td >70</td>
            <td >155/185</td>
            <td >NOT executed</td>
            <td >0</td>
            <td >5750</td>
        </tr>
        <tr>
            <td >20-Sep</td>
            <td >BUY NIFITY 21-SEP 20000 PE</td>
            <td >55</td>
            <td >39</td>
            <td >25</td>
            <td >85/110</td>
            <td >LTP 111 SECOND TARGET HIT</td>
            <td >2800</td>
            <td >2750</td>
        </tr>
        <tr>
            <td >21-Sep</td>
            <td >BUY NIFTY 28 SEP 19700 CE</td>
            <td >160</td>
            <td >120</td>
            <td >95</td>
            <td >205/245</td>
            <td >LTP 171</td>
            <td >550</td>
            <td >8000</td>
        </tr>
        <tr>
            <td >22-Sep</td>
            <td >BUY BANKNIFTY 28-SEP 44800 CE</td>
            <td >360</td>
            <td >280</td>
            <td >240</td>
            <td >525/580</td>
            <td >LTP 408</td>
            <td >720</td>
            <td >5400</td>
        </tr>
        <tr>
            <td >22-Sep</td>
            <td >BUY NIFTY 28 SEP 19800 CE</td>
            <td >90</td>
            <td >80</td>
            <td >70</td>
            <td >98/110</td>
            <td >NOT executed</td>
            <td >0</td>
            <td >4500</td>
        </tr>
        <tr>
            <td >26-Sep</td>
            <td >BUY NIFTY 28-SEP 19650 CE</td>
            <td >80</td>
            <td >50</td>
            <td >40</td>
            <td >120/150</td>
            <td >LTP 94</td>
            <td >700</td>
            <td >4000</td>
        </tr>
        <tr>
            <td >27-Sep</td>
            <td >BUY NIFTY 5 OCT 19600 CE</td>
            <td >105</td>
            <td >75</td>
            <td >50</td>
            <td >150/200</td>
            <td >LTP 177 FIRST TARGET HIT</td>
            <td >3600</td>
            <td >5250</td>
        </tr>
        <tr>
            <td >28-Sep</td>
            <td >BUY NIFTY 5 OCT 19700 CE</td>
            <td >110</td>
            <td >75</td>
            <td >60</td>
            <td >160/200</td>
            <td >LTP 99</td>
            <td >550</td>
            <td >5500</td>
        </tr>
        <tr>
            <td ><br></td>
            <td ><br></td>
            <td ><br></td>
            <td ><br></td>
            <td ><br></td>
            <td ><br></td>
            <td ><br></td>
            <td >8920</td>
            <td >47900</td>
        </tr>
    </tbody>

                        </table>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-12">
                    <h4>AUGUST </h4>
                    <div class="table-data mt-md-5 table-responsive">
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                    <th>TRADE DATE</th>
                                    <th>RECOMMENDATIONS</th>
                                    <th>BUY AT</th>
                                    <th>AVERAGE AT</th>
                                    <th>STOP LOSS</th>
                                    <th>TARGET</th>
                                    <th>OUTCOME</th>
                                    <th>PROFIT&amp;LOSS/LOT</th>
                                    <th>MAX INVESTMENT/LOT</th>
                                </tr>

                            </thead>
                            <tbody>

                                <tr>
                                    <td >02-Aug</td>
                                    <td >BUY 10 AUG NIFTY 19700 PE</td>
                                    <td >80</td>
                                    <td >60</td>
                                    <td ><br></td>
                                    <td >120/140</td>
                                    <td >&nbsp;LTP 139.90</td>
                                    <td >6995</td>
                                    <td >4000</td>
                                </tr>
                                <tr>
                                    <td >04-Aug</td>
                                    <td >BUY 10 AUG BANKNIFITY 44600</td>
                                    <td >340</td>
                                    <td >250</td>
                                    <td >200</td>
                                    <td >450/550</td>
                                    <td >LTP 450 HITS 1ST TARGET</td>
                                    <td >6750</td>
                                    <td >5100</td>
                                </tr>
                                <tr>
                                    <td >07-Aug</td>
                                    <td >BUY NIFITY 10 AUG 19500 CE</td>
                                    <td >100</td>
                                    <td >80</td>
                                    <td >60</td>
                                    <td >140/180</td>
                                    <td >LTP 147 HITS 1ST TARGET</td>
                                    <td >7350</td>
                                    <td >5000</td>
                                </tr>
                                <tr>
                                    <td >08-Aug</td>
                                    <td >BUY NIFITY 10 AUG 19500 CE</td>
                                    <td >120</td>
                                    <td >100</td>
                                    <td >80</td>
                                    <td >160/190</td>
                                    <td >LTP 127&nbsp;</td>
                                    <td >6350</td>
                                    <td >6000</td>
                                </tr>
                                <tr>
                                    <td >09-Aug</td>
                                    <td >BUY BANKNIFTY 44800 PE</td>
                                    <td >210</td>
                                    <td >170</td>
                                    <td >150</td>
                                    <td >280/340</td>
                                    <td >LTP 268&nbsp;</td>
                                    <td >4020</td>
                                    <td >3150</td>
                                </tr>
                                <tr>
                                    <td >10-Aug</td>
                                    <td >BUY 17 AUG NIFTY 17500 CE</td>
                                    <td >130</td>
                                    <td >100</td>
                                    <td >80</td>
                                    <td >200/230</td>
                                    <td >LTP 144&nbsp;</td>
                                    <td >7200</td>
                                    <td >6500</td>
                                </tr>
                                <tr>
                                    <td >14-Aug</td>
                                    <td >BUY 17 AUG NIFTY 19400 PE</td>
                                    <td >102</td>
                                    <td >82</td>
                                    <td >60</td>
                                    <td >140/180</td>
                                    <td >LTP 91</td>
                                    <td >4550</td>
                                    <td >5100</td>
                                </tr>
                                <tr>
                                    <td >16-Aug</td>
                                    <td >BUY 17 AUG BANKNIFT 43700 CE</td>
                                    <td >200</td>
                                    <td >150</td>
                                    <td >100</td>
                                    <td >300/350</td>
                                    <td >LTP 328 FIRST TARGET HIT</td>
                                    <td >4920</td>
                                    <td >3000</td>
                                </tr>
                                <tr>
                                    <td >17-Aug</td>
                                    <td >BUY 24 AUG BANKNIFTY 43700 CE</td>
                                    <td >500</td>
                                    <td >450</td>
                                    <td >400</td>
                                    <td >600/650</td>
                                    <td >NO UPDATE</td>
                                    <td >0</td>
                                    <td >7500</td>
                                </tr>
                                <tr>
                                    <td >18-Aug</td>
                                    <td >BUY 24 AUG NIFTY 19300 PE&nbsp;</td>
                                    <td >95</td>
                                    <td >80</td>
                                    <td >66</td>
                                    <td >125/140</td>
                                    <td >LTP 106</td>
                                    <td >5300</td>
                                    <td >4750</td>
                                </tr>
                                <tr>
                                    <td >19-Aug</td>
                                    <td >BUY 24 AUG NIFTY 43900 CE</td>
                                    <td >250</td>
                                    <td >200</td>
                                    <td >180</td>
                                    <td >320/360</td>
                                    <td >NO UPDATE</td>
                                    <td >0</td>
                                    <td >4750</td>
                                </tr>
                                <tr>
                                    <td >20-Aug</td>
                                    <td >BUY 24 AUG NIFTY 19300 CE</td>
                                    <td >80</td>
                                    <td >60</td>
                                    <td >50</td>
                                    <td >110/140</td>
                                    <td >114 HITS 2ND TARGET</td>
                                    <td >5700</td>
                                    <td >4000</td>
                                </tr>
                                <tr>
                                    <td >22-Aug</td>
                                    <td >BUY 24-AUG NIFITY 19350 CE</td>
                                    <td >75</td>
                                    <td >55</td>
                                    <td >40</td>
                                    <td >105/125</td>
                                    <td >LTP 99.50</td>
                                    <td >4975</td>
                                    <td >3750</td>
                                </tr>
                                <tr>
                                    <td >23-Aug</td>
                                    <td >BUY 24 AUG NIFITY 19300 CE</td>
                                    <td >75</td>
                                    <td >55</td>
                                    <td >40</td>
                                    <td >130/150</td>
                                    <td >LTP 127&nbsp;</td>
                                    <td >6350</td>
                                    <td >3750</td>
                                </tr>
                                <tr>
                                    <td >24-Aug</td>
                                    <td >BUY 31ST AUG NIFITY 19500 CE&nbsp;</td>
                                    <td >120</td>
                                    <td >90</td>
                                    <td >80</td>
                                    <td >160/190</td>
                                    <td >LTP 91&nbsp;</td>
                                    <td >4550</td>
                                    <td >6000</td>
                                </tr>
                                <tr>
                                    <td >25-Aug</td>
                                    <td >BUY 31ST AUG NIFITY 19300 PE</td>
                                    <td >70</td>
                                    <td >40</td>
                                    <td >30</td>
                                    <td >100/130</td>
                                    <td >LTP 70</td>
                                    <td >3500</td>
                                    <td >3500</td>
                                </tr>
                                <tr>
                                    <td >29-Aug</td>
                                    <td >BUY 31ST AUG NIFTY 19400 PE</td>
                                    <td >88</td>
                                    <td >68</td>
                                    <td >50</td>
                                    <td >180/132</td>
                                    <td >LTP 116</td>
                                    <td >5800</td>
                                    <td >4400</td>
                                </tr>
                                <tr>
                                    <td >30-Aug</td>
                                    <td >BUY 7SEP NIFTY 19400 CE</td>
                                    <td >135</td>
                                    <td >120</td>
                                    <td >105</td>
                                    <td >165/180</td>
                                    <td >NO UPDATE</td>
                                    <td >0</td>
                                    <td >6750</td>
                                </tr>
                                <tr>
                                    <td >31-Aug</td>
                                    <td >BUY 7 SEP NIFTY 19300 CE</td>
                                    <td >125</td>
                                    <td >100</td>
                                    <td >90</td>
                                    <td >160/185</td>
                                    <td >NO UPDATE</td>
                                    <td >0</td>
                                    <td >6250</td>
                                </tr>
                                <tr>
                                    <td >31-Aug</td>
                                    <td >BUY 7 SEP NIFTY 19350 CE</td>
                                    <td >125</td>
                                    <td >100</td>
                                    <td >90</td>
                                    <td >160/185</td>
                                    <td >NO UPDATE</td>
                                    <td >0</td>
                                    <td >6250</td>
                                </tr>
                                <tr>
                                    <td ><br></td>
                                    <td ><br></td>
                                    <td ><br></td>
                                    <td ><br></td>
                                    <td ><br></td>
                                    <td ><br></td>
                                    <td ><br></td>
                                    <td >84310</td>
                                    <td >99500</td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-12">
                    <h4>JULY </h4>
                    <div class="table-data mt-md-5 table-responsive">
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                    <th>TRADE DATE</th>
                                    <th>RECOMMENDATIONS</th>
                                    <th>BUY AT</th>
                                    <th>AVERAGE AT</th>
                                    <th>STOP LOSS</th>
                                    <th>TARGET</th>
                                    <th>OUTCOME</th>
                                    <th>PROFIT&amp;LOSS/LOT</th>
                                    <th>MAX INVESTMENT/LOT</th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr>
                                    <td >03-Jul-23</td>
                                    <td >BUY BANKNIFTY 45000 CE</td>
                                    <td >320</td>
                                    <td >240</td>
                                    <td >170</td>
                                    <td >550 /700</td>
                                    <td >LTP 413</td>
                                    <td >2325</td>
                                    <td >8000</td>
                                </tr>
                                <tr>
                                    <td >04-Jul-23</td>
                                    <td >&nbsp;BUY 6-JUL BANKNIFTY 45200 CE</td>
                                    <td >200</td>
                                    <td >150</td>
                                    <td >130</td>
                                    <td >350</td>
                                    <td >ltp 370 target hit</td>
                                    <td >4250</td>
                                    <td >5000</td>
                                </tr>
                                <tr>
                                    <td >05-Jul-23</td>
                                    <td >BUY BANKNIFTY 45000 CE</td>
                                    <td >240</td>
                                    <td >180</td>
                                    <td >140</td>
                                    <td >350</td>
                                    <td >LTP 297</td>
                                    <td >1425</td>
                                    <td >6000</td>
                                </tr>
                                <tr>
                                    <td >06-Jul-23</td>
                                    <td >BUY 13-JUL BANKNIFTY 45200 CE</td>
                                    <td >300</td>
                                    <td >250</td>
                                    <td >150</td>
                                    <td >400 / 450</td>
                                    <td >414 first target hit</td>
                                    <td >2850</td>
                                    <td >7500</td>
                                </tr>
                                <tr>
                                    <td >07-Jul-23</td>
                                    <td >BUY 13-JUL &nbsp;BANKNIFTY 45200 PE</td>
                                    <td >280</td>
                                    <td >220</td>
                                    <td >180</td>
                                    <td >340/380</td>
                                    <td >424 HIT SECOND TARGET</td>
                                    <td >2850</td>
                                    <td >7000</td>
                                </tr>
                                <tr>
                                    <td >10-Jul-23</td>
                                    <td >BUY 13-JUL BANKNIFTY 45000 CE</td>
                                    <td >250</td>
                                    <td >200</td>
                                    <td >170</td>
                                    <td >360/420</td>
                                    <td >UPDATE LTP 175 EXIT TO Recommended&nbsp;</td>
                                    <td >1875</td>
                                    <td >6250</td>
                                </tr>
                                <tr>
                                    <td >11-Jul-23</td>
                                    <td >BUY 13-JUL NIFITY 19400 CE</td>
                                    <td >85</td>
                                    <td >60</td>
                                    <td >45</td>
                                    <td >120/145</td>
                                    <td >LTP 140 FIRST TARGET HIT</td>
                                    <td >2750</td>
                                    <td >4250</td>
                                </tr>
                                <tr>
                                    <td >14-Jul-23</td>
                                    <td >BYU20-JUL BANKNIFITY 44900 PE</td>
                                    <td >260</td>
                                    <td >220</td>
                                    <td >180</td>
                                    <td >320/380</td>
                                    <td >LTP 380 SECOND TARGET HIT</td>
                                    <td >3000</td>
                                    <td >6500</td>
                                </tr>
                                <tr>
                                    <td >18-Jul-23</td>
                                    <td >BUY 20-JUL &nbsp;NIFTY 19700 CE</td>
                                    <td >85</td>
                                    <td >60</td>
                                    <td >50</td>
                                    <td >120/140</td>
                                    <td >NOT executed</td>
                                    <td >4250</td>
                                    <td >4250</td>
                                </tr>
                                <tr>
                                    <td >19-Jul-23</td>
                                    <td >BUY 20-JUL &nbsp;NIFTY 19800 CE</td>
                                    <td >55</td>
                                    <td >35</td>
                                    <td >25</td>
                                    <td >85/110</td>
                                    <td >LTP 65.65</td>
                                    <td >532.5</td>
                                    <td >2750</td>
                                </tr>
                                <tr>
                                    <td >20-Jul-23</td>
                                    <td >BUY 27-JUL BANKNIFITY 45700 CE</td>
                                    <td >320</td>
                                    <td >280</td>
                                    <td >240</td>
                                    <td >400/450</td>
                                    <td >LTTP 408 FIRST TARGET HIT&nbsp;</td>
                                    <td >2200</td>
                                    <td >8000</td>
                                </tr>
                                <tr>
                                    <td >21-Jul-23</td>
                                    <td >BUY 27-JUL NIFTY 19900 PE</td>
                                    <td >110</td>
                                    <td >80</td>
                                    <td >65</td>
                                    <td >170/200</td>
                                    <td >NOT executed</td>
                                    <td >0</td>
                                    <td >5500</td>
                                </tr>
                                <tr>
                                    <td >25-Jul-23</td>
                                    <td >BUY NIFTY 19700 CE</td>
                                    <td >75</td>
                                    <td >50</td>
                                    <td >40</td>
                                    <td >110/130</td>
                                    <td >LTP 160 SECOND TARGET HIT</td>
                                    <td >4250</td>
                                    <td >3750</td>
                                </tr>
                                <tr>
                                    <td >25-Jul-23</td>
                                    <td >BUY 25-JUL FINNIFTY 20400CE</td>
                                    <td >120</td>
                                    <td >100</td>
                                    <td >90</td>
                                    <td >140/160</td>
                                    <td >NOT UPDATED</td>
                                    <td >0</td>
                                    <td >4800</td>
                                </tr>
                                <tr>
                                    <td >31-Jul-23</td>
                                    <td >BYU 3RD AUG NIFITY 19700</td>
                                    <td >75</td>
                                    <td >60</td>
                                    <td >50</td>
                                    <td >100/120</td>
                                    <td >FIRST TARGET HIT 109</td>
                                    <td >1700</td>
                                    <td >3750</td>
                                </tr>
                                <tr>
                                    <td ><br></td>
                                    <td ><br></td>
                                    <td ><br></td>
                                    <td ><br></td>
                                    <td ><br></td>
                                    <td ><br></td>
                                    <td ><br></td>
                                    <td >34258</td>
                                    <td >83300</td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-12">
                    <h4>JUNE </h4>
                    <div class="table-data mt-md-5 table-responsive">
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                    <th>TRADE DATE</th>
                                    <th>RECOMMENDATIONS</th>
                                    <th>BUY AT</th>
                                    <th>AVERAGE AT</th>
                                    <th>STOP LOSS</th>
                                    <th>TARGET</th>
                                    <th>OUTCOME</th>
                                    <th>PROFIT&amp;LOSS/LOT</th>
                                    <th>MAX INVESTMENT/LOT</th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr>
                                    <td>05-Jun-23</td>
                                    <td>BUY NIFTY 8TH JUNE 18500 CE</td>
                                    <td>145</td>
                                    <td>115</td>
                                    <td>95</td>
                                    <td>190 &amp; 225</td>
                                    <td>NOT executed</td>
                                    <td>0</td>
                                    <td>7250</td>
                                </tr>
                                <tr>
                                    <td>06-Jun-23</td>
                                    <td>BUY NIFTY 8TH JUNE 18700 PE</td>
                                    <td>110</td>
                                    <td>90</td>
                                    <td>70</td>
                                    <td>150&amp;175</td>
                                    <td>LTP 159.80</td>
                                    <td>2490</td>
                                    <td>5500</td>
                                </tr>
                                <tr>
                                    <td>07-Jun-23</td>
                                    <td>BUY NIFTY 8TH JUNE 18600 CE
                                    </td>
                                    <td>72</td>
                                    <td>54</td>
                                    <td>38</td>
                                    <td>100&amp;115</td>
                                    <td>LTP 139 2ND TARGET HITS
                                    </td>
                                    <td>3350</td>
                                    <td>3600</td>
                                </tr>
                                <tr>
                                    <td>08-Jun-23</td>
                                    <td>BUY BANKNIFTY 44200 CE
                                    </td>
                                    <td>390</td>
                                    <td>320</td>
                                    <td>280</td>
                                    <td>540</td>
                                    <td>NOT executed</td>
                                    <td>0</td>
                                    <td>9750</td>
                                </tr>
                                <tr>
                                    <td>16-Jun-23</td>
                                    <td>BUY NIFTY 22 JUNE 18700 CE
                                    </td>
                                    <td>125</td>
                                    <td>100</td>
                                    <td>90</td>
                                    <td>160/185</td>
                                    <td>LTP 195 2ND TARGET HIS
                                    </td>
                                    <td>3500</td>
                                    <td>6250</td>
                                </tr>
                                <tr>
                                    <td>20-Jun-23</td>
                                    <td>BUY BANKNIFTY 43300 CE
                                    </td>
                                    <td>305</td>
                                    <td>240</td>
                                    <td>190</td>
                                    <td>420/500</td>
                                    <td>LTP 399.7 NEAR 1ST TARGET</td>
                                    <td>2367</td>
                                    <td>7625</td>
                                </tr>
                                <tr>
                                    <td>21-Jun-23</td>
                                    <td>BUY 22ND BANKNIFTY 43800 CE
                                    </td>
                                    <td>180</td>
                                    <td>120</td>
                                    <td>80</td>
                                    <td>300/340</td>
                                    <td>LTP 210&nbsp;</td>
                                    <td>750</td>
                                    <td>4500</td>
                                </tr>
                                <tr>
                                    <td>22-Jun-23</td>
                                    <td>BUY 29TH BANKNIFTY 43800 CE
                                    </td>
                                    <td>340</td>
                                    <td>240</td>
                                    <td>200</td>
                                    <td>500</td>
                                    <td>LTP 238
                                    </td>
                                    <td>2500</td>
                                    <td>8500</td>
                                </tr>
                                <tr>
                                    <td>26-Jun-23</td>
                                    <td>BUY 29TH NIFTY 18800 PE
                                    </td>
                                    <td>110</td>
                                    <td>80</td>
                                    <td>50</td>
                                    <td>160/200</td>
                                    <td>LTP 158</td>
                                    <td>2400</td>
                                    <td>5500</td>
                                </tr>
                                <tr>
                                    <td>28-Jun-23</td>
                                    <td>BYU 6TH JULY NIFTY 18800 CE</td>
                                    <td>165</td>
                                    <td>125</td>
                                    <td>100</td>
                                    <td>200/230</td>
                                    <td>LTP 264 2ND TARGET HITS</td>
                                    <td>4950</td>
                                    <td>8250</td>
                                </tr>
                                <tr>
                                    <td><br></td>
                                    <td><br></td>
                                    <td><br></td>
                                    <td><br></td>
                                    <td><br></td>
                                    <td><br></td>
                                    <td><br></td>
                                    <td>22307</td>
                                    <td>66725</td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-12">
                    <h4>MAY </h4>
                    <div class="table-data mt-md-5 table-responsive">
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                    <th>DATE</th>
                                    <th>TRADE GIVEN</th>
                                    <th>AT</th>
                                    <th>AVERAGE AT</th>
                                    <th>STOP LOSS</th>
                                    <th>TAREGET</th>
                                    <th>ACHIEVED</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>02-May-23</td>
                                    <td>BUY NIFTY 4th-MAY 18100 CE</td>
                                    <td>110</td>
                                    <td>62</td>
                                    <td>40</td>
                                    <td>140/180</td>
                                    <td>UPDATED LTP 115</td>
                                    <td>250</td>
                                    <td>4250</td>
                                </tr>
                                <tr>
                                    <td>03-May-23</td>
                                    <td>BUY NIFTY 4th-MAY 18000 CE</td>
                                    <td>98</td>
                                    <td>40</td>
                                    <td>130/160</td>
                                    <td>UPDATED 136 FIRST TARGET HITS</td>
                                    <td>1900</td>
                                    <td>4900</td>
                                </tr>
                                <tr>
                                    <td>03-May-23</td>
                                    <td>BUY 4th MAY NIFTY 18200PE</td>
                                    <td>100</td>
                                    <td>80</td>
                                    <td>60</td>
                                    <td>150&amp;190</td>
                                    <td>UPDATED EXIT 107</td>
                                    <td>350</td>
                                    <td>5000</td>
                                </tr>
                                <tr>
                                    <td>04-May-23</td>
                                    <td>BUY NIFTY 4th-MAY 18000 CE</td>
                                    <td>118</td>
                                    <td>50</td>
                                    <td>140/170</td>
                                    <td>UPDATED 142 FIRST TARGET HITS</td>
                                    <td>1200</td>
                                    <td>5900</td>
                                </tr>
                                <tr>
                                    <td>04-May-23</td>
                                    <td>BUY BANKNIFTY 43000 CE</td>
                                    <td>280</td>
                                    <td>180</td>
                                    <td>390/460</td>
                                    <td>UPDATED 486 SECOND TARGET HITS</td>
                                    <td>7000</td>
                                    <td>5150</td>
                                </tr>
                                <tr>
                                    <td>08-May-23</td>
                                    <td>BUY 11th-MAY BANKNIFTY 43000 CE</td>
                                    <td>380</td>
                                    <td>240</td>
                                    <td>180</td>
                                    <td>430 &amp; 600</td>
                                    <td>UPDATED 433 FIRST TARGET HITS</td>
                                    <td>1325</td>
                                    <td>9500</td>
                                </tr>
                                <tr>
                                    <td>09-May-23</td>
                                    <td>BUY 11th-MAY BANKNIFTY 43500 PE</td>
                                    <td>250</td>
                                    <td>200</td>
                                    <td>160</td>
                                    <td>440&amp;580</td>
                                    <td>NOT executed</td>
                                    <td>0</td>
                                    <td>6250</td>
                                </tr>
                                <tr>
                                    <td>09-May-23</td>
                                    <td>BUY 11th-MAY NIFTY 18300 CE</td>
                                    <td>87</td>
                                    <td>106&amp; 135</td>
                                    <td>NOT executed</td>
                                    <td>0</td>
                                    <td>4350</td>
                                </tr>
                                <tr>
                                    <td>10-May-23</td>
                                    <td>BUY 11th-MAY BANKNIFTY 43200 PE</td>
                                    <td>290</td>
                                    <td>140</td>
                                    <td>120</td>
                                    <td>360 &amp; 450</td>
                                    <td>UPDATED LTP 435</td>
                                    <td>3625</td>
                                    <td>7250</td>
                                </tr>
                                <tr>
                                    <td>11-May-23</td>
                                    <td>BUY 18th-MAY NIFTY 18400 PE</td>
                                    <td>130</td>
                                    <td>80</td>
                                    <td>175&amp;200</td>
                                    <td>UPDATED LTP 162.45</td>
                                    <td>1622.5</td>
                                    <td>6500</td>
                                </tr>
                                <tr>
                                    <td>11-May-23</td>
                                    <td>BUY BANKNIFITY 43400 CE</td>
                                    <td>150</td>
                                    <td>100</td>
                                    <td>80</td>
                                    <td>260&amp;340</td>
                                    <td>UPDATED 294 Hits 1st Target</td>
                                    <td>3600</td>
                                    <td>3750</td>
                                </tr>
                                <tr>
                                    <td>12-May-23</td>
                                    <td>BUY 18th-MAY BANKNIFTY 43500 PE</td>
                                    <td>320</td>
                                    <td>280</td>
                                    <td>230</td>
                                    <td>440&amp;540</td>
                                    <td>UPDATED 340 LTP 28 POITNS ACHIVED</td>
                                    <td>700</td>
                                    <td>8000</td>
                                </tr>
                                <tr>
                                    <td>15-May-23</td>
                                    <td>BUY 18th-MAY NIFTY 18300 CE</td>
                                    <td>117</td>
                                    <td>75</td>
                                    <td>50</td>
                                    <td>140 &amp; 180</td>
                                    <td>UPDATED 181 SECOND TARGET HITS</td>
                                    <td>5850</td>
                                    <td>3200</td>
                                </tr>
                                <tr>
                                    <td>17-May-23</td>
                                    <td>BUY 18TH MAY BANKNIFTY 43500 CE</td>
                                    <td>380</td>
                                    <td>300</td>
                                    <td>270</td>
                                    <td>540</td>
                                    <td>NOT executed</td>
                                    <td>0</td>
                                    <td>9500</td>
                                </tr>
                                <tr>
                                    <td>19-May-23</td>
                                    <td>BUY 25TH-MAY BANKNIFITY 43800 PE</td>
                                    <td>348</td>
                                    <td>200</td>
                                    <td>450 &amp; 525</td>
                                    <td>NOT executed</td>
                                    <td>0</td>
                                    <td>8700</td>
                                </tr>
                                <tr>
                                    <td>22-May-23</td>
                                    <td>BUY NIFTY 25th-MAY 18200 CE</td>
                                    <td>105</td>
                                    <td>65</td>
                                    <td>45</td>
                                    <td>140&amp;180</td>
                                    <td>UPDATED 164 1ST TARGET HIT</td>
                                    <td>2950</td>
                                    <td>5250</td>
                                </tr>
                                <tr>
                                    <td>23-May-23</td>
                                    <td>BUY NIFTY 25th-MAY 18300 CE</td>
                                    <td>100</td>
                                    <td>62</td>
                                    <td>40</td>
                                    <td>160&amp;200</td>
                                    <td>NOT executed</td>
                                    <td>0</td>
                                    <td>5000</td>
                                </tr>
                                <tr>
                                    <td>26-May-23</td>
                                    <td>BUY NIFTY 1st JUNE 18300 CE</td>
                                    <td>120</td>
                                    <td>80</td>
                                    <td>60</td>
                                    <td>180 &amp; 220</td>
                                    <td>NOT executed</td>
                                    <td>0</td>
                                    <td>6000</td>
                                </tr>
                                <tr>
                                    <td>29-May-23</td>
                                    <td>BUY NIFTY 1st-JUNE 18500 CE</td>
                                    <td>144</td>
                                    <td>70</td>
                                    <td>170&amp;200</td>
                                    <td>NOT executed</td>
                                    <td>0</td>
                                    <td>7200</td>
                                </tr>
                                <tr>
                                    <td>30-May-23</td>
                                    <td>BUY NIFTY 1st-JUNE 18600 CE</td>
                                    <td>70</td>
                                    <td>45</td>
                                    <td>30</td>
                                    <td>120&amp;160</td>
                                    <td>recommded 91 book to percel profit and trail SL 60</td>
                                    <td>1050</td>
                                    <td>3500</td>
                                </tr>
                                <tr>
                                    <td>31-May-23</td>
                                    <td>BUY NIFTY 8TH-JUNE 18600 PE</td>
                                    <td>110</td>
                                    <td>90</td>
                                    <td>70</td>
                                    <td>140&amp; 170</td>
                                    <td>UPDATED 140 1ST TRAGET HIT</td>
                                    <td>1500</td>
                                    <td>6100</td>
                                </tr>
                                <tr>
                                    <td>32922.5</td>
                                    <td>125250</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-12">
                    <h4>APRIL </h4>
                    <div class="table-data mt-md-5 table-responsive">
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                    <th>DATE</th>
                                    <th>TRADE GIVEN</th>
                                    <th>AT</th>
                                    <th>AVERAGE AT</th>
                                    <th>STOP LOSS</th>
                                    <th>TAREGET</th>
                                    <th>ACHIEVED</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>03-Apr-23</td>
                                    <td>BUY 6 APRIL BANK NIFTY 40500 CE</td>
                                    <td>320</td>
                                    <td>220</td>
                                    <td>120</td>
                                    <td>600</td>
                                    <td>low 301 high 444, recommended to book around at 400</td>
                                    <td>2000</td>
                                    <td>8000</td>
                                </tr>
                                <tr>
                                    <td>05-Apr-23</td>
                                    <td>BUY NIFTY 6-APR 17500 CE</td>
                                    <td>60</td>
                                    <td>40</td>
                                    <td>20</td>
                                    <td>100</td>
                                    <td>Ltp 117 Target hit</td>
                                    <td>2850</td>
                                    <td>3000</td>
                                </tr>
                                <tr>
                                    <td>06-Apr-23</td>
                                    <td>BUY 13th APRIL NIFTY 41000 CE</td>
                                    <td>350-340</td>
                                    <td>260</td>
                                    <td>230</td>
                                    <td>480/560</td>
                                    <td>Valid for next 2-3 Sessions(Assume SL hit)</td>
                                    <td>-5410</td>
                                    <td>8500</td>
                                </tr>
                                <tr>
                                    <td>10-Apr-23</td>
                                    <td>BUY 13th APRIL NIFTY 17600 CE</td>
                                    <td>85-75</td>
                                    <td>55</td>
                                    <td>40</td>
                                    <td>120/150</td>
                                    <td>120ltp hits First Target (ltp 127)</td>
                                    <td>1750</td>
                                    <td>4250</td>
                                </tr>
                                <tr>
                                    <td>11-Apr-23</td>
                                    <td>BUY 13th APRIL NIFTY 17800 PE</td>
                                    <td>110</td>
                                    <td>80</td>
                                    <td>50</td>
                                    <td>160/190</td>
                                    <td>recommended to hold with revised stoploss 80</td>
                                    <td>0</td>
                                    <td>5500</td>
                                </tr>
                                <tr>
                                    <td>12-Apr-23</td>
                                    <td>BUY 13th APRIL BANKNIFTY 41300 CE</td>
                                    <td>200</td>
                                    <td>160</td>
                                    <td>120</td>
                                    <td>240/300</td>
                                    <td>300 Second Target Book Profit (ltp 318)</td>
                                    <td>2500</td>
                                    <td>5000</td>
                                </tr>
                                <tr>
                                    <td>13-Apr-23</td>
                                    <td>BUY 20th APRIL NIFTY 17900 PE</td>
                                    <td>105</td>
                                    <td>75</td>
                                    <td>40</td>
                                    <td>160/200</td>
                                    <td>T+3 Sessions (Entry missed&hellip;from low 125&gt; ltp 183 day hig)</td>
                                    <td>0</td>
                                    <td>5250</td>
                                </tr>
                                <tr>
                                    <td>13-Apr-23</td>
                                    <td>BUY 20th APRIL NIFTY 17700 CE</td>
                                    <td>120</td>
                                    <td>85</td>
                                    <td>70</td>
                                    <td>180/220</td>
                                    <td>ltp 188 Close First Target Book</td>
                                    <td>3400</td>
                                    <td>6000</td>
                                </tr>
                                <tr>
                                    <td>17-Apr-23</td>
                                    <td>BUY 20th APRIL BANKNIFTY 41900 CE</td>
                                    <td>360</td>
                                    <td>280</td>
                                    <td>200</td>
                                    <td>600</td>
                                    <td>1-2 Sessions(low &gt;344 and made high 513 achived 189 point )</td>
                                    <td>4725</td>
                                    <td>9000</td>
                                </tr>
                                <tr>
                                    <td>18-Apr-23</td>
                                    <td>BUY 20th APRIL NIFTY 17800 PE</td>
                                    <td>80</td>
                                    <td>60</td>
                                    <td>50</td>
                                    <td>140/180</td>
                                    <td>from 95&gt;ltp 135</td>
                                    <td>2750</td>
                                    <td>4000</td>
                                </tr>
                                <tr>
                                    <td>19-Apr-23</td>
                                    <td>BUY 20th APRIL BANKNIFTY 42300 PE</td>
                                    <td>180</td>
                                    <td>100</td>
                                    <td>80</td>
                                    <td>320/400</td>
                                    <td>made low of 165&gt;high 315.50 near 1st target</td>
                                    <td>3375</td>
                                    <td>4500</td>
                                </tr>
                                <tr>
                                    <td>20-Apr-23</td>
                                    <td>BUY 27th APRIL BANKNIFTY 42200 CE&nbsp;</td>
                                    <td>300</td>
                                    <td>220</td>
                                    <td>180</td>
                                    <td>450/540</td>
                                    <td>LOW MADE 266&gt;LTP 317</td>
                                    <td>425</td>
                                    <td>7500</td>
                                </tr>
                                <tr>
                                    <td>21-Apr-23</td>
                                    <td>BUY 27th APRIL NIFTY 17700 PE</td>
                                    <td>107</td>
                                    <td>88/65</td>
                                    <td>60</td>
                                    <td>127/165</td>
                                    <td>low 95&gt;ltp 150</td>
                                    <td>2150</td>
                                    <td>5350</td>
                                </tr>
                                <tr>
                                    <td>21-Apr-23</td>
                                    <td>BUY 27th APRIL BANKNIFTY 42300 PE</td>
                                    <td>315</td>
                                    <td>250</td>
                                    <td>150</td>
                                    <td>400/460</td>
                                    <td>high 478 hits 2nd target</td>
                                    <td>4075</td>
                                    <td>7875</td>
                                </tr>
                                <tr>
                                    <td>24-Apr-23</td>
                                    <td>BUY 27th APRIL BANKNIFTY 42200 CE&nbsp;</td>
                                    <td>300</td>
                                    <td>200</td>
                                    <td>180</td>
                                    <td>420/500</td>
                                    <td>high 517 hits 2nd target&nbsp;</td>
                                    <td>5425</td>
                                    <td>7500</td>
                                </tr>
                                <tr>
                                    <td>24-Apr-23</td>
                                    <td>BUY 27th APRIL NIFTY 17700 PE</td>
                                    <td>80</td>
                                    <td>70</td>
                                    <td>50</td>
                                    <td>140/160</td>
                                    <td>ltp 75 sqr. Off</td>
                                    <td>-250</td>
                                    <td>4000</td>
                                </tr>
                                <tr>
                                    <td>25-Apr-23</td>
                                    <td>BUY 27th APRIL BANKNIFTY 42500 CE</td>
                                    <td>270</td>
                                    <td>240</td>
                                    <td>120</td>
                                    <td>320/400</td>
                                    <td>from 255.30&gt;419 hits 2nd target</td>
                                    <td>3725</td>
                                    <td>6750</td>
                                </tr>
                                <tr>
                                    <td>26-Apr-23</td>
                                    <td>BUY 27th APRIL BANKNIFTY 42700 PE&nbsp;</td>
                                    <td>258</td>
                                    <td>220/120</td>
                                    <td>80</td>
                                    <td>300/380</td>
                                    <td>258&gt;308 hits 1st target</td>
                                    <td>1250</td>
                                    <td>6450</td>
                                </tr>
                                <tr>
                                    <td>26-Apr-23</td>
                                    <td>BUY 27th APRIL BANKNIFTY 42500 CE</td>
                                    <td>187</td>
                                    <td>150/90</td>
                                    <td>70</td>
                                    <td>240/300</td>
                                    <td>LTP 302 hits 2nd target</td>
                                    <td>2875</td>
                                    <td>4675</td>
                                </tr>
                                <tr>
                                    <td>27-Apr-23</td>
                                    <td>BUY 4th MAY NIFTY 17800 CE</td>
                                    <td>122</td>
                                    <td>110</td>
                                    <td>90</td>
                                    <td>140/160</td>
                                    <td>from 122&gt; high 155.70 hits 1st target</td>
                                    <td>1650</td>
                                    <td>6100</td>
                                </tr>
                                <tr>
                                    <td>28-Apr-23</td>
                                    <td>BUY 4th MAY BANKNIFTY 43000 PE</td>
                                    <td>310</td>
                                    <td>270/220</td>
                                    <td>200</td>
                                    <td>350/425</td>
                                    <td>low 272.50&gt;ltp 375 hits 1st target</td>
                                    <td>1625</td>
                                    <td>7750</td>
                                </tr>
                                <tr>
                                    <td>3784</td>
                                    <td>2505</td>
                                    <td>2200</td>
                                    <td>1300</td>
                                    <td>40890</td>
                                    <td>126950</td>
                                </tr>
                                <tr>
                                    <td colspan="2" width="383">1 STOP LOSS IN MARCH MONTH</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-12">
                    <h4>MARCH </h4>
                    <div class="table-data mt-md-5 table-responsive">
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                    <th>DATE</th>
                                    <th>TRADE GIVEN</th>
                                    <th>AT</th>
                                    <th>AVERAGE AT</th>
                                    <th>STOP LOSS</th>
                                    <th>TAREGET</th>
                                    <th>ACHIEVED</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Wednesday, March 01, 2023</td>
                                    <td>BUY 2nd MARCH BANK NIFTY 40400 CE</td>
                                    <td>280</td>
                                    <td>180</td>
                                    <td>140</td>
                                    <td>440&amp;520</td>
                                    <td>updated ltp 364 gain 85 points</td>
                                    <td>2100</td>
                                    <td>7000</td>
                                </tr>
                                <tr>
                                    <td>Thursday, March 02, 2023</td>
                                    <td>BUY 2nd MAR BANKNIFTY 40400 CE</td>
                                    <td>270</td>
                                    <td>180</td>
                                    <td>100</td>
                                    <td>440</td>
                                    <td>updated ltp 316 gain 46 points</td>
                                    <td>1150</td>
                                    <td>6750</td>
                                </tr>
                                <tr>
                                    <td>Friday, March 03, 2023</td>
                                    <td>BUY 9th MARCH BANK NIFTY 40800 CE</td>
                                    <td>380</td>
                                    <td>290</td>
                                    <td>240</td>
                                    <td>540&amp;580</td>
                                    <td>Not executed</td>
                                    <td>0</td>
                                    <td>9500</td>
                                </tr>
                                <tr>
                                    <td>Monday, March 06, 2023</td>
                                    <td>BUY 9th MARCH NIFTY 17600 CE</td>
                                    <td>170</td>
                                    <td>125</td>
                                    <td>110</td>
                                    <td>250&amp;270</td>
                                    <td>update ltp 198 gain 28 points</td>
                                    <td>1400</td>
                                    <td>8500</td>
                                </tr>
                                <tr>
                                    <td>Wednesday, March 08, 2023</td>
                                    <td>BUY 9th MARCH BANKNIFTY 41000 CE</td>
                                    <td>310</td>
                                    <td>200</td>
                                    <td>140</td>
                                    <td>450&amp;540</td>
                                    <td>580 2nd HITS Second target</td>
                                    <td>6750</td>
                                    <td>7750</td>
                                </tr>
                                <tr>
                                    <td>Thursday, March 09, 2023</td>
                                    <td>BUY 16th MARCH NIFTY 17800 PE</td>
                                    <td>150</td>
                                    <td>110</td>
                                    <td>90</td>
                                    <td>230&amp;260</td>
                                    <td>232 Hits first target</td>
                                    <td>4100</td>
                                    <td>7500</td>
                                </tr>
                                <tr>
                                    <td>Thursday, March 09, 2023</td>
                                    <td>BUY 9th MARCH BANKNIFTY 41400 CE</td>
                                    <td>90</td>
                                    <td>50</td>
                                    <td>30</td>
                                    <td>140&amp;180</td>
                                    <td>updated to exit last exit 61 loss 29 points</td>
                                    <td>-725</td>
                                    <td>2250</td>
                                </tr>
                                <tr>
                                    <td>Friday, March 10, 2023</td>
                                    <td>BUY 16th MARCH NIFTY 17500 PE</td>
                                    <td>140</td>
                                    <td>110</td>
                                    <td>80</td>
                                    <td>200&amp;240</td>
                                    <td>updated ltp 172 gain 30 points</td>
                                    <td>1500</td>
                                    <td>7000</td>
                                </tr>
                                <tr>
                                    <td>Monday, March 13, 2023</td>
                                    <td>BUY 16th MARCH NIFTY 17500 PE</td>
                                    <td>130</td>
                                    <td>70</td>
                                    <td>60</td>
                                    <td>200&amp;230</td>
                                    <td>Not executed</td>
                                    <td>0</td>
                                    <td>6500</td>
                                </tr>
                                <tr>
                                    <td>Tuesday, March 14, 2023</td>
                                    <td>BUY 23rd MARCH NIFTY 17100 CE</td>
                                    <td>230</td>
                                    <td>190</td>
                                    <td>140</td>
                                    <td>320&amp;360</td>
                                    <td>updated 245 gain 15 points</td>
                                    <td>750</td>
                                    <td>11500</td>
                                </tr>
                                <tr>
                                    <td>Wednesday, March 15, 2023</td>
                                    <td>BUY 23rd MARCH Nifty 17300 PE</td>
                                    <td>125</td>
                                    <td>80</td>
                                    <td>240 &amp; 280</td>
                                    <td>updated ltp 350, Hits all targets (283)</td>
                                    <td>7900</td>
                                    <td>6250</td>
                                </tr>
                                <tr>
                                    <td>Thursday, March 16, 2023</td>
                                    <td>BUY 23rd MARCH NIFTY 16700 CE</td>
                                    <td>255</td>
                                    <td>160</td>
                                    <td>100</td>
                                    <td>450</td>
                                    <td>updated 405 gain 150 points</td>
                                    <td>7500</td>
                                    <td>12750</td>
                                </tr>
                                <tr>
                                    <td>Thursday, March 16, 2023</td>
                                    <td>BUY 23rd MARCH NIFTY 17000 CE</td>
                                    <td>142</td>
                                    <td>112</td>
                                    <td>90</td>
                                    <td>200/240</td>
                                    <td>updated near first targes 199</td>
                                    <td>2850</td>
                                    <td>7100</td>
                                </tr>
                                <tr>
                                    <td>Friday, March 17, 2023</td>
                                    <td>BUY 23rd MARCH NIFTY 17000 CE</td>
                                    <td>150</td>
                                    <td>100</td>
                                    <td>90</td>
                                    <td>200/240</td>
                                    <td>updated 203 gain 53 points</td>
                                    <td>2650</td>
                                    <td>7100</td>
                                </tr>
                                <tr>
                                    <td>Monday, March 20, 2023</td>
                                    <td>BUY 23th MARCH NIFTY 16800 CE</td>
                                    <td>170</td>
                                    <td>110</td>
                                    <td>100</td>
                                    <td>270&amp;300</td>
                                    <td>updated 201 gain 31 points</td>
                                    <td>1550</td>
                                    <td>8500</td>
                                </tr>
                                <tr>
                                    <td>Tuesday, March 21, 2023</td>
                                    <td>BUY 23th MARCH NIFTY 16900 CE</td>
                                    <td>160</td>
                                    <td>110</td>
                                    <td>100</td>
                                    <td>240/260</td>
                                    <td>not updated Assume stop loss hit</td>
                                    <td>3000</td>
                                    <td>8000</td>
                                </tr>
                                <tr>
                                    <td>Wednesday, March 22, 2023</td>
                                    <td>BUY 23th MARCH NIFTY 17000 CE</td>
                                    <td>195</td>
                                    <td>140</td>
                                    <td>90</td>
                                    <td>290/340</td>
                                    <td>long @ 195 &gt;140)avg entry rate168 recommended exit at cost</td>
                                    <td>0</td>
                                    <td>9750</td>
                                </tr>
                                <tr>
                                    <td>Thursday, March 23, 2023</td>
                                    <td>BUY 29th MARCH NIFTY 17000 CE</td>
                                    <td>200</td>
                                    <td>150</td>
                                    <td>130</td>
                                    <td>290/320</td>
                                    <td>updated ltp 250 recommended to book profit</td>
                                    <td>2500</td>
                                    <td>10000</td>
                                </tr>
                                <tr>
                                    <td>Thursday, March 23, 2023</td>
                                    <td>BUY 29th MARCH BANKNIFTY 39900CE</td>
                                    <td>160</td>
                                    <td>100</td>
                                    <td>60</td>
                                    <td>300</td>
                                    <td>TRAGET HITS 300</td>
                                    <td>3500</td>
                                    <td>4000</td>
                                </tr>
                                <tr>
                                    <td>Friday, March 24, 2023</td>
                                    <td>BUY 29th MARCH NIFTY 17200 PE</td>
                                    <td>155</td>
                                    <td>110</td>
                                    <td>95</td>
                                    <td>250/235</td>
                                    <td>ALL TARGET HITS 256</td>
                                    <td>5050</td>
                                    <td>7750</td>
                                </tr>
                                <tr>
                                    <td>Friday, March 24, 2023</td>
                                    <td>BUY 29th MARCH BANKNIFTY 39500 CE</td>
                                    <td>450</td>
                                    <td>350</td>
                                    <td>300</td>
                                    <td>600/750</td>
                                    <td>UPDATED 509 gain 59 points</td>
                                    <td>1475</td>
                                    <td>11250</td>
                                </tr>
                                <tr>
                                    <td>Monday, March 27, 2023</td>
                                    <td>BUY 29th MARCH BANKNIFTY 39500 PE</td>
                                    <td>345</td>
                                    <td>250</td>
                                    <td>200</td>
                                    <td>500</td>
                                    <td>UPDATED LTP 346 recommended to exit at cost</td>
                                    <td>0</td>
                                    <td>8625</td>
                                </tr>
                                <tr>
                                    <td>Tuesday, March 28, 2023</td>
                                    <td>BUY 29th MARCH NIFTY 16900 CE</td>
                                    <td>200</td>
                                    <td>160</td>
                                    <td>320/360</td>
                                    <td>UPDATED LTP 236 gain 36 points</td>
                                    <td>1800</td>
                                    <td>12250</td>
                                </tr>
                                <tr>
                                    <td>Wednesday, March 29, 2023</td>
                                    <td>BUY 6th APRIL NIFTY 16900 CE</td>
                                    <td>190</td>
                                    <td>200</td>
                                    <td>130</td>
                                    <td>270/300</td>
                                    <td>UPDATED 272 TARGET HIT</td>
                                    <td>4100</td>
                                    <td>9500</td>
                                </tr>
                                <tr>
                                    <td>Friday, March 31, 2023</td>
                                    <td>BUY 6th APRIL NIFTY 17300 PE</td>
                                    <td>90/100</td>
                                    <td>50</td>
                                    <td>40</td>
                                    <td>160/190</td>
                                    <td>LTP 77 SQUARE OFF, 13 POINTS LOSS</td>
                                    <td>650</td>
                                    <td>4500</td>
                                </tr>
                                <tr>
                                    <td>61550</td>
                                    <td>201575</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="row mt-5">
                <div class="col-md-12">
                    <h4>FEBRURY </h4>
                    <div class="table-data mt-md-5 table-responsive">
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                    <th>DATE</th>
                                    <th>TRADE GIVEN</th>
                                    <th>AT</th>
                                    <th>AVERAGE AT</th>
                                    <th>STOP LOSS</th>
                                    <th>TAREGET</th>
                                    <th>ACHIEVED</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1-Feb-23</td>
                                    <td>BUY 9th FEB NIFTY 17700 CE </td>
                                    <td>240-250</td>
                                    <td>200</td>
                                    <td>170</td>
                                    <td>330/370</td>
                                    <td>All targets done </td>
                                    <td>6000</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>2-Feb-23</td>
                                    <td>BUY 9th FEB NIFTY 17500 CE </td>
                                    <td>200-210</td>
                                    <td>150</td>
                                    <td>120</td>
                                    <td>300/330</td>
                                    <td>recommended to boook full at 249</td>
                                    <td>1950</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>3-Feb-23</td>
                                    <td>BUY 9th FEB NIFTY 17500 CE </td>
                                    <td>210-220</td>
                                    <td>155</td>
                                    <td>130</td>
                                    <td>310/330</td>
                                    <td>NOT executed</td>
                                    <td>0</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>6-Feb-23</td>
                                    <td>BUY 9th FEB NIFTY 17900 CE </td>
                                    <td>190-200</td>
                                    <td>140</td>
                                    <td>110</td>
                                    <td>290/340</td>
                                    <td>recommended to square off at cost</td>
                                    <td>0</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>7-Feb-23</td>
                                    <td>BUY 16th FEB NIFTY 17700 CE </td>
                                    <td>170-180</td>
                                    <td>130</td>
                                    <td>100</td>
                                    <td>260/290</td>
                                    <td>recommended to book full at 188</td>
                                    <td>400</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>8-Feb-23</td>
                                    <td>BUY 16th FEB NIFTY 17700 CE </td>
                                    <td>200-210</td>
                                    <td>160</td>
                                    <td>140</td>
                                    <td>280/320</td>
                                    <td>NOT executed</td>
                                    <td>0</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>9-Feb-23</td>
                                    <td>BUY 9th FEB NIFTY 18100 PE</td>
                                    <td>210-220</td>
                                    <td>160</td>
                                    <td>140</td>
                                    <td>300/340</td>
                                    <td>exit cost to cost</td>
                                    <td>0</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>10-Feb-23</td>
                                    <td>BUY 16 FEB NIFTY 17700 CE </td>
                                    <td>170-180</td>
                                    <td>130</td>
                                    <td>100</td>
                                    <td>280/310</td>
                                    <td>recommended to book full at 204</td>
                                    <td>1200</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>13-Feb-23</td>
                                    <td>BUY 16th FEB NIFTY 17700 CE </td>
                                    <td>125-130</td>
                                    <td>70</td>
                                    <td>50</td>
                                    <td>210/250</td>
                                    <td>exit cost to cost</td>
                                    <td>0</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>14-Feb-23</td>
                                    <td>BUY 16th FEB NIFTY 17700 CE </td>
                                    <td>135-145</td>
                                    <td>90</td>
                                    <td>65</td>
                                    <td>225/250</td>
                                    <td>NOT executed</td>
                                    <td>0</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>15-Feb-23</td>
                                    <td>BUY 23 FEB NIFTY 17800 CE </td>
                                    <td>170-180</td>
                                    <td>120</td>
                                    <td>100</td>
                                    <td>260/300</td>
                                    <td>NOT executed</td>
                                    <td>0</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>15-Feb-23</td>
                                    <td>BUY 16 FEB BANK NIFTY 41400 CE </td>
                                    <td>240-250</td>
                                    <td>150</td>
                                    <td>100</td>
                                    <td>400/480</td>
                                    <td>Hits first target </td>
                                    <td>3750</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>16-Feb-23</td>
                                    <td>BUY 23 FEB NIFTY 17900 CE</td>
                                    <td>220-230</td>
                                    <td>170</td>
                                    <td>150</td>
                                    <td>310/340</td>
                                    <td>updated at 255 to book </td>
                                    <td>625</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>17-Feb-23</td>
                                    <td>BUY 23 FEB NIFTY 17800 CE </td>
                                    <td>165-175</td>
                                    <td>125</td>
                                    <td>100</td>
                                    <td>250/300</td>
                                    <td>recommended to book full at 198</td>
                                    <td>575</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>20-Feb-23</td>
                                    <td>BUY 23 FEB NIFTY 17900 CE </td>
                                    <td>100-110</td>
                                    <td>60</td>
                                    <td>50</td>
                                    <td>170/200</td>
                                    <td>stop loss hit</td>
                                    <td>-2500</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>21-Feb-23</td>
                                    <td>BUY 23 FEB NIFTY 17800 CE </td>
                                    <td>105-115</td>
                                    <td>60</td>
                                    <td>45</td>
                                    <td>185/220</td>
                                    <td>updated at 129 </td>
                                    <td>0</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>22-Feb-23</td>
                                    <td>BUY 23 FEB NIFTY 17800 PE </td>
                                    <td>90-100</td>
                                    <td>60</td>
                                    <td>40</td>
                                    <td>160/200</td>
                                    <td>NOT executed</td>
                                    <td>0</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>23-Feb-23</td>
                                    <td>BUY 2nd MARCH NIFTY 17500 CE </td>
                                    <td>190-195</td>
                                    <td>150</td>
                                    <td>125</td>
                                    <td>265/300</td>
                                    <td>exit cost to cost</td>
                                    <td>0</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>23-Feb-23</td>
                                    <td>BUY 23rd FEB NIFTY 17500 CE </td>
                                    <td>66</td>
                                    <td>35</td>
                                    <td>20</td>
                                    <td>120/140</td>
                                    <td>recommended to book partial at 100 traling stop loss to 50</td>
                                    <td>1700</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>24-Feb-23</td>
                                    <td>BUY 2nd MARCH NIFTY 17450 CE </td>
                                    <td>130-140</td>
                                    <td>100</td>
                                    <td>80</td>
                                    <td>200/250</td>
                                    <td>recommended to exit at cost</td>
                                    <td>0</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>24-Feb-23</td>
                                    <td>BUY 2nd MARCH NIFTY 17600 PE</td>
                                    <td>150-155</td>
                                    <td>110</td>
                                    <td>80</td>
                                    <td>230/250</td>
                                    <td>Low made 156.40 exact around buying updated at 208 with trailing stop loss</td>
                                    <td>2550</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>27-Feb-23</td>
                                    <td>BUY 2nd MARCH NIFTY 17500 PE </td>
                                    <td>160-170</td>
                                    <td>120</td>
                                    <td>100</td>
                                    <td>240/270</td>
                                    <td>Low made 153 updated at 191 with trailing stop loss</td>
                                    <td>1050</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>28-Feb-23</td>
                                    <td>BUY 9th MARCH NIFTY 17400 CE </td>
                                    <td>115-125</td>
                                    <td>80</td>
                                    <td>60</td>
                                    <td>190/230</td>
                                    <td>updated at 148 with trailing stop loss</td>
                                    <td>1100</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td>TOTAL PROFIT IN ONE MONTH (ASSUMING 1 LOT)</td>
                                    <td>18400</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <h4>JANUARY </h4>
                    <div class="table-data mt-md-5 table-responsive">
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                    <th>DATE</th>
                                    <th>TRADE GIVEN</th>
                                    <th>AT</th>
                                    <th>AVERAGE AT</th>
                                    <th>STOP LOSS</th>
                                    <th>TAREGET</th>
                                    <th>ACHIEVED</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>2-Jan-23</td>
                                    <td>BUY 05 JAN BANK NIFTY 43200 CE</td>
                                    <td>250-260</td>
                                    <td>160</td>
                                    <td>90</td>
                                    <td>430/500</td>
                                    <td>Low made 223.10, therefter 318 ,recommended to book at 312,more than 50 points gain
                                    </td>
                                    <td>1300</td>
                                </tr>
                                <tr>
                                    <td>3-Jan-23</td>
                                    <td>BUY NIFTY 05 JAN 18200 CE</td>
                                    <td>87</td>
                                    <td>60</td>
                                    <td>40</td>
                                    <td>120/150</td>
                                    <td>recommended to book at 103</td>
                                    <td>800</td>
                                </tr>
                                <tr>
                                    <td>3-Jan-23</td>
                                    <td>BUY 05 JAN BANK NIFTY 43400 PE</td>
                                    <td>290</td>
                                    <td>240</td>
                                    <td>190</td>
                                    <td>380/450</td>
                                    <td>average became 265,recommended to book at 295</td>
                                    <td>750</td>
                                </tr>
                                <tr>
                                    <td>4-Jan-23</td>
                                    <td>BUY 05 JAN BANKNIFTY 43600 PE</td>
                                    <td>290</td>
                                    <td>230</td>
                                    <td>190</td>
                                    <td>400+</td>
                                    <td>Made high of 463 ,HITS target</td>
                                    <td>2750</td>
                                </tr>
                                <tr>
                                    <td>4-Jan-23</td>
                                    <td>BUY BANK NIFTY 43400 PE</td>
                                    <td>230</td>
                                    <td>160</td>
                                    <td>120</td>
                                    <td>370</td>
                                    <td>NOT EXECUTED</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>4-Jan-23</td>
                                    <td>BUY BANK NIFTY 43200 PE</td>
                                    <td>280</td>
                                    <td>200</td>
                                    <td>150</td>
                                    <td>450</td>
                                    <td>Recommended to book at 318</td>
                                    <td>750</td>
                                </tr>
                                <tr>
                                    <td>5-Jan-23</td>
                                    <td>BUY 05 JAN NIFTY 17900 CE</td>
                                    <td>145</td>
                                    <td>100</td>
                                    <td>70</td>
                                    <td>200/230</td>
                                    <td>HITS target, made high of 199</td>
                                    <td>2700</td>
                                </tr>
                                <tr>
                                    <td>6-Jan-23</td>
                                    <td>BUY 12 JAN BANK NIFTY 42300 CE</td>
                                    <td>450</td>
                                    <td>350</td>
                                    <td>300</td>
                                    <td>600</td>
                                    <td>STO LOSS HIT</td>
                                    <td>-5000</td>
                                </tr>
                                <tr>
                                    <td>9-Jan-23</td>
                                    <td>BUY 12 JAN NIFTY 18200 PE</td>
                                    <td>130</td>
                                    <td>100</td>
                                    <td>80</td>
                                    <td>190/220</td>
                                    <td>low made 116 thereafter high 182 near target (recommended to book at 182)</td>
                                    <td>2600</td>
                                </tr>
                                <tr>
                                    <td>9-Jan-23</td>
                                    <td>BUY 12 JAN NIFTY 18000 CE</td>
                                    <td>100-110</td>
                                    <td>70</td>
                                    <td>50</td>
                                    <td>170/225</td>
                                    <td>low made 108 exact at buying rate recommended to book at 161</td>
                                    <td>2500</td>
                                </tr>
                                <tr>
                                    <td>10-Jan-23</td>
                                    <td>BUY 12 JAN NIFTY 17800 CE</td>
                                    <td>175</td>
                                    <td>110</td>
                                    <td>90</td>
                                    <td>260/300</td>
                                    <td>low made 178 around buying recommended to book at 210 again low made 125 thereafter
                                        162</td>
                                    <td>1500</td>
                                </tr>
                                <tr>
                                    <td>11-Jan-23</td>
                                    <td>BUY 19 JAN NIFTY 17800 CE</td>
                                    <td>210-220</td>
                                    <td>150</td>
                                    <td>120</td>
                                    <td>320/350</td>
                                    <td>Low made 222 thereafter 256,recommended to book at 256</td>
                                    <td>1800</td>
                                </tr>
                                <tr>
                                    <td>12-Jan-23</td>
                                    <td>BUY 12 JAN BANK NIFTY 42300 PE</td>
                                    <td>260-280</td>
                                    <td>180</td>
                                    <td>100</td>
                                    <td>460/540</td>
                                    <td>Low near average level 194 thereafter 547 all targets HIT,approx 260 points gain
                                    </td>
                                    <td>6500</td>
                                </tr>
                                <tr>
                                    <td>13-Jan-23</td>
                                    <td>BUY 19 JAN NIFTY 17700 CE</td>
                                    <td>185-195</td>
                                    <td>140</td>
                                    <td>120</td>
                                    <td>270/320</td>
                                    <td>HITS both targets</td>
                                    <td>6250</td>
                                </tr>
                                <tr>
                                    <td>16-Jan-23</td>
                                    <td>BUY 19 JAN NIFTY 17800 CE</td>
                                    <td>130-140</td>
                                    <td>80</td>
                                    <td>60</td>
                                    <td>220/275</td>
                                    <td>Low 135 thereaafter 165, recomMended to book at 165</td>
                                    <td>1250</td>
                                </tr>
                                <tr>
                                    <td>17-Jan-23</td>
                                    <td>BUY 19 JAN NIFTY 17900 CE</td>
                                    <td>125-135</td>
                                    <td>80</td>
                                    <td>70</td>
                                    <td>200/250</td>
                                    <td>Low made 99, recommended to book full at 176</td>
                                    <td>2050</td>
                                </tr>
                                <tr>
                                    <td>18-Jan-23</td>
                                    <td>BUY 19 JAN BANK NIFTY 42200 CE</td>
                                    <td>300-310</td>
                                    <td>210</td>
                                    <td>110</td>
                                    <td>510/600</td>
                                    <td>4 times it came to buying rate thereafter made high of 383,recommended t book full
                                        around 345</td>
                                    <td>875</td>
                                </tr>
                                <tr>
                                    <td>19-Jan-23</td>
                                    <td>BUY 19 JAN NIFTY 18000 CE</td>
                                    <td>105</td>
                                    <td>75</td>
                                    <td>50</td>
                                    <td>150/190</td>
                                    <td>High 162,Hits first target,recommended to book.</td>
                                    <td>3420</td>
                                </tr>
                                <tr>
                                    <td>20-Jan-23</td>
                                    <td>BUY 25th JAN NIFTY 18000 CE</td>
                                    <td>150-160</td>
                                    <td>110</td>
                                    <td>80</td>
                                    <td>240/300</td>
                                    <td>Low made 155.45, thereafter recommended to book at 179</td>
                                    <td>950</td>
                                </tr>
                                <tr>
                                    <td>23-Jan-23</td>
                                    <td>BUY 25th JAN NIFTY 18000 CE</td>
                                    <td>150-160</td>
                                    <td>110</td>
                                    <td>80</td>
                                    <td>240/300</td>
                                    <td>Low made 142 thereafter high 187.70,recommended to book at 174-179</td>
                                    <td>700</td>
                                </tr>
                                <tr>
                                    <td>24-Jan-23</td>
                                    <td>BUY 2nd FEB NIFTY 18100 CE</td>
                                    <td>170-180</td>
                                    <td>130</td>
                                    <td>100</td>
                                    <td>280/320</td>
                                    <td>Low made 168 at buying,thereafter updated at 189 ,no profit no loss</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>25-Jan-23</td>
                                    <td>BUY 2nd FEB NIFTY 17800 CE</td>
                                    <td>200-210</td>
                                    <td>150</td>
                                    <td>120</td>
                                    <td>300/350</td>
                                    <td>NOT EXECUTED</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>27-Jan-23</td>
                                    <td>BUY 2nd FEB NIFTY 18100 PE</td>
                                    <td>300-310</td>
                                    <td>250</td>
                                    <td>210</td>
                                    <td>410/450</td>
                                    <td>NOT EXECUTED</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>30-Jan-23</td>
                                    <td>BUY 2nd FEB NIFTY 17500 CE</td>
                                    <td>205-215</td>
                                    <td>150</td>
                                    <td>120</td>
                                    <td>310/350</td>
                                    <td>Low made 161,thereafter 273,recommended to book full at 273</td>
                                    <td>2900</td>
                                </tr>
                                <tr>
                                    <td>31-Jan-23</td>
                                    <td>BUY 22nd FEB NIFTY 17500 CE</td>
                                    <td>176-185</td>
                                    <td>120</td>
                                    <td>100</td>
                                    <td>270/350</td>
                                    <td>NOT EXECUTED</td>
                                    <td>0</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="row mt-5">
                <div class="col-md-12">
                    <h4>DECEMBER </h4>
                    <div class="table-data mt-md-5 table-responsive">
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                    <th>DATE</th>
                                    <th>TRADE GIVEN</th>
                                    <th>AT</th>
                                    <th>AVERAGE AT</th>
                                    <th>STOP LOSS</th>
                                    <th>TAREGET</th>
                                    <th>ACHIEVED</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td height="21">7 Dec 22</td>
                                    <td>BUY BANK NIFTY 43200 CE</td>
                                    <td>230</td>
                                    <td>180</td>
                                    <td>140</td>
                                    <td>320/360</td>
                                    <td>average cost was 205 reduced 50% at 215</td>
                                    <td>-1750</td>
                                </tr>
                                <tr>
                                    <td height="21">8 Dec 22</td>
                                    <td>BUY BNK NIFTY 43100 CE</td>
                                    <td>140</td>
                                    <td>100</td>
                                    <td>70</td>
                                    <td>250/280</td>
                                    <td>Not executed</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">9 Dec 22</td>
                                    <td>BUY BANK NIFTY 43700 CE</td>
                                    <td>220</td>
                                    <td>165</td>
                                    <td>150</td>
                                    <td>302/335</td>
                                    <td>Not executed</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">12 Dec 22</td>
                                    <td>BUY 15 DEC 18300 CE</td>
                                    <td>164</td>
                                    <td>145</td>
                                    <td>120</td>
                                    <td>200/230</td>
                                    <td>hits all target</td>
                                    <td>3300</td>
                                </tr>
                                <tr>
                                    <td height="21">13 Dec 22</td>
                                    <td>BUY BANK NIFTY 44000 PE</td>
                                    <td>225</td>
                                    <td>185</td>
                                    <td>150</td>
                                    <td>300+</td>
                                    <td>low 218 thereafter 262 (intraday buy was at around 225 and lower) recommended to
                                        book aT 262</td>
                                    <td>1000</td>
                                </tr>
                                <tr>
                                    <td height="21">14/Dec</td>
                                    <td>BUY 22 DEC NIFTY 18600 CE</td>
                                    <td>150-160</td>
                                    <td>110</td>
                                    <td>70</td>
                                    <td>250/300</td>
                                    <td>recommended to enter at 170 thereafter recommended to book full at 196</td>
                                    <td>1300</td>
                                </tr>
                                <tr>
                                    <td height="21">14 Dec 22</td>
                                    <td>BUY NIFTY 18700 PE</td>
                                    <td>115</td>
                                    <td>85</td>
                                    <td>70</td>
                                    <td>140/160</td>
                                    <td>Hits all targets</td>
                                    <td>2250</td>
                                </tr>
                                <tr>
                                    <td height="21">16 Dec 22</td>
                                    <td>BUY 22 DEC NIFTY 18500 PE</td>
                                    <td>115</td>
                                    <td>80</td>
                                    <td>70</td>
                                    <td>160/185</td>
                                    <td>Not executed</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">19 Dec 22</td>
                                    <td>BUY 22 DEC BANK NIFTY 43000 PE</td>
                                    <td>140</td>
                                    <td>100</td>
                                    <td>80</td>
                                    <td>185/240</td>
                                    <td>recommended to square off at 111</td>
                                    <td>-1450</td>
                                </tr>
                                <tr>
                                    <td height="21">19 Dec 22</td>
                                    <td>BUY 22 DEC BANK NIFTY 43300 CE</td>
                                    <td>255</td>
                                    <td>200</td>
                                    <td>160</td>
                                    <td>320/360</td>
                                    <td>low 220 thereafter 280,recommended to book at 280</td>
                                    <td>625</td>
                                </tr>
                                <tr>
                                    <td height="21">21 Dec 22</td>
                                    <td>BUY 22 DEC 18500 PE</td>
                                    <td>100</td>
                                    <td>70</td>
                                    <td>50</td>
                                    <td>168/219</td>
                                    <td>low made around buying level thereafter 105 high 218 ltp 208, all targets hit</td>
                                    <td>5650</td>
                                </tr>
                                <tr>
                                    <td height="21">22 Dec 22</td>
                                    <td>BUY 22 DEC BANK NIFTY 42800 PE</td>
                                    <td>150</td>
                                    <td>100</td>
                                    <td>50</td>
                                    <td>280/375</td>
                                    <td>Not executed</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">23 Dec 22</td>
                                    <td>BUY 29 DEC BANK NIFTY 42000 CE</td>
                                    <td>410</td>
                                    <td>340</td>
                                    <td>280</td>
                                    <td>500/550</td>
                                    <td>410 to 454,recommended to exit at 454</td>
                                    <td>1000</td>
                                </tr>
                                <tr>
                                    <td height="21">26 Dec 22</td>
                                    <td>BUY BANK NIFTY 42000 CE</td>
                                    <td>285</td>
                                    <td>200</td>
                                    <td>150</td>
                                    <td>390/550</td>
                                    <td>all targets hit</td>
                                    <td>6625</td>
                                </tr>
                                <tr>
                                    <td height="21">27 Dec 22</td>
                                    <td>BUY 29 DEC BANK NIFTY 42800 PE</td>
                                    <td>350</td>
                                    <td>250</td>
                                    <td>200</td>
                                    <td>500</td>
                                    <td>low made 335 thereafter 434,gains 75+ points</td>
                                    <td>1875</td>
                                </tr>
                                <tr>
                                    <td height="21">27 Dec 22</td>
                                    <td>BUY 29 DEC NIFTY 18200 PE</td>
                                    <td>150-160</td>
                                    <td>110</td>
                                    <td>80</td>
                                    <td>240/300</td>
                                    <td>Low made exact at buying price ,recommended to book at 206</td>
                                    <td>2300</td>
                                </tr>
                                <tr>
                                    <td height="21">28 Dec 22</td>
                                    <td>BUY 05 JAN NIFTY 18000 CE</td>
                                    <td>210-220</td>
                                    <td>160</td>
                                    <td>130</td>
                                    <td>310/350</td>
                                    <td>low 232, high made 272(not came at exact buying price but trade was in right
                                        direction)</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">29 Dec 22</td>
                                    <td>BUY 29 DEC 17900 CE</td>
                                    <td>115</td>
                                    <td>75</td>
                                    <td>40</td>
                                    <td>160/200</td>
                                    <td>low made 100,thereafter 184 hits first target,trailed SL to 98,agaIn from 112 to
                                        234,recommended to book full at 234,high made 292</td>
                                    <td>5950</td>
                                </tr>
                                <tr>
                                    <td height="21">30 Dec 22</td>
                                    <td>BUY 05 JAN BANK NIFTY 43100 CE</td>
                                    <td>350-360</td>
                                    <td>260</td>
                                    <td>160</td>
                                    <td>560/650</td>
                                    <td>Low made 338 thereafter 397,recommended to book at 370</td>
                                    <td>800</td>
                                </tr>
                                <tr>
                                    <td bgcolor="#92D050"><strong>TOTAL PROFIT IN ONE MONTH (ASSUMING 1 LOT)</strong></td>
                                    <td bgcolor="#92D050"><strong>29475</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="row mt-5">
                <div class="col-md-12">
                    <h4>NOVEMBER </h4>
                    <div class="table-data mt-md-5 table-responsive">
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                    <th>DATE</th>
                                    <th>TRADE GIVEN</th>
                                    <th>AT</th>
                                    <th>AVERAGE AT</th>
                                    <th>STOP LOSS</th>
                                    <th>TAREGET</th>
                                    <th>ACHIEVED</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td height="21">1 Nov 22</td>
                                    <td>BUY 03 NOV NIFTY 18000 CE</td>
                                    <td>150-160</td>
                                    <td>100</td>
                                    <td>80</td>
                                    <td>240/310</td>
                                    <td>buying was of 310 average of 210,booked full at 249</td>
                                    <td>1950</td>
                                </tr>
                                <tr>
                                    <td height="21">1 Nov 22</td>
                                    <td>BUY 03 NOV BANK NIFTY 41500 CE</td>
                                    <td>300-310</td>
                                    <td>210</td>
                                    <td>110</td>
                                    <td>510/600</td>
                                    <td>buying was at 150-160,booked ful, at 191</td>
                                    <td>1550</td>
                                </tr>
                                <tr>
                                    <td height="21">02 nov 022</td>
                                    <td>BUY 10 NOV NIFTY 18000 CE</td>
                                    <td>185-195</td>
                                    <td>150</td>
                                    <td>110</td>
                                    <td>280/340</td>
                                    <td>Not executed</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">3 Nov 22</td>
                                    <td>BUY 10 NOV NIFTY 18000 CE</td>
                                    <td>185-195</td>
                                    <td>150</td>
                                    <td>110</td>
                                    <td>280/340</td>
                                    <td>Low 159 average at 159 booked at 192</td>
                                    <td>1650</td>
                                </tr>
                                <tr>
                                    <td height="21">4 Nov 22</td>
                                    <td>BUY 10 NOV NIFTY 17900 CE</td>
                                    <td>205-210</td>
                                    <td>160</td>
                                    <td>120</td>
                                    <td>300/350</td>
                                    <td>Low 219 udated thereafter high 265 (not executed)</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">7 Nov 22</td>
                                    <td>BUY 10 NOV BANK NIFTY 41500 CE</td>
                                    <td>290-310</td>
                                    <td>160</td>
                                    <td>120</td>
                                    <td>500/620</td>
                                    <td>High 399 (squarred off at cost)</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">9 Nov 22</td>
                                    <td>BUY 10 NOV BANK NIFTY 42000 PE</td>
                                    <td>290-300</td>
                                    <td>200</td>
                                    <td>130</td>
                                    <td>470/570</td>
                                    <td>low 298 thereafter 370,recommended to book at 370</td>
                                    <td>1750</td>
                                </tr>
                                <tr>
                                    <td height="21">10 Nov 22</td>
                                    <td>BUY 17 NOV NIFTY 18000 CE</td>
                                    <td>170-180</td>
                                    <td>120</td>
                                    <td>90</td>
                                    <td>270/350</td>
                                    <td>reommended to square off at 167(at 3:21 PM)nest day reached 355</td>
                                    <td>-650</td>
                                </tr>
                                <tr>
                                    <td height="21">11 Nov 22</td>
                                    <td>BUY 17 NOV BANK NIFTY 42000 CE</td>
                                    <td>320-330</td>
                                    <td>230</td>
                                    <td>150</td>
                                    <td>510/640</td>
                                    <td>Not executed</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">11 Nov 22</td>
                                    <td>BUY 17 NOV BANK NIFTY 42300 CE(HIGH RISK)</td>
                                    <td>300</td>
                                    <td>220</td>
                                    <td>160</td>
                                    <td>440/550</td>
                                    <td>Not executed</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">14 Nov 22</td>
                                    <td>BUY 17 NOV 42000 CE</td>
                                    <td>220</td>
                                    <td>180</td>
                                    <td>140</td>
                                    <td>360</td>
                                    <td>low made 267 buy was at around 220 high thereafter 377(not executed)</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">15 Nov 22</td>
                                    <td>BUY 17 NOV BANK NIFTY 42500 PE</td>
                                    <td>360-370</td>
                                    <td>270</td>
                                    <td>170</td>
                                    <td>570/660</td>
                                    <td>Low made 342 ,recommended to book at 393</td>
                                    <td>575</td>
                                </tr>
                                <tr>
                                    <td height="21">16 Nov 22</td>
                                    <td>BUY 24 NOV NIFTY 18200 CE</td>
                                    <td>270-280</td>
                                    <td>235</td>
                                    <td>200</td>
                                    <td>360/410</td>
                                    <td>Low made 283 ,recommended to book at 343</td>
                                    <td>3150</td>
                                </tr>
                                <tr>
                                    <td height="21">17 Nov 22</td>
                                    <td>BUY NOV NIFTY 18200 CE</td>
                                    <td>255-265</td>
                                    <td>225</td>
                                    <td>180</td>
                                    <td>350/410</td>
                                    <td>Not executed</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">18 Nov 22</td>
                                    <td>BUY NOV NIFTY 18200 CE</td>
                                    <td>200-210</td>
                                    <td>150</td>
                                    <td>115</td>
                                    <td>295/345</td>
                                    <td>exit at cost</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">18 Nov 22</td>
                                    <td>BUY BANK NIFTY 42400 CE</td>
                                    <td>340</td>
                                    <td>260</td>
                                    <td>220</td>
                                    <td>490</td>
                                    <td>Not executed</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">21 Nov 22</td>
                                    <td>BUY 24 NOV BANK NIFTY 42500 PE</td>
                                    <td>310-320</td>
                                    <td>220</td>
                                    <td>120</td>
                                    <td>520/600</td>
                                    <td>low 320 exact at buying price.recommended to exit at 355</td>
                                    <td>875</td>
                                </tr>
                                <tr>
                                    <td height="21">22 Nov 22</td>
                                    <td>BUY 24 NOV NIFTY 18100 CE</td>
                                    <td>121</td>
                                    <td>85</td>
                                    <td>70</td>
                                    <td>145/175</td>
                                    <td>Low made 121 high 174, near 2nd target</td>
                                    <td>2650</td>
                                </tr>
                                <tr>
                                    <td height="21">23 Nov 22</td>
                                    <td>BUY 1 DEC BANK NIFTY 42500 CE</td>
                                    <td>410</td>
                                    <td>350</td>
                                    <td>300</td>
                                    <td>520/600</td>
                                    <td>Recommended to book at 541</td>
                                    <td>2500</td>
                                </tr>
                                <tr>
                                    <td bgcolor="#92D050"><strong>TOTAL PROFIT IN ONE MONTH (ASSUMING 1 LOT)</strong></td>
                                    <td bgcolor="#92D050"><strong>16000</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="row mt-5">
                <div class="col-md-12">
                    <h4>OCTOBER </h4>
                    <div class="table-data mt-md-5 table-responsive">
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                    <th>DATE</th>
                                    <th>TRADE GIVEN</th>
                                    <th>AT</th>
                                    <th>AVERAGE AT</th>
                                    <th>STOP LOSS</th>
                                    <th>TAREGET</th>
                                    <th>ACHIEVED</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td height="21">3 Oct 22</td>
                                    <td>BUY 06 OCT BANK NIFTY 37900 CE</td>
                                    <td>450-470</td>
                                    <td>370</td>
                                    <td>270</td>
                                    <td>570/700</td>
                                    <td>NOT EXECUTED</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">4 Oct 22</td>
                                    <td>BUY 06 OCT NIFTY 17100 CE</td>
                                    <td>140-150</td>
                                    <td>100</td>
                                    <td>70</td>
                                    <td>230/300</td>
                                    <td>NOT EXECUTED</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">06-0CT 2022</td>
                                    <td>BUY OCT NIFTY 17300 CE</td>
                                    <td>140-150</td>
                                    <td>100</td>
                                    <td>70</td>
                                    <td>230/300</td>
                                    <td>low 160 from buying level thereafter high 177 (recommended to book at 177)</td>
                                    <td>850</td>
                                </tr>
                                <tr>
                                    <td height="21">6 Oct 22</td>
                                    <td>BUY 06 0CT NIFTY 17300 CE</td>
                                    <td>65-75</td>
                                    <td>35-40</td>
                                    <td>25</td>
                                    <td>125/150</td>
                                    <td>low 66.75 from buying level,recommended to book at 86</td>
                                    <td>950</td>
                                </tr>
                                <tr>
                                    <td height="21">7 Oct 22</td>
                                    <td>BUY 13 OCT BANK NIFTY 38900 PE</td>
                                    <td>380-400</td>
                                    <td>300</td>
                                    <td>200</td>
                                    <td>600/750</td>
                                    <td>trade executed,recommended to book at 437</td>
                                    <td>925</td>
                                </tr>
                                <tr>
                                    <td height="21">10 Oct 22</td>
                                    <td>BUY 13 OCT NIFTY 17100 CE</td>
                                    <td>126</td>
                                    <td>100</td>
                                    <td>155/198</td>
                                    <td>recommended to book at 175(traded with trailing stop loss)</td>
                                    <td>2450</td>
                                </tr>
                                <tr>
                                    <td height="21">11 Oct 22</td>
                                    <td>BUY 13 OCT BANK NITY 38900 CE</td>
                                    <td>370</td>
                                    <td>240</td>
                                    <td>200</td>
                                    <td>500</td>
                                    <td>exit at cost</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">12 Oct 22</td>
                                    <td>BUY 20 OCT NIFTY 16900</td>
                                    <td>250-260</td>
                                    <td>200</td>
                                    <td>170</td>
                                    <td>350/450</td>
                                    <td>low240 from buying level thereafter high 335,recommended to book at 313</td>
                                    <td>2650</td>
                                </tr>
                                <tr>
                                    <td height="21">13 Oct 22</td>
                                    <td>BUY 20 OCT NIFTY 16800 CE</td>
                                    <td>250-260</td>
                                    <td>200</td>
                                    <td>170</td>
                                    <td>350-450</td>
                                    <td>low 278 from buying level,recommended to buy at 278, recommended to book at 340</td>
                                    <td>3100</td>
                                </tr>
                                <tr>
                                    <td height="21">14 Oct 22</td>
                                    <td>BUY 20 OCT BANK NIFTY 39500 CE</td>
                                    <td>350-360</td>
                                    <td>260</td>
                                    <td>160</td>
                                    <td>560/650</td>
                                    <td>low 364 from buying level recommended to book at 412</td>
                                    <td>1200</td>
                                </tr>
                                <tr>
                                    <td height="21">17 Oct 22</td>
                                    <td>BUY 20 OCT BANK NIFTY 39600 CE</td>
                                    <td>350-360</td>
                                    <td>260</td>
                                    <td>160</td>
                                    <td>560/650</td>
                                    <td>NOT EXECUTED</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">18 Oct 22</td>
                                    <td>BUY 20 OCT NIFTY 17300 CE</td>
                                    <td>170-180</td>
                                    <td>125</td>
                                    <td>100</td>
                                    <td>260/310</td>
                                    <td>NOT EXECUTED</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">19 Oct 22</td>
                                    <td>BUY 27 OCT NIFTY 17400 CE</td>
                                    <td>220-230</td>
                                    <td>180</td>
                                    <td>150</td>
                                    <td>310/360</td>
                                    <td>low 216 buying was 220-230 recommended to book at 245</td>
                                    <td>750</td>
                                </tr>
                                <tr>
                                    <td height="21">20 Oct 22</td>
                                    <td>TRADE NOT GIVEN</td>
                                    <td>TRADE NOT GIVEN</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">21 Oct 22</td>
                                    <td>BUY 27 OCT NIFTY 17400 CE</td>
                                    <td>200-215</td>
                                    <td>175</td>
                                    <td>150</td>
                                    <td>310/360</td>
                                    <td>NOT EXECUTED</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">25 Oct 22</td>
                                    <td>BUY 27 OCT BANK NIFTY 41000 CE</td>
                                    <td>350-360</td>
                                    <td>260</td>
                                    <td>160</td>
                                    <td>560/650</td>
                                    <td>high 433 from buying rice, recommended to book at 420</td>
                                    <td>1500</td>
                                </tr>
                                <tr>
                                    <td height="21">27 Oct 22</td>
                                    <td>BUY 03 NOV NIFTY 17800 CE</td>
                                    <td>150-155</td>
                                    <td>100</td>
                                    <td>80</td>
                                    <td>230/280</td>
                                    <td>NOT EXECUTED</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">28 Oct 22</td>
                                    <td>BUY 03 NOV NIFTY 17600 CE</td>
                                    <td>240-245</td>
                                    <td>190</td>
                                    <td>150</td>
                                    <td>340/400</td>
                                    <td>exit at cost(no movement )</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">31 Oct 22</td>
                                    <td>BUY 03 NOV NIFTY 17800 CE</td>
                                    <td>180-190</td>
                                    <td>150</td>
                                    <td>120</td>
                                    <td>260/310</td>
                                    <td>low 200 recommended to buy at 200,recommended to book at 245</td>
                                    <td>2250</td>
                                </tr>
                                <tr>
                                    <td bgcolor="#92D050"><strong>TOTAL PROFIT IN ONE MONTH (ASSUMING 1 LOT)</strong></td>
                                    <td bgcolor="#92D050"><strong>16625</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end of oct 22 -->

            <div class="row mt-5">
                <div class="col-md-12">
                    <h4>SEPTEMBER </h4>
                    <div class="table-data mt-md-5 table-responsive">
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                    <th>DATE</th>
                                    <th>TRADE GIVEN</th>
                                    <th>AT</th>
                                    <th>AVERAGE AT</th>
                                    <th>STOP LOSS</th>
                                    <th>TAREGET</th>
                                    <th>ACHIEVED</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td height="21">01/Sep</td>
                                    <td>BUY 08 SEP NIFTY 17500 CE</td>
                                    <td>200-210</td>
                                    <td>150</td>
                                    <td>120</td>
                                    <td>300/375</td>
                                    <td>trade executed from buying level recommended to book at 236</td>
                                    <td>650</td>
                                </tr>
                                <tr>
                                    <td height="21">02/Sep</td>
                                    <td>buy 08 SEP NIFTY 17400 CE</td>
                                    <td>220-230</td>
                                    <td>160</td>
                                    <td>130</td>
                                    <td>330/400</td>
                                    <td>not executed</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">05/Sep</td>
                                    <td>buy 08 SEP BANK NIFTY 40000 PE</td>
                                    <td>460</td>
                                    <td>350</td>
                                    <td>250</td>
                                    <td>660/750</td>
                                    <td>not executed</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">06/Sep</td>
                                    <td>BUY 08 SEP BANK NIFTY 39600 CE</td>
                                    <td>340-350</td>
                                    <td>250</td>
                                    <td>150</td>
                                    <td>550/650</td>
                                    <td>trade executed from buying level,recommended to book at 377</td>
                                    <td>675</td>
                                </tr>
                                <tr>
                                    <td height="21">07/Sep</td>
                                    <td>BUY 08 SEP BANK NIFTY 39300 CE</td>
                                    <td>300-320</td>
                                    <td>220</td>
                                    <td>150</td>
                                    <td>490/600</td>
                                    <td>trade executed from buying level,recommended to book at 421</td>
                                    <td>2525</td>
                                </tr>
                                <tr>
                                    <td height="21">08/Sep</td>
                                    <td>BUY 08 SEP BANK NIFTY 40300 PE</td>
                                    <td>210-230</td>
                                    <td>130</td>
                                    <td>100</td>
                                    <td>360/500</td>
                                    <td>trade executed from buying level,high 381(updated) first target done</td>
                                    <td>3750</td>
                                </tr>
                                <tr>
                                    <td height="21">09/Sep</td>
                                    <td>BUY 15 SEP NIFTY 17700 CE</td>
                                    <td>210-220</td>
                                    <td>170</td>
                                    <td>140</td>
                                    <td>300/340</td>
                                    <td>trade executed from buying level,recommended to book at 248</td>
                                    <td>1400</td>
                                </tr>
                                <tr>
                                    <td height="21">13/Sep</td>
                                    <td>BUY 15 SEP BANK NIFTY 40800 CE</td>
                                    <td>280-290</td>
                                    <td>210</td>
                                    <td>170</td>
                                    <td>410/500</td>
                                    <td>trade executed from buying level,recommended to book at 340</td>
                                    <td>1250</td>
                                </tr>
                                <tr>
                                    <td height="21">14/Sep</td>
                                    <td>BUY 15 SEP BANK NIFTY 40900 CE</td>
                                    <td>290-300</td>
                                    <td>210</td>
                                    <td>130</td>
                                    <td>470/600</td>
                                    <td>not executed</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">15/Sep</td>
                                    <td>BUY 22 SEP NIFTY 17800 CE</td>
                                    <td>200-215</td>
                                    <td>150</td>
                                    <td>120</td>
                                    <td>310/375</td>
                                    <td>not executed</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">19/Sep</td>
                                    <td>BUY 22 SEP BANK NIFTY 40800 CE</td>
                                    <td>390-400</td>
                                    <td>300</td>
                                    <td>200</td>
                                    <td>600/750</td>
                                    <td>trade executed from buying level,recommended to book at 529</td>
                                    <td>3225</td>
                                </tr>
                                <tr>
                                    <td height="21">20/Sep</td>
                                    <td>BUY 22 SEP BANK NIFTY 41300 CE</td>
                                    <td>390-410</td>
                                    <td>310</td>
                                    <td>250</td>
                                    <td>570/660</td>
                                    <td>not executed</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">21/Sep</td>
                                    <td>BUY 29 SEP NIFTY 17700 CE</td>
                                    <td>215-230</td>
                                    <td>170</td>
                                    <td>140</td>
                                    <td>320/400</td>
                                    <td>Low 212 from buiyng level thereafter high 261 recommended to book at 241</td>
                                    <td>525</td>
                                </tr>
                                <tr>
                                    <td height="21">22/Sep</td>
                                    <td>BUY 29 SEP NIFTY 17500 CE</td>
                                    <td>230-240</td>
                                    <td>180</td>
                                    <td>150</td>
                                    <td>330-420</td>
                                    <td>trade executed from buying level thereafter,hits first target 91 points gain</td>
                                    <td>4550</td>
                                </tr>
                                <tr>
                                    <td height="21">23/Sep</td>
                                    <td>BUY 29 SEP NIFTY 17300 CE</td>
                                    <td>250-260</td>
                                    <td>190</td>
                                    <td>170</td>
                                    <td>350/440</td>
                                    <td>trade executed from buying level thereafter recommended to book at279</td>
                                    <td>850</td>
                                </tr>
                                <tr>
                                    <td height="21">26/Sep</td>
                                    <td>BUY 29 SEP NIFTY 17000</td>
                                    <td>180-200</td>
                                    <td>130</td>
                                    <td>100</td>
                                    <td>300/440</td>
                                    <td>not executed</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">27/Sep</td>
                                    <td>BUY 06 OCT NIFTY 16900 CE</td>
                                    <td>290-300</td>
                                    <td>240</td>
                                    <td>180</td>
                                    <td>420/500</td>
                                    <td>trade executed from buying level thereafter high 383 recommended to book at 370</td>
                                    <td>3500</td>
                                </tr>
                                <tr>
                                    <td height="21">28/Sep</td>
                                    <td>BUY 06 OCT NIFTY 16900 CE</td>
                                    <td>250-260</td>
                                    <td>200</td>
                                    <td>180</td>
                                    <td>340/400</td>
                                    <td>trade executed from buying level thereafter recommended to book at 280</td>
                                    <td>1000</td>
                                </tr>
                                <tr>
                                    <td height="21">29/Sep</td>
                                    <td>BUY 06 OCT NIFTY 16800 CE</td>
                                    <td>260-270</td>
                                    <td>190</td>
                                    <td>170</td>
                                    <td>370/460</td>
                                    <td>not executed</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">30/Sep</td>
                                    <td>BUY 06 OCT BANK NIFTY 38400 CE</td>
                                    <td>350-370</td>
                                    <td>270</td>
                                    <td>170</td>
                                    <td>570/700</td>
                                    <td>not executed</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td bgcolor="#92D050"><strong>TOTAL PROFIT IN ONE MONTH (ASSUMING 1 LOT)</strong></td>
                                    <td bgcolor="#92D050"><strong>23900</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end of sep 22 -->
            <div class="row mt-5">
                <div class="col-md-12">
                    <h4>AUGUST </h4>
                    <div class="table-data mt-md-5 table-responsive">
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                    <th>DATE</th>
                                    <th>TRADE GIVEN</th>
                                    <th>AT</th>
                                    <th>AVERAGE AT</th>
                                    <th>STOP LOSS</th>
                                    <th>TAREGET</th>
                                    <th>ACHIEVED</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td height="21">01/Aug</td>
                                    <td>BUY 04 AUG BANK NIFTY 37500 CE</td>
                                    <td>365-375</td>
                                    <td>275</td>
                                    <td>200</td>
                                    <td>550/620</td>
                                    <td>NOt executed</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td height="21">01/Aug</td>
                                    <td>BUY 04 AUG NIFTY 17200 CE</td>
                                    <td>130-140</td>
                                    <td>90</td>
                                    <td>65</td>
                                    <td>215/300</td>
                                    <td>trade executed from buying level thereafter high 180 updated</td>
                                    <td>2000</td>
                                </tr>
                                <tr>
                                    <td height="21">02/Aug</td>
                                    <td>BUY 04 AUG BANK NIFTY 38100 PE</td>
                                    <td>280-300</td>
                                    <td>200</td>
                                    <td>100</td>
                                    <td>500/600</td>
                                    <td>trade executed from buying level thereafter recommended to book at 423</td>
                                    <td>3075</td>
                                </tr>
                                <tr>
                                    <td height="21">03/Aug</td>
                                    <td>BUY 11 AUG NIFTY 17200 CE</td>
                                    <td>185-195</td>
                                    <td>140</td>
                                    <td>100</td>
                                    <td>290/350</td>
                                    <td>trade executed from buying level thereafter high 296(updated )in broadcaste</td>
                                    <td>5000</td>
                                </tr>
                                <tr>
                                    <td height="21">04/Aug</td>
                                    <td>BUY 04 AUG BANK NIFTY 37800 CE</td>
                                    <td>200-215</td>
                                    <td>100</td>
                                    <td>80</td>
                                    <td>350/420</td>
                                    <td>not executed</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">08/Aug</td>
                                    <td>BUY 11 AUG NIFTY 17300 CE</td>
                                    <td>175-190</td>
                                    <td>125</td>
                                    <td>100</td>
                                    <td>280/300</td>
                                    <td>not executed</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">11/Aug</td>
                                    <td>BUY 18 AUG NIFTY 17600 CE</td>
                                    <td>165-175</td>
                                    <td>130-140</td>
                                    <td>105</td>
                                    <td>245/300</td>
                                    <td>high 191</td>
                                    <td>800</td>
                                </tr>
                                <tr>
                                    <td height="21">12/Aug</td>
                                    <td>BUY 18 AUG NIFTY 17600 CE</td>
                                    <td>130-140</td>
                                    <td>100</td>
                                    <td>80</td>
                                    <td>200/240</td>
                                    <td>trade executed from buying level,recommended to book at 165</td>
                                    <td>1250</td>
                                </tr>
                                <tr>
                                    <td height="21">16/Aug</td>
                                    <td>BUY 25 AUG NIFTY 17700</td>
                                    <td>220-230</td>
                                    <td>190</td>
                                    <td>140</td>
                                    <td>320/400</td>
                                    <td>trade executed from buying level,high 292 recommended to book at 252.40</td>
                                    <td>1100</td>
                                </tr>
                                <tr>
                                    <td height="21">17/Aug</td>
                                    <td>BUY 25 AUG BANK NIFTY 39100 CE</td>
                                    <td>460-480</td>
                                    <td>380</td>
                                    <td>280</td>
                                    <td>680/720</td>
                                    <td>not executed</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">18/Aug</td>
                                    <td>BUY 25 AUG NIFTY 17800 CE</td>
                                    <td>210</td>
                                    <td>160</td>
                                    <td>130</td>
                                    <td>290/300</td>
                                    <td>trade executed from buying level,recommended to book at 261</td>
                                    <td>2550</td>
                                </tr>
                                <tr>
                                    <td height="21">19/Aug</td>
                                    <td>BUY 25 AUG NIFTY 17600 CE</td>
                                    <td>180-190</td>
                                    <td>130</td>
                                    <td>90</td>
                                    <td>290/390</td>
                                    <td>trade executed from buying level thereafter recommended to book aroung 250</td>
                                    <td>3000</td>
                                </tr>
                                <tr>
                                    <td height="21">22/Aug</td>
                                    <td>BUY 25 AUG NIFTY 17500 CE</td>
                                    <td>120-130</td>
                                    <td>70</td>
                                    <td>60</td>
                                    <td>200/300</td>
                                    <td>not executed</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">23/Aug</td>
                                    <td>BUY 01 SE NIFTY 17400 CE</td>
                                    <td>215-225</td>
                                    <td>160</td>
                                    <td>140</td>
                                    <td>310/350</td>
                                    <td>trade executed from buying level thereafter high 322 hits first target</td>
                                    <td>4500</td>
                                </tr>
                                <tr>
                                    <td height="21">24/Aug</td>
                                    <td>BUY 25 AUG BANK NIFTY 38700 CE</td>
                                    <td>260</td>
                                    <td>160</td>
                                    <td>120</td>
                                    <td>340/430</td>
                                    <td>trade executed from buying level therafter high 520 hits second target</td>
                                    <td>4250</td>
                                </tr>
                                <tr>
                                    <td height="21">24/Aug</td>
                                    <td>BUY NIFTY AUG 17550 CE (BTST)</td>
                                    <td>104</td>
                                    <td>75</td>
                                    <td>50</td>
                                    <td>150/200</td>
                                    <td>trade executed from buying level thereafter high 180 updated to book</td>
                                    <td>4000</td>
                                </tr>
                                <tr>
                                    <td height="21">25/Aug</td>
                                    <td>BUY 01 SEP NIFTY 17500 CE</td>
                                    <td>200-210</td>
                                    <td>160</td>
                                    <td>140</td>
                                    <td>280/350</td>
                                    <td>exit at cost</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">26/Aug</td>
                                    <td>BUY 01 SEP NIFTY 17600 CE</td>
                                    <td>140</td>
                                    <td>115</td>
                                    <td>100</td>
                                    <td>185/200</td>
                                    <td>trade executed from buying level,recommended to book ar 168</td>
                                    <td>700</td>
                                </tr>
                                <tr>
                                    <td height="21">29/Aug</td>
                                    <td>BUY 01 SEP BANK NIFTY 38300 CE</td>
                                    <td>280-300</td>
                                    <td>180</td>
                                    <td>100</td>
                                    <td>580/700</td>
                                    <td>trade executed from buying level,recommended to book near 377</td>
                                    <td>1925</td>
                                </tr>
                                <tr>
                                    <td height="21">30/Aug</td>
                                    <td>BUY 01 SEP NIFTY 17300 CE</td>
                                    <td>170-180</td>
                                    <td>120</td>
                                    <td>100</td>
                                    <td>260/350</td>
                                    <td>not executed</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td bgcolor="#92D050"><strong>TOTAL PROFIT IN ONE MONTH (ASSUMING 1 LOT)</strong></td>
                                    <td bgcolor="#92D050"><strong>34150</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end of aug 22 -->


            <div class="row mt-5">
                <div class="col-md-12">
                    <h4>JULY </h4>
                    <div class="table-data mt-md-5 table-responsive">
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                    <th>DATE</th>
                                    <th>TRADE GIVEN</th>
                                    <th>AT</th>
                                    <th>AVERAGE AT</th>
                                    <th>STOP LOSS</th>
                                    <th>TAREGET</th>
                                    <th>ACHIEVED</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td height="21">1 Jul 22</td>
                                    <td>BUY 7 JUNE NIFTY 1550 CE</td>
                                    <td>195</td>
                                    <td>170</td>
                                    <td>150</td>
                                    <td>250</td>
                                    <td>NOT EXECUTED</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">4 Jul 22</td>
                                    <td>BUY JULY BANK NIFTY 34000PE</td>
                                    <td>420-430</td>
                                    <td>330</td>
                                    <td>230</td>
                                    <td>630/700</td>
                                    <td>low 425 from buying level thereafter high 491,Rcommended to book at 478</td>
                                    <td>1200</td>
                                </tr>
                                <tr>
                                    <td height="21">5 Jul 22</td>
                                    <td>BUY 14 JULY NIFTY 15900 CE</td>
                                    <td>200</td>
                                    <td>160</td>
                                    <td>130</td>
                                    <td>270/300</td>
                                    <td>NOT EXECUTED</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">6 Jul 22</td>
                                    <td>BUY JULY NIFTY 15900 PUT</td>
                                    <td>205</td>
                                    <td>150</td>
                                    <td>130</td>
                                    <td>265/300</td>
                                    <td>trade executed from buying levelthereafter Recommended to book at 251</td>
                                    <td>2300</td>
                                </tr>
                                <tr>
                                    <td height="21">8 Jul 22</td>
                                    <td>BUY 14 JULY NIFTY 16100 CE</td>
                                    <td>180</td>
                                    <td>145</td>
                                    <td>100</td>
                                    <td>260/300</td>
                                    <td>trade executed from buying level thereafter recommended to book at 215</td>
                                    <td>1050</td>
                                </tr>
                                <tr>
                                    <td height="21">8 Jul 22</td>
                                    <td>BUY JULY NIFTY 16300 PE</td>
                                    <td>200</td>
                                    <td>170</td>
                                    <td>140</td>
                                    <td>260/300</td>
                                    <td>trade executed from buying level,average done average price become185 ,recommended
                                        to book at 211</td>
                                    <td>2600</td>
                                </tr>
                                <tr>
                                    <td height="21">11 Jul 22</td>
                                    <td>BUY 14 JULY BANK NIFTY 35100 CE</td>
                                    <td>300</td>
                                    <td>200</td>
                                    <td>150</td>
                                    <td>450/550</td>
                                    <td>NOT EXECUTED</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">12 Jul 22</td>
                                    <td>BUY 21 JULY NIFTY 16100 CE</td>
                                    <td>180</td>
                                    <td>140</td>
                                    <td>110</td>
                                    <td>250/300</td>
                                    <td>trade executed from buying level,recommended to book at 192(no market movement as
                                        expected)</td>
                                    <td>300</td>
                                </tr>
                                <tr>
                                    <td height="21">13 Jul 22</td>
                                    <td>BUY NIFTY 21 JULY 16200 PE</td>
                                    <td>210</td>
                                    <td>160</td>
                                    <td>140</td>
                                    <td>258/300</td>
                                    <td>trade executed from buying level,Recommended to book at partial at 247 and full at
                                        280</td>
                                    <td>3500</td>
                                </tr>
                                <tr>
                                    <td height="21">14 Jul 22</td>
                                    <td>BUY 21 JULY NIFTY 15800 CE</td>
                                    <td>265-275</td>
                                    <td>200</td>
                                    <td>180</td>
                                    <td>400/500</td>
                                    <td>booked at cost to cost</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">15 Jul 22</td>
                                    <td>BUY 21 JULY NIFTY 16100 PE</td>
                                    <td>175-182</td>
                                    <td>130</td>
                                    <td>100</td>
                                    <td>270/350</td>
                                    <td>NOT EXECUTED</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">18 Jul 22</td>
                                    <td>BUY 21 JULY BANK NIFTY 34900 CE</td>
                                    <td>260-280</td>
                                    <td>180</td>
                                    <td>100</td>
                                    <td>480/600</td>
                                    <td>NOT EXECUTED</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">19 Jul 22</td>
                                    <td>BUY 28 JULY NIFTY 16200 CE</td>
                                    <td>185/207 AT LTP</td>
                                    <td>140</td>
                                    <td>110</td>
                                    <td>260/300</td>
                                    <td>trade executed from buying level therafter recommended to book at 253, hits target
                                        next day 380</td>
                                    <td>2800</td>
                                </tr>
                                <tr>
                                    <td height="21">20 Jul 22</td>
                                    <td>BUY 21 JULY BANK NIFTY 35900 CE</td>
                                    <td>210-225</td>
                                    <td>140</td>
                                    <td>80</td>
                                    <td>370/420</td>
                                    <td>trade executed from buying level thereafter recommended to book at 305 , 80 points
                                        from suggested buying price</td>
                                    <td>2000</td>
                                </tr>
                                <tr>
                                    <td height="21">21 Jul 22</td>
                                    <td>BUY 28 JULY NIFTY 16500 CE</td>
                                    <td>150</td>
                                    <td>100</td>
                                    <td>70</td>
                                    <td>230/300</td>
                                    <td>trade executed from buying level thereafter Recommended to book at 195</td>
                                    <td>2250</td>
                                </tr>
                                <tr>
                                    <td height="21">22 Jul 22</td>
                                    <td>BUY 28 JULY NIFTY 16500 CE</td>
                                    <td>180-185</td>
                                    <td>150</td>
                                    <td>110</td>
                                    <td>260/300</td>
                                    <td>trade executed from buying level thereafter high 301 target done</td>
                                    <td>5750</td>
                                </tr>
                                <tr>
                                    <td height="21">25 Jul 22</td>
                                    <td>BUY 28 JULY NIFTY 16500 CE</td>
                                    <td>155-165</td>
                                    <td>115</td>
                                    <td>80</td>
                                    <td>250/300</td>
                                    <td>trade executed from buying level thereafter Recommended to book at 225</td>
                                    <td>3000</td>
                                </tr>
                                <tr>
                                    <td height="21">26 Jul 22</td>
                                    <td>BUY JULY NIFTY 16500 CE</td>
                                    <td>107</td>
                                    <td>70</td>
                                    <td>50</td>
                                    <td>155/180</td>
                                    <td>trade executed from buying level thereafter Recommended to book at cost</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">26 Jul 22</td>
                                    <td>BUY 28 JULY NIFTY 16400 CE</td>
                                    <td>150-155</td>
                                    <td>110</td>
                                    <td>70</td>
                                    <td>250/300</td>
                                    <td>Low 153 from buying levelthereafter Recommended to book at 176</td>
                                    <td>1050</td>
                                </tr>
                                <tr>
                                    <td height="21">27 Jul 22</td>
                                    <td>BUY 04 AUG NIFTY 16400 CE</td>
                                    <td>250</td>
                                    <td>190</td>
                                    <td>150</td>
                                    <td>350/440</td>
                                    <td>NOT EXECUTED</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">28 Jul 22</td>
                                    <td>BUY 28JULY NIFTY 17000PE</td>
                                    <td>132</td>
                                    <td>100</td>
                                    <td>70</td>
                                    <td>200</td>
                                    <td>trade executed from buying level,Average cost become 116 recommended to book at 125
                                    </td>
                                    <td>900</td>
                                </tr>
                                <tr>
                                    <td height="21">29 Jul 22</td>
                                    <td>BUY 04 AUG BANK NIFTY 37300 CE</td>
                                    <td>330-350</td>
                                    <td>250</td>
                                    <td>150</td>
                                    <td>550/620</td>
                                    <td>NOT EXECUTED</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">29 Jul 22</td>
                                    <td>BUY 04 AUG NIFTY 17000 CE</td>
                                    <td>150-160</td>
                                    <td>100</td>
                                    <td>80</td>
                                    <td>240/300</td>
                                    <td>trade executed from buying level thereafter recommended to buy at 168 and book at
                                        244</td>
                                    <td>3950</td>
                                </tr>
                                <tr>
                                    <td bgcolor="#92D050"><strong>TOTAL PROFIT IN ONE MONTH (ASSUMING 1 LOT)</strong></td>
                                    <td bgcolor="#92D050"><strong>32650</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end of july 22 -->


            <div class="row mt-5">
                <div class="col-md-12">
                    <h4>JUNE </h4>
                    <div class="table-data mt-md-5 table-responsive">
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                    <th>DATE</th>
                                    <th>TRADE GIVEN</th>
                                    <th>AT</th>
                                    <th>AVERAGE AT</th>
                                    <th>STOP LOSS</th>
                                    <th>TAREGET</th>
                                    <th>ACHIEVED</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td height="21">1 Jun 22</td>
                                    <td>BUY 09 JUNE NIFTY 1600 PE</td>
                                    <td>215</td>
                                    <td>180</td>
                                    <td>160</td>
                                    <td>270/300</td>
                                    <td>recommended to book at 247</td>
                                    <td>1600</td>
                                </tr>
                                <tr>
                                    <td height="21">2 Jun 22</td>
                                    <td>BUY 09 JUNE BANK NIFTY 35400 CE</td>
                                    <td>530-550</td>
                                    <td>450</td>
                                    <td>350</td>
                                    <td>750/900</td>
                                    <td>low 534 recommended to book at 623</td>
                                    <td>1825</td>
                                </tr>
                                <tr>
                                    <td height="21">2 Jun 22</td>
                                    <td>BUY 02 JUNE NIFTY 16700 PE</td>
                                    <td>100-120</td>
                                    <td>70</td>
                                    <td>50</td>
                                    <td>210/250</td>
                                    <td>low 130 recommended to book at book 170</td>
                                    <td>2500</td>
                                </tr>
                                <tr>
                                    <td height="21">2 Jun 22</td>
                                    <td>BUY 02 JUNE NIFTY 16700 PE</td>
                                    <td>60-70</td>
                                    <td>30</td>
                                    <td>15</td>
                                    <td>120/170</td>
                                    <td>high 108 ,recommended to book at 108</td>
                                    <td>1900</td>
                                </tr>
                                <tr>
                                    <td height="21">3 Jun 22</td>
                                    <td>BUY 09 JUNE BANK NIFTY 35600 CE</td>
                                    <td>460-480</td>
                                    <td>380</td>
                                    <td>280</td>
                                    <td>680/760</td>
                                    <td>low 468 recommende to book at 502</td>
                                    <td>550</td>
                                </tr>
                                <tr>
                                    <td height="21">7 Jun 22</td>
                                    <td>BUY 09 NIFTY BANK 34900 CE</td>
                                    <td>350-360</td>
                                    <td>260</td>
                                    <td>160</td>
                                    <td>560/620</td>
                                    <td>recommended to book at 380</td>
                                    <td>500</td>
                                </tr>
                                <tr>
                                    <td height="21">9 Jun 22</td>
                                    <td>BUY 16 JUNE NIFTY 16400 PE (HIGH RISK)</td>
                                    <td>50</td>
                                    <td>20</td>
                                    <td>14</td>
                                    <td>100/140</td>
                                    <td>not executed</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">10 Jun 22</td>
                                    <td>BUY 16 JUNE 16200 CE</td>
                                    <td>204</td>
                                    <td>160</td>
                                    <td>140</td>
                                    <td>250/280</td>
                                    <td>not executed</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">13 Jun 22</td>
                                    <td>BUY 16 JUNE NIFTY 15700 CE</td>
                                    <td>195</td>
                                    <td>175</td>
                                    <td>150</td>
                                    <td>300</td>
                                    <td>not executed</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">14 Jun 22</td>
                                    <td>BUY 16 JUNE BAK NIFTY 33100 CE</td>
                                    <td>380-400</td>
                                    <td>300</td>
                                    <td>200</td>
                                    <td>600/800</td>
                                    <td>low 349 recommended to book at 525</td>
                                    <td>3150</td>
                                </tr>
                                <tr>
                                    <td height="21">15 Jun 22</td>
                                    <td>BUY 23 JUNE BANK NIFTY 33400 CE</td>
                                    <td>440-460</td>
                                    <td>340</td>
                                    <td>250</td>
                                    <td>660/750</td>
                                    <td>high 546 , recommnended to boom at 546</td>
                                    <td>2150</td>
                                </tr>
                                <tr>
                                    <td height="21">16 Jun 22</td>
                                    <td>BUY 23 JUNE BANK NIFTY 33400 CE</td>
                                    <td>460-480</td>
                                    <td>380</td>
                                    <td>280</td>
                                    <td>680/750</td>
                                    <td>STO LOSS HIT</td>
                                    <td>-5000</td>
                                </tr>
                                <tr>
                                    <td height="21">17 Jun 22</td>
                                    <td>BUY 23 JUNE NIFTY 15100 CE</td>
                                    <td>230-240</td>
                                    <td>180</td>
                                    <td>150</td>
                                    <td>400/500</td>
                                    <td>STO LOSS HIT</td>
                                    <td>-4500</td>
                                </tr>
                                <tr>
                                    <td height="21">20 Jun 22</td>
                                    <td>BUY NIFTY 15200 CE</td>
                                    <td>225</td>
                                    <td>175</td>
                                    <td>150</td>
                                    <td>300</td>
                                    <td>recommended to book at 250</td>
                                    <td>1250</td>
                                </tr>
                                <tr>
                                    <td height="21">21 Jun 22</td>
                                    <td>BUY 23 JUNE BANK NIFTY 33400 CE</td>
                                    <td>320</td>
                                    <td>220</td>
                                    <td>180</td>
                                    <td>500</td>
                                    <td>recommended to reduce 55% at 300 , stop loss hit</td>
                                    <td>-4500</td>
                                </tr>
                                <tr>
                                    <td height="21">22 Jun 22</td>
                                    <td>BUY JUNE BANK NIFTY 32600 CE</td>
                                    <td>350-365</td>
                                    <td>250</td>
                                    <td>165</td>
                                    <td>565/700</td>
                                    <td>low 357 recommended to book at 423( multiple times it came at buying level)</td>
                                    <td>1450</td>
                                </tr>
                                <tr>
                                    <td height="21">23 Jun 22</td>
                                    <td>BUY 30 JUNE BANK NIFTY 33000 CE</td>
                                    <td>450-470</td>
                                    <td>370</td>
                                    <td>270</td>
                                    <td>670/750</td>
                                    <td>low 301 high 575 ,average was 420 , recommended to book at 575</td>
                                    <td>3875</td>
                                </tr>
                                <tr>
                                    <td height="21">24 Jun 22</td>
                                    <td>BUY 30 JUNE BANK NIFTY 33600 CE</td>
                                    <td>350-360</td>
                                    <td>250</td>
                                    <td>150</td>
                                    <td>550/650</td>
                                    <td>recommended to book at 468</td>
                                    <td>2700</td>
                                </tr>
                                <tr>
                                    <td height="21">27 Jun 22</td>
                                    <td>BUY 30 JUNE BANK NIFTY 33800 CE</td>
                                    <td>400-410</td>
                                    <td>300</td>
                                    <td>200</td>
                                    <td>600/700</td>
                                    <td>recommended to book at447</td>
                                    <td bgcolor="#FFFFFF">925</td>
                                </tr>
                                <tr>
                                    <td height="21">28 June 22</td>
                                    <td>BUY 30 JUNE BANK NIFTY 33500 CE</td>
                                    <td>290-300</td>
                                    <td>200</td>
                                    <td>120</td>
                                    <td>480/600</td>
                                    <td>low 311 recommended to buy at 311, recommeended to book full at 378, booked 3 times
                                    </td>
                                    <td>1950</td>
                                </tr>
                                <tr>
                                    <td height="21">29 June -22</td>
                                    <td>BUY 30 JUNE NIFTY 15600 CE</td>
                                    <td>150</td>
                                    <td>100</td>
                                    <td>70</td>
                                    <td>230/275</td>
                                    <td>NOT EXECUTED</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">30 June -22</td>
                                    <td>buy 7 JUNE NIFTY 15600 CE</td>
                                    <td>150</td>
                                    <td>100</td>
                                    <td>70</td>
                                    <td>230/275</td>
                                    <td>after average of 162 , achieved 238 , first target done</td>
                                    <td>7600</td>
                                </tr>
                                <tr>
                                    <td bgcolor="#93C47D"><strong>TOTAL PROFIT (ASSUMING 1 LOT)</strong></td>
                                    <td bgcolor="#93C47D"><strong>19925</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end of june 22 -->

            <div class="row mt-5">
                <div class="col-md-12">
                    <h4>MAY </h4>
                    <div class="table-data mt-md-5 table-responsive">
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                    <th>DATE</th>
                                    <th>TRADE GIVEN</th>
                                    <th>AT</th>
                                    <th>AVERAGE AT</th>
                                    <th>STOP LOSS</th>
                                    <th>TAREGET</th>
                                    <th>ACHIEVED</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td height="21">4 May 22</td>
                                    <td>BUY 12 MAY NIFTY 16900 CE</td>
                                    <td>250-260</td>
                                    <td>190</td>
                                    <td>140</td>
                                    <td>380/450</td>
                                    <td>low 263.95 around mentioned buying level recommended to book at 280</td>
                                    <td>800</td>
                                </tr>
                                <tr>
                                    <td height="21">5 May 22</td>
                                    <td>BUY 12 MAY NIFTY 16800 CE</td>
                                    <td>200-210</td>
                                    <td>160</td>
                                    <td>130</td>
                                    <td>290/340</td>
                                    <td>low 208 recommended to book at 248</td>
                                    <td>1900</td>
                                </tr>
                                <tr>
                                    <td height="21">6 May 22</td>
                                    <td>BUY 12 MAY BANK NIFTY 34600 PE</td>
                                    <td>450</td>
                                    <td>350</td>
                                    <td>250</td>
                                    <td>650/750</td>
                                    <td>low 430 recommened to boo at 553</td>
                                    <td>2575</td>
                                </tr>
                                <tr>
                                    <td height="21">9 May 22</td>
                                    <td>BUY 12 MAY NIFTY 16100 CE</td>
                                    <td>180</td>
                                    <td>120</td>
                                    <td>100</td>
                                    <td>240/280</td>
                                    <td>high made 306</td>
                                    <td>6300</td>
                                </tr>
                                <tr>
                                    <td height="21">10 May 22</td>
                                    <td>BUY 12 MAY BANK NIFTY 34200 CE</td>
                                    <td>280-300</td>
                                    <td>150</td>
                                    <td>100</td>
                                    <td>550/700</td>
                                    <td bgcolor="#FFFF00">not executed</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">11 May 22</td>
                                    <td>BUY 19 MAY BANK NIFTY 34200 CE</td>
                                    <td>550</td>
                                    <td>450</td>
                                    <td>350</td>
                                    <td>750/850</td>
                                    <td>high 800 (recommended to book at 800)</td>
                                    <td>6250</td>
                                </tr>
                                <tr>
                                    <td height="21">12 May 22</td>
                                    <td>BUY 30 JUNE NIFTY 16500 CE</td>
                                    <td>245</td>
                                    <td>150</td>
                                    <td>(AS PER RISK APPETITE)</td>
                                    <td>500/650</td>
                                    <td>stop loss hit (recommended to boo at 130)</td>
                                    <td>-5750</td>
                                </tr>
                                <tr>
                                    <td height="21">13 May 22</td>
                                    <td>BUY 19 MAY NIFTY 15800 CE</td>
                                    <td>250-260</td>
                                    <td>160</td>
                                    <td>130</td>
                                    <td>390/450</td>
                                    <td>not executed</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">16 May 22</td>
                                    <td>BUY 19 MAY NIFTY 15800 CE</td>
                                    <td>200-215</td>
                                    <td>160</td>
                                    <td>120</td>
                                    <td>300/350</td>
                                    <td>low 141 average became 187.5 recoomended to book at 208</td>
                                    <td>2000</td>
                                </tr>
                                <tr>
                                    <td height="21">17 May 22</td>
                                    <td>BUY 19 MAY BANK NIFTY 34300</td>
                                    <td>250-270</td>
                                    <td>150</td>
                                    <td>100</td>
                                    <td>500/720</td>
                                    <td>low 260 high 331</td>
                                    <td>1525</td>
                                </tr>
                                <tr>
                                    <td height="21">18 May 22</td>
                                    <td>NO INDEX TRADE POSTED</td>
                                    <td>NO INDEX TRADE POSTED</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">19 May 22</td>
                                    <td>BUY 26 MAY NIFTY 15800 CE</td>
                                    <td>260</td>
                                    <td>220</td>
                                    <td>180</td>
                                    <td>340/400</td>
                                    <td>low 179 recommended to book at 434 next day</td>
                                    <td>8700</td>
                                </tr>
                                <tr>
                                    <td height="21">20 May 22</td>
                                    <td>BUY 26 MAY NIFTY 16000 CE</td>
                                    <td>210-220</td>
                                    <td>160</td>
                                    <td>100</td>
                                    <td>350/400</td>
                                    <td>not executed</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">20 May 22</td>
                                    <td>BUY 26 MAY NIFTY 16100 CE</td>
                                    <td>235</td>
                                    <td>195</td>
                                    <td>180</td>
                                    <td>320/360</td>
                                    <td>recommended to book at 289</td>
                                    <td>2700</td>
                                </tr>
                                <tr>
                                    <td height="21">23 May 22</td>
                                    <td>BUY 26 MAY NIFTY 16150 CE</td>
                                    <td>200-210</td>
                                    <td>130</td>
                                    <td>100</td>
                                    <td>320/350</td>
                                    <td>not executed</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">24 May 22</td>
                                    <td>BUY 02 JUNE NIFTY 16000 CE</td>
                                    <td>290-300</td>
                                    <td>240</td>
                                    <td>200</td>
                                    <td>420/500</td>
                                    <td>low 312 recommended to book at 373</td>
                                    <td>3650</td>
                                </tr>
                                <tr>
                                    <td height="21">25 May 22</td>
                                    <td>BUY 02 JUNE BANK NIFTY 34500 CE</td>
                                    <td>600-620</td>
                                    <td>500</td>
                                    <td>400</td>
                                    <td>800/920</td>
                                    <td>recommended to book At 674</td>
                                    <td>1350</td>
                                </tr>
                                <tr>
                                    <td height="21">26 May 22</td>
                                    <td>BUY 02 JUNE BANK NIFTY 34400 CE</td>
                                    <td>540-550</td>
                                    <td>450</td>
                                    <td>350</td>
                                    <td>750/850</td>
                                    <td>Hgh made 807 , First target done</td>
                                    <td>6425</td>
                                </tr>
                                <tr>
                                    <td height="21">27 May 22</td>
                                    <td>BUY 02 JUNE NIFTY 16200 CE</td>
                                    <td>180</td>
                                    <td>130</td>
                                    <td>110</td>
                                    <td>250/280</td>
                                    <td>not executed</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">30 May 22</td>
                                    <td>BUY 02 JUNE BANK NIFTY 35700 CE</td>
                                    <td>430</td>
                                    <td>340</td>
                                    <td>250</td>
                                    <td>610/700</td>
                                    <td>recommended to 484</td>
                                    <td>1350</td>
                                </tr>
                                <tr>
                                    <td height="21">31 May 22</td>
                                    <td>BUY 02 JUNE BANK NIFTY 35500 CE</td>
                                    <td>360-375</td>
                                    <td>275</td>
                                    <td>180</td>
                                    <td>575/650</td>
                                    <td>recommended to book at 494</td>
                                    <td>2975</td>
                                </tr>
                                <tr>
                                    <td bgcolor="#93C47D"><strong>TOTAL PROFIT IN MAY (ASSUMING 1 LOT)</strong></td>
                                    <td bgcolor="#93C47D"><strong>42750</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end of may 22 -->

            <div class="row mt-5">
                <div class="col-md-12">
                    <h4>MARCH </h4>
                    <div class="table-data mt-md-5 table-responsive">
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                    <th>DATE</th>
                                    <th>TRADE GIVEN</th>
                                    <th>AT</th>
                                    <th>AVERAGE AT</th>
                                    <th>STOP LOSS</th>
                                    <th>TAREGET</th>
                                    <th>ACHIEVED</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td height="21">2 Mar 22</td>
                                    <td>BUY 10 MARCH NIFTY 16500 CE</td>
                                    <td>390-415</td>
                                    <td>340</td>
                                    <td>320</td>
                                    <td>440/470/550</td>
                                    <td>low 410 high 442,first target done</td>
                                    <td>1250</td>
                                    <td>20750</td>
                                </tr>
                                <tr>
                                    <td bgcolor="#FFFFFF" height="21">3 Mar 22</td>
                                    <td bgcolor="#FFFFFF">BUY 10 MARCH NIFTY 16550 CE</td>
                                    <td bgcolor="#FFFFFF">310-325</td>
                                    <td bgcolor="#FFFFFF">285</td>
                                    <td bgcolor="#FFFFFF">240</td>
                                    <td bgcolor="#FFFFFF">350/380/440</td>
                                    <td bgcolor="#FFFFFF">stop loss hit</td>
                                    <td bgcolor="#FFFFFF">-4250</td>
                                    <td bgcolor="#FFFFFF">16250</td>
                                </tr>
                                <tr>
                                    <td height="21">4 Mar 22</td>
                                    <td>BUY 10 MARCH BANK NIFTY 34500 PE</td>
                                    <td>6810-720</td>
                                    <td>600</td>
                                    <td>500</td>
                                    <td>790/900</td>
                                    <td>high 790 first taregt done</td>
                                    <td>1750</td>
                                    <td>18000</td>
                                </tr>
                                <tr>
                                    <td height="21">07/Mar</td>
                                    <td>BUY 10 MARCH NIFTY 16000 PE</td>
                                    <td>240-255</td>
                                    <td>200</td>
                                    <td>170</td>
                                    <td>310/370</td>
                                    <td>recommended to revise sl at 310 after 1st taregt ,booked at 422</td>
                                    <td>8350</td>
                                    <td>12750</td>
                                </tr>
                                <tr>
                                    <td height="21">8 Mar 22</td>
                                    <td>BUY 10 MARCH NIFTY 32500 CE</td>
                                    <td>550-565</td>
                                    <td>450</td>
                                    <td>340</td>
                                    <td>750/850</td>
                                    <td>recommended to book at 642,high 756,at first target</td>
                                    <td>1925</td>
                                    <td>14125</td>
                                </tr>
                                <tr>
                                    <td height="21">9 Mar 22</td>
                                    <td>BUY 10 MARCH BANK NIFTY 33000CE</td>
                                    <td>480-500</td>
                                    <td>400</td>
                                    <td>300</td>
                                    <td>680/800</td>
                                    <td>high 813 at final target,recommended to book at 675</td>
                                    <td>4375</td>
                                    <td>12500</td>
                                </tr>
                                <tr>
                                    <td height="21">10 Mar 22</td>
                                    <td>BUY 17 MARCH NIFTY 16600 CE</td>
                                    <td>240-220</td>
                                    <td>190</td>
                                    <td>170</td>
                                    <td>300/340</td>
                                    <td>recommended to book at 269</td>
                                    <td>1450</td>
                                    <td>12000</td>
                                </tr>
                                <tr>
                                    <td height="21">11 Mar 22</td>
                                    <td>BUY 17 MARCH NIFTY 16600 CE</td>
                                    <td>240-220</td>
                                    <td>190</td>
                                    <td>170</td>
                                    <td>300/340</td>
                                    <td>low 215 , recommended to book at 255</td>
                                    <td>750</td>
                                    <td>12000</td>
                                </tr>
                                <tr>
                                    <td height="21">14 Mar 22</td>
                                    <td>BUY 17 MARCH NIFTY 16600 CE</td>
                                    <td>180-190</td>
                                    <td>140</td>
                                    <td>130</td>
                                    <td>250/320</td>
                                    <td>not executed</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td height="21">15 Mar 22</td>
                                    <td>BUY 17 MARCH BANK NIFTY 35500 PE</td>
                                    <td>490-510</td>
                                    <td>400</td>
                                    <td>300</td>
                                    <td>710/900</td>
                                    <td>all targets done. recommended to book at 920,</td>
                                    <td>10250</td>
                                    <td>12750</td>
                                </tr>
                                <tr>
                                    <td height="21">16 Mar 22</td>
                                    <td>BUY 24 MARCH NIFTY 16800 CE</td>
                                    <td>310-320</td>
                                    <td>260</td>
                                    <td>230</td>
                                    <td>410/500</td>
                                    <td>recommended to book at 386</td>
                                    <td>3300</td>
                                    <td>16000</td>
                                </tr>
                                <tr>
                                    <td height="21">17 Mar 22</td>
                                    <td>BUY 24 MARCH BANK NIFTY 36400 CE</td>
                                    <td>580-600</td>
                                    <td>500</td>
                                    <td>400</td>
                                    <td>800/1000</td>
                                    <td>recommended to buy at 609 and booked at 662</td>
                                    <td>1550</td>
                                    <td>15000</td>
                                </tr>
                                <tr>
                                    <td height="21">21 Mar 22</td>
                                    <td>BUY 24 MARCH BANK NIFTY 36000 CE</td>
                                    <td>550-565</td>
                                    <td>450</td>
                                    <td>350</td>
                                    <td>780/1020</td>
                                    <td>recommended to buy at 570 high 600,again low 473 and exit at cost</td>
                                    <td>1750</td>
                                    <td>14250</td>
                                </tr>
                                <tr>
                                    <td height="21">22 Mar 22</td>
                                    <td>BUY 24 MARCH BANK NIFTY 35600 PE</td>
                                    <td>380-400</td>
                                    <td>280</td>
                                    <td>220</td>
                                    <td>580/700</td>
                                    <td>recommended to book at 543</td>
                                    <td>3575</td>
                                    <td>10000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end of march 22 -->

            <div class="row mt-5">
                <div class="col-md-12">
                    <h4>FABRUARY </h4>
                    <div class="table-data mt-md-5 table-responsive">
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                    <th>DATE</th>
                                    <th>TRADE GIVEN</th>
                                    <th>AT</th>
                                    <th>AVERAGE AT</th>
                                    <th>STOP LOSS</th>
                                    <th>TAREGET</th>
                                    <th>ACHIEVED</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td height="21">1 Feb 22</td>
                                    <td>31st jan trade continued</td>
                                    <td>240-255</td>
                                    <td>190</td>
                                    <td>160</td>
                                    <td>275/300/320/350+</td>
                                    <td>closed at 350</td>
                                </tr>
                                <tr>
                                    <td height="21">2 Feb 22</td>
                                    <td>buy bank nifty 39000 ce 3rd feb</td>
                                    <td>250-270</td>
                                    <td>200</td>
                                    <td>165</td>
                                    <td>350/340/370/400+</td>
                                    <td>low around buying level 280 high 400</td>
                                </tr>
                                <tr>
                                    <td height="21">3 Feb 22</td>
                                    <td>buy bank nifty 39300 ce 1oth feb</td>
                                    <td>450-470</td>
                                    <td>400</td>
                                    <td>350</td>
                                    <td>500/530/600</td>
                                    <td>not executed</td>
                                </tr>
                                <tr>
                                    <td height="21">4 Feb 22</td>
                                    <td>buy nifty 17450 ce 10th feb</td>
                                    <td>200-210</td>
                                    <td>160</td>
                                    <td>140</td>
                                    <td>235/250/270/300</td>
                                    <td>low 197 ,first taregt done 235</td>
                                </tr>
                                <tr>
                                    <td height="21">7 Feb 22</td>
                                    <td>buy bank nifty 38500 ce 10th feb</td>
                                    <td>380-410</td>
                                    <td>225</td>
                                    <td>200</td>
                                    <td>450/480/510/550</td>
                                    <td>low 423 high 467</td>
                                </tr>
                                <tr>
                                    <td height="21">8 Feb 22</td>
                                    <td>BUY 10TH FEB NIFTY 17300 PE</td>
                                    <td>120-130</td>
                                    <td>90</td>
                                    <td>70</td>
                                    <td>150/170/200/250</td>
                                    <td>not executed</td>
                                </tr>
                                <tr>
                                    <td height="21">8 Feb 22</td>
                                    <td>BUY 10TH FEB NIFTY 17000 CE</td>
                                    <td>140-150</td>
                                    <td>90</td>
                                    <td>70</td>
                                    <td>170/190/210/240</td>
                                    <td>high 212 third targer done</td>
                                </tr>
                                <tr>
                                    <td height="21">9 Feb 22</td>
                                    <td>BUY 17TH FEB NIFTY 17300 CE</td>
                                    <td>200-210</td>
                                    <td>165</td>
                                    <td>140</td>
                                    <td>240/260/300+</td>
                                    <td>low 215.50 around buying level high 260</td>
                                </tr>
                                <tr>
                                    <td height="21">10 Feb 22</td>
                                    <td>BUY 17TH FEB BANK NIFTY 38800 PE</td>
                                    <td>400-425</td>
                                    <td>300</td>
                                    <td>275</td>
                                    <td>460/500/550+</td>
                                    <td>low 427 ( recommended price) high 509 , second target done</td>
                                </tr>
                                <tr>
                                    <td height="21">11 Feb 22</td>
                                    <td>BUY 17TH FEB NIFTY 17300 CE</td>
                                    <td>170-175</td>
                                    <td>130</td>
                                    <td>100</td>
                                    <td>200/240/270+</td>
                                    <td>first target done</td>
                                </tr>
                                <tr>
                                    <td height="21">14 Feb 22</td>
                                    <td>BUY 17TH FEB NIFTY 16900 CE</td>
                                    <td>220-230</td>
                                    <td>180</td>
                                    <td>160</td>
                                    <td>255/280/350</td>
                                    <td>low 224 high 282 second taregt done</td>
                                </tr>
                                <tr>
                                    <td height="21">15 Feb 22</td>
                                    <td>BUY 24TH FEB NIFTY 17000 CE</td>
                                    <td>260-270</td>
                                    <td>230</td>
                                    <td>200</td>
                                    <td>300/320/360+</td>
                                    <td>low 269.55 , all targets done with revised stop loss at cost</td>
                                </tr>
                                <tr>
                                    <td height="21">16 Feb 22</td>
                                    <td>BUY 24TH FEB NIFTY 17200 CE</td>
                                    <td>230-240</td>
                                    <td>190</td>
                                    <td>160</td>
                                    <td>265/300/350</td>
                                    <td>not executed</td>
                                </tr>
                                <tr>
                                    <td height="21">17 Feb 22</td>
                                    <td>BUY 24TH FEB NIFTY 17200 CE</td>
                                    <td>230-240</td>
                                    <td>190</td>
                                    <td>165</td>
                                    <td>265/300/350</td>
                                    <td>not executed</td>
                                </tr>
                                <tr>
                                    <td height="21">18 Feb 22</td>
                                    <td>BUY 24TH FEB NIFTY 17200 CE</td>
                                    <td>230-240</td>
                                    <td>190</td>
                                    <td>165</td>
                                    <td>265/300/350</td>
                                    <td>high 303.25 second target recoomended to book full</td>
                                </tr>
                                <tr>
                                    <td height="21">21 Feb 22</td>
                                    <td>BUY 24TH FEB NIFTY 17200 CE</td>
                                    <td>150-170</td>
                                    <td>100</td>
                                    <td>80</td>
                                    <td>205/230/300</td>
                                    <td>recommended to exit at cost ,</td>
                                </tr>
                                <tr>
                                    <td height="21">21 Feb 22</td>
                                    <td>BUY 24TH FEB NIFTY 17300 CE</td>
                                    <td>140-150</td>
                                    <td>120</td>
                                    <td>80</td>
                                    <td>175/200/250</td>
                                    <td>first taregt done</td>
                                </tr>
                                <tr>
                                    <td height="21">22 Feb 22</td>
                                    <td>BUY 24TH FEB NIFTY 16900 PE</td>
                                    <td>140-150</td>
                                    <td>110</td>
                                    <td>80</td>
                                    <td>180/200/250</td>
                                    <td>after average cost becomes 125,recommended to book at 144</td>
                                </tr>
                                <tr>
                                    <td height="21">23 Feb 22</td>
                                    <td>BUY 24TH FEB BANK NIFTY 37800 PE</td>
                                    <td>280-300</td>
                                    <td>200</td>
                                    <td>150</td>
                                    <td>340/400/500</td>
                                    <td>425 second target done</td>
                                </tr>
                                <tr>
                                    <td height="21">24 Feb 22</td>
                                    <td>BUY 03 MARCH NIFTY 16500 PE</td>
                                    <td>290-300</td>
                                    <td>240</td>
                                    <td>150</td>
                                    <td>330/400/450</td>
                                    <td>high 421 second target done. Apprx 100 points gain</td>
                                </tr>
                                <tr>
                                    <td height="21">25 Feb 22</td>
                                    <td>BUY 03 MARCH NIFTY 16800 PE</td>
                                    <td>250-260</td>
                                    <td>200</td>
                                    <td>180</td>
                                    <td>285/300/380</td>
                                    <td>low 259.20, high 318</td>
                                </tr>
                                <tr>
                                    <td height="21">28 Feb 22</td>
                                    <td>BUY 03 MARCH NIFTY 16300 CE</td>
                                    <td>300-320</td>
                                    <td>200</td>
                                    <td>180</td>
                                    <td>345/400/450</td>
                                    <td>reecommended to book full at 400( 100 points gain)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end of fabrury 22 -->

            <div class="row mt-5">
                <div class="col-md-12">
                    <h4>JANUARY </h4>
                    <div class="table-data mt-md-5 table-responsive">
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                    <th>DATE</th>
                                    <th>TRADE GIVEN</th>
                                    <th>AT</th>
                                    <th>AVERAGE AT</th>
                                    <th>STOP LOSS</th>
                                    <th>TAREGET</th>
                                    <th>ACHIEVED</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td height="21">3 Jan 22</td>
                                    <td>buy nifty 17500 ce 6th jan</td>
                                    <td>115-125</td>
                                    <td>85</td>
                                    <td>65</td>
                                    <td>150/170/200+</td>
                                    <td>not executed</td>
                                </tr>
                                <tr>
                                    <td height="21">4 Jan 22</td>
                                    <td>buy bank nifty 36500 ce 6th jan</td>
                                    <td>250-270</td>
                                    <td>190</td>
                                    <td>170</td>
                                    <td>310/3410/370/400+</td>
                                    <td>high 440 , all targets done</td>
                                </tr>
                                <tr>
                                    <td height="21">5 Jan 22</td>
                                    <td>buy bank nifty 36700 ce 6th jan</td>
                                    <td>350-370</td>
                                    <td>270</td>
                                    <td>240</td>
                                    <td>410/450/500+</td>
                                    <td>right direction , but didn&rsquo;t come at buying level,low 380high 1145</td>
                                </tr>
                                <tr>
                                    <td height="21">6 Jan 22</td>
                                    <td>buy bank nifty 37100 ce 13 jan</td>
                                    <td>475-500</td>
                                    <td>350</td>
                                    <td>350</td>
                                    <td>550/575/600/650/700</td>
                                    <td>908 high , all targets done , more than 400 points gain</td>
                                </tr>
                                <tr>
                                    <td height="21">7 Jan 22</td>
                                    <td>buy bank nifty 38300 pe 13 jan</td>
                                    <td>440-460</td>
                                    <td>300</td>
                                    <td>280</td>
                                    <td>500/530/600/650+</td>
                                    <td>not executed</td>
                                </tr>
                                <tr>
                                    <td height="21">7 Jan 22</td>
                                    <td>buy bank nifty 37900 ce</td>
                                    <td>410-430</td>
                                    <td>300</td>
                                    <td>260</td>
                                    <td>470/500/540/575+</td>
                                    <td>high 591 , all targets done</td>
                                </tr>
                                <tr>
                                    <td height="21">10 Jan 22</td>
                                    <td>buy bank nifty 37900 ce</td>
                                    <td>380-415</td>
                                    <td>300</td>
                                    <td>245</td>
                                    <td>465/500/550/575/600</td>
                                    <td>627, all targets done, more than 200 points gain</td>
                                </tr>
                                <tr>
                                    <td height="21">11 Jan 22</td>
                                    <td>buy bank nifty 38300 ce 13th jan</td>
                                    <td>300-320</td>
                                    <td>240</td>
                                    <td>200</td>
                                    <td>370/390/425/450/470+</td>
                                    <td>average cost 280, high 395, 2ND target done</td>
                                </tr>
                                <tr>
                                    <td height="21">12 Jan 22</td>
                                    <td>buy bank nifty 38700 ce 20 th jan</td>
                                    <td>550-565</td>
                                    <td>440</td>
                                    <td>380</td>
                                    <td>600/650/700+</td>
                                    <td>low 564.40 high 600 first target done</td>
                                </tr>
                                <tr>
                                    <td height="21">13 Jan 22</td>
                                    <td>buy nifty 18150 ce 20th jan</td>
                                    <td>170-180</td>
                                    <td>130</td>
                                    <td>110</td>
                                    <td>200/215/230/250+</td>
                                    <td>low 175.60 high 219, recommended to book profit at 195</td>
                                </tr>
                                <tr>
                                    <td height="21">14 Jan 22</td>
                                    <td>trade not given</td>
                                    <td>trade not given</td>
                                </tr>
                                <tr>
                                    <td height="21">17 Jan 22</td>
                                    <td>buy bank nifty 38200 ce 20th jan</td>
                                    <td>375-400</td>
                                    <td>300</td>
                                    <td>250</td>
                                    <td>450/475/525/600</td>
                                    <td>low 395 high 475 second target done</td>
                                </tr>
                                <tr>
                                    <td height="21">18 Jan 22</td>
                                    <td>buy bank nifty 38100 ce 20 jan</td>
                                    <td>325-335</td>
                                    <td>215</td>
                                    <td>180</td>
                                    <td>375/400/450/500+</td>
                                    <td>low 305 high 372 near first target</td>
                                </tr>
                                <tr>
                                    <td height="21">19 Jan 22</td>
                                    <td>buy bank nifty 37900 ce 20th jan</td>
                                    <td>235-250</td>
                                    <td>140</td>
                                    <td>110</td>
                                    <td>285/300/350/400+</td>
                                    <td>low 193.50 high 286.20 first target done</td>
                                </tr>
                                <tr>
                                    <td height="21">20 Jan 22</td>
                                    <td>buy bank nifty 37500 ce 27th jan</td>
                                    <td>540-555</td>
                                    <td>400</td>
                                    <td>350</td>
                                    <td>585/600/650+</td>
                                    <td>not executed</td>
                                </tr>
                                <tr>
                                    <td height="21">21 Jan 22</td>
                                    <td>buy nifty 17700 pe 27th jan</td>
                                    <td>150-160</td>
                                    <td>110</td>
                                    <td>85</td>
                                    <td>180/200/215/230/250+</td>
                                    <td>low 140 high 273 all targets done</td>
                                </tr>
                                <tr>
                                    <td height="21">24 Jan 22</td>
                                    <td>buy bank nifty 37400 pe 27th jan</td>
                                    <td>330-340</td>
                                    <td>275</td>
                                    <td>220</td>
                                    <td>375/400/420/450+</td>
                                    <td>not executed</td>
                                </tr>
                                <tr>
                                    <td height="21">25 Jan 22</td>
                                    <td>buy bank nifty 37000 pe 27th jan</td>
                                    <td>500-520</td>
                                    <td>350</td>
                                    <td>275</td>
                                    <td>550/600//650/700+</td>
                                    <td>low 487 high 570 first target done</td>
                                </tr>
                                <tr>
                                    <td bgcolor="#FFFFFF" height="21">27 Jan 22</td>
                                    <td bgcolor="#FFFFFF">buy bak nifty 37400 pe 27th jan</td>
                                    <td bgcolor="#FFFFFF">180-200</td>
                                    <td bgcolor="#FFFFFF">140</td>
                                    <td bgcolor="#FFFFFF">120</td>
                                    <td bgcolor="#FFFFFF">240/270/300/350+</td>
                                    <td bgcolor="#FFFFFF">stop loss hit(recommended to trade with low quantity and
                                        mentioned
                                        higher risk</td>
                                </tr>
                                <tr>
                                    <td height="21">28 Jan 22</td>
                                    <td>buy nifty 17300 ce</td>
                                    <td>230-240</td>
                                    <td>185</td>
                                    <td>140</td>
                                    <td>260/280/300+</td>
                                    <td>average cost become 210 recommeded to exit at 243</td>
                                </tr>
                                <tr>
                                    <td height="21">31 Jan 22</td>
                                    <td>buy nifty 17300 ce 3rd feb</td>
                                    <td>240-255</td>
                                    <td>190</td>
                                    <td>160</td>
                                    <td>275/300/320/350+</td>
                                    <td>low 252 high 279 first target done..</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end of january 22 -->

            <div class="row mt-5">
                <div class="col-md-12">
                    <h4>DECEMBER </h4>
                    <div class="table-data mt-md-5 table-responsive">
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                    <th>DATE</th>
                                    <th>TRADE GIVEN</th>
                                    <th>AT</th>
                                    <th>AVERAGE AT</th>
                                    <th>STOP LOSS</th>
                                    <th>TAREGET</th>
                                    <th>ACHIEVED</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td height="21">1 Dec 21</td>
                                    <td>buy bank nifty 36000 ce 9th dec</td>
                                    <td>600-615</td>
                                    <td>500</td>
                                    <td>400</td>
                                    <td>650/690/725/775+</td>
                                    <td>high 796, all targets done</td>
                                </tr>
                                <tr>
                                    <td height="21">2 Dec 21</td>
                                    <td>buy bank nifty 36400 ce 9th dec</td>
                                    <td>500-520</td>
                                    <td>400</td>
                                    <td>550/590+</td>
                                    <td>high 555 , average cost was 460,100 points gain</td>
                                </tr>
                                <tr>
                                    <td height="21">3 Dec 21</td>
                                    <td>buy bank nifty 36700 ce 9th dec</td>
                                    <td>350-360</td>
                                    <td>300</td>
                                    <td>265</td>
                                    <td>400/450/475+</td>
                                    <td>not executed</td>
                                </tr>
                                <tr>
                                    <td height="21">6 Dec 21</td>
                                    <td>buy bank nifty 35900 ce 9th dec</td>
                                    <td>380-390</td>
                                    <td>200</td>
                                    <td>170</td>
                                    <td>425/460/500/600+</td>
                                    <td>high 635 all targets done ,, 220+ ponts gain</td>
                                </tr>
                                <tr>
                                    <td height="21">7 Dec 21</td>
                                    <td>buy nifty 17100 ce</td>
                                    <td>130-140</td>
                                    <td>90</td>
                                    <td>70</td>
                                    <td>150/175/190+</td>
                                    <td>190+ all targets done</td>
                                </tr>
                                <tr>
                                    <td height="21">8 Dec 21</td>
                                    <td>buy bank nifty 37100 ce 9th dec</td>
                                    <td>200-210</td>
                                    <td>120</td>
                                    <td>80</td>
                                    <td>240/275/300/350+</td>
                                    <td>high 372 all targets done</td>
                                </tr>
                                <tr>
                                    <td height="21">9 Dec 21</td>
                                    <td>buy bank nifty 36900 pe</td>
                                    <td>112</td>
                                    <td>70</td>
                                    <td>20</td>
                                    <td>140/180/220+</td>
                                    <td>notexecuted</td>
                                </tr>
                                <tr>
                                    <td height="21">10 Dec 21</td>
                                    <td>buy bank nifty 36900 ce</td>
                                    <td>390-400</td>
                                    <td>280</td>
                                    <td>200</td>
                                    <td>440/480/500/550+</td>
                                    <td>ltp 509 third target done</td>
                                </tr>
                                <tr>
                                    <td height="21">13 Dec 21</td>
                                    <td>buy nifty 17400 ce 16 dec</td>
                                    <td>135/140</td>
                                    <td>100</td>
                                    <td>75</td>
                                    <td>165/180/200/240+</td>
                                    <td>recommended to exit at cost</td>
                                </tr>
                                <tr>
                                    <td height="21">14 Dec 21</td>
                                    <td>buy bank nifty 36900 pe 16 dec</td>
                                    <td>350-360</td>
                                    <td>210-220</td>
                                    <td>170</td>
                                    <td>400/440/500+</td>
                                    <td>400, first target done</td>
                                </tr>
                                <tr>
                                    <td height="21">15 Dec 21</td>
                                    <td>buy bank nifty 36900 ce 16 dec</td>
                                    <td>250-265</td>
                                    <td>150</td>
                                    <td>120</td>
                                    <td>310/350/380/430+</td>
                                    <td>high 350, 2nd target done</td>
                                </tr>
                                <tr>
                                    <td height="21">16 Dec 21</td>
                                    <td>buy bank nifty 36600 ce 16 dec</td>
                                    <td>100</td>
                                    <td>50</td>
                                    <td>40</td>
                                    <td>140/180/230/250+</td>
                                    <td>184 , second target done</td>
                                </tr>
                                <tr>
                                    <td height="21">17 Dec 21</td>
                                    <td>buy bank nifty 35800 ce</td>
                                    <td>4250-430</td>
                                    <td>330-340</td>
                                    <td>270</td>
                                    <td>465/525/560/600+</td>
                                    <td>high 485</td>
                                </tr>
                                <tr>
                                    <td height="21">20 Dec 21</td>
                                    <td>buy bank nifty 35000 pe</td>
                                    <td>400-440</td>
                                    <td>300</td>
                                    <td>240</td>
                                    <td>500/550/600/650+</td>
                                    <td>not executed</td>
                                </tr>
                                <tr>
                                    <td height="21">21 Dec 21</td>
                                    <td>buy bank nifty 35200 pe 23dec</td>
                                    <td>320-340</td>
                                    <td>200</td>
                                    <td>175</td>
                                    <td>380/410/450/500+</td>
                                    <td>low 355 high 705 ,, again recommended to enter in trde at 410</td>
                                </tr>
                                <tr>
                                    <td height="21">22 Dec 21</td>
                                    <td>buy bank nifty 35100 pe 23 dec</td>
                                    <td>285-300</td>
                                    <td>200</td>
                                    <td>175</td>
                                    <td>350/425/475+</td>
                                    <td>480 , all targets done,</td>
                                </tr>
                                <tr>
                                    <td height="21">23 Dec 21</td>
                                    <td>buy bank nifty 35000 ce</td>
                                    <td>250-260</td>
                                    <td>180</td>
                                    <td>140</td>
                                    <td>300/330/350/400+</td>
                                    <td>high 406 all targets done</td>
                                </tr>
                                <tr>
                                    <td height="21">24 Dec 21</td>
                                    <td>buy bank nifty 34800 ce 30 dec</td>
                                    <td>350-365</td>
                                    <td>264</td>
                                    <td>240</td>
                                    <td>400/450/475/500+</td>
                                    <td>500 , all targets done</td>
                                </tr>
                                <tr>
                                    <td height="21">27 Dec 21</td>
                                    <td>buy bank nifty 34700 ce 30 dec</td>
                                    <td>400-420</td>
                                    <td>325</td>
                                    <td>175</td>
                                    <td>440/475/500/540+</td>
                                    <td>high 675, all targets done</td>
                                </tr>
                                <tr>
                                    <td height="21">28 Dec 21</td>
                                    <td>buy bank nifty 34800 ce 30 dec</td>
                                    <td>400-430</td>
                                    <td>270</td>
                                    <td>200</td>
                                    <td>470/500/550+</td>
                                    <td>not executed, low 454 high 585</td>
                                </tr>
                                <tr>
                                    <td height="21">29 Dec 21</td>
                                    <td>buy bank nifty 35100 ce 6th jan</td>
                                    <td>520-540</td>
                                    <td>440</td>
                                    <td>310</td>
                                    <td>590/650/670+</td>
                                    <td>low 526 high 600, first target done</td>
                                </tr>
                                <tr>
                                    <td height="21">30 Dec 21</td>
                                    <td>buy bank nifty 34700 ce 6th jan</td>
                                    <td>500-525</td>
                                    <td>400</td>
                                    <td>370</td>
                                    <td>565/600/626+</td>
                                    <td>notexecuted</td>
                                </tr>
                                <tr>
                                    <td height="21">31 Dec 21</td>
                                    <td>buy nifty 17300 ce</td>
                                    <td>145-150</td>
                                    <td>115</td>
                                    <td>90</td>
                                    <td>175/190/220+</td>
                                    <td>153.60 low high 180 recommended to buy 2-3 points up</td>
                                </tr>
                                <tr>
                                    <td bgcolor="#92D050"><em>NO STOP LOSS IN DECEMBER</em></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end of dec 21 -->



            <div class="row mt-5">
                <div class="col-md-12">
                    <h4>NOVEMBER </h4>
                    <div class="table-data mt-md-5 table-responsive">
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                    <th>DATE</th>
                                    <th>TRADE GIVEN</th>
                                    <th>AT</th>
                                    <th>AVERAGE AT</th>
                                    <th>STOP LOSS</th>
                                    <th>TAREGET</th>
                                    <th>ACHIEVED</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td height="21">1 Nov 21</td>
                                    <td>BUY BANK NIFTY 39500 CE</td>
                                    <td>250-270</td>
                                    <td>190</td>
                                    <td>130</td>
                                    <td>320/360/400/500</td>
                                    <td>502</td>
                                </tr>
                                <tr>
                                    <td height="21">2 Nov 21</td>
                                    <td>BUY NIFTY 17850 CE 3RD NOV</td>
                                    <td>100-110</td>
                                    <td>75-80</td>
                                    <td>50</td>
                                    <td>125/145/160/180+</td>
                                    <td>141 HIGH</td>
                                </tr>
                                <tr>
                                    <td height="21">8 Nov 21</td>
                                    <td>BUY BANK NIFTY 39400 CE</td>
                                    <td>310-330</td>
                                    <td>200</td>
                                    <td>160</td>
                                    <td>350/400/450/500+</td>
                                    <td>441 HIGH</td>
                                </tr>
                                <tr>
                                    <td height="21">10 Nov 21</td>
                                    <td>BUY 39000 CE 11TH NOV</td>
                                    <td>260-270</td>
                                    <td>150-160</td>
                                    <td>90</td>
                                    <td>340/400/500/650</td>
                                    <td>349</td>
                                </tr>
                                <tr>
                                    <td height="21">11 Nov 21</td>
                                    <td>BUY 17800 CE 18 NOV</td>
                                    <td>170-175</td>
                                    <td>120</td>
                                    <td>100</td>
                                    <td>200/220/250+</td>
                                    <td>204</td>
                                </tr>
                                <tr>
                                    <td height="21">15 Nov 21</td>
                                    <td>BUY NIFTY 18100 CE 18TH NOV</td>
                                    <td>120-125</td>
                                    <td>85</td>
                                    <td>60</td>
                                    <td>150/175/190+</td>
                                    <td>NOT EXECUTED</td>
                                </tr>
                                <tr>
                                    <td height="21">16 Nov 21</td>
                                    <td>BUY NIFTY 18100 CE 18 NOV</td>
                                    <td>60-65</td>
                                    <td>30</td>
                                    <td>20</td>
                                    <td>100/135/150/180/200</td>
                                    <td>103</td>
                                </tr>
                                <tr>
                                    <td height="21">18 Nov 21</td>
                                    <td>BUY NIFTY 17750 CE 18 NOV</td>
                                    <td>50-60</td>
                                    <td>25</td>
                                    <td>15</td>
                                    <td>90/12/150</td>
                                    <td>AVERAGE BECAME 42 RECOMMENDED TO EXIT AT 72</td>
                                </tr>
                                <tr>
                                    <td height="21">18 Nov 21</td>
                                    <td>BUY 37700 CE 18 NOV</td>
                                    <td>180</td>
                                    <td>80</td>
                                    <td>OPEN</td>
                                    <td>380</td>
                                </tr>
                                <tr>
                                    <td height="21">22 Nov 21</td>
                                    <td>nifty 17800 ce 25 nov</td>
                                    <td>70-75</td>
                                    <td>50</td>
                                    <td>35</td>
                                    <td>125/180</td>
                                    <td>NOT EXECUTED</td>
                                </tr>
                                <tr>
                                    <td height="21">23 Nov 21</td>
                                    <td>buy bank nifty 37200 ce</td>
                                    <td>250-260</td>
                                    <td>200</td>
                                    <td>165</td>
                                    <td>300/335/370/400+</td>
                                    <td>435 high .. All targets done</td>
                                </tr>
                                <tr>
                                    <td height="21">24 no 21</td>
                                    <td>buy bank nifty 37200 ce</td>
                                    <td>290-300</td>
                                    <td>250</td>
                                    <td>200</td>
                                    <td>340/365/400+</td>
                                    <td>465 high all targets done</td>
                                </tr>
                                <tr>
                                    <td height="21">25 Nov 21</td>
                                    <td>buy bank nifty 37200 ce</td>
                                    <td>200-210</td>
                                    <td>140</td>
                                    <td>100</td>
                                    <td>250/300/350/400</td>
                                    <td>low 212 high 340 ,third taregst done</td>
                                </tr>
                                <tr>
                                    <td bgcolor="#FFFFFF" height="21">26 Nov 21</td>
                                    <td bgcolor="#FFFFFF">buy bank nifty 36500 ce 2 dec</td>
                                    <td bgcolor="#FFFFFF">430-440</td>
                                    <td bgcolor="#FFFFFF">350</td>
                                    <td bgcolor="#FFFFFF">300</td>
                                    <td bgcolor="#FFFFFF">500/550/600+</td>
                                    <td bgcolor="#FFFFFF">no update . &hellip; assume sl</td>
                                </tr>
                                <tr>
                                    <td height="21">29 Nov 21</td>
                                    <td>buy bank nifty 35900 pe 2nd dec</td>
                                    <td>350-400</td>
                                    <td>210</td>
                                    <td>180</td>
                                    <td>450/500/700+</td>
                                    <td>high 504 ,second target done</td>
                                </tr>
                                <tr>
                                    <td height="21">30 Nov 21</td>
                                    <td>buy bank nifty 36300 ce 2nd dec</td>
                                    <td>360-380</td>
                                    <td>280</td>
                                    <td>180</td>
                                    <td>430/470/500/550+</td>
                                    <td>NOT EXECUTED</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end of nov 21 -->


            <div class="row mt-5">
                <div class="col-md-12">
                    <h4>OCTOBER </h4>
                    <div class="table-data mt-md-5 table-responsive">
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                    <th>DATE</th>
                                    <th>TRADE GIVEN</th>
                                    <th>AT</th>
                                    <th>AVERAGE AT</th>
                                    <th>STOP LOSS</th>
                                    <th>TAREGET</th>
                                    <th>ACHIEVED</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td height="21">1 Oct 21</td>
                                    <td>BUY NIFTY 17400 CE 7TH OCT</td>
                                    <td>180-190</td>
                                    <td>140</td>
                                    <td>250/300</td>
                                    <td>LOW 180 260 HIGH</td>
                                </tr>
                                <tr>
                                    <td height="21">4 Oct 21</td>
                                    <td>BUY BANK NIFTY 37600 CE 7TH OCT</td>
                                    <td>270-280</td>
                                    <td>220</td>
                                    <td>185</td>
                                    <td>340/400/450+</td>
                                    <td>LOW 268 HIGH 339.76</td>
                                </tr>
                                <tr>
                                    <td bgcolor="#FFFFFF" height="21">6 Oct 21</td>
                                    <td bgcolor="#FFFFFF">BUY BANK NIFTY 38000 CE 7 OCT</td>
                                    <td bgcolor="#FFFFFF">160-170</td>
                                    <td bgcolor="#FFFFFF">100</td>
                                    <td bgcolor="#FFFFFF">220/260+</td>
                                    <td bgcolor="#FFFFFF">SL HIT</td>
                                </tr>
                                <tr>
                                    <td height="21">7 Oct 21</td>
                                    <td>BUY NIFTY 17800 CE</td>
                                    <td>260-265</td>
                                    <td>200</td>
                                    <td>300/330</td>
                                    <td>280</td>
                                </tr>
                                <tr>
                                    <td height="21">8 Oct 21</td>
                                    <td>BUY NIFTY 17800 CE 28 OCT</td>
                                    <td>250-255</td>
                                    <td>221</td>
                                    <td>160</td>
                                    <td>285/320+</td>
                                    <td>300 HIGH</td>
                                </tr>
                                <tr>
                                    <td height="21">11 Oct 21</td>
                                    <td>BUY BANK NIFTY 38200 CE 14 OCT</td>
                                    <td>240-250</td>
                                    <td>200</td>
                                    <td>150</td>
                                    <td>275/330</td>
                                    <td>NOT EXECUTED</td>
                                </tr>
                                <tr>
                                    <td height="21">12 Oct 21</td>
                                    <td>BUY BANK NIFTY 38300 CE 14TH OCT</td>
                                    <td>185-195</td>
                                    <td>140</td>
                                    <td>100</td>
                                    <td>240/280/320+</td>
                                    <td>LOW 192 HIGH 410</td>
                                </tr>
                                <tr>
                                    <td height="21">13 Oct 21</td>
                                    <td>BUY BANK NIFTY 38700 CE 14TH OCT</td>
                                    <td>200-210</td>
                                    <td>150</td>
                                    <td>110</td>
                                    <td>250/270+</td>
                                    <td>LOW 131 HIGH 212 AVERAGE COST 180</td>
                                </tr>
                                <tr>
                                    <td height="21">14 Oct 21</td>
                                    <td>BUY NIFTY 18200 CE 28 OCT</td>
                                    <td>230-235</td>
                                    <td>180</td>
                                    <td>135</td>
                                    <td>260/300/300+</td>
                                    <td>LOW 230 HIGH 265</td>
                                </tr>
                                <tr>
                                    <td height="21">18 Oct 21</td>
                                    <td>BUY BANK NIFTY 39600 CE 21 OCT</td>
                                    <td>420-430</td>
                                    <td>340</td>
                                    <td>260</td>
                                    <td>460/500/550+</td>
                                    <td>500</td>
                                </tr>
                                <tr>
                                    <td height="21">19 Oct 21</td>
                                    <td>BUY BANK NIFTY 39600 CE 21 OCT</td>
                                    <td>250-260</td>
                                    <td>200</td>
                                    <td>140</td>
                                    <td>320/450/500+</td>
                                    <td>454 HIGH</td>
                                </tr>
                                <tr>
                                    <td height="21">20 Oct 21</td>
                                    <td>BUY NIFTY 18300 CE 28 OCT</td>
                                    <td>200-210</td>
                                    <td>160</td>
                                    <td>110</td>
                                    <td>250/275/320+</td>
                                </tr>
                                <tr>
                                    <td height="21">21 Oct 21</td>
                                    <td>BUY NIFTY 18100 CE 28OCT</td>
                                    <td>210</td>
                                    <td>140</td>
                                    <td>120</td>
                                    <td>270/320/360</td>
                                    <td>RECOMMENDED TO EXIT AT 255</td>
                                </tr>
                                <tr>
                                    <td height="21">22 Oct 21</td>
                                    <td>BUY NIFTY 18100 CE 28 OCT</td>
                                    <td>170-175</td>
                                    <td>130</td>
                                    <td>110</td>
                                    <td>210/230/260+</td>
                                    <td>AVERAGE BECOME 153 RECOMMENDED TO EXIT AT 168</td>
                                </tr>
                                <tr>
                                    <td height="21">25 Oct 21</td>
                                    <td>BUY NIFTY 18000 CE</td>
                                    <td>175-185</td>
                                    <td>140</td>
                                    <td>100</td>
                                    <td>220/250/300+</td>
                                    <td>AVERAGE BECAME 163 HIGH 285 100 POINTS GAIN</td>
                                </tr>
                                <tr>
                                    <td height="21">26 Oct 21</td>
                                    <td>NUY BANK NIFTY 41000 CE</td>
                                    <td>280-290</td>
                                    <td>215-220</td>
                                    <td>155</td>
                                    <td>350/390/400+</td>
                                    <td>LOW 275 HIGH 548</td>
                                </tr>
                                <tr>
                                    <td height="21">27/Oct</td>
                                    <td>BUY BANK NIFTY 41200 CE</td>
                                    <td>240-250</td>
                                    <td>160</td>
                                    <td>100</td>
                                    <td>300/330/350/380+</td>
                                    <td>LOW 235 HIGH 280</td>
                                </tr>
                                <tr>
                                    <td bgcolor="#FFFFFF" height="21">28 Oct 21</td>
                                    <td bgcolor="#FFFFFF">BUY NIFTY 18100 CE 3RD NOV</td>
                                    <td bgcolor="#FFFFFF">160-170</td>
                                    <td bgcolor="#FFFFFF">125</td>
                                    <td bgcolor="#FFFFFF">90</td>
                                    <td bgcolor="#FFFFFF">200/260+</td>
                                    <td bgcolor="#FFFFFF">SL HIT</td>
                                </tr>
                                <tr>
                                    <td height="21">29 Oct 21</td>
                                    <td>BUY NIFTY 178100 CE 3RD NOV</td>
                                    <td>150-160</td>
                                    <td>120</td>
                                    <td>100</td>
                                    <td>185/200/225+</td>
                                    <td>RECOMMENDED TO EXIT AT COST</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end of oct 21 -->


            <div class="row mt-5">
                <div class="col-md-12">

                    <h4>SEPTEMBER</h4>
                    <div class="table-data mt-md-5 table-responsive">
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                    <th>DATE</th>
                                    <th>TRADE GIVEN</th>
                                    <th>AT</th>
                                    <th>AVERAGE AT</th>
                                    <th>STOP LOSS</th>
                                    <th>TAREGET</th>
                                    <th>ACHIEVED</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td height="20">7 Sep 21</td>
                                    <td>BUY NIFTY 17350 CE</td>
                                    <td>200-205</td>
                                    <td>170</td>
                                    <td>140</td>
                                    <td>250/270/290</td>
                                    <td>270</td>
                                </tr>
                                <tr>
                                    <td height="20">8 Sep 21</td>
                                    <td>NIFTY 17350 CE</td>
                                    <td>200-205</td>
                                    <td>160</td>
                                    <td>130</td>
                                    <td>260/280+</td>
                                    <td>NOT EXECUTED</td>
                                </tr>
                                <tr>
                                    <td height="20">13/Sep</td>
                                    <td>BUY 17250 CE 23 SEP</td>
                                    <td>160-165</td>
                                    <td>120</td>
                                    <td>100</td>
                                    <td>200+</td>
                                    <td>218</td>
                                </tr>
                                <tr>
                                    <td height="20">14 Sep 21</td>
                                    <td>BUY NIFTY 17400 PE 23 SEP</td>
                                    <td>110-115</td>
                                    <td>70</td>
                                    <td>140+</td>
                                    <td>131</td>
                                </tr>
                                <tr>
                                    <td height="20">15 Sep 21</td>
                                    <td>BUY BANKNIFTY 36500 CE 16 SEP</td>
                                    <td>240</td>
                                    <td>180</td>
                                    <td>160</td>
                                    <td>300/350+</td>
                                    <td>370</td>
                                </tr>
                                <tr>
                                    <td height="20">16 Sep 21</td>
                                    <td>BANK NIFTY 37100</td>
                                    <td>110</td>
                                    <td>30</td>
                                    <td>180/260</td>
                                    <td>218</td>
                                </tr>
                                <tr>
                                    <td height="20">20 Sep 21</td>
                                    <td>BUY BANK NIFTY 37600 PE 23 SEP</td>
                                    <td>320</td>
                                    <td>260</td>
                                    <td>380/450</td>
                                    <td>648</td>
                                </tr>
                                <tr>
                                    <td height="20">21 Sep 21</td>
                                    <td>BUY NIFTY 17400 CE 30 SEP</td>
                                    <td>180-190</td>
                                    <td>150</td>
                                    <td>130</td>
                                    <td>250/300</td>
                                    <td>NOT EXECUTED</td>
                                </tr>
                                <tr>
                                    <td height="20">22 Sep 21</td>
                                    <td>BUY NIFTY 17550 CE 30 SEP</td>
                                    <td>150-155</td>
                                    <td>120</td>
                                    <td>100</td>
                                    <td>180/200</td>
                                    <td>LOW 156 HIGH 176</td>
                                </tr>
                                <tr>
                                    <td height="20">23 Sep 21</td>
                                    <td>BUY NIFTY 17600 CE 30 SEP</td>
                                    <td>180</td>
                                    <td>140</td>
                                    <td>120</td>
                                    <td>240+</td>
                                    <td>NOT EXECUTED</td>
                                </tr>
                                <tr>
                                    <td height="20">24 Sep 21</td>
                                    <td>BUY NIFTY 17900 CE</td>
                                    <td>90-100</td>
                                    <td>50</td>
                                    <td>130/155</td>
                                    <td>LOW 90 HIGH 112</td>
                                </tr>
                                <tr>
                                    <td height="20">27 Sep 21</td>
                                    <td>BUY NIFTY 17800 CE 7 OCT</td>
                                    <td>200-210</td>
                                    <td>170</td>
                                    <td>145</td>
                                    <td>230/260/300</td>
                                    <td>NOT EXECUTED</td>
                                </tr>
                                <tr>
                                    <td height="20">28 Sep 21</td>
                                    <td>BUY BANKNIFTY 38100 PE 30 SEP</td>
                                    <td>300-320</td>
                                    <td>170</td>
                                    <td>330/360</td>
                                    <td>700</td>
                                </tr>
                                <tr>
                                    <td height="20">29 Sep 21</td>
                                    <td>BUY NIFTY 17650 CE 7TH OCT</td>
                                    <td>190-195</td>
                                    <td>150</td>
                                    <td>230/260/300</td>
                                    <td>259.9</td>
                                </tr>
                                <tr>
                                    <td height="20">30 Sep 21</td>
                                    <td>BUY NIFTY 17650 CE 7TH OCT</td>
                                    <td>1885-190</td>
                                    <td>140</td>
                                    <td>230/260/300</td>
                                    <td>LOW 197 HIGH 211</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end of sep 21 -->
























        </div>
    </section>
@endsection
