<?php




include('connection.php');

if(isset($_POST['submit'])){
  
    $kyBOId = $_POST['kyBOId'];
    $kyInternalReferenceNo = $_POST['kyInternalReferenceNo'];
    $kyCustomerAccountNo = $_POST['kyCustomerAccountNo'];
    $kyTypeofAccount = $_POST['kyTypeofAccount'];
    $kyNameofAccountOfficer = $_POST['kyNameofAccountOfficer'];
     $kySourceofFund = $_POST['kySourceofFund'];
     $kyOwnerofTheAccount = $_POST['kyOwnerofTheAccount'];
     $kyPassportNo = $_POST['kyPassportNo'];
     $kyphotocopy = $_POST['kyphotocopy'];
     $kyVoterIdCardNo = $_POST['kyVoterIdCardNo'];
    $kyphotocopy0 = $_POST['kyphotocopy0'];
    $kyNationalIdNo = $_POST['kyNationalIdNo'];
     $kyphotocopy1 = $_POST['kyphotocopy1'];
     $kyTinNo = $_POST['kyTinNo'];
     $kyphotocopy2 = $_POST['kyphotocopy2'];
    $kyVarRegNo = $_POST['kyVarRegNo'];
    $kyphotocopy3 = $_POST['kyphotocopy3'];
    $kyDrivingLicenseNo = $_POST['kyDrivingLicenseNo'];
    $kyphotocopy4 = $_POST['kyphotocopy4'];
    $kyDoesCustomer = $_POST['kyDoesCustomer'];
    $kyComments = $_POST['kyComments'];
   // echo $twenty_one;

    $sql_ins = "INSERT INTO `kyc_profile` (`status`, `kyBOId`, `kyInternalReferenceNo`, `kyCustomerAccountNo`, `kyTypeofAccount`, `kyNameofAccountOfficer`, `kySourceofFund`, `kyOwnerofTheAccount`, `kyPassportNo`, `kyphotocopy`, `kyVoterIdCardNo`, `kyphotocopy0`, `kyNationalIdNo`, `kyphotocopy1`, `kyTinNo`, `kyphotocopy2`, `kyVarRegNo`, `kyphotocopy3`, `kyDrivingLicenseNo`, `kyphotocopy4`, `kyDoesCustomer`, `kyComments`) VALUES  ('Pending', '$kyBOId', '$kyInternalReferenceNo', '$kyCustomerAccountNo' , '$kyTypeofAccount' , '$kyNameofAccountOfficer', '$kySourceofFund', '$kyOwnerofTheAccount', '$kyPassportNo', '$kyphotocopy', '$kyVoterIdCardNo', '$kyphotocopy0', '$kyNationalIdNo', '$kyphotocopy1', '$kyTinNo', '$kyphotocopy2', '$kyVarRegNo', '$kyphotocopy3', '$kyDrivingLicenseNo', '$kyphotocopy4', '$kyDoesCustomer', '$kyComments')";


    $result = mysqli_query($conn, $sql_ins);
    
    if($result){
        echo '<script>alert("Data submitted successfully");</script>';
        header('refresh:0; url= http:/ /localhost/user_management/Pages/user/FormFive.php');
    }
    else{
        echo '<script>alert("Not Success....")</script>';
        header('refresh:0; url= http://localhost/user_management/Pages/user/FormFive.php');
    }
   
}

else{
    echo '<script>alert("Something went wrong....")</script>';
    header('refresh:0; url= http://localhost/user_management/Pages/user/formFiveSubmit.php');
}
