<?php
session_start();
$email = $_SESSION['email'];
if (empty($_SESSION['email'])) {
    header("Location:http://localhost/user_management/index.php");
}
?>


<?php


$email = $_SESSION['email'];
if (empty($_SESSION['email'])) {
    header("Location:http://localhost/user_management/index.php");
}

include('connection.php');
$sql = "SELECT * FROM `customer_one` WHERE `m_status` = 'Pending'";
$result = mysqli_query($conn, $sql);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<style>
    .btn-areas{
        width:75%;
    }
    .box-sie {
    width: 60%;
    margin: auto;
    }
</style>
<body>

    <div>
        <?php
        include('ManagerNavber.php');
        ?>
    </div>

   
    <div class="btn-areas">
        <?php 
        include 'FormList.php'; 
        ?>
    </div>

    <br><br><br><br><br>
    <!-- <div class="d-flex justify-content-center align-items-center mt-4">
        <div style="height:200px; width:300px; background-color: aquamarine; text-align: center;">
            <h4 class="mt-5">Notification Message</h4>
        </div>
    </div> -->

 <!-- Panding check -->
 <div class="box-sie">
    <div class="mt-1 pt-1">
        <h5 style="text-align: center; font-weight: bold;">Customer Status</h5>
        <hr>
    </div>

    <div class="px-2" style="text-align: center;">
        <div class="table-responsive">
            <table class="table table-striped  table-hover">
                <tr>
                    <th>Id</th>
                    <th>Name of customer</th>
                    <th>Bank Name</th>
                    <th>Account No</th>
                    <th>Manager Status</th>
                    <th colspan="3" style="text-align: center;">Operation </th>

                </tr>

                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>

                    <tr>
                        <td><?php echo $row['Id']; ?></td>
                        <td><?php echo $row['five']; ?></td>
                        <td><?php echo $row['forty_six']; ?></td>
                        <td><?php echo $row['forty_eight']; ?></td>
                        <td><?php echo $row['m_status']; ?></td>
                        <td><a href="http://localhost/user_management/Pages/Admin/ViewOneManager.php?id=<?php echo $row['Id']; ?>"><button class="btn btn-info">View</button></a></td>

                    </tr>

                <?php
                }
                ?>
            </table>
        </div>
    </div>
    </div>
    <!-- Panding check end -->


     <br><br><br><br><br><br><br><br>

    <div class="bg-black py-2 ">
        <?php
        include('adminFooter.php');
        ?>
    </div>

    <!-- Bootstrap CDN JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>