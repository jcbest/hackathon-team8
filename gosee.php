<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])=="")
    {
    header("Location: index.php");
    }
    else{
        ?>
<?php

$qery = "SELECT * from preventative";

$stmt = $dbh->prepare($qery);
$stmt->execute();
$resultss=$stmt->fetchAll(PDO::FETCH_OBJ);


    ?>
 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HSE Assurance Portal</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/toastr/toastr.min.css" media="screen" >
        <link rel="stylesheet" href="css/icheck/skins/line/blue.css" >
        <link rel="stylesheet" href="css/icheck/skins/line/red.css" >
        <link rel="stylesheet" href="css/icheck/skins/line/green.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
        <script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "TD 2022 Preventatives Summary"
	},
	axisY: {
		title: "	No. of Preventatives Recorded"
	},
	data: [{        
		type: "column",  
		showInLegend: true, 
		legendMarkerColor: "grey",
		legendText: "Months",
		dataPoints: [      
			{ y: 120, label: "January" },
			{ y: 100,  label: "February" },
			{ y: 230,  label: "March" },
		
		]
	}]
});
chart.render();

}
</script>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">
              <?php include('home/topbar.php');?>
            <div class="content-wrapper">
                <div class="content-container">

                    <?php include('home/leftbar.php');?>

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-sm-6">
                                    <h2 class="title">
									
				TD 2022 GO SEE Summary
									</h2>
                                    <div class="panel-body ">

<table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>

<td><b>S/N</b></td>
<td><b>Month</b></td>
<td><b>No. of GO SEE</b></td>
</tr>
<?php
// code Student Data
$email=$_SESSION['alogin'];
//$qery = "SELECT  * from tblstudents  where tblstudents.RollId=:rollid";
$qery = "SELECT * from gosee";

$stmt = $dbh->prepare($qery);
$stmt->execute();
$resultss=$stmt->fetchAll(PDO::FETCH_OBJ);
if($stmt->rowCount() > 0)
{
foreach($resultss as $row)
{   
    $total=$row->y;
    $total1 +=$total  ;
    ?>

<tr>
<td> <small><?php echo htmlentities($row->id);?></small></td>
<td><?php echo htmlentities($row->x);?></td>
<td><?php echo htmlentities($row->y);?></td>





<?php }}

    ?>
    </tr>
    <tr>
    <td></td>
    <td><strong>Total</strong></td>
    <td><b><?php echo $total1;?></b></td>
</tr>
    </table>
                                </div>
                                <!-- /.col-sm-6 -->
                            </div>
                            <!-- /.row -->

                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">
                                <div class="row">
                               
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->
                                    <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>

                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                    </div>
                    <!-- /.main-page -->


                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
</div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>
        <script src="js/waypoint/waypoints.min.js"></script>
        <script src="js/counterUp/jquery.counterup.min.js"></script>
        <script src="js/amcharts/amcharts.js"></script>
        <script src="js/amcharts/serial.js"></script>
        <script src="js/amcharts/plugins/export/export.min.js"></script>
        <link rel="stylesheet" href="js/amcharts/plugins/export/export.css" type="text/css" media="all" />
        <script src="js/amcharts/themes/light.js"></script>
        <script src="js/toastr/toastr.min.js"></script>
        <script src="js/icheck/icheck.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script src="js/production-chart.js"></script>
        <script src="js/traffic-chart.js"></script>
        <script src="js/task-list.js"></script>
        <script>
            $(function(){

                // Counter for dashboard stats
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });

                // Welcome notification
                toastr.options = {
                  "closeButton": true,
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": false,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false,
                  "onclick": null,
                  "showDuration": "300",
                  "hideDuration": "1000",
                  "timeOut": "5000",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                }
                toastr["success"]( "Welcome to student Result Management System!");

            });
        </script>
        <script src="js/canvasjs.min.js"></script>
    </body>

    <div class="foot"><footer>
<p> Powered By  <a href="#">Hackathon Team 8 </a>
</footer> </div>

<style> .foot{text-align: center; */}</style>
</html>
<?php } ?>
