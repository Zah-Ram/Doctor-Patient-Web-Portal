

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
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
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
#sss{
		font-size: 25;
		color: black;
		text-align: center;
	}
	
	img{
		width: 50%;
		height: 50%;
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
$sql = "SELECT * FROM doctor where did=$did";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $name = $row["name"];
		$pass = $row["pass"];
		$address = $row["address"];
		$phone = $row["price"];
		$price = $row["phone"];
		$spe = $row["spe"];
		$time = $row["time"];
		$holiday = $row["holiday"];
		$pic = $row["pic"];
		
    
	}
} else {
    echo "0 results";
}

mysqli_close($conn);
?>


<?php
//session_start();
$did = $_GET['did'];
//echo $did;



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
	
	
	
	


	
	$pic = ('images/'.$_FILES['pic']['name']);
	
	
if(copy($_FILES['pic']['tmp_name'],$pic)){
}


	$sql = "UPDATE doctor SET pic='$pic' WHERE did='$did'";
	
	
	if (mysqli_query($conn, $sql)) {
    echo "<p id='sss'>Your image has been updated successfully</p>";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
}
mysqli_close($conn);
?>



<div class="con">
<div class="container">
<div align="center">
<h5>This is the update page</h5>
</div>
<form align="center" method="POST" enctype="multipart/form-data">


<b>New Profile Image</b> <input type="file" name="pic" placeholder="Holidays" ><br>

<input type="submit" name="submit"><br>
</form>

</form>
</div>
</div>
</body>
</html>