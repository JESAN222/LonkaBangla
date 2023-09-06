<?php

session_start();
$email = $_SESSION['email'];
if (empty($_SESSION['email'])) {
    header("Location:http://localhost/user_management/index.php");
}
include('connection.php');
$recv = $_REQUEST['id'];
if (isset($_POST['submit'])) {

    //working now
   // $id = $_POST['Id'];
    $one = $_POST['one'];
    $two = $_POST['two'];
    $three = $_POST['three'];
    $four = $_POST['four'];
    $five = $_POST['five'];
     $six = $_POST['six'];
     $seven = $_POST['seven'];
     $eight = $_POST['eight'];
     $nine = $_POST['nine'];
     $ten = $_POST['ten'];
    $eleven = $_POST['eleven'];
    $twelve = $_POST['twelve'];
     $thirteen = $_POST['thirteen'];
     $fourteen = $_POST['fourteen'];
     $fifteen = $_POST['fifteen'];
    $sixteen = $_POST['sixteen'];
    $seventeen = $_POST['seventeen'];
    $eighteen = $_POST['eighteen'];
    $nineteen = $_POST['nineteen'];
    $twenty = $_POST['twenty'];

    $twenty_one = $_POST['twenty_one'];
    $twenty_two = $_POST['twenty_two'];
    $twenty_three = $_POST['twenty_three'];
    $twenty_four = $_POST['twenty_four'];
    $twenty_five = $_POST['twenty_five'];

    $twenty_six = $_POST['twenty_six'];
    $twenty_seven = $_POST['twenty_seven'];
    $twenty_eight = $_POST['twenty_eight'];
    $twenty_nine = $_POST['twenty_nine'];
    $thirty = $_POST['thirty'];

    $thirty_one = $_POST['thirty_one'];
    $thirty_two = $_POST['thirty_two'];
    $thirty_three = $_POST['thirty_three'];
    $thirty_four = $_POST['thirty_four'];
    $thirty_five = $_POST['thirty_five'];
    $thirty_six = $_POST['thirty_six'];
    $thirty_seven = $_POST['thirty_seven'];
    $thirty_eight = $_POST['thirty_eight'];
    $thirty_nine = $_POST['thirty_nine'];
    $forty = $_POST['forty'];

    $forty_one = $_POST['forty_one'];
    $forty_two = $_POST['forty_two'];
    $forty_three = $_POST['forty_three'];
    $forty_four = $_POST['forty_four'];
    $forty_five = $_POST['forty_five'];
    $forty_six = $_POST['forty_six'];
    $forty_seven = $_POST['forty_seven'];
    $forty_eight = $_POST['forty_eight'];
    $forty_nine = $_POST['forty_nine'];

    echo $three;

    $sql = "UPDATE `Customer_Account` SET `cuDate` = '$one', `cuAccountType` = '$two', `cuLinkCode`='$four', `cuNameCustomer`='$five', `cuFatherName`='$six', `cuMotherName`='$seven', `cuDateofBirth`='$eight', `cuSex`='$nine', `cuNationality`='$ten', `cuPresentAddress`='$eleven', `cuMobile`='$twelve', `cuTels`='$thirteen', `cuPermanentAddress`='$fourteen', `cuTel`='$fifteen', `cuEmailId`='$sixteen', `cuOccupation`='$seventeen', `cuEtin`='$eighteen', `cuNameHolder`='$nineteen', `cuJointFatherName`='$twenty', `cuJointMotherName`='$twenty_one', `cuJointDateofBirth`='$twenty_two', `cuJointSex`='$twenty_three', `cuJointNationality`='$twenty_four', `cuJointPresentAddress`='$twenty_five', `cuJointMobile`='$twenty_six', `cuJointTels`='$twenty_seven', `cuJointPermanentAddress`='$twenty_eight', `cuJointTel`='$twenty_nine', `cuJointEmailId`='$thirty', `cuJointOccupation`='$thirty_one', `cuJointEtin`='$thirty_two', `cuAuthorizedName`='$thirty_three', `cuAuthorizedFatherName`='$thirty_four', `cuAuthorizedDateofBirth`='$thirty_five', `cuAuthorizedSex`='$thirty_six', `cuAuthorizedNationality`='$thirty_seven', `cuAuthorizedPresentAddress`='$thirty_eight', `cuAuthorizedMobile`='$thirty_nine', `cuAuthorizedTels`='$forty', `cuAuthorizedPermanentAddress`='$forty_one' , `cuAuthorizedTel`='$forty_two', `cuAuthorizedEmailId`='$forty_three', `cuAuthorizedOccupation`='$forty_four', `cuAuthorizedEtin`='$forty_five', `cuBankName`='$forty_six', `cuBranchName`='$forty_seven', `cuAccountNo`='$forty_eight' ,`cuRoutingNo`='$forty_nine' WHERE `Id`=$recv";


    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<script>alert("User updated successfully");</script>';
        header("refresh:0; URL=http://localhost/user_management/Pages/Admin/FormOneDetails.php");
    } else {
        echo '<script>alert("Something went wrong...!");</script>';
        header("refresh:10000; URL=http://localhost/user_management/Pages/Admin/UpdatedOne.php");
    }
}


