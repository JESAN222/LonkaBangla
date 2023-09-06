<?php

session_start();
$email = $_SESSION['email'];
if (empty($_SESSION['email'])) {
    header("Location:http://localhost/user_management/index.php");
}
include('connection.php');
$recv = $_REQUEST['id'];
$sql = "DELETE FROM `Customer_Account` WHERE `id`=$recv";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo '<script>alert("User deleted successfully");</script>';
    header("refresh:0; URL=http://localhost/user_management/Pages/Admin/FormOneDetails.php");
} else {
    echo '<script>alert("Something went wrong. Please try again...");</script>';
    header("refresh:0; URL=http://localhost/user_management/Pages/Admin/FormOneDetails.php");
}
