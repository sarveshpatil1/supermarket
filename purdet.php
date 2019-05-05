<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>purchase</title>
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="js/main.js"></script>
    
  </head>
  <body background="dbms1.png">

<h1 style="font-family:Times New Roman ;color:orange"> <p style="text-indent: 12em;">Supermarket Management System</p></h1>
          
          <h3 style="font-family:Times New Roman;color:black"><p style="text-indent: 29em;">customer purchase details</p></h3>
         <form  action="custdetails.php" name="searchForm" method="get">
          
         </form>

         <?php

         require 'dbConnect.php';
         $conn=getConnection();
         $isgot=0;
           
         $sql = "SELECT c_name,m_date,brand,bill_amt FROM customer c,product p,purchase pu where c.c_id=pu.c_id and p.barcode=pu.barcode" ;
         $result = $conn->query($sql);

         if ($result) {
             // output data of each row
             $isgot=1;
			 echo '<h4><table border=5 bordercolor=black bgcolor=white align=center>
    <tr>
        <th><p style="text-indent: 2em;">customer  </th>

        <th><p style="text-indent: 2em;">BRAND</th>
		 <th><p style="text-indent: 2em;">bill amount</th>
    </tr></h4>';
             while($row = $result->fetch_assoc()) 
             {  echo '<tr><td><h4 style="font-family:verdana ;color:red"><p style="text-indent: 2em;color:red">' .$row["c_name"]. '</td> <td><h4 style="font-family:verdana ;color:red"><p style="text-indent: 2em;">'.$row["brand"].'</td><td><h4 style="font-family:verdana ;color:red"><p style="text-indent: 2em;">' .$row["bill_amt"].'</h4></p>' ;
                 
             }
            
         } else {

             echo 'customer Not found';
         
       }
             
if($isgot==1)
{
echo '</table><a href="main.php"><h2 style="color:orange">Go to Home</h2></a>';
}
else
{
  echo '<h2>No employees<h2><br><a href="main.php">Go to Home</a>';
}
?>

      

  </body>
</html>
