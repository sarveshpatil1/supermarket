<!DOCTYPE html>
<html>
<head>
<title>add employee</title>
<link rel="stylesheet" href="styles.css">
<script type="text/javascript" src="js/main.js"> </script>
</head>
<body background="dbms2.png">
<h1> ADD employee</h1>

<form name="addemployee" action="employee.php" method="post">

        <h4 style="font-family:Times New Roman ;color:red"><p style="text-indent: 32em;">employee id  <input type="text" name="eid"  value="" required ><br>

       <h4 style="font-family:Times New Roman ;color:red"><p style="text-indent: 32em;">employee name  <input type="text" name="Name" value="" required><br>
       <h4 style="font-family:Times New Roman ;color:red"><p style="text-indent: 32em;">employee role  <input type="text" name="role" value="" placeholder="ex:salesman or cleaner" required><br>
       <h4 style="font-family:Times New Roman ;color:red"><p style="text-indent: 32em;">admin id  <input type="text" name="aid" value="" required ><br>

       <h4 style="font-family:Times New Roman ;color:red"><p style="text-indent: 32em;"><button type="submit" name="Submit">Add employee</button><br>
</form>

<?php
require 'dbConnect.php';
  $conn = getConnection();
  if(!$conn)
  {
  header("Location: main.php?status=&failed" );
  }
  if($_POST)
  {$eid=$_POST['eid'];
  $ename=$_POST['Name'];
  $erole=$_POST['role'];
  $adminid=$_POST['aid'];

  $isWritten=false;
  $errorcode=-1;


  //echo $fName."<br>".$mName."<br>".$lName."<br>".$email."<br>".$password."<br>".$confirmPasss;

if(!empty($eid)&&!empty($ename)&&!empty($erole))
{
  $stmt = $conn->prepare("INSERT INTO emplyee (e_id,e_name,e_role,admin_id) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $eid, $ename, $erole, $adminid);
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
        echo "<h2 >employee added!</h2>";
       
    }else {
      echo "<h2 class='error'>Something went wrong please try later</h2>";
      echo '<a href="main.php">Take me to Home </a>';

    }
    if($errorcode<0)
    {
      echo "<h2 >Adding user... Please Wait </h2>";
     
    }

      }    ?>

</body>
</html>
