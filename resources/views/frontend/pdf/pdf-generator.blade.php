<?php
include("autoLoader.php");
$obj = new Controller;

if(isset($_GET['id'])){
$id = $_GET['id'];
$tab = 'risk_profile';
$data = array('*');
$base = array('user_id'=>$id);
$cust_data = $obj->fetch_where($tab,$data,$base);


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/pdf.css" />
    <script src="assets/js/pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <style>
        .logo-admin-new img {
            float: left;
        }
        #invoice {
            padding: 20px 50px;
        }
        .btn-print {
            background: red;
            color: #fff;
            padding: 5px 20px;
            font-size: 15px;
            border: none;
            border-radius: 5px;
            font-weight: 600;
        }
    </style>

</head>

<body>
    <div class="container d-flex justify-content-center mt-50 mb-50">
        <div class="row">
            <div class="col-md-12 text-right mb-3">
                <button class="btn-print" id="download"><i class="fa fa-print" aria-hidden="true"></i> Print</button>
            </div>
            <div class="col-md-12">
                <div class="card" id="invoice">
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-4 pull-left logo-admin-new">
                                   
                                    <img src="assets/images/logo.png" width="150px">
                                </div>
                            </div>
                            <div class="col-sm-6">
                             
                            </div>
                        </div>
                        <div class="d-md-flex flex-md-wrap">
                            
                            </div>
                            <div class="mb-2 ml-auto text-right"> 
                               
                            </div>
                      
                    <div class="table-responsive">
                    <style>
    table tbody tr td {
        padding: 10px;
    }
</style>
                        <table class="table table-lg">
                            
                            <tbody>
                            <tr>
            <td > <label><b>Name</b></label>: <?=$cust_data[0]->name?></td>
            <td > <label><b>Email</b></label>: <?=$cust_data[0]->email?></td>
            
        </tr>
        <tr>
            <td > <label><b>Mobile</b></label>: <?=$cust_data[0]->mobile?></td>
            <td > <label><b>PAN</b></label>: <?=$cust_data[0]->pan?></td>
        </tr>
        <tr>
            <td > <label><b>DOB</b></label>: <?=$cust_data[0]->dob?></td>
            <td > <label><b>Age Group</b></label>: <?=$cust_data[0]->age_group?></td>
        </tr>
        <tr>
            
            <td > <label><b>Intersted in</b></label>: <?=$cust_data[0]->interested?></td>
            <td > <label><b>Trading Goal</b></label>: <?=$cust_data[0]->trading_goal?></td>
        </tr>
        <tr>
            <td > <label><b>Experience</b></label>: <?=$cust_data[0]->experience?></td>
            <td > <label><b>Trading Amount</b></label>: <?=$cust_data[0]->trading_amount?></td>
        </tr>
        <tr>
            <td > <label><b>Trading Type</b></label>: <?=$cust_data[0]->trading_type?></td>
            <td > <label><b>Annual Income</b></label>: <?=$cust_data[0]->annual_income?></td>
        </tr>
        <tr>    
            
            <td > <label><b>Earning Person</b></label>: <?=$cust_data[0]->earning_person?></td>
            <td > <label><b>Dependent Famaly Members</b></label>: <?=$cust_data[0]->dependent_family?></td>
        </tr>
        <tr>    
            <td > <label><b>Income Source</b></label>: <?=$cust_data[0]->income_source?></td>    
            <td > <label><b>Emergency Fund</b></label>: <?=$cust_data[0]->emergency_fund?></td>
        </tr>
        <tr>  
            <td > <label><b>Existing Investment</b></label>: <?=$cust_data[0]->existing_investment?></td>
            <td > <label><b>Total Investment</b></label>: <?=$cust_data[0]->total_exist_investment?></td>
        </tr>
        <tr>
            
            <td > <label><b>Risk Tolerance</b></label>: <?=$cust_data[0]->risk_tolerance?></td>
            <td > <label><b>Preference</b></label>: <?=$cust_data[0]->preference?></td>
        </tr>
        <tr>
        <td > <label><b>Prefered Segment</b></label>: <?=$cust_data[0]->preferred_segment?></td>
</tr>
                            </tbody>
                        </table>
                    </div>
                    </div>
                    </div>
                    <div class="card-body">
                        <div class="d-md-flex flex-md-wrap">
                            <div class="pt-2 mb-3 wmin-md-400 ml-auto">
                                
                                <div class="table-responsive">
                                    <table class="table">
                                    
                         
                                </div>
                              
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
}
?>
