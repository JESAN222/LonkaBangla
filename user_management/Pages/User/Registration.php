<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<style>
    .btn-areas{
        width:75%;
    }
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
    background-image: radial-gradient( circle farthest-corner at 10% 20%, rgb(16 16 16) 0%, rgb(73 74 72) 90% );
}
.container {
  height: 100vh;
  width: 100%;
  align-items: center;
  display: flex;
  justify-content: center;
}

.card {
  border-radius: 10px;
  box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.3);
  width: 400px;
  height: auto;
  background-color: #ffffff;
  padding: 10px 30px;
}

.card_title {
  text-align: center;
  padding: 10px;
}

.card_title h1 {
  font-size: 26px;
  font-weight: bold;
}

.form input {
  margin: 10px 0;
  width: 100%;
  background-color: #e2e2e2;
  border: none;
  outline: none;
  padding: 12px 20px;
  border-radius: 4px;
}

.form button {
  background-color: #4796ff;
  color: #ffffff;
  font-size: 16px;
  outline: none;
  border-radius: 5px;
  border: none;
  padding: 8px 15px;
  width: 100%;
}

.card_terms {
  display: flex;
  align-items: center;
  padding: 10px;
}

.card_terms input[type="checkbox"] {
  background-color: #e2e2e2;
}

.card_terms span {
  margin: 5px;
  font-size: 13px;
}

.card a {
  color: #4796ff;
  text-decoration: none;
}
.d-flex.justify-content-center.mt-1.pt-1.signup {
    margin-top: -65px !important;
}


</style>
<body>

    <div class="">
        <?php include('../Admin/adminNavbar.php') ?>
    </div>

    <div class="btn-areas">
        <?php 
        include '../Admin/FormList.php'; 
        ?>
    </div>


    <div class="d-flex justify-content-center mt-1 pt-1 signup">
        <form action="http://localhost/user_management/Pages/user/submitForm.php" method="POST">
            <div class="container">
            <div class="card">
                <div class="card_title">
                <h1>Create Account</h1>
                <span>Already have an account?</span>
                </div>
                <div class="form">
            
                <input type="text" name="name" id="username" placeholder="Name" />
                <input type="email" name="email" placeholder="Email" id="email" />
                <!-- <input type="txt" name="roles" placeholder="Roles" id="email" /> -->
                <select name="roles" class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="User" >User</option>
                    <option value="Admin">Admin</option>
                    <option value="Customer">Customer</option>
                    <option value="Manager">Manager</option>
                </select>
                <input type="password" name="password" placeholder="Password" id="password" />
                <button name="submit" type="submit" id="submit">Registration</button>
             
                </div>
                <div class="card_terms">
                    <input type="checkbox" name="" id="terms"> <span>I have read and agree to the <a href="">Terms of Service</a></span>
                </div>
            </div>
            </div>

          
          <!-- <button type="submit" id="submit" class="btn btn-primary">Submit Form</button> -->
        </form>
    </div>

     

    <div class="bg-black py-2">
        <?php
        include('userFooter.php');
        ?>
    </div>

   
    <!-- Bootstrap CDN JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</body>

</html>