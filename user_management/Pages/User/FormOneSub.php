<?php



include('connection.php');

if(isset($_POST['submit'])){
  
    $cuDate = $_POST['cuDate'];
    $cuAccountType = $_POST['cuAccountType'];
    $cuClientCode = $_POST['cuClienttCode'];
    $cuLinkCode = $_POST['cuLinkCode'];
    $cuNameCustomer = $_POST['cuNameCustomer'];
     $cuFatherName = $_POST['cuFatherName'];
     $cuMotherName = $_POST['cuMotherName'];
     $cuDateofBirth = $_POST['cuDateofBirth'];
     $cuSex = $_POST['cuSex'];
     $cuNationality = $_POST['cuNationality'];
    $cuPresentAddress = $_POST['cuPresentAddress'];
    $cuMobile = $_POST['cuMobile'];
     $cuTels = $_POST['cuTels'];
     $cuPermanentAddress = $_POST['cuPermanentAddress'];
     $cuTel = $_POST['cuTel'];

    $cuEmailId = $_POST['cuEmailId'];
    $cuOccupation = $_POST['cuOccupation'];
    $cuEtin = $_POST['cuEtin'];
    $cuNameHolder = $_POST['cuNameHolder'];
    $cuJointFatherName = $_POST['cuJointFatherName'];



    $cuJointMotherName = $_POST['cuJointMotherName'];
    $cuJointDateofBirth = $_POST['cuJointDateofBirth'];
    $cuJointSex = $_POST['cuJointSex'];
    $cuJointNationality = $_POST['cuJointNationality'];
    $cuJointPresentAddress = $_POST['cuJointPresentAddress'];
    //jagtfd

    $cuJointMobile = $_POST['cuJointMobile'];
    $cuJointTels = $_POST['cuJointTels'];
    $cuJointPermanentAddress = $_POST['cuJointPermanentAddress'];
    $cuJointTel = $_POST['cuJointTel'];
    $cuJointEmailId = $_POST['cuJointEmailId'];





    $cuJointOccupation = $_POST['cuJointOccupation'];
    $cuJointEtin = $_POST['cuJointEtin'];
    $cuAuthorizedName = $_POST['cuAuthorizedName'];
    $cuAuthorizedFatherName = $_POST['cuAuthorizedFatherName'];
    $cuAuthorizedDateofBirth = $_POST['cuAuthorizedDateofBirth'];

    $cuAuthorizedSex = $_POST['cuAuthorizedSex'];
    $cuAuthorizedNationality = $_POST['cuAuthorizedNationality'];
    $cuAuthorizedPresentAddress = $_POST['cuAuthorizedPresentAddress'];
    $cuAuthorizedMobile = $_POST['cuAuthorizedMobile'];
    $cuAuthorizedTels = $_POST['cuAuthorizedTels'];



    $cuAuthorizedPermanentAddress = $_POST['cuAuthorizedPermanentAddress'];
    $cuAuthorizedTel = $_POST['cuAuthorizedTel'];
    $cuAuthorizedEmailId = $_POST['cuAuthorizedEmailId'];
    $cuAuthorizedOccupation = $_POST['cuAuthorizedOccupation'];
    $cuAuthorizedEtin = $_POST['cuAuthorizedEtin'];
    $cuBankName = $_POST['cuBankName'];
    $cuBranchName = $_POST['cuBranchName'];
    $cuAccountNo = $_POST['cuAccountNo'];
    $cuRoutingNo = $_POST['cuRoutingNo'];

   // echo $twenty_one;



   $sql_ins = "INSERT INTO `Customer_Account` (`status`, `m_status`, `cuDate`, `cuAccountType`, `cuClientCode`, `cuLinkCode`, `cuNameCustomer`, `cuFatherName`, `cuMotherName`, `cuDateofBirth`, `cuSex`, `cuNationality`, `cuPresentAddress`, `cuMobile`, `cuTels`, `cuPermanentAddress`, `cuTel`, `cuEmailId`, `cuOccupation`, `cuEtin`, `cuNameHolder`, `cuJointFatherName`, `cuJointMotherName`, `cuJointDateofBirth`, `cuJointSex`, `cuJointNationality`, `cuJointPresentAddress`, `cuJointMobile`, `cuJointTels`, `cuJointPermanentAddress`, `cuJointTel`, `cuJointEmailId`, `cuJointOccupation`, `cuJointEtin`, `cuAuthorizedName`, `cuAuthorizedFatherName`, `cuAuthorizedDateofBirth`, `cuAuthorizedSex`, `cuAuthorizedNationality`, `cuAuthorizedPresentAddress`, `cuAuthorizedMobile`, `cuAuthorizedTels`, `cuAuthorizedPermanentAddress`, `cuAuthorizedTel`, `cuAuthorizedEmailId`, `cuAuthorizedOccupation`, `cuAuthorizedEtin`, `cuBankName`, `cuBranchName`, `cuAccountNo`, `cuRoutingNo`) VALUES  ('Pending', 'Pending', '$cuDate', '$cuAccountType', '$cuClientCode', '$cuLinkCode' , '$cuNameCustomer' , '$cuFatherName', '$cuMotherName', '$cuDateofBirth', '$cuSex', '$cuNationality', '$cuPresentAddress', '$cuMobile', '$cuTels', '$cuPermanentAddress', '$cuTel', '$cuEmailId', '$cuOccupation', '$cuEtin', '$cuNameHolder', '$cuJointFatherName', '$cuJointMotherName', '$cuJointDateofBirth', '$cuJointSex', '$cuJointNationality', '$cuJointPresentAddress', '$cuJointMobile', '$cuJointTels', '$cuJointPermanentAddress', '$cuJointTel', '$cuJointEmailId', '$cuJointOccupation', '$cuJointEtin', '$cuAuthorizedName', '$cuAuthorizedFatherName', '$cuAuthorizedDateofBirth', '$cuAuthorizedSex', '$cuAuthorizedNationality', '$cuAuthorizedPresentAddress', '$cuAuthorizedMobile', '$cuAuthorizedTels', '$cuAuthorizedPermanentAddress', '$cuAuthorizedTel', '$cuAuthorizedEmailId', '$cuAuthorizedOccupation', '$cuAuthorizedEtin', '$cuBankName', '$cuBranchName', '$cuAccountNo', '$cuRoutingNo')";

    $result = mysqli_query($conn, $sql_ins);
    if($result){
        echo '<script>alert("Data submitted successfully");</script>';
        header('refresh:0; url= http://localhost/user_management/Pages/user/formone.php');
    }
    else{
        echo '<script>alert("Something went wrong....")</script>';
        header('refresh:0; url= http://localhost/user_management/Pages/user/formone.php');
    }   
}

else{
    echo '<script>alert("Something went wrong....")</script>';
    header('refresh:0; url= http://localhost/user_management/Pages/user/formone.php');
}
