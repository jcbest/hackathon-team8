                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding:0px;">
                                        <a class="" href="preventative.php">

		
			<div style="">
  <canvas id="myChart"></canvas>
</div>
                                        </a>


                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-danger" href="level1.php">
<?php
$sql ="SELECT id from  content where categories='level 1' ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totallevel1=$query->rowCount();
?>
                                            <span class="number counter"><?php echo htmlentities($totallevel1);?></span>
                                            <span class="name">TD HSE LEVEL 1 </span>
                                            <span class="bg-icon"><i class="fa fa-ticket"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-warning" href="level2.php">
                                        <?php
$sql2 ="SELECT id from  content where categories='level 2' ";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$results2=$query2->fetchAll(PDO::FETCH_OBJ);
$totallevel2=$query2->rowCount();
?>
                                            <span class="number counter"><?php echo htmlentities($totallevel2);?></span>
                                            <span class="name">TD HSE LEVEL 2</span>
                                            <span class="bg-icon"><i class="fa fa-bank"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-success" href="level3.php">
                                        <?php
$sql3="SELECT  id from content where categories='level 3' ";
$query3 = $dbh -> prepare($sql3);
$query3->execute();
$results3=$query3->fetchAll(PDO::FETCH_OBJ);
$totallevel3=$query3->rowCount();
?>

                                            <span class="number counter"><?php echo htmlentities($totallevel3);?></span>
                                            <span class="name"> TD HES LEVEL 3</span>
                                            <span class="bg-icon"><i class="fa fa-file-text"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
  
		 
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->
       
	

                                </div>