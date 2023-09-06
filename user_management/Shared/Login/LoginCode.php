<?php



include('connection.php');

session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['log_value'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $log_value = $_POST['log_value'];


        $sql = "SELECT * FROM `user_info` WHERE `email`='$email' AND `password`='$password' AND `roles`='customer'";
        $result = mysqli_query($conn, $sql);
        $mysqlinumrows = mysqli_num_rows($result);

        if ($log_value == 'customer') {
            if ($mysqlinumrows) {
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header("Location:http://localhost/user_management/Pages/user/UserHome.php");
            } else {
                echo '<script>alert("Invalid Username or Password ");</script>';
                header("refresh:0; URL=http://localhost/user_management/index.php");
            }
        } else if ($log_value == 'Admin') {

            $sql1 = "SELECT * FROM `user_info` WHERE `email`='$email' AND `password`='$password' AND `roles`='admin'";
            $result1 = mysqli_query($conn, $sql1);
            $mysqlinumrows1 = mysqli_num_rows($result1);

            if ($mysqlinumrows1) {
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header("Location:http://localhost/user_management/pages/Admin/Home.php");
            } else {
                echo '<script>alert("Invalid Username or Password");</script>';
                header("refresh:0; URL=http://localhost/user_management/index.php");
            }
        }
        else if ($log_value == 'Manager') {

            $sql1 = "SELECT * FROM `user_info` WHERE `email`='$email' AND `password`='$password' AND `roles`='Manager'";
            $result1 = mysqli_query($conn, $sql1);
            $mysqlinumrows1 = mysqli_num_rows($result1);

            if ($mysqlinumrows1) {
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header("Location:http://localhost/user_management/pages/Admin/Manager.php");
            } else {
                echo '<script>alert("Invalid Username or Password");</script>';
                header("refresh:0; URL=http://localhost/user_management/index.php");
            }
        }
        else if ($log_value == 'Head') {

            $sql1 = "SELECT * FROM `user_info` WHERE `email`='$email' AND `password`='$password' AND `roles`='Head'";
            $result1 = mysqli_query($conn, $sql1);
            $mysqlinumrows1 = mysqli_num_rows($result1);

            if ($mysqlinumrows1) {
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header("Location:http://localhost/user_management/pages/Admin/Customer.php");
               
            } else {
                echo '<script>alert("Invalid Username or Password");</script>';
                header("refresh:0; URL=http://localhost/user_management/index.php");
            }
        }
        else {
            echo '<script>alert("Something went wrong");</script>';
            header("refresh:0; URL=http://localhost/user_management/index.php");
        }

        // Redirect to a different page after processing the form
        exit();
    } else {
        echo '<script>alert("Invalid Username or Password ");</script>';
        header("refresh:0; URL=http://localhost/user_management/index.php");
    }
}
