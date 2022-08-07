<!-- dbCon.php -->
<?php 
function connect($flag=TRUE){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbName = "hackx";

	// Create connection
	if($flag){
		$con = new mysqli($servername, $username, $password,$dbName);
	}else{
		$con = new mysqli($servername, $username, $password);
	}
	// Check connection
	if ($con->connect_error) {
		die("Connection failed: $conn->connect_error");
	} 
	//echo "Connected successfully";
	
	return $con;
}

?>