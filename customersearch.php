<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>customer details</title>
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="js/main.js"> </script>
    
  </head>
  <body background="dbms1.png" >

<h1>supermarket management</h1>

          
          <h3>customer  details</h3>
         <form  action="customersearch.php" name="searchForm" method="get">
           <input type="text" name="customername" value="" placeholder="customer name" required>
                     <button type="submit">Search</button>
         </form>

         <?php

         require 'dbConnect.php';
         $conn=getConnection();
         $isgot=0;
           if(isset($_GET['customername']))
         {
           $phone_no=$_GET['customername'];
         $sql = "SELECT * FROM customer where c_name='$phone_no'" ;
         $result = $conn->query($sql);

         if ($result->num_rows >0) {
             // output data of each row
             $isgot=1;
			 echo '<h4 style="font-family:Times New Roman ;color:red"><table border=5 bordercolor=black bgcolor=white align=center>
    <tr>
        <th>Customer I.D: </th>
        <th>customer Name</th>
        <th>customer no</th>
    </tr></h4>';
             while($row = $result->fetch_assoc()) 
             {
                 echo '<tr><td> <h4 style="font-family:verdana ;color:orange"> ' .$row["c_id"].'</td><td>' .$phone_no.'</td><td>'.$row["c_no"]  ;
                 
             }
            
         } else {

             echo 'customer Not found';
         }
       }
             
if($isgot==1)
{
 echo '</table><a href="customersearch.php">search for another customer?</a><br><a href="main.php">Go to Home</a>';
}
else
{
  echo '<h2><h2><br><a href="main.php">Go to Home</a>';
}
?>

      

  </body>
</html>
