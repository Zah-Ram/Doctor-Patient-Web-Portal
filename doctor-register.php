

<html>
<head>
<style>

body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  
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
  background-color: #45a049;
}
h5{
	font-size: 40;
	margin-top: 80px;
	font-family: garamond;
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
input[type=file] {
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

input[type=time] {
    width: 43.5%;
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
	margin: auto;
  border-radius: 5px;
    background-color: #dA7B93;
  padding: 20px;
  width: 50%;
  text-align: center;
  
  
}

.con{
  border-radius: 5px;
  
  padding: 20px;
  overflow: auto;

  background-color:#116466;#d3d3d3
  
}
h3{
	text-align: center;
	
}

input[type=submit]:hover {
  background-color: black;
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
	$nn = $_POST['pass'];
	$a = $_POST['address'];
	$p = $_POST['phone'];
	$pp = $_POST['price'];
	$s = $_POST['spe'];
	$pmc = $_POST['pmc'];
	$t = $_POST['time'];
	$tt = $_POST['timeto'];
	//$h = $_POST['holiday'];
	$h = implode(',', $_POST['holiday']);
	
	
	
	


	
	$pic = ('images/'.$_FILES['pic']['name']);
	
	
if(copy($_FILES['pic']['tmp_name'],$pic)){
}

/*
$check_mobile= "select name from doctor where pass='$n'";
$run_mobile=mysqli_query($conn, $check_mobile);
$check = mysqli_num_rows($run_mobile);
//$check = mysqli_num_rows($conn, $check_mobile);

if($check==1){
echo"<script>alert('name already exists!')</script>";
exit();

}	*/
$sql = "SELECT name FROM doctor WHERE name='$n'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	//echo"This password already exists please change your password";
	echo"<script>alert('This name already exists please change your name!')</script>";
exit();
	}

	
$sql = "INSERT INTO doctor (name, pass, address, phone, price, spe, pmc, time, timeto, holiday, pic)
VALUES ('$n', '$nn', '$a', '$p', '$pp', '$s', '$pmc', '$t', '$tt', '$h', '$pic')";

if (mysqli_query($conn, $sql)) {
    echo "<h3>New record created successfully now please go to the <a href='index.php'>Home Page</a> to sign in</h3>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

mysqli_close($conn);
?>
<div class="con">
<div class="container">
<div align="center">






<h5>Fill below form</h5>
</div>
<form align="center" action="doctor-register.php" method="POST" enctype="multipart/form-data">

<input type="text" name="name" placeholder="Your name" pattern="[A-Za-z\s]+" title="Please use only english alphabets" required><br>
<input type="password" name="pass" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>
<input type="text" name="address" placeholder="Address" pattern="[A-Za-z\s]+" title="Please use only english alphabets" required><br>
<input type="number" name="phone" placeholder="Contact number" required><br>
<input type="number" name="price" placeholder="Fees per patient" required><br>
<input type="text" name="spe" placeholder="Specialization" pattern="[A-Za-z\s]+" title="Please use only english alphabets" required><br>
<input type="number" name="pmc" placeholder="PMDC registration number" required><br>
<!--<input type="time" name="time" placeholder="Timing"><br>-->
<b>CLINIC TIMING</b><br>
<b>FROM</b><input type="time" name="time" placeholder="Timing Like 10 am - 7 pm" required>
<b>TO</b><input type="time" name="timeto" placeholder="Timing Like 10 am - 7 pm" required>
<!--<input type="text" name="holiday" placeholder="Holidays" required><br>-->
<br><br>
<b>WEEKLY HOLIDAYS</b><br><br>

<label class="container">S
  <input type="checkbox" name="holiday[]" value="Sunday" checked="checked">

</label>

<label class="container">M
  <input type="checkbox" name="holiday[]" value="Monday">
 
</label>
<label class="container">T
  <input type="checkbox" name="holiday[]" value="Tuesday">
 
</label>
<label class="container">W
  <input type="checkbox" name="holiday[]" value="Wednesday">
 
</label>
<label class="container">T
  <input type="checkbox" name="holiday[]" value="Thursday">

</label>
<label class="container">F
  <input type="checkbox" name="holiday[]" value="Friday">

</label>
<label class="container">S
  <input type="checkbox" name="holiday[]" value="Saturday">
</label>

<br>
<br>
<b>PROFILE IMAGE</b> <input type="file" name="pic" required><br>



<input type="submit" name="submit"><br>
</form>

</form>


</div>
</div>


</body>

</html>



