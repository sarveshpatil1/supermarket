<?php

// Create connection
function getConnection() {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database="supermarket";

  

    $conn = new mysqli($servername, $username, $password,$database);

    if ($conn->connect_error) 
	{
     // die("Connection failed: ". mysqli_connect_error());
     return 0;
    }
    
    else{
     // echo "Connected successfully";
     return $conn;
    }

}
getConnection();


?>
