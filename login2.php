<?php
session_start();
ob_start();
$id = $_GET['id'];
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

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 400px;
  margin: auto;
  text-align: center;
  font-family: arial;
  margin-top: 50px;
  background-color:#dA7B93;
  color: black;
  
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: green;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}
button:hover {background-color: black}

.button:active {
  background-color: black;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
img{
	max-height:200px;
	max-width:400px;
	margin-top: 30px;
}
a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}
.title {
  color: grey;
  font-size: 18px;
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

.con{
  border-radius: 5px;
  
  padding: 20px;
  overflow: auto;

  background-color:#116466;#d3d3d3
  
}
.container {
	margin: auto;
  border-radius: 5px;
    background-color: #dA7B93;
  padding: 20px;
  width: 50%;
  text-align: center;
  
  
}

input[type=text], select,time {
  width: 100%;
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

input[type=password] {
  width: 100%;
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
  width: 25%;
  background-color: black;
  color: white;
  padding: 10px 15px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 20;
  
}
input[type=submit]:hover {
  background-color: black;
}
h5{
	font-size: 40;
	margin-top: 80px;
	font-family: garamond;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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



<div class="con">
<div class="container">
<div align="center">
<h5>You need to login if you want to proceed</h5>
<form action="login2.php" method="post">
<input type="text" name="name" placeholder="Please type your name here"/>
<input type="password" name="pass" placeholder="Type your password here"/>
<input type="submit" name="submit" />

</form>
</div>
</div>
</div>

</body>
</html>


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

$sql = "SELECT * FROM doctor where did=$id";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
		
		 $did = $row['did'];
	$_SESSION['did'] = $id;
	
     
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>


<?php
//ob_start();


//session_start();


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
//$result = mysqli_query($con, 'select patient.name,patient.pass,patient.id,doctor.did from patient left join doctor on patient.id = doctor.did where patient.name="'.$name.'" AND patient.pass="'.$pass.' AND doctor.did="'.$id.'"')or die("could not find db");

//$result = mysqli_query($con,"SELECT id, did FROM patient, doctor OUTER JOIN patient.id ON doctor.did WHERE name='$name' AND pass='$pass' AND did='$id'") or die("could not find db but don;t worry");
  

//$result = mysqli_query($con,"SELECT patient.id, doctor.did FROM patient LEFT OUTER JOIN doctor ON patient.id=doctor.did WHERE doctor.did='$id' UNION ALL  SELECT patient.id, doctor.did FROM doctor RIGHT OUTER JOIN patient ON patient.id=doctor.did WHERE patient.name='$name' AND patient.pass='$pass'") or die("could not find db but don;t worry");
//$result = mysqli_query($con,"SELECT id, FROM patient WHERE patient.name='$name' AND patient.pass='$pass' UNION ALL  SELECT did FROM doctor WHERE did='$id'") or die("could not find db but don;t worry");
  
                   //           select t1.value, t2.value from t1 left outer join          t2      on t1.value = t2.value                                                      union all  select t1.value,   t2.value from t2       left outer join t1     on   t1.value = t2.value where t1.value IS NULL 
//$result = mysqli_query($con, 'select * from patient as b where name="'.$name.'" AND pass="'.$pass.'" IN (SELECT * FROM doctor where id=$did)')or die("could not find db");
//$result =mysqli_query($con, 'SELECT patient.id,doctor.did FROM patient INNER JOIN doctor on patient.id = doctor.did where name="'.$name.'" AND pass="'.$pass.'"') or die("could not find db");;
//$result =mysqli_query($con, 'SELECT id, did FROM patient, doctor INNER JOIN patient.id ON doctor.did where name="'.$name.'" AND pass="'.$pass.'"') or die("could not find db");

if(mysqli_num_rows($result)==1){

while($row = mysqli_fetch_assoc($result)){

$pid =    $row['id'];
echo $pid;
$did =    $row['did'];
echo $did;
//echo $did;
//$im = $row['name'];
//echo $im;



//header('Location: find.php?id='.$pid);

header("Location: new.php?pid=$pid&&did=$did");
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