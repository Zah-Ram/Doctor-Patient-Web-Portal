<?php
session_start();
ob_start();
$did = $_GET['id'];
echo $did;
?>



<?php



//echo $did;

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
//if (mysqli_num_rows($result) > 0) {
  //  while($row = mysqli_fetch_array($result)) {
		$row = mysqli_fetch_array($result);
		 $did = $row['did'];
		//$_SESSION['did'] = $did;
		
  

	
//}



if(isset($_POST['submit'])){
$name= mysqli_real_escape_string($conn,$_POST['name']);
$pass = mysqli_real_escape_string($conn,$_POST['pass']);
$result = mysqli_query($conn, 'select * from patient where name="'.$name.'" AND pass="'.$pass.'"')or die("could not find db");
//$result1 = mysqli_query($con, 'select * from doctor where did=$did')or die("could not find db");


//$result = mysqli_query($con, 'select * from patient as b where name="'.$name.'" AND pass="'.$pass.'" IN (SELECT * FROM doctor where id=$did)')or die("could not find db");
//$result =mysqli_query($con, 'SELECT patient.id,doctor.did FROM patient INNER JOIN doctor on patient.id = doctor.did where name="'.$name.'" AND pass="'.$pass.'"') or die("could not find db");;
//$result =mysqli_query($con, 'SELECT id, did FROM patient, doctor INNER JOIN patient.id ON doctor.did where name="'.$name.'" AND pass="'.$pass.'"') or die("could not find db");

if(mysqli_num_rows($result)==1){

while($row = mysqli_fetch_assoc($result)){



$pid =    $row['id'];
echo $did = $row['did'];
$_SESSION['id'] = $id;

//header('Location: ticket.php?pid='.$pid.'&did='.$did.'');
header("Location: new.php?pid=$pid&&did=$did");
//header('Location: ticket.php');
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



<html>
<head>

</head>


<body>
<form action="log.php" method="post">
<input type="text" name="name"/>
<input type="password" name="pass" />
<input type="submit" name="submit" />

</form>
</body>

</html>

<!--
$sql = "SELECT did FROM doctor where did=$did";
$result = mysqli_query($conn, $sql);
//this is another query
if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_array($result)) {
		
		$did = $row['did'];
		$_SESSION['did'] = $did;
	 
	}
}

//this is the ending
-->