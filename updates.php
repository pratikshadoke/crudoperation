<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'links.php' ?>
    <title>Update Data</title>
</head>

<body style="margin:0;padding:0;background-color: #ffffff;font-family:'Poppins', sans-serif;background-image:linear-gradient(rgba(240, 98, 146,50),rgba(187, 222, 251 
,4.5));
    background-position: center; 
    background-attachment: fixed;
    background-repeat: no-repeat; 
    background-size: cover; 
    color: #ffffff;">
    <div class=" d-flex justify-content-evenly align-items-center  mt-5" style="flex-direction:column;">
        <ul class="list-group p-3 mx-auto" style="width: fit-content;">
            <li class="list-group-item" style="background-image:linear-gradient(to right,rgba(57, 73, 171 ,50),rgba(100, 181, 246 
    ,1.5));
    background-position: center; 
    background-attachment: fixed;
    background-repeat: no-repeat; 
    background-size: cover; 
      border-color: rgb(255, 255, 255);">

                <div class="row">
                    <div id="bgformis" class="col-12">
                        <div class="large d-flex justify-content-center align-items-center font-weight-bold font- mt-2" style="color:#ffffff;">
                            <div class="h2 d-flex justify-content-center align-items-center  text-center" style="width:100px;height:75px;border: 1px solid #ffffff;border-radius: 50px;"><i class="fas fa-address-card" style="font-size: 50px;border-radius: 20px!important;"></i></div>
                        </div>
                        <div class="large d-flex justify-content-center align-items-center font-weight-bold font- mt-2" style="color: #ffffff;">
                            <div class="h2 text-center font-weight-bold">EMPLOYEE CRUD OPERATION USING MYSQL PHP</div>
                        </div>
                        <div class="bg-form mb-3 d-flex justify-content-center align-items-center " style="flex-direction:columm;background-color: #ECEFF1  ;border-radius:100px 0px 100px 0px">
                            <div class="col-6 large d-flex justify-content-center align-items-center " style="flex-direction:column;color: #ffffff;">
                                <img id='bounce' src="offer.png" style="width: 130px;height:100px" alt="">
                                <div class="h4 text-center font-weight-bold mt-4" style="color:#64B5F6 ">Welcome </div>
                                <div class="text-center " style="color:#64B5F6">Please fill the details carefully & Check form here & perform operations on it. </div>
                                <div class="text-center mt-2">
                                    <a type="checkform" href="home.php" class="btn btn-primary mb-3 font-weight-bold" value="Check Form" style="background:#fff;color:#3949AB ;border-radius:50px;padding: 4px 8px;">Check form</button></a>

                                </div>

                            </div>

                            <div class="col-md-6 col-sm-4">
                                <form method="POST" action="">
                                    <?php
                                    include 'connection.php';
                                    $ids = $_GET['id'];
                                    $showquery = " select * from  employeeregistration where id={$ids} ";
                                    $showdata = mysqli_query($con, $showquery);
                                    $arraydata = mysqli_fetch_array($showdata);

                                    if (isset($_POST['submit'])) {
                                      
                                        $nameis = $_POST['username'];
                                        $emailis = $_POST['email'];
                                        $addressis = $_POST['address'];
                                        $jobpostis = $_POST['jobpost'];
                                        $idupdate = $_GET['id'];

                                        $updatequery = " update  employeeregistration set id=$idupdate,name='$nameis',adress='$addressis',email='$emailis',jobpost='$jobpostis' where id='$idupdate'";
                                        $result = mysqli_query($con, $updatequery);
                                        if ($result) {
                                            
                                            header('location:index.php');
                                    ?>
                                            <script>
                                                alert("Data updated successfully");
                                            </script>
                                        <?php
                                        } else {
                                        ?>
                                            <script>
                                                alert("Data not updated!!!");
                                            </script>
                                    <?php
                                        }
                                    }
                                    ?>




                                    <input type="name" name="username" class="form-control   mt-4" id="inputname" value="<?php echo $arraydata['name']; ?> " placeholder="Enter Name here" style="background-color: #ffffff;color:#3949AB ;border-radius: 5px;text-transform:capitalize;" required autocomplete="off">
                                    <input type="email" name="email" class="form-control   mt-4" id="inputemail" value="<?php echo $arraydata['email']; ?> " placeholder="Enter Email here" style="background-color: #ffffff;color:#3949AB ;border-radius: 5px;text-transform:lowercase;" required autocomplete="off">
                                    <input type="name" name="address" class="form-control   mt-4" id="inputadress" value="<?php echo $arraydata['adress']; ?> " placeholder="Enter Address here" style="background-color: #ffffff;color:#3949AB ;border-radius: 5px;text-transform:capitalize;" required autocomplete="off">
                                    <input type="name" name="jobpost" class="form-control  mt-4" id="inputjobpost" value="<?php echo $arraydata['jobpost']; ?>" placeholder="Enter Job Post here" style="background-color: #ffffff;color:#3949AB ;border-radius: 5px;text-transform:capitalize;" required autocomplete="off">
                                    <div class="text-center mt-4">
                                        <input type="submit" name='submit' class="btn btn-primary mb-3 font-weight-bold" value="Update" style="border-color:#fff;border-radius:20px;padding: 6px 12px;box-shadow:#64B5F6"></button>

                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <div class="text-center font-weight-bold h4">Designed by : Pratiksha Doke</div>
</body>

</html>


</div>
</li>
</ul>
</div>

</body>

</html>