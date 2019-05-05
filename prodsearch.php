<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>product search</title>
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="js/main.js">  </script>
    
  </head>
  <body background="dbs4.jpg">

<h1 style="font-family:Times New Roman ;color:red"><p style="text-indent: 12em;">supermarket management</h1>

          
          <h3 style="font-family:Times New Roman ;color:red"><p style="text-indent: 32em;">product search</h3>
         <form  action="prodsearch.php" name="searchForm" method="get">
           <p style="text-indent: 32em;"><input type="text" name="barcode" value="" placeholder="brand" required>
                   <p style="text-indent: 32em;">  <button type="submit">Search</button>
         </form>

         <?php

         require 'dbConnect.php';
         $conn=getConnection();
         $isgot=0;
           if(isset($_GET['barcode']))
         {
           $phone_no=$_GET['barcode'];
         $sql = "SELECT * FROM product where brand='$phone_no'" ;
         $result = $conn->query($sql);

         if ($result->num_rows>0) {
             // output data of each row
             $isgot=1;
            echo '<h4 style="font-family:Times New Roman ;color:black"><table border=5 bordercolor=black bgcolor=white align=center>
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

             echo 'product Not found';
         }
       }
             
if($isgot==1)
{
 echo '</table><a href="prodsearch.php">search for another product?</a><br><a href="main.php">Go to Home</a>';
}
else
{
  echo '<h2><h2><br><a href="main.php">Go to Home</a>';
}
?>

      

  </body>
</html>
