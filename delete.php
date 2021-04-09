<?php
    include 'connection.php';
    include 'links.php';
    $ids = $_GET['id'];                              
    $deletequery = " delete from  employeeregistration  where id='$ids'";
    $result = mysqli_query($con, $deletequery);
    
     if($result)
    {
        header('location:home.php');
    ?>
        <script>
        alert("Data deleted successfully");
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
        alert("Data not deleted!!!"); 
        </script>
        <?php
    }

?>