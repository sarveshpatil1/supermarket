<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>product details</title>
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="js/main.js"></script>
    
  </head>
  <body background="dbms1.png">

<h1 style="font-family:Times New Roman ;color:orange"> <p style="text-indent: 12em;">Supermarket Management System</p></h1>
          
          <h3 style="font-family:Times New Roman;color:black"><p style="text-indent: 29em;">product details</p></h3>
         <form  action="proddet.php" name="searchForm" method="get">
          
         </form>

         <?php

         require 'dbConnect.php';
         $conn=getConnection();
         $isgot=0;
           
         $sql = "SELECT * FROM product " ;
         $result = $conn->query($sql);

         if ($result->num_rows > 0) {
             // output data of each row
             $isgot=1;
			 echo '<h4 style="font-family:Times New Roman ;color:yellow"><table border=5 bordercolor=black bgcolor=grey align=center>
    <tr>
        <th><p style="text-indent: 2em;">BARCODE </th>
        <th><p style="text-indent: 2em;">product ID</th>
        <th><p style="text-indent: 2em;">M F D</th>
		 <th><p style="text-indent: 2em;">brand</th>
    </tr></h4>';
             while($row = $result->fetch_assoc()) 
             {  echo '<tr><td>' .$row["barcode"].'</td><td>' .$row["p_id"].'</td> <td>'.$row["m_date"].' </td> <td>'.$row["brand"].'</h4></p>' ;
                 
             }
            
         } else {

             echo 'customer Not found';
         
       }
             
if($isgot==1)
{
echo '</table><a href="main.php"><h2 style="color:white">Go to Home</h2></a>';
}
else
{
  echo '<h2>No employees<h2><br><a href="main.php">Go to Home</a>';
}
?>

      

  </body>
</html>
