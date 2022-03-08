<?php
session_start();
?>

<?php
//session_start();
//ob_start();

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

$result1 = mysqli_query($con, 'select * from patient where name="'.$name.'" AND pass="'.$pass.'"')or die("could not find db");
;


if(mysqli_num_rows($result1)==1){

while($row = mysqli_fetch_array($result1)){

$id =    $row['id'];

$_SESSION['id'] = $id;


header('Location: welcome-patient.php');

//header('Location: welcome.php?id='.$id);

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
<style>

body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color:#116466;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("h2.jpg");
  
  /* Add the blur effect */
  
  
  /* Full height */
  height: 90%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
  

  }


.parallax {
  /* The image used */
  background-image: url("h2.jpg");

  /* Set a specific height */
  min-height: 500px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  overflow: auto;
}







.container {
 
  width: 50%;
  background-color: #dA7B93;#d3d3d3
  margin-top: -50px;
  border-radius: 12px; 
  height: 1000px;
}





.card {
	border-collapse: separate; 
	border-radius: 50px;
	font-size:20;
	
	}




h1{
	font-family: garamond;
	font-size: 70px;
}


h5{
	font-size: 40;
	
	font-family: garamond;
}


h3{
	text-align: center;
	
}

h6{
	text-align: center;
	font-size: 40;
	font-family: garamond;
	margin-top: 10px;
}

input[type=password],text{
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  color: white;
  background-color: #4CAF50;
  
  border-radius: 4px;
  box-sizing: border-box;
  font-size: 20;
  
}
input[type=text]{
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  color: white;
  background-color: #4CAF50;
  
  border-radius: 4px;
  box-sizing: border-box;
  font-size: 20;
  
}
input[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 20;
  
}

table {
  width:50%;
  border: 1px solid black;
  
  }

table, th, td {
  border: 5px solid #d3d3d3;
  border-collapse: collapse;
}

th, td {
  padding: 15px;
  text-align: left;
}
table#t01 tr:nth-child(even) {
  background-color: #eee;
}
table#t01 tr:nth-child(odd) {
 background-color: #fff;
}
table#t01 th {
  background-color: black;
  color: white;
  
}

img{
	min-height:300;
	max-height:500;
	width:650;
}
.button1 {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  margin-top: 30px;
  
}
.button2 {
  background-color: red; 
  border: none;
  color: white;
  padding: 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  margin-top: 30px;

}
.button4 {border-radius: 12px;}
	
	a{
	text-decoration:none;
	color:white;
	
	}
	
	a.aclass{
	text-decoration:none;
	color:white;
	background-color: black;
	padding: 10px;
	border-radius: 12px;
	}
	.card1 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 400px;
  margin: auto;
  text-align: center;
  font-family: arial;
  margin-top: 50px;
  border-radius: 12px;
  background-color:#dA7B93;
  color: black;
  
}

#pi{
border: none;
  outline: 0;
  display: inline-block;
  padding: 15px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
  
}

.title {
  color: black;
  font-size: 18px;
}
	
</style>
</head>
<body>
<div class="parallax">

<div class="bg-image"></div>

<div class="bg-text">
  <h2>Now doctors and patient will meet on</h2>
  <h1>Efficient doctor patient portal system</h1>
  <p>online</p>
</div>
</div>
<div align="center">
<div class="container">
<h5>Welcome to you prfile page! </h5>

<?php
//session_start();
//$did = $_GET['id'];
$id = $_SESSION['id'];



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

$sql = "SELECT * FROM patient where id=$id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		
		echo "<div class='card'>";

		$di = $row['id'];
		

				$img = $row['pic'];      
echo '<img src="'.$img.'">';
//echo "<button class='button1 button4'><a href='update-profile-pic.php?did=$di'><a/></button>";

		
		echo "<h6>";
		echo $name = $row['name'];
		echo"</h6>";
        echo "Your pass : " . $row["pass"]. "<br><br> Address : " . $row["address"]. "<br><br> Phone : ". $row["phone"]."<br>";

		

//echo "<button class='button1 button4'><a href='update-patient.php?did=$di'>UPDATE RECORD<a/></button><br>";
echo "<button class='button2 button4'><a href='delete-patient.php?did=$di'>DELECT PROFILE<a/></button>";



echo "</div>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>


<html>
<head>
</head>
<body>
<br>
<br>
<?php

//$id = $_GET['docid'];



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
$sql = "SELECT * FROM appointments where id=$id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		
		echo "<div class='card1'>";
echo "<div id='pi'>Appointment</div>";
		$di = $row['did'];
		
		
		$iid = $row['id'];
		//echo $id;
		echo "<p class='title'>";
		
        echo "Doctor : " . $row["doctor"]. "<br><br> Date : " . $row["date"]. "<br><br> Timing : ". $row["time"]."<br><br><b>" .$row["avail"] ."</b>";

		echo "</p>";
		

echo "</div>";
echo "<a href='delete-appoint.php?id=$id&did=$di' class='aclass'>DELETE RECORD<a/>";

//<button class=''>button2 button4
    }
} else {
    echo "";
}

mysqli_close($conn);
?>





</body>
</html>

