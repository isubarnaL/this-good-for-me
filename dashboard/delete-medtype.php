<!-- delete-university.php -->
<?php
	if (isset($_GET['medtype_id'])) {
		$medtype_id = $_GET['medtype_id'];
		$sql ="DELETE FROM `medtype_tables` WHERE medtype_id = '$medtype_id';";
		include_once 'dbCon.php';
		$con = connect();
		if ($con->query($sql) === TRUE) {
		echo '<script>alert("DELETED.")</script>'; ?>
		<script type="text/javascript">
			var dist = <?php echo $medtype_id; ?>;
		</script>
<?php		
		echo '<script>window.location.href ="medtype-list.php?medtype_id=" + dist;</script>';
		//header("Location: view-chair-list.php?table_id=".$tbl_id."");
	    } else {
			echo "Error: " . $sql . "<br>" . $con->error;
		} 
	}
?>