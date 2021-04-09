<?php
$username= "root";
$password="";
$server ="localhost:3307";
$db="employee";

$con=mysqli_connect($server,$username,$password,$db);
if($con)
{
    //echo "Connection Successful";
    ?>
   
   <script>
       alert("Connection Sucessful");
       </script>
   <?php
}
else{
    echo "No Connection";
}
?>