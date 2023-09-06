




<?php
session_start();
$email = $_SESSION['email'];
if (empty($_SESSION['email'])) {
    header("Location:http://localhost/user_management/index.php");
}
include('connection.php');
$recv = $_REQUEST['id'];


$sql = "UPDATE `Customer_Account` SET `status`='Accepted' WHERE `id`=$recv";

$result = mysqli_query($conn,$sql);
if($result){
    echo '<script>alert("User Accepted successfully");</script>';
    header("refresh:0; URL=http://localhost/user_management/Pages/Admin/FormOneDetails.php");
}
else{
    echo '<script>alert("Something went wrong..");</script>';
    header("refresh:0; URL=http://localhost/user_management/Pages/Admin/FormOneDetails.php");
}
