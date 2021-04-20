<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'links.php' ?>
    <title>Check Data</title>
    <style>
        @media screen and (max-width:800px) {
           table tbody{display: none;background-color:none!important;} 
           table{background-color:none!important;color:#455A64; padding: 0 16px;border-radius: 20px;}
           table thead tr th{display: none;}
           table tbody tr, table tbody th{background-color: #EEEEEE ;}
           table tbody tr{border:1px solid #fff;}
           table tbody,table tbody tr{display: block;width: 100%;}
           table tbody tr td::before{content: attr(data-title);display: block;font-weight: bold;font-size: 20px;}
           table tbody tr td,
           table tbody tr th{display: block;width: 50%;float: left;color:#455A64;font-weight: bold;font-size: 15px;}
           table td, table th{border-top: 2px solid #dee2e6;padding: 0 16px;}
           table tbody tr td a{margin-top: 2px;}
           table tbody tr{margin-bottom: 16px;float:left;clear:both;box-shadow: 0px 4px 20px rgba(244, 143, 177,1.5);border-radius: 20px;
           -moz-box-shadow:0px 4px 20px rgba(244, 143, 177,1.5);
           -webkit-box-shadow:0px 4px 20px rgba(244, 143, 177,1.5);}
        }
    </style>
</head>

<body style="margin:0;padding:0;background-color: #ffffff;font-family:'Poppins', sans-serif;background-image:linear-gradient(rgba(240, 98, 146,50),rgba(187, 222, 251 
,4.5));
    background-position: center; 
    background-attachment: fixed;
    background-repeat: no-repeat; 
    background-size: cover; 
    color: #ffffff;">

    <div class="d-flex align-items-center  ">
        <ul class="list-group p-3 mx-auto text-center" style="width: fit-content;">
            <li class="list-group-item text-center" style="background-color: transparent;
            border-color: rgb(255, 255, 255);">
                <div class="row">

                    <div class="col-auto">
                        <div class=" h2 mt-2 d-flex justify-content-center align-items-center text-center text-white" style="font-weight: bold;">EMPLOYEE DATA</div>
                        <div class="mt-3  d-flex justify-content-center align-items-center ">
                            <table class="col table " style="color:#F2F3F4;">
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
                                            <td data-title="ID"><?php echo $res['id']; ?></td>
                                            <td data-title="NAME" style="text-transform: capitalize;"><?php echo $res['name']; ?></td>
                                            <td data-title="EMAIL"><?php echo $res['email']; ?></td>
                                            <td  data-title="ADDRESS"style="text-transform: capitalize;"><?php echo $res['adress']; ?></td>
                                            <td data-title="JOB PROFILE" style="text-transform: capitalize;"><?php echo $res['jobpost']; ?></td>
                                            <td data-title="OPERATIONS">
                                                <a href="updates.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="top" title="Update" class="fa fa-edit" style="color:#4CAF50;font-weight: bold;font-size:25px;"></a>
                                                <a href="delete.php?id=<?php echo $res['id']; ?>" class="fa fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Delete" style="margin-left: 10px;color:#F44336;font-weight: bold;font-size:25px;"></a>
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