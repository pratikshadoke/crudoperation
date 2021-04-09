<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'links.php' ?>
    <title>Check Data</title>
</head>

<body style="margin:0;padding:0;background-color: #ffffff;font-family:'Poppins', sans-serif;background-image:linear-gradient(rgba(240, 98, 146,50),rgba(187, 222, 251 
,4.5));
    background-position: center; 
    background-attachment: fixed;
    background-repeat: no-repeat; 
    background-size: cover; 
    color: #ffffff;">

    <div class="container ">
        <ul class="list-group p-3 mx-auto text-center" style="width: fit-content;">
            <li class="list-group-item text-center" style="background-color: transparent;
            border-color: rgb(255, 255, 255);">
                <div class="row">

                    <div class="col-auto">
                        <div class=" h2 mt-2 d-flex justify-content-center align-items-center text-center text-white" style="font-weight: bold;">EMPLOYEE DATA</div>
                        <div class="mt-3 ml-3 d-flex justify-content-center align-items-center ">
                            <table class="col table table-bordered table-responsive " style="background-color:#5D6D7E;color:#F2F3F4;  
">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">NAME</th>
                                        <th scope="col">ADDRESS</th>
                                        <th scope="col">EMAIL</th>
                                        <th scope="col">JOB PROFILE</th>
                                        <th scope="col">OPERATION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'connection.php';
                                    $selectquery = " select * from employeeregistration ";
                                    $query = mysqli_query($con, $selectquery);

                                    while ($res = mysqli_fetch_array($query)) {

                                    ?>
                                        <tr>
                                            <td><?php echo $res['id']; ?></td>
                                            <td style="text-transform: capitalize;"><?php echo $res['name']; ?></td>
                                            <td><?php echo $res['email']; ?></td>
                                            <td style="text-transform: capitalize;"><?php echo $res['adress']; ?></td>
                                            <td style="text-transform: capitalize;"><?php echo $res['jobpost']; ?></td>
                                            <td>
                                                <a href="updates.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="top" title="Update" class="fa fa-edit" style="color:#4CAF50;font-weight: bold;font-size:20px;"></a>
                                                <a href="delete.php?id=<?php echo $res['id']; ?>" class="fa fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Delete" style="margin-left: 10px;color:#F44336;font-weight: bold;font-size:20px;"></a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>



                                </tbody>
                            </table>
                            
                        </div>
            </li>
        </ul>
    </div>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</body>

</html>