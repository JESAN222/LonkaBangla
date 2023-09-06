<?php
include('connection.php');

if(isset($_POST['submit'])){
  
    $poaApplicationNo = $_POST['poaApplicationNo'];
    $poaDate = $_POST['poaDate'];
    $poaCDBLParticipaneId = $_POST['poaCDBLParticipaneId'];
    $poaAccountHolderBoId = $_POST['poaAccountHolderBoId'];
    $poaNameAccountHolder = $_POST['poaNameAccountHolder'];
     $poaShortName = $_POST['poaShortName'];
     $poaTitleMrMrs = $_POST['poaTitleMrMrs'];
     $poaAddress = $_POST['poaAddress'];
     $poaCity = $_POST['poaCity'];
     $poaPostCode = $_POST['poaPostCode'];
    $poaStateDivision = $_POST['poaStateDivision'];
    $poaCountry = $_POST['poaCountry'];

     $poaTelephone = $_POST['poaTelephone'];
     $poaMobilePhone = $_POST['poaMobilePhone'];
     $poaFax = $_POST['poaFax'];
    $poaEmail = $_POST['poaEmail'];
    $poaPassportNo = $_POST['poaPassportNo'];
    $poaIssuePlace = $_POST['poaIssuePlace'];
    $poaIssueDate = $_POST['poaIssueDate'];
    $poaExpireDate = $_POST['poaExpireDate'];
    $poaResidency = $_POST['poaResidency'];
    $poaNationality = $_POST['poaNationality'];
    $poaDateofBirth = $_POST['poaDateofBirth'];
    $poaPowerAttornryEffective = $_POST['poaPowerAttornryEffective'];
    $poaTo = $_POST['poaTo'];
    $poaRemarkes = $_POST['poaRemarkes'];
 
   // echo $twenty_one;
   $sql_ins = "INSERT INTO `power_of_attornry` (`status`, `poaApplicationNo`, `poaDate`, `poaCDBLParticipaneId`, `poaAccountHolderBoId`, `poaNameAccountHolder`, `poaShortName`, `poaTitleMrMrs`, `poaAddress`, `poaCity`, `poaPostCode`, `poaStateDivision`, `poaCountry`, `poaTelephone`, `poaMobilePhone`, `poaFax`, `poaEmail`, `poaPassportNo`, `poaIssuePlace`, `poaIssueDate`, `poaExpireDate`, `poaResidency`, `poaNationality`, `poaDateofBirth`, `poaPowerAttornryEffective`, `poaTo`, `poaRemarkes`) 
   VALUES  ('Pending', '$poaApplicationNo', '$poaDate', '$poaCDBLParticipaneId' , '$poaAccountHolderBoId' , '$poaNameAccountHolder', '$poaShortName', '$poaTitleMrMrs', '$poaAddress', '$poaCity', '$poaPostCode', '$poaStateDivision', '$poaCountry', '$poaTelephone', '$poaMobilePhone', '$poaFax', '$poaEmail', '$poaPassportNo', '$poaIssuePlace', '$poaIssueDate', '$poaExpireDate', '$poaResidency', '$poaNationality', '$poaDateofBirth', '$poaPowerAttornryEffective', '$poaTo', '$poaRemarkes')";



    $result = mysqli_query($conn, $sql_ins);

  
    include('../User/FormFive.php');
 
    // if($result){
    //     echo '<script>alert("Data submitted successfully");</script>';
    //     header('refresh:1000; url= http://localhost/user_management/Pages/user/formone.php');
    // }
    // else{
    //     echo '<script>alert("Something went wrong....")</script>';
    //     header('refresh:1000; url= http://localhost/user_management/Pages/user/formone.php');
    // }
   // echo '<script>alert("Successsssss....")</script>';
}

else{
    echo '<script>alert("Something went wrong....")</script>';
    header('refresh:1000; url= http://localhost/user_management/Pages/user/formtwoSubmit.php');
}


// $one = $_POST['poaApplicationNo'];
// $two = $_POST['poaDate'];
// $three = $_POST['poaCDBLParticipaneId'];
// $four = $_POST['poaAccountHolderBoId'];
// $five = $_POST['poaNameAccountHolder'];
//  $six = $_POST['poaShortName'];
//  $seven = $_POST['poaTitleMrMrs'];
//  $eight = $_POST['poaAddress'];
//  $nine = $_POST['poaCity'];
//  $ten = $_POST['poaPostCode'];
// $eleven = $_POST['poaStateDivision'];
// $twelve = $_POST['poaCountry'];
//  $thirteen = $_POST['poaTelephone'];
//  $fourteen = $_POST['poaMobilePhone'];
//  $fifteen = $_POST['poaFax'];
// $sixteen = $_POST['poaEmail'];
// $seventeen = $_POST['poaPassportNo'];
// $eighteen = $_POST['poaIssuePlace'];
// $nineteen = $_POST['poaIssueDate'];
// $twenty = $_POST['poaExpireDate'];

// $twenty_one = $_POST['poaResidency'];
// $twenty_two = $_POST['poaNationality'];
// $twenty_three = $_POST['poaDateofBirth'];
// $twenty_four = $_POST['poaPowerAttornryEffective'];
// $twenty_five = $_POST['poaTo'];
// $twenty_six = $_POST['poaRemarkes'];