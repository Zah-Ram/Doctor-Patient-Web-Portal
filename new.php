<?php 
session_start();

echo $pid = $_GET['pid'];
echo $did = $_GET['did'];
echo "<br>";

echo $did = $_SESSION['did'];

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

input[type=time]{
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
	//$n = $_POST['name'];
	
	
	/*
	
	$check= 'select * from patient where name='.$n.'';
$run=mysqli_query($check);
$check = mysqli_num_rows($run);


if($check==1){
echo"<script>alert('name already exists!')</script>";
exit();

}

	*/
	
	
	
	
	$name = $_POST['name'];
	$doctor = $_POST['doctor'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$avail = $_POST['avail'];
	$pid = $_POST['pid'];
	$did = $_POST['did'];
	
	
	
	
	$sql = "SELECT * FROM appointments WHERE time='$time' and date='$date' and did='$did'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	//echo"This password already exists please change your password";
	echo"<script>alert('This time has already been alotted to someone!')</script>";
exit();
	}

$sql = "SELECT * FROM appointments WHERE id='$pid' and date='$date'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	//echo"This password already exists please change your password";
	echo"<script>alert('You have already taken one appointment!')</script>";
exit();
	}	
	/*
	$pic = ('images/'.$_FILES['pic']['name']);
	
	
if(copy($_FILES['pic']['tmp_name'],$pic)){
}
*/
$sql = "INSERT INTO appointments (patient,doctor, date, time, avail, id, did)
VALUES ('$name','$doctor', '$date','$time', '$avail','$pid','$did')";

if (mysqli_query($conn, $sql)) {
   // echo "<h3>New record created successfully now please go to the Home Page to sign in</h3>";
   $_SESSION['logged'] = TRUE;
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
<form align="center" action="new.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="pid" value="<?php echo $pid ?>"><br>
<input type="hidden" name="did" value="<?php echo $did ?>"><br>
<input type="hidden" name="avail"> <br>

<input type="text" name="name" placeholder="Your Name" required><br>
<input type="text" name="doctor" placeholder="Your Doctor Name" required><br>
<h3>Please select check-up date and time<br>
<input type="date" name="date" required><br>
<!--<input type="time" name="time" required><br>-->
<select name="time" required><br>

<option>8 :00 AM</option>
<option>8 :20 AM</option>
<option>8 :40 AM</option>
<option>9 :00 AM</option>
<option>9 :20 AM</option>
<option>9 :40 AM</option>
<option>10:00 AM</option>
<option>10:20 AM</option>
<option>10:40 AM</option>
<option>11:00 AM</option>
<option>11:20 AM</option>
<option>11:40 AM</option>
<option>12:00 PM</option>
<option>12:20 PM</option>
<option>12:40 PM</option>
<option>1 :00 PM</option>
<option>1 :20 PM</option>
<option>1 :40 PM</option>
<option>2 :00 PM</option>
<option>2 :20 PM</option>
<option>2 :40 PM</option>
<option>3 :00 PM</option>
<option>3 :20 PM</option>
<option>3 :40 PM</option>
<option>4 :00 PM</option>
<option>4 :20 PM</option>
<option>4 :40 PM</option>
<option>5 :00 PM</option>
<option>5 :20 PM</option>
<option>5 :40 PM</option>
<option>6 :00 PM</option>
</select>
<!--<input type="time" name="time" placeholder="Timing"><br>-->


<input type="submit" name="submit"><br>
</form>

</form>
</div>
</body>

</html>
