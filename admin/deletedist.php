<?php
    session_start();
	
  $servername = "localhost";
$username = "root";
$password = "";
$database = "superstore";

	$con = mysqli_connect($servername, $username, $password,$database);
        if (!$con) {
            die(" Connection Error ");
        }


    $did = $_GET['did'];
    $sql = "DELETE FROM dstbr WHERE DID = $did";
    if (mysqli_query($con, $sql)) {
        echo "<script type='text/javascript'>alert('Distributor Deleted Successfully');
        window.location='distd.php';</script>";
        die;
    } 
    mysqli_close($con);
?>