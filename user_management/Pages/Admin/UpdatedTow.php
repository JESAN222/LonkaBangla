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
   $one = $_POST['boApplication'];
   $two = $_POST['boDate'];
   $three = $_POST['boCDBLParticipentId'];
   $four = $_POST['boBoId'];
   $five = $_POST['boDateAccoutnOpened'];
    $six = $_POST['boNameAccount'];
    $seven = $_POST['boTitleMr'];
    $eight = $_POST['boNameContactPersion'];
    $nine = $_POST['boGender'];
    $ten = $_POST['boOccupation'];
   $eleven = $_POST['boFatherOrHusbandName'];
   $twelve = $_POST['boMotherName'];

    $thirteen = $_POST['boAddress'];
    $fourteen = $_POST['boCity'];
    $fifteen = $_POST['boPostCode'];
   $sixteen = $_POST['boState'];
   $seventeen = $_POST['boCountry'];
   $eighteen = $_POST['boTelephone'];
   $nineteen = $_POST['boMobile'];
   $twenty = $_POST['boFax'];
   
   $twenty_one = $_POST['boEmail'];
   $twenty_two = $_POST['boPassportNo'];
   $twenty_three = $_POST['boIssuePlace'];
   $twenty_four = $_POST['boIssueDate'];
   $twenty_five = $_POST['boExpireDate'];
   $twenty_six = $_POST['boBankName'];
   $twenty_seven = $_POST['boBranchName'];
   $twenty_eight = $_POST['boAccountNo'];
   $twenty_nine = $_POST['boRoutingNo'];
   $thirty = $_POST['boElectronicDivident'];

   $thirty_one = $_POST['boTexExemption'];
   $thirty_two = $_POST['boTinTAXId'];
   $thirty_three = $_POST['boNationality'];
   $thirty_four = $_POST['boDateofBirt'];
   $thirty_five = $_POST['boInternalRef'];
   $thirty_six = $_POST['boCompany'];
   $thirty_seven = $_POST['boDateofRegistration'];
   $thirty_eight = $_POST['boRegistrationNo'];
   $thirty_nine = $_POST['boNameInFull'];
   $Forty = $_POST['boNameAccountHolder'];
   $Forty_one = $_POST['boMrMrsMs'];

   $sql = "UPDATE `bo_account` SET `boApplication` = '$one', `boDate` = '$two', `boCDBLParticipentId`='$three', `boBoId`='$four', `boDateAccoutnOpened`='$five', `boNameAccount`='$six', `boTitleMr`='$seven', `boNameContactPersion`='$eight', `boGender`='$nine', `boOccupation`='$ten', `boFatherOrHusbandName`='$eleven', `boMotherName`='$twelve', `boAddress`='$thirteen', `boCity`='$fourteen', `boPostCode`='$fifteen', `boState`='$sixteen', `boCountry`='$seventeen', `boTelephone`='$eighteen', `boMobile`='$nineteen', `boFax`='$twenty', `boEmail`='$twenty_one', `boPassportNo`='$twenty_two', `boIssuePlace`='$twenty_three', `boIssueDate`='$twenty_four', `boExpireDate`='$twenty_five', `boBankName`='$twenty_six', `boBranchName`='$twenty_seven', `boAccountNo`='$twenty_eight', `boRoutingNo`='$twenty_nine', `boElectronicDivident`='$thirty', `boTexExemption`='$thirty_one', `boTinTAXId`='$thirty_two', `boNationality`='$thirty_three', `boDateofBirt`='$thirty_four', `boInternalRef`='$thirty_five', `boCompany`='$thirty_six', `boDateofRegistration`='$thirty_seven', `boRegistrationNo`='$thirty_eight', `boNameInFull`='$thirty_nine', `boNameAccountHolder`='$Forty', `boMrMrsMs`='$Forty_one' WHERE `Id`=$recv";

    //$sql = "UPDATE `customer_two` SET `name`='$name',`email`='$email',`age`='$age' WHERE `id`=$id";

   

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<script>alert("User updated successfully");</script>';
        header("refresh:0; URL=http://localhost/user_management/Pages/Admin/formtwoDetails.php");
    } else {
        echo '<script>alert("Something went wrong...!");</script>';
        header("refresh:0; URL=http://localhost/user_management/Pages/Admin/formtwoDetails.php");
    }
}
