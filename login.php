

<html>
<head>

</head>


<body>
<form action="login.php" method="post">
<input type="text" name="name"/>
<input type="password" name="pass" />
<input type="submit" name="submit" />

</form>
</body>

</html>



<?php



//echo $did;

$did = $_GET['dddid'];
//global $did;
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

$sql = "SELECT did FROM doctor where did=$did";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
		
		 $did = $row['did'];
		 //print_r($did);
//		echo $did;
	
     
 


	}
}
?>

<?php

$did = $_GET['dddid'];
//if(isset($_POST['submit'])){
	//header('location: appoint.php?ddid='.$did);
//}

?>


<?php



session_start();
ob_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edpp";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['submit'])){
$name= mysqli_real_escape_string($con,$_POST['name']);
$pass = mysqli_real_escape_string($con,$_POST['pass']);
$result = mysqli_query($con, 'select * from patient where name="'.$name.'" AND pass="'.$pass.'"')or die("could not find db");


//$result = mysqli_query($con, 'select * from patient as b where name="'.$name.'" AND pass="'.$pass.'" IN (SELECT * FROM doctor where id=$did)')or die("could not find db");
//$result =mysqli_query($con, 'SELECT patient.id,doctor.did FROM patient INNER JOIN doctor on patient.id = doctor.did where name="'.$name.'" AND pass="'.$pass.'"') or die("could not find db");;
//$result =mysqli_query($con, 'SELECT id, did FROM patient, doctor INNER JOIN patient.id ON doctor.did where name="'.$name.'" AND pass="'.$pass.'"') or die("could not find db");

if(mysqli_num_rows($result)==1){

while($row = mysqli_fetch_assoc($result)){

$did = $_GET['dddid'];
echo $id;
$pid =    $row['id'];
$did =    $row['did'];
//echo $did;
$im = $row['name'];
echo $im;



//header('Location: find.php?id='.$pid);

header("Location: ticket.php?pid=$pid&did=$did");
//header("Location: appoint.php?did=$did&pid=$pid");
}

}
else
{
echo "account does not exists";
}
exit();
}


?>

