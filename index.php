<!DOCTYPE html>
<html lang="en">
   <?php include "template/header.php" ?>
    <body id="page-top">
<?php include "template/nav-bar.php" ?>
        <!-- Header-->
		<style>
		.info-text2{
			margin-top:1rem;
		}
			</style>
        <header class="masthead d-flex align-items-center">
            <div class="container px-4 px-lg-5 text-center">
                <h1 class="mb-1">This Good For Me ?</h1>
                <h3 class="mb-5"><em>Find out if the things you're trying to eat are good for you or not.</em></h3>
                <a class="btn btn-primary btn-xl" onclick="loadDocfood()">For Food</a>&nbsp;
				<a class="btn btn-primary btn-xl" onclick="loadDocMed()">For Medicine</a>
				<div id="info-text1"> </div>
            
			
 <?php
 include 'dbCon.php';
				$con = connect();					
				  if (isset($_POST['foodsearch'])) {
					  $food1 = $_POST['food1'];
		              $food2= $_POST['food2'];
					  $SQL = "SELECT * FROM food_tables JOIN `nutri_tables` ON food_tables.food_nutri=nutri_tables.nutri_id WHERE food_tables.food_id = '$food1';";
                      $result = $con->query($SQL);
					  foreach ($result as $r) {
						  ?>
						  <div class="info-text2">
						  <h5 class="text-white"><?php echo $r['food_name'] ?> has <?php echo $a=$r['nutri_name']; ?></h5>
						  </div>
						  <?php
					  }
					  $SQL2 = "SELECT * FROM food_tables JOIN `nutri_tables` ON food_tables.food_nutri=nutri_tables.nutri_id WHERE food_tables.food_id = '$food2';";
                      $result = $con->query($SQL2);
					  foreach ($result as $r) {
						  ?>
						  <div class="info-text2">
						  <h5 class="text-white"><?php echo $r['food_name'] ?> has <?php echo $b=$r['nutri_name']; ?>.</h5>
						  </div>
						  <?php
					  }
					  ?>
						  <div class="info-text3">
						  <h3 style="color:red"><?php if($a==$b){?>Both Food/drink have higher level of <?php echo $a ?>, so we recommend you not to take those at same time.</h3>
						  </div>
						  <?php }
						  else {?>
						   <div class="info-text3">
						  <h3 style="color:green">
						  Those are different kind of foods with different nutritions, so you can take these together.</h5></div>
						  <?php }	
					  
				  }
		
					  ?>
					   <?php
										$con = connect();					
				  if (isset($_POST['medsearch'])) {
					  $med1 = $_POST['med1'];
		              $med2= $_POST['med2'];
					  $SQL = "SELECT * FROM med_tables JOIN `medtype_tables` ON med_tables.med_type=medtype_tables.medtype_id WHERE med_tables.med_id = '$med1';";
                      $result = $con->query($SQL);
					  foreach ($result as $r) {
						  ?>
						  <div class="info-text2">
						  <h5 class="text-white"><?php echo $r['med_name'] ?> is a <?php echo $a=$r['medtype_name']; ?> drug.</h5>
						  </div>
						  <?php 
					  }				  					  
					   $SQL2 = "SELECT * FROM med_tables JOIN `medtype_tables` ON med_tables.med_type=medtype_tables.medtype_id WHERE med_tables.med_id = '$med2';";
                      $result = $con->query($SQL2);
					  foreach ($result as $r) {
						  ?>
						  <div class="info-text2">
						  <h5 class="text-white"><?php echo $r['med_name'] ?> is a <?php echo $b=$r['medtype_name']; ?> drug.</h5>
						  </div>
						  <?php }?>
						  <div class="info-text3">
						  <h3 style="color:red"><?php if($a==$b){?>Both medicines are <?php echo $a ?>, so we recommend you not to take those at same time.</h3>
						  </div>
						  <?php }
						  else {?>
						   <div class="info-text3">
						  <h3 style="color:green">
						  Those are different kind of medicines so you can take these together.</h5></div>
						  <?php }					  
				  }
				  
					  ?>
					  
			</div>
            
        </header>
 <?php include "template/footer.php" ?>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
 <?php include "template/script.php" ?>
    </body>
	
</html>
