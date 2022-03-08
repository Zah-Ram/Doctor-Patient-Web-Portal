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

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 400px;
  margin: auto;
  text-align: center;
  font-family: arial;
  margin-top: 50px;
  
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
</body>


</html>

<?php

$rid = $_GET['docid'];



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

$sql = "SELECT * FROM doctor where id=$rid";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		
		echo "<div class='card'>";
echo "<div id='pi'>Doctor Profile</div>";
		$did = $row['id'];
		$img = $row['pic'];      
echo '<img src="'.$img.'">';
		
		echo "<p class='title'>";
		
        echo "Name : " . $row["name"]. "<br><br> Address : " . $row["address"]. "<br><br> Phone : ". $row["phone"]. "<br><br> Specialization : " . $row["spe"]. "<br><br> Timing  : " . $row["time"]. "<br><br> Leaves : " . $row["holiday"]. "<br><br> Rate : " . $row["price"]."<br><br>";

		echo "</p>";
		


echo "<div style='margin: 24px 0;'>
    <a href='#'><i class='fa fa-dribbble'></i></a> 
    <a href='#'><i class='fa fa-twitter'></i></a>  
    <a href='#'><i class='fa fa-linkedin'></i></a>  
    <a href='#'><i class='fa fa-facebook'></i></a> 
  </div>";
echo "<a href='login.php?ddid=$did'><button>Click here for appointment </button></a>";

echo "</div>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

