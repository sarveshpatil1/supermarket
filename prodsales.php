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
          
          <h2 style="font-family:Comic Sans MS ; color:yellow"><p style="text-indent: 22em;">product sales</p></h2>
         <form  action="prodsales.php" name="searchForm" method="get">
          
         </form>

         <?php

         require 'dbConnect.php';
         $conn=getConnection();
         $isgot=0;
           
         $sql = "SELECT SUM(bill_amt) FROM purchase  " ;
         $result = $conn->query($sql);

         if ($result->num_rows >= 0) {
             // output data of each row
             $isgot=1;
			 

             while($row = $result->fetch_assoc()) 
             {
                 echo '<h4 style="font-family:verdana ;color:pink"><p style="text-indent: 33em;color:pink">the total sales amount made today is = '.$row["SUM(bill_amt)"] ;
                                  

             }
            
         } else {

             echo 'customer Not found';
         
       }
             
if($isgot==1)
{
 echo '<a href="main.php"><h2 style="color:yellow">Go to Home</h2></a>';
}
else
{
  echo '<br><h2 style="color:yellow"><a href="main.php">Go to Home</a></h2>';
}
?>

      

  </body>
</html>
