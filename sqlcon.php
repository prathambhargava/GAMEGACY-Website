<?php

$servername = "mysql1003.mochahost.com";
$username = "nextgen_nikku_nextgen"; 
$password = "test123";
$dbname = "nextgen_mrimanic_gamegacy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

        $Name =  $_REQUEST['Name'];
        $Email = $_REQUEST['Email'];
        $G_id =  $_REQUEST['G_id'];
        $address = $_REQUEST['address'];
        $mssg = $_REQUEST['mssg'];
          

       $sql = "INSERT INTO gam VALUES ('$Name', 
       '$Email','$G_id','$address','$mssg')";
 


if ($conn->query($sql) === TRUE) {
  
  header('Location: index.html'); 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
