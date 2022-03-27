<?php
		$servername = "localhost";
$username = "root";
$password = "";
$database = "superstore";

	$conn = mysqli_connect($servername, $username, $password,$database);

	
	if(ISSET($_POST['updateord'])){
		$oid = $_POST['oid'];
		$id = $_POST['id'];
		$pstat = $_POST['pstat'];
		$smode = $_POST['smode'];
		$sstat = $_POST['sstat'];
		
	mysqli_query($conn, "UPDATE `strorders` SET  `PMYSTAT` = '$pstat', `SHPMODE` = '$smode', `SHPSTAT` = '$sstat' WHERE `ORDID` = '$oid'") or die(mysqli_error());
header("location: dorders.php");
	}
?>

