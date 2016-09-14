<?php
$allowedIPs = ["123.123.123.123","12.12.12.12"];
$referer = $_SERVER['HTTP_REFERER'];
$ip = $_GET["ip"];

//db info file or credentials
include("./db.php");

//see if IP requesting is allowed
if(in_array($SERVER['HTTP_REFERER'],$allowedIPs)) {
	//set in db
	$conn = new mysqli($host,$username,$password,$database);
	if(!$conn) {
		die("Connection Error: " . mysqli_connect_error());
	} else {
		$sql = "INSERT INTO $table (ip, created) VALUES ($ip,NOW())";
		if(mysqli_query($conn, $sql)) {
			echo "success";
		} else {
			echo "FAIL";
		}
	}
	$conn->close();	
}

?>
