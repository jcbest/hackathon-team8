<?php
session_start();
error_reporting(0);
include('includes/config.php');
if($_SESSION['alogin']!=''){
$_SESSION['alogin']='';
}
if(isset($_POST['login']))
{
$email=$_POST['email'];
//md5
$password=($_POST['password']);
$sql ="SELECT fname, email, password FROM user WHERE email=:email and password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['email'];
$_SESSION['fname']=$results->fname;


echo "<script type='text/javascript'> document.location = 'users-page.php'; </script>";
} else{

    echo "<script>alert('Wrong Login Details, Please check your email address and password');</script>";

}

}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Assurance Portal</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/icheck/skins/flat/blue.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="">
        <div class="main-wrapper">
		<div class="row">
                        <div class="navbar-header no-padding">
                			<a class="navbar-brand" href="dashboard.php">
							<img src="home/facebook.jpg" height="30" width="30">
								                			</a>
							<a class="navbar-brand" href="dashboard.php">
								<img src="home/twitter.jpg" height="30" width="30">
									

                			</a>
							<a class="navbar-brand" href="dashboard.php">
							
									<img src="home/whatsapp.jpg" height="30" width="30">

                			</a><a class="navbar-brand" href="dashboard.php">
							
        			 							<img src="home/download.jpg" height="30" width="30">

                			</a>
		                </div>
				<ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                    <li><a href="#" class="color-danger text-center">
                        <i class="fa fa-sign-out"></i> 
                          CALL:080000000000
                            </a>
                        </li>            		
                            
                </ul>
 <h1 align="center">Welcome to Assurance Portal</h1>

                	
				                	
                            <!-- /.nav navbar-nav navbar-right -->
            <div class="login-bg-color bg-black-300">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel login-box">
                            <div class="panel-heading">
                                <div class="panel-title text-center">
                                    <h4>ENTER USER INFORMATION</h4>
                                </div>
                            </div>
                            <div class="panel-body p-20">

                           

                                <form action="" method="post">
                                	<div class="form-group">
                                		<label for="rollid">Enter Your Email Address</label>
                                            <input type="text" class="form-control" id="email" placeholder="Enter Your Email Address" autocomplete="off" name="email" required>
                                	</div>
									<div class="form-group">
                                		<label for="pin">Enter Your Password </label>
                                        <input type="password" class="form-control" id="" placeholder="Enter Your Password" autocomplete="off" name="password" required>
                                	</div>
								
                              

    
                                    <div class="form-group mt-20">
									 <div class="form-group">
                                                           
                                                            <div class="col-sm-6">
                                                               <a href="index.php">Back to Home</a>
                                                            </div>
                                                        </div>
                                        <div class="">
                                      
                                            <button type="submit" name="login" class="btn btn-success btn-labeled pull-right">Login<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>

                                       
                                </form>

                                <hr>

                            </div>
							
                        </div>
                        <!-- /.panel -->
                        <p class="text-muted text-center"><small style ="color:white";>All Right Reserved © Hackathon Team 8 2022</small></p>
                    </div>
                    <!-- /.col-md-6 col-md-offset-3 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /. -->

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
        <script src="js/icheck/icheck.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function(){
                $('input.flat-blue-style').iCheck({
                    checkboxClass: 'icheckbox_flat-blue'
                });
            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>
