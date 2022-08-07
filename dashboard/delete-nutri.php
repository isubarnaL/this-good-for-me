<!-- delete-university.php -->
<?php
	if (isset($_GET['nutri_id'])) {
		$nutri_id = $_GET['nutri_id'];
		$sql ="DELETE FROM `nutri_tables` WHERE nutri_id = '$nutri_id';";
		include_once 'dbCon.php';
		$con = connect();
		if ($con->query($sql) === TRUE) {
		echo '<script>alert("DELETED.")</script>'; ?>
		<script type="text/javascript">
			var dist = <?php echo $nutri_id; ?>;
		</script>
<?php		
		echo '<script>window.location.href ="nutri-list.php?nutri_id=" + dist;</script>';
		//header("Location: view-chair-list.php?table_id=".$tbl_id."");
	    } else {
			echo "Error: " . $sql . "<br>" . $con->error;
		} 
	}
?>