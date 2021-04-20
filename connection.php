<?php
$username= "id16593825_employeeregistration";
$password="P!rbestie@155959";
$server ="localhost";
$db="id16593825_employee";

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