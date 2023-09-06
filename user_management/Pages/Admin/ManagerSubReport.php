




<?php
session_start();
$email = $_SESSION['email'];
if (empty($_SESSION['email'])) {
    header("Location:http://localhost/user_management/index.php");
}
include('connection.php');
$recv = $_REQUEST['id'];

if(isset($_POST['submit'])){
    $mreport = $_POST['mreport'];
}

$sql = "UPDATE `customer_account` SET `m_status`='Yes', `M_report`='$mreport' WHERE `id`=$recv ";

$result = mysqli_query($conn,$sql);
if($result){
    echo '<script>alert("Manager Report successfully");</script>';
    header("refresh:0; URL=http://localhost/user_management/Pages/Admin/Manager.php");
}
else{
    echo '<script>alert("Something went wrong..");</script>';
    header("refresh:0; URL=http://localhost/user_management/Pages/Admin/Manager.php");
}
