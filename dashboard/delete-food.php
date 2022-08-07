<!-- delete-subject.php -->
<?php
	if (isset($_GET['food_id'])) {
		$id =$_GET['food_id'];
	    $nutri_id=$_GET['food_nutri'];
		$sql ="DELETE FROM `food_tables` WHERE food_id = '$id' AND food_nutri = '$nutri_id';";
		include_once 'dbCon.php';
		$con = connect();
		if ($con->query($sql) === TRUE) {
		echo '<script>alert("DELETED.")</script>'; ?>
		<script type="text/javascript">
			var dist = <?php echo $id; ?>;
		</script>
<?php		
		echo '<script>window.location.href ="view-nutri-list.php?food_id=" + dist;</script>';
		//header("Location: view-chair-list.php?table_id=".$tbl_id."");
	    } else {
			echo "Error: " . $sql . "<br>" . $con->error;
		} 
	}
?>