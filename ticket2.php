
<html>
<head>
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
  height: 360px;
  width: 50%;
  background-color:// #d3d3d3;
  background-color:// #dA7B93;
  background-color:#7d3cff;
  margin-top: -50px;
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
  background-color:#7d3cff;
  
  }

table, th, td {
  border: 5px solid #d3d3d3;
  border-collapse: collapse;
  background-color:#7d3cff;
  color: white;
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

#head{
	
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
<h5>Please login to see your bookings or <a href='index.php'>click here</a> to go to homepage </h5>

<form action="ticket2.php" method="post" align="center">
 


    
    <input type="text" name="name" placeholder="Enter Name" required>
	<br>

  
    <input type="password" name="pass" placeholder="Enter Password" required><br>
<input type="submit" name="submit">
    
  
</form>


</div>




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
</div>
</body>

</html>