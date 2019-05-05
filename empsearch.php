<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>employee details</title>
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="js/main.js">  </script>
    
  </head>
  <body background="dbm.jpg">

<h1 style="font-family:Times New Roman ;color:red"><p style="text-indent: 12em;">SUPERMARKET MANAGEMENT</h1>

          
          <h3 style="font-family:Times New Roman ;color:red"><p style="text-indent: 32em;">employee  details</h3>
         <form  action="empsearch.php" name="searchForm" method="get">
           <h4 style="font-family:Times New Roman ;color:orange"><p style="text-indent: 32em;"><input type="text" name="empname" value="" placeholder="employee name" required>
                     <h4 style="font-family:Times New Roman ;color:red"><p style="text-indent: 32em;"><button type="submit">Search</button>
         </form>

         <?php

         require 'dbConnect.php';
         $conn=getConnection();
         $isgot=0;
           if(isset($_GET['empname']))
         {
           $phone_no=$_GET['empname'];
         $sql = "SELECT * FROM emplyee where e_name='$phone_no'" ;
         $result = $conn->query($sql);

         if ($result->num_rows >0) {
             // output data of each row
             $isgot=1;
			 echo '<h4 style="font-family:Times New Roman ;color:red"><table border=5 bordercolor=black bgcolor=white align=center>
    <tr>
        <th>employee I.D: </th>
        <th>employee Name</th>
        <th>employee role</th>
		<th>employee role</th>
    </tr></h4>';
             while($row = $result->fetch_assoc()) 
             {
                 echo '<tr><td>' .$row["e_id"].'</td><td>' .$phone_no.'</td><td> '.$row["e_role"]. '</td><td>'.$row["admin_id"];
                 
             }
            
         } else {

             echo '<h2 style="color:white">employee Not found';
         }
       }
             
if($isgot==1)
{
 echo '</table><a href="empsearch.php" color=white><br>search for another employee?</a><br><a href="main.php">Go to Home</a>';
}
else
{
  echo '<br><a href="main.php">Go to Home</a>';
}
?>

      

  </body>
</html>
