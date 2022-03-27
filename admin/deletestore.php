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


    $sid = $_GET['sid'];
    $sql = "DELETE FROM store WHERE SID = $sid";
    if (mysqli_query($con, $sql)) {
        echo "<script type='text/javascript'>alert('Store Deleted Successfully');
        window.location='stored.php';</script>";
        die;
    } 
    mysqli_close($conn);
?>