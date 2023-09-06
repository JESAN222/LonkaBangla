




<?php

include('connection.php');

if(isset($_POST['submit'])){
  
    $boApplication = $_POST['boApplication'];
    $boDate = $_POST['boDate'];
    $boCDBLParticipentId = $_POST['boCDBLParticipentId'];
    $boBoId = $_POST['boBoId'];
    $boDateAccoutnOpened = $_POST['boDateAccoutnOpened'];
     $boNameAccount = $_POST['boNameAccount'];
     $boTitleMr = $_POST['boTitleMr'];
     $boNameContactPersion = $_POST['boNameContactPersion'];
     $boGender = $_POST['boGender'];
     $boOccupation = $_POST['boOccupation'];
    $boFatherOrHusbandName = $_POST['boFatherOrHusbandName'];
    $boMotherName = $_POST['boMotherName'];

     $boAddress = $_POST['boAddress'];
     $boCity = $_POST['boCity'];
     $boPostCode = $_POST['boPostCode'];
    $boState = $_POST['boState'];
    $boCountry = $_POST['boCountry'];
    $boTelephone = $_POST['boTelephone'];
    $boMobile = $_POST['boMobile'];
    $boFax = $_POST['boFax'];

    $boEmail = $_POST['boEmail'];
    $boPassportNo = $_POST['boPassportNo'];
    $boIssuePlace = $_POST['boIssuePlace'];
    $boIssueDate = $_POST['boIssueDate'];
    $boExpireDate = $_POST['boExpireDate'];
    $boBankName = $_POST['boBankName'];
    $boBranchName = $_POST['boBranchName'];
    $boAccountNo = $_POST['boAccountNo'];
    $boRoutingNo = $_POST['boRoutingNo'];
    $boElectronicDivident = $_POST['boElectronicDivident'];

    $boTexExemption = $_POST['boTexExemption'];
    $boTinTAXId = $_POST['boTinTAXId'];
    $boNationality = $_POST['boNationality'];
    $boDateofBirt = $_POST['boDateofBirt'];
    $boInternalRef = $_POST['boInternalRef'];
    $boCompany = $_POST['boCompany'];
    $boDateofRegistration = $_POST['boDateofRegistration'];
    $boRegistrationNo = $_POST['boRegistrationNo'];
    $boNameInFull = $_POST['boNameInFull'];
    $boNameAccountHolder = $_POST['boNameAccountHolder'];
    $boMrMrsMs = $_POST['boMrMrsMs'];

  

    $sql_ins = "INSERT INTO `bo_account` (`status`, `boApplication`, `boDate`, `boCDBLParticipentId`, `boBoId`, `boDateAccoutnOpened`, `boNameAccount`, `boTitleMr`, `boNameContactPersion`, `boGender`, `boOccupation`, `boFatherOrHusbandName`, `boMotherName`, `boAddress`, `boCity`, `boPostCode`, `boState`, `boCountry`, `boTelephone`, `boMobile`, `boFax`, `boEmail`, `boPassportNo`, `boIssuePlace`, `boIssueDate`, `boExpireDate`, `boBankName`, `boBranchName`, `boAccountNo`, `boRoutingNo`, `boElectronicDivident`, `boTexExemption`, `boTinTAXId`, `boNationality`, `boDateofBirt`, `boInternalRef`, `boCompany`, `boDateofRegistration`, `boRegistrationNo`, `boNameInFull`, `boNameAccountHolder`, `boMrMrsMs`) VALUES  ('Pending', '$boApplication', '$boDate', '$boCDBLParticipentId' , '$boBoId' , '$boDateAccoutnOpened', '$boNameAccount', '$boTitleMr', '$boNameContactPersion', '$boGender', '$boOccupation', '$boFatherOrHusbandName', '$boMotherName', '$boAddress', '$boCity', '$boPostCode', '$boState', '$boCountry', '$boTelephone', '$boMobile', '$boFax', '$boEmail', '$boPassportNo', '$boIssuePlace', '$boIssueDate', '$boExpireDate', '$boBankName', '$boBranchName', '$boAccountNo', '$boRoutingNo', '$boElectronicDivident', '$boTexExemption', '$boTinTAXId', '$boNationality', '$boDateofBirt', '$boInternalRef', '$boCompany', '$boDateofRegistration', '$boRegistrationNo', '$boNameInFull', '$boNameAccountHolder', '$boMrMrsMs')";
    $result = mysqli_query($conn, $sql_ins);
        
 if($result){
        //include('../User/FormFour.php');
        echo '<script>alert("Successfully Submited");</script>';
    }
    else{
        echo '<script>alert("Somthing went wrong");</script>';
        header('refresh:0; url= http://localhost/user_management/Pages/user/formtwo.php');
    }
}
else{
    echo '<script>alert("Something went wrong ....")</script>';
    header('refresh:; url= http://localhost/user_management/Pages/user/formtwo.php');
}

?>
