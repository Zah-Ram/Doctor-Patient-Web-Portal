
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: #d79922;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("h2.jpg");
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
  
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
  min-height: 550px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  overflow: auto;
}


/*header code ends here */

.bod{

	background-color:#116466;Honeydew
	font-size:36px;
	overflow: auto;
}

.button {
  background-color: grey; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 22px;
  font-style: italic;
  margin: 4px 2px;
  cursor: pointer;
  
}


.button5 {border-radius: 50%;}

	h3{
		margin-top: 30px;
		text-align: center;
		font-family: "Comic Sans MS", cursive, sans-serif;
	}
	a{
		text-decoration: none;
		color: white;
	}
	h1{
		font-family: garamond;
	}
	
	input[type=text], input[type=password] {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  font-size: 17px;
}

input[type=submit] {
  width: 25%;
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 17px;
}

</style>
</head>
<body>
<div class="parallax">

<div class="bg-image"></div>

<div class="bg-text">
  <h2>Now doctors and patients will meet on</h2>
  <h1 style="font-size:70px">Efficient doctor patient portal system</h1>
  <p>online</p>
</div>
</div>


<h3>If you want to register
yourself then click on Create account,
If you want to search a doctor then click on Search doctor.</h3>
<div class="bod">
<div align="center">
<a href="from-index.php"><button class="button button5" style="margin-top: 60px;">Create account</button></a><br>
<!--<a href="from-index.php"><button class="button button5" style="margin-top: 60px;">Create account</button></a><br>

<button class="button button5 open-button" onclick="openForm()" style="margin-top: 90px;"><a href="doctor-register.php">Create account</a></button><br>
-->
<a href="find.php"><button class="button button5" style="margin-top: 30px;">Search Doctor</button></a>


</div>
</div>
<h3>Login here as Doctor.</h3>





<form action="index.php" method="post" align="center">
  <div class="container">


    
    <input type="text" placeholder="Enter Name" name="name" required>
	<br>

  
    <input type="password" placeholder="Enter Password" name="pass" required><br>
<input type="submit" name="submit">
    
  </div>
</form>






</body>
</html>

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
$result = mysqli_query($con, 'select * from doctor where name="'.$name.'" AND pass="'.$pass.'"')or die("could not find db");
;

//$result1 = mysqli_query($con, 'select * from patient where name="'.$name.'" AND pass="'.$pass.'"')or die("could not find db");

if(mysqli_num_rows($result)==1){

while($row = mysqli_fetch_array($result)){

$id =    $row['did'];

$_SESSION['loggedin'] = TRUE;
$_SESSION['id'] = $id;
header('Location: welcome.php');

//header('Location: welcome.php?id='.$id);

}
}
/*
else 
if(mysqli_num_rows($result1)==1){

while($row = mysqli_fetch_array($result1)){

$id =    $row['id'];

$_SESSION['id'] = $id;


header('Location: welcome.php');

//header('Location: welcome.php?id='.$id);

}
}
*/
else
{
echo "account does not exists";
}
exit();
}


?>


<h3>Login here as Patient.</h3>





<form action="welcome-patient.php" method="post" align="center">
  <div class="container">


    
    <input type="text" placeholder="Enter Name" name="name" required>
	<br>

  
    <input type="password" placeholder="Enter Password" name="pass" required><br>
<input type="submit" name="submit">
    
  </div>
</form>






</body>
</html>
<?php include 'footer.html'; ?>

