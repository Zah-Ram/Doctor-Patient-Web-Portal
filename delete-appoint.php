<?php

$id = $_GET['id'];
$di = $_GET['did'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edpp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//$myDate = date('Y-m-d');
//$sql = "SELECT * FROM patient where did=$did and date=$myDate";


$sql = "DELETE FROM appointments WHERE id=$id and did=$di";

if (mysqli_query($conn, $sql)) {
	header('location: welcome-patient.php');
    //echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>