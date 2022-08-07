<!-- delete-university.php -->
<?php
	if (isset($_GET['med_id'])) {
		$med_id = $_GET['med_id'];
		$sql ="DELETE FROM `med_tables` WHERE med_id = '$med_id';";
		include_once 'dbCon.php';
		$con = connect();
		if ($con->query($sql) === TRUE) {
		echo '<script>alert("DELETED.")</script>'; ?>
		<script type="text/javascript">
			var dist = <?php echo $med_id; ?>;
		</script>
<?php		
		echo '<script>window.location.href ="med-list.php?med_id=" + dist;</script>';
		//header("Location: view-chair-list.php?table_id=".$tbl_id."");
	    } else {
			echo "Error: " . $sql . "<br>" . $con->error;
		} 
	}
?>