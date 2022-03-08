
<html>
<head>
<title>sellusebook</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: #116466;#dA7B93
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



h5{
	font-size: 40;
	margin-top: 80px;
	font-family: garamond;
}

.container {
  border-radius: 5px;
  background-color: grey;
  padding: 20px;
  
  
}
h3{
	text-align: center;
	
}

img{
	width: 300px;
	height: 300px;
	align: center;
	margin-top: 30px;
	box-shadow: 10px 10px 5px grey;
}
.csc{
	text-align: center;
	font-family: garamond;
	font-size: 22px;

}

#design{
	
	
}
.button {
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
  width: 200px;
}

a{
text-decoration: none;
color: white;

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
.button4 {border-radius: 12px;}
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
<a href="find2.php"><button class="button1 button4">Click to search the doctors </button><a/>
</div>










</body>
</html>



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
//$sql = "SELECT * FROM ads ORDER BY ads_id DESC LIMIT 20";
//$sql = mysqli_query($con,"SELECT title, author, grade, pic, ads_id, ads.user_id,users.user_id FROM ads LEFT JOIN users ON ads.user_id=users.user_id WHERE title LIKE '%$searchq%' OR author LIKE '%$searchq%' OR grade LIKE '%$searchq%'") or die(mysqli_error($con));


$sql ='SELECT * FROM doctor ';
//$sql ='SELECT doctor.did,doctor.name,doctor.address,doctor.phone,doctor.price,doctor.spe,doctor.time,doctor.holiday,doctor.pic,appointments.aid,appointments.id FROM doctor left join appointments on doctor.did=appointments.did';
$result = mysqli_query($conn, $sql);

$rows = mysqli_num_rows($result);
if ($rows > 0) {
    
    $cols = 3;    // Define number of columns
 $counter = 1;     // Counter used to identify if we need to start or end a row

 

 
 
 echo '<table id= "design" width="100%" align="center" cellpadding="10" cellspacing="40" >';
 
 
 
    while($row = $result->fetch_assoc()) {
        
        
        //$ads = $row['ads_id'];
         //$id = $row['user_id'];
        
        
        if(($counter % $cols) == 1) {    // Check if it's new row // 3 % 2 = 1 new row  
 echo '<tr>'; 
 }
 
 
 
 
 
 
      // echo "<table border=1 cellspacing=2 cellpadding=2>"; 
      //echo "<table style=width: 100% >";
     // echo "<tr>";
   
     echo "<td>";
     
 

//echo "<a href='welcome.php?user_id=$id&&ads_id=$ads'>";
       //echo "Book title - ". $row["title"] ."<br>";
	   
       $did = $row['did'];
//$id = $row['id'];	   
       
		
        $name = $row["name"];
      //  $name = substr($name  ,0,15);
echo "<div class=csc>";      
	  echo "<b>Doctor name</b> - $name ... <br>";
       
       //echo "Book author - " . $row["author"] . "..." . "<br>";
       /*
        $boo = $row["author"];
        $boos = substr($boo,0,10);
         echo "<b>Author</b> - $boos ... <br>";
       
       //echo "Price -  " . $row["price"]. "<br>";
       
       
        $pr = $row["price"];
        $pri= substr($pr,0,10);
         echo "<b>Price</b> - $pri <br><br><br>";
         
       //echo "Grade - " . $row["grade"]. "<br>";
       //echo "Description - " . $row["descrip"]. "<br>";
      */
	  
	
      $img = $row['pic'];
      
echo '<img src="'.$img.'">';
echo"<br>";
//echo '<a href="details.php?docid='.$did.'"><button class="button button4">Details</button></a>';
//$str = ($pid);
//foreach($pid as $sid){
	
	
echo '<a href="details.php?docid='.$did.'"><button class="button button4">Details</button></a>';
//echo '<a href="details.php?docid='.$did.'&pid='.$id.'"><button class="button button4">Details</button></a>';
//echo "<a href='details.php?docid=".$did."&&pid=".$pid."'><button class='button button4'>Details</button></a>";
//}

//max-width= max-height= align=center accept=gif,image/png,png,image/jpg,image/jpeg
   echo"</div>";
      echo "</a>";    
     
     
  
   echo "</td>"; 
      if(($counter % $cols) == 0) { 
      echo "</tr>";
      }
      $counter++; 
              //echo "</table>";
  
        
        
    }
	echo '</table>';
    
}     
 else {
    echo "0 results";
}
	
$conn->close();
?>
<?php include 'footer.html'; ?>


