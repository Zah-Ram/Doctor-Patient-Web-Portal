<?php
$did = $_GET['did'];

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

// sql to delete a record
$sql = "DELETE FROM patient WHERE id=$did";

if (mysqli_query($conn, $sql)) {
	echo"<script>alert('Your account has been deleted successfully!')</script>";
    //header('location: index.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
