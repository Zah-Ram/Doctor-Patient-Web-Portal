


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
 
  width: 50%;
  background-color: #d3d3d3;
  margin-top: -50px;
}





.card{
	
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
	font-size: 50;
	font-family: garamond;
	margin-top: -1px;
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
input[type=date ]{
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

input[type=select],select{
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

input[type="submit"]:hover{
	background-color: black;
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
	height:300;
	width:300;
}
.button1 {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  margin-top: 30px;
  width: 300px;
}
.button2 {
  background-color: red; 
  border: none;
  color: white;
  padding: 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  margin-top: 30px;
  width: 300px;
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
	}
	.card1 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 400px;
  margin: auto;
  text-align: center;
  font-family: arial;
  margin-top: 50px;
  
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
  background-color: white;
  border-radius: 12px;
}
	a.aclass{
	
	}
	
	#sss{
		font-size: 25;
		color: black;
		text-align: center;
	}
	.con{
		background-color: #dA7B93;
		width: 50%;
		margin: auto;
		border-radius: 12px;
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

$id = $_GET['ddid'];
$di = $_GET['did'];



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

$sql = "SELECT * FROM appointments where id=$id and did=$di";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		
		echo "<div class='card1'>";
echo "<div id='pi'>Appointment</div>";
		//$di = $row['did'];
		
		
		$iid = $row['id'];
		//echo $id;
		echo "<p class='title'>";
		
        echo "<b>This appointment for : </b>" . $row["patient"]. "<br><br><b> Date : </b>" . $row["date"]. "<br><br><b> Timing : </b>". $row["time"];

		echo "</p>";
		

echo "</div>";

//<button class=''>button2 button4
    }
}
else 
{
    echo "0 results";

}
mysqli_close($conn);
?>


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
	
	$date = $_POST['date'];
	$time = $_POST['time'];
	$avail = $_POST['avail'];
	$sql = "UPDATE appointments SET date='$date' , time='$time' , avail='$avail' WHERE id='$id' and did='$di'";
	
	
	if (mysqli_query($conn, $sql)) {
    echo "<p id='sss'>Record updated successfully</p>";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
}
mysqli_close($conn);
?>
<div class="con">
<form method="post" align="center" >
<br>
<br>
<br>
<b style="color: black; ">Set below new date and timing </b><br>
<input type="date" name="date" placeholder="New Date "></br>

<input type="time" name="time" placeholder="New Time "><br>
<select name="avail">
  <option value="Doctor updated the timing">Doctor updated the timing</option>
  <option value="Slots are full with doctors">Slots are full with doctors</option>
  <option value="Doctor is on leave today">Doctor is on leave today</option>
  
</select>

<input type="submit" name="submit">

</form>
</div>
</body>
</html>
