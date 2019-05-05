<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CUSTOMER DETAILS</title>
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="js/main.js">  </script>
    
  </head>
  <body background="dbms2.jpg">

     <h1 style="font-family:Times New Roman ;color:red"> <p style="text-indent: 12em;">Supermarket Management System</p></h1>
          
          <h2 style="font-family:Comic Sans MS ; color:yellow"><p style="text-indent: 22em;">Customer  Details</p></h2>
         <form  action="custdetails.php" name="searchForm" method="get">
          
         </form>

         <?php

         require 'dbConnect.php';
         $conn=getConnection();
         $isgot=0;
           
         $sql = "SELECT * FROM customer " ;
         $result = $conn->query($sql);

         if ($result->num_rows > 0) {
             // output data of each row
             $isgot=1;
			 echo '<h4 style="font-family:Times New Roman ;color:black"><table border=5 bordercolor=black bgcolor=white align=center>
    <tr>
        <th><p style="text-indent: 5em;">Customer I.D: </th>
        <th>Name</th>
        <th>customer no</th>
    </tr></h4>';

             while($row = $result->fetch_assoc()) 
             {
                 echo '<tr>  <td><h4 style="font-family:verdana ;color:black"><p style="text-indent: 5em;color:black">' .$row["c_id"].'</td><td><h4 style="font-family:verdana ;color:black">' .$row["c_name"].'</td> <td><h4 style="font-family:verdana ;color:black"><p style="text-indent: 2em;">'.$row["c_no"].' </td> </h4></p>' ;
                                  

             }
            
         } else {

             echo 'customer Not found';
         
       }
             
if($isgot==1)
{
 echo '<a href="main.php"><h3 style="color:yellow">Go to Home</h2></a>';
}
else
{
  echo '<h2>No customers</h2><br><h3 style="color:yellow"><a href="main.php">Go to Home</a></h3>';
}
?>

      

  </body>
</html>
