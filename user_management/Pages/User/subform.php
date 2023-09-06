<?php



include('connection.php');

if(isset($_POST['Id']) && isset($_POST['name']) && isset($_POST['course']) && isset($_POST['mobile']) && isset($_POST['gender'])){
  
    $Id = $_POST['Id'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];

    echo $name;

    $sql_ins = "INSERT INTO `testcustomer` (`sid`, `sname`, `scourse`, `sphone`, `sgender`)
     VALUES  ('$Id', '$name', '$course' , '$mobile' , '$gender')";
    $result = mysqli_query($conn, $sql_ins);
    
    if($result){
        echo '<script>alert("Data submitted successfully");</script>';
        header('refresh:0; url= http://localhost/user_management/Pages/user/formone.php');
    }
    else{
        echo '<script>alert("Something went wrong....")</script>';
        header('refresh:0; url= http://localhost/user_management/Pages/user/formone.php');
    }
    echo '<script>alert("Successsssss....")</script>';
}

else{
    echo '<script>alert("Something went wrong....")</script>';
    header('refresh:0; url= http://localhost/user_management/Pages/user/formone.php');
}
