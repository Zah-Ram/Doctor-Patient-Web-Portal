
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

















h1{
	font-family: garamond;
	font-size: 70px;
}



input[type=text], select,time{
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

input[type=password]{
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

textarea{
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: black;
}
h5{
	font-size: 40;
	margin-top: 50px;
	font-family: garamond;
}

input[type=date],time{
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

input[type=file]{
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
input[type=number],file {
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
.container {
  border-radius: 5px;
  background-color: ///#d3d3d3;
  background-color: #dA7B93;
  padding: 20px;
  width: 50%;
  margin: auto;
  
}
h3{
	text-align: center;
	
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



<?php

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

if(isset($_POST['submit'])){
	$n = $_POST['name'];
	
	
	/*
	
	$check= 'select * from patient where name='.$n.'';
$run=mysqli_query($check);
$check = mysqli_num_rows($run);


if($check==1){
echo"<script>alert('name already exists!')</script>";
exit();

}

	*/
	
	
	
	
	$nn = $_POST['pass'];
	$a = $_POST['address'];
	$p = $_POST['phone'];
	
	
	$image = ('images/'.$_FILES['pic']['name']);
	
	
if(copy($_FILES['pic']['tmp_name'],$image)){
}


$sql = "SELECT pass FROM patient WHERE pass='$nn'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	//echo"This password already exists please change your password";
	echo"<script>alert('This password already exists please change your password!')</script>";
exit();
	}
	
	
	
	
	
	/*
	$pic = ('images/'.$_FILES['pic']['name']);
	
	
if(copy($_FILES['pic']['tmp_name'],$pic)){
}
*/
$sql = "INSERT INTO patient (name, pass, address, phone, pic)
VALUES ('$n', '$nn', '$a', '$p','$image')";

if (mysqli_query($conn, $sql)) {
   // echo "<h3>New record created successfully now please go to the Home Page to sign in</h3>";
header('location: ticket.php');
   } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>
<div class="container">
<div align="center">






<h5>Fill below form</h5>
</div>
<form align="center" action="patient-reg.php" method="POST" enctype="multipart/form-data">

<input type="text" name="name" placeholder="Your name" pattern="[A-Za-z\s]+" title="Please use only english alphabets" required><br>
<input type="password" name="pass" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>
<input type="text" name="address" placeholder="Address" pattern="[A-Za-z\s]+" title="Please use only english alphabets" required><br>
<input type="number" name="phone" placeholder="Contact number" required><br>
<b>PROFILE IMAGE</b><br><input type="file" name="pic" placeholder="Your Doctor Name" required><br>


<input type="submit" name="submit"><br>
</form>

</form>
</div>
</body>

</html>

