<!-- table-list.php -->
<?php include 'template/header.php'; 
if (!isset($_SESSION['isLoggedIn'])) {
	echo '<script>window.location="login.php"</script>';
}

?>
	<body>
		<section class="body">

			<!-- start: header -->
			<?php include 'template/top-bar.php'; ?>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<?php include 'template/left-bar.php'; ?>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Table</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Tables</span></li>
								<li><span>Food</span></li>
							</ol>					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
						
						
						<section class="panel">
						
							<center><a href="#exampleModal" class="btn btn-success "  data-toggle="modal" >Add Food</a></center>
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title">All Foods</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
									<thead>
										<tr>
											<th>No</th>
			                                
											<th>Food Name</th>
											<th class="hidden-phone">Food Nutrition</th>
											<!--<th class="hidden-phone">Action</th> -->
										</tr>
									</thead>
									<tbody>
										<?php
										$count = 1;
										include 'dbCon.php';
										$con = connect();
										//$uni_id = $_SESSION['id'];
										$sql = "SELECT * FROM `f_tables`;";
										$result = $con->query($sql);
										foreach ($result as $r) {
										?>
										<tr class="gradeX">
											<td class="center hidden-phone"><?php echo $count; ?></td>
											
											<td><?php echo $r['food_name']; ?></td>
											<td class="center hidden-phone">
												<a href="view-nutri-list.php?food_id=<?php echo $r['food_id']; ?>&food_name=<?php echo $r['food_name']; ?>" class="btn btn-info"  onclick="if (!Done()) return false; ">View Nutritions</a>
											</td>
										<!--	<td class="center hidden-phone">
												<a href="delete-university.php?uni_id=<?php //echo $r['uni_id']; ?>" class="btn btn-danger"  onclick="if (!Done()) return false; ">Delete University</a>
											</td> -->
										</tr>
										<?php $count++; } ?>
									</tbody>
								</table>
							</div>
						</section>
						
						
					<!-- end: page -->
				</section>
			</div>

			<?php include 'template/right-bar.php'; ?>
		</section>
		<script type="text/javascript">
	       function Done(){
	         return confirm("Are you sure?");
	       }
   		</script>
		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="assets/vendor/select2/select2.js"></script>
		<script src="assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		<script src="assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="assets/javascripts/tables/examples.datatables.default.js"></script>
		<script src="assets/javascripts/tables/examples.datatables.row.with.details.js"></script>
		<script src="assets/javascripts/tables/examples.datatables.tabletools.js"></script>
		
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Add Food</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <form action="" method="POST">
		      <div class="modal-body">
		        <div class="form-group">
		        	<label>Name of Food</label>
		        	<input type="text" name="name_of_food" required="" class="form-control">
		    	</div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <input type="submit" name="addfood" class="btn btn-primary" value="Add Food">
		      </div>
		  	  </form>
		    </div>
		  </div>
		</div>
	</body>
</html>
<?php 
	if (isset($_POST['addfood'])) {
		$name_of_subject = $_POST['name_of_food'];	
		$indert = false;
		
			
			$iquery="INSERT INTO `f_tables`(`food_name`) 
            VALUES ('$name_of_subject');";
	        if ($con->query($iquery) === TRUE) {
	        	$insert = true;
	        }else {
	            echo "Error: " . $iquery . "<br>" . $con->error;
	        }
		if ($insert == true) {
			echo '<script>alert("Food added successfully")</script>'; ?>
			<script type="text/javascript">
				
			</script>
		<?php		
			echo '<script>window.location.href ="food-list.php";</script>';
		}
	}
?>
	</body>
</html>