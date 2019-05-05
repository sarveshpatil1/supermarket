<!DOCTYPE html>
<html>
<head>
<title>add customer</title>
<link rel="stylesheet" href="styles.css">
<script type="text/javascript" src="js/main.js"> </script>
</head>
<body background="dbms1.png">
<h1> ADD CUSTOMER</h1>

<form name="addcust" action="upcust.php" method="post">

         <h4 style="font-family:Times New Roman ;color:red"><p style="text-indent: 32em;">customerid  <input type="text" name="cid" value="" required ><br></p>

         <h4 style="font-family:Times New Roman ;color:red"><p style="text-indent: 32em;">customerName  <input type="text" name="Name" value="" required><br></p>
        
       
       <p style="text-indent: 32em;"><button type="submit" name="Submit">update customer</button><br>
</form>

<?php
require 'dbConnect.php';
  $conn = getConnection();
  if($conn->connect_error)
  {
  header("Location: signUp.php?status=&failed" );
  }
  if($_POST)
  {
	$customerid=$_POST['cid'];
    $customerName=$_POST['Name'];
	

  $isWritten=false;
  $errorcode=-1;


  //echo $fName."<br>".$mName."<br>".$lName."<br>".$email."<br>".$password."<br>".$confirmPasss;

if(!empty($customerid)&&!empty($customerName)&&!empty($customerno))
{
  $stmt = $conn->prepare("UPDATE customer set c_name="$customerName" where c_id="$customerid");
  
  if($stmt->execute())
  {
       $isWritten=true;
       $errorcode=100;
  }else {
    $isWritten=false;
    $errorcode=100;

  }


}
else {
echo "No input";
}
  }
  

?>




   <?php
if($_POST)
{
   if($isWritten)
    {
        echo "<h2 >Customer Add</h2>";
       
    }else {
      echo "<h2 class='error'> wrong please try later</h2>";
      echo '<a href="main.php">Take me to Home </a>';

    }
    if($errorcode<0)
    {
      echo "<h2 >Adding user.... Please Wait </h2>";
     
    }

      }    ?>

    






</body>
</html>
