<?php



include('connection.php');

if(isset($_POST['submit'])){
  
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $roles = $_POST['roles'];

    echo $name;

    $sql_ins = "INSERT INTO `user_info` (`name`, `email`, `password`, `roles`)
     VALUES  ('$name', '$email' , '$password' , '$roles')";
    $result = mysqli_query($conn, $sql_ins);
    
    if($result){
        echo '<script>alert("Data submitted successfully");</script>';
        header('refresh:0; url= http://localhost/user_management/Pages/user/Registration.php');
    }
    else{
        echo '<script>alert("Something went wrong....")</script>';
        header('refresh:0; url= http://localhost/user_management/Pages/user/Registration.php');
    }
   
}

else{
    echo '<script>alert("Something went wrong....")</script>';
    header('refresh:0; url= http://localhost/user_management/Pages/user/Registration.php');
}
