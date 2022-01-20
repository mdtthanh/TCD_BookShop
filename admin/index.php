
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Dashboard</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="../asset/plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="../assets/css/style.min.css" rel="stylesheet">
</head>
<?php
$title = 'Dashboard';
$baseUrl = '';
$Jan1 = $Feb1 = $Mar1 = $Apr1 = $May1 = $Jun1 = $Jul1 = $Aug1 = $Sep1 = $Oct1 = $Nov1 = $Dec1 = 0;
$Jan2 = $Feb2 = $Mar2 = $Apr2 = $May2 = $Jun2 = $Jul2 = $Aug2 = $Sep2 = $Oct2 = $Nov2 = $Dec2 = 0;
require_once('layouts/header.php');
$sql = "SELECT * FROM orders WHERE status = 1 ORDER BY order_date DESC LIMIT 10";
$data = executeResult($sql);

$sql1 = "SELECT count(status) totalorder1 FROM orders WHERE YEAR(order_date) = YEAR(CURDATE())";
$data1 = executeResult($sql1);

$sql2 = "SELECT count(status) totalorder2 FROM orders WHERE YEAR(order_date) = YEAR(CURDATE()) AND status = 1";
$data2 = executeResult($sql2);

$sql3 = "SELECT count(status) totalorder3 FROM orders WHERE YEAR(order_date) = YEAR(CURDATE()) AND status = 2";
$data3 = executeResult($sql3);

$sql4 = "SELECT MONTH(order_date) thang, COUNT(id) donthanhcong
        FROM orders
        WHERE status = 1 AND YEAR(order_date) = YEAR(CURDATE())
        GROUP BY MONTH(order_date)";
 $data4 = executeResult($sql4);       

 $sql5 = "SELECT MONTH(order_date) thang, COUNT(id) donhuy
        FROM orders
        WHERE status = 2 AND YEAR(order_date) =YEAR(CURDATE())
        GROUP BY MONTH(order_date)";
 $data5 = executeResult($sql5);  

$sql6 = "SELECT YEAR(order_date) years FROM orders GROUP BY years order by years DESC;";
$data6 = executeResult($sql6);
?>
<?php
    for($i = 0; $i <= 11; $i++) {
        if(isset($data4[$i]['thang'])) {
            if($data4[$i]['thang'] == 1) {
                $Jan1 = $data4[$i]['donthanhcong'];
            } else if($data4[$i]['thang'] == 2) {
                $Feb1 = $data4[$i]['donthanhcong'];
            } else if($data4[$i]['thang'] == 3) {
                $Mar1 = $data4[$i]['donthanhcong'];
            } else if($data4[$i]['thang'] == 4) {
                $Apr1 = $data4[$i]['donthanhcong'];
            } else if($data4[$i]['thang'] == 5) {
                $Mar1 = $data4[$i]['donthanhcong'];
            } else if($data4[$i]['thang'] == 6) {
                $Jun1 = $data4[$i]['donthanhcong'];
            } else if($data4[$i]['thang'] == 7) {
                $Jul1 = $data4[$i]['donthanhcong'];
            } else if($data4[$i]['thang'] == 8) {
                $Aug1 = $data4[$i]['donthanhcong'];
            } else if($data4[$i]['thang'] == 9) {
                $Sep1 = $data4[$i]['donthanhcong'];
            } else if($data4[$i]['thang'] == 10) {
                $Oct1 = $data4[$i]['donthanhcong'];
            } else if($data4[$i]['thang'] == 11) {
                $Nov1 = $data4[$i]['donthanhcong'];
            } else if($data4[$i]['thang'] == 12) {
                $Dec1 = $data4[$i]['donthanhcong'];
            }
        } 
    }
    
?>     
<?php
    for($i = 0; $i <= 11; $i++) {
        if(isset($data5[$i]['thang'])) {
            if($data5[$i]['thang'] == 1) {
                $Jan2 = $data5[$i]['donhuy'];
            } else if($data5[$i]['thang'] == 2) {
                $Feb2 = $data5[$i]['donhuy'];
            } else if($data5[$i]['thang'] == 3) {
                $Mar2 = $data5[$i]['donhuy'];
            } else if($data5[$i]['thang'] == 4) {
                $Apr2 = $data5[$i]['donhuy'];
            } else if($data5[$i]['thang'] == 5) {
                $Mar2 = $data5[$i]['donhuy'];
            } else if($data5[$i]['thang'] == 6) {
                $Jun2 = $data5[$i]['donhuy'];
            } else if($data5[$i]['thang'] == 7) {
                $Jul2 = $data5[$i]['donhuy'];
            } else if($data5[$i]['thang'] == 8) {
                $Aug2 = $data5[$i]['donhuy'];
            } else if($data5[$i]['thang'] == 9) {
                $Sep2 = $data5[$i]['donhuy'];
            } else if($data5[$i]['thang'] == 10) {
                $Oct2 = $data5[$i]['donhuy'];
            } else if($data5[$i]['thang'] == 11) {
                $Nov2 = $data5[$i]['donhuy'];
            } else if($data5[$i]['thang'] == 12) {
                $Dec2 = $data5[$i]['donhuy'];
            }
        }
    }
    
?>      
<body>
    <div id="main-wrapper" >
       
        <div class="page-wrap" style="width: auto">
            
            <div class="container-fluid">
               
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Orders</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-success"><?=$data1[0]['totalorder1']?></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Orders Completed</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash2"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-purple"><?=$data2[0]['totalorder2']?></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Orders Cancelled</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash3"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-info" style="color: #11A0F8 !important"><?=$data3[0]['totalorder3']?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- PRODUCTS YEARLY SALES -->
                <!-- ============================================================== -->
                <!-- <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Product Sales by Month</h3>
                            <div class="d-md-flex mb-3">
                                <!-<div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                                    <select class="form-select shadow-none row border-top">
                                        <?php
                                            // foreach($data6 as $item6) {
                                            //     echo '<option>'.$item6['years'].'</option>';
                                            // }
                                        ?>
                                    </select>
                                </div> -->
                            <!-- </div>
                            <div class="d-md-flex">
                                <ul class="list-inline d-flex ms-auto">
                                    <li class="ps-3">
                                        <h5><i class="fa fa-circle me-1 text-info"></i>Delivered</h5>
                                    </li>
                                    <li class="ps-3">
                                        <h5><i class="fa fa-circle me-1 text-inverse"></i>Cancel</h5>
                                    </li>
                                </ul>
                            </div>
                            
                            <div id="ct-visits" style="height: 405px;">
                                <div class="chartist-tooltip" style="top: -17px; left: -12px;"><span
                                        class="chartist-tooltip-value">6</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --> 
                <!-- ============================================================== -->
                <!-- RECENT SALES -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Recent sales</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0 text-center">No</th>
                                            <th class="border-top-0">Name</th>
                                            <th class="border-top-0">Phone number</th>
                                            <th class="border-top-0 text-center">Date</th>
                                            <th class="border-top-0 text-center">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
	$index = 0;
	foreach($data as $item) {
		echo '<tr>
					<th class="text-center"> <a href="order/detail.php?id='.$item['id'].'">'.(++$index).'</a></th>
					<td>'.$item['fullname'].'</td>
					<td>'.$item['phone'].'</td>
                    <td class="text-center">'.$item['order_date'].'</td>
					<td class="text-center" style="color: #fa0000">'.number_format($item['total_money']).'</td>
					';
		
	}
?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script>
         
        new Chartist.Line('#ct-visits', {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        series: [
            [<?=$Jan2?>, <?=$Feb2?>, <?=$Mar2?>, <?=$Apr2?>, <?=$May2?>, <?=$Jun2?>, <?=$Jul2?>, <?=$Aug2?>, <?=$Sep2?>, <?=$Oct2?>, <?=$Nov2?>, <?=$Dec2?>],
            [<?=$Jan1?>, <?=$Feb1?>, <?=$Mar1?>, <?=$Apr1?>, <?=$May1?>, <?=$Jun1?>, <?=$Jul1?>, <?=$Aug1?>, <?=$Sep1?>, <?=$Oct1?>, <?=$Nov1?>, <?=$Dec1?>]
            // <?php
            
            //  foreach($data5 as $item5) {
            //     echo $item5['donhuy'];
            //     echo ',';
            //  }
            //  ?>
            // ],
            // [
            // <?php
            //  foreach($data4 as $item4) {
            //     echo $item4['donthanhcong'];
            //     echo ',';
            //  }
            //  ?>
            // ]
        ]
    }, {
        top: 0,
        low: 1,
        showPoint: true,
        fullWidth: true,
        plugins: [
            Chartist.plugins.tooltip()
        ],
        axisY: {
            labelInterpolationFnc: function(value) {
                return (value);
            }
        },
        showArea: true
    });
    
    </script>
    <script src="../assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/app-style-switcher.js"></script>
    <script src="../assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="../assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../assets/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../assets/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="../assets/plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="../assets/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../assets/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>