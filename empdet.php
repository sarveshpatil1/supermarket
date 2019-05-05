<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>employee details</title>
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="js/main.js"></script>
    
  </head>
  <body background="dbms1.png">

<h1 style="font-family:Times New Roman ;color:orange"> <p style="text-indent: 12em;">Supermarket Management System</p></h1>
          
          <h3 style="font-family:Times New Roman;color:black"><p style="text-indent: 29em;">Employee details</p></h3>
         <form  action="custdetails.php" name="searchForm" method="get">
          
         </form>

         <?php

         require 'dbConnect.php';
         $conn=getConnection();
         $isgot=0;
           
         $sql = "SELECT * FROM emplyee " ;
         $result = $conn->query($sql);

         if ($result->num_rows > 0) {
             // output data of each row
             $isgot=1;
			 echo '<h4 style="font-family:Times New Roman ;color:red"><p style="text-indent: 22em;"><table border=5 bordercolor=black bgcolor=white align=center>
    <tr>
        <th><p style="text-indent: 5em;">employee ID </th>
        <th>employee Name</th>
        <th><p style="text-indent: 5em;">employee role</th>
		 <th><p style="text-indent: 5em;">admin id</th>
    </tr></h4>';
             while($row = $result->fetch_assoc()) 
             {  echo '<tr><td><h4 style="font-family:verdana ;color:red"><p style="text-indent: 5em;color:red">' .$row["e_id"].'</td><td><h4 style="font-family:verdana ;color:red">' .$row["e_name"].'</td> <td><h4 style="font-family:verdana ;color:red"><p style="text-indent: 5em;">'.$row["e_role"].' </td> <td><h4 style="font-family:verdana ;color:red"><p style="text-indent: 5em;">'.$row["admin_id"].'</h4></p>' ;
                 
             }
            
         } else {

             echo 'customer Not found';
         
       }
             
if($isgot==1)
{

}
else
{
  echo '<h2>No employees<h2><br><a href="main.php">Go to Home</a>';
}
echo '<br></table><a href="main.php"><h2 style="color:white">Go to Home</h2></a>';
?>

      

  </body>
</html>
