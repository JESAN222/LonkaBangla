<?php
session_start();
$email = $_SESSION['email'];
if (empty($_SESSION['email'])) {
    header("Location:http://localhost/user_management/index.php");
}
include('connection.php');
$recv = $_REQUEST['id'];
$sql = "SELECT * FROM `Customer_Account` WHERE `id`=$recv";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {

?>
<!DOCTYPE html>
<html lang="en">
 <!-- <input type="text" class="form-control mb-2" name="name" value="<?php echo $row['one'] ?>"> -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form2</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<style>
    .catagori{
        color:red;
    }
    .hrr{
        margin-top: -0.6rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, 1.1);
    }
</style>
<body>



    <!DOCTYPE html>
    <html>

    <head>
        <title>Two-Column Form</title>
        <!-- Add Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>

        <div class="">
            <?php include('adminNavbar.php') ?>
        </div>

        <div class="container mt-5 pt-4 mb-5 pb-5">

<h3 class="my-4 text-center">LankaBangla Securities Form 1 </h3>
<hr>
<form action="http://localhost/user_management/Pages/Admin/UpdatedOne.php?id=<?php echo $row['Id']; ?>" method="POST">
<!-- First section -->
    <p class="catagori">Customer Account Information</p>
    <p class="hrr"></p>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4">Date:</label>
        <input type="txt" name="one" class="form-control" id="inputEmail4" value="<?php echo $row['cuDate'] ?>">
        </div>

        <div class="form-group col-md-6">
        <label for="inputPassword4">Account Type:</label>
        <input type="txt" name="two" class="form-control" id="inputPassword4" value="<?php echo $row['cuAccountType'] ?>">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4">Clinet Code:</label>
        <input type="txt" name="three" class="form-control" id="inputEmail4" value="<?php echo $row['cuClientCode'] ?>">
        </div>

        <div class="form-group col-md-6">
        <label for="inputPassword4">Link Code:</label>
        <input type="txt" name="four" class="form-control" id="inputPassword4" value="<?php echo $row['cuLinkCode'] ?>">
        </div>
    </div>

    <!-- Two section -->
    <p class="catagori">First Account Holder</p>
    <p class="hrr"></p>
    <div class="form-row">
        <div class="form-group col-md-3">
        <label for="inputCity">Name of the customer</label>
        <input name="five" type="text" class="form-control" id="inputCity" value="<?php echo $row['cuNameCustomer'] ?>">
        </div>

        <div class="form-group col-md-3">
        <label for="inputCity">Father Name</label>
        <input name="six" type="text" class="form-control" id="inputCity" value="<?php echo $row['cuFatherName'] ?>">
        </div>
        
        <div class="form-group col-md-3">
        <label for="inputZip">Mother Name</label>
        <input name="seven" type="txt" class="form-control" id="inputZip" value="<?php echo $row['cuMotherName'] ?>">
        </div>

        <div class="form-group col-md-3">
        <label for="inputZip">Date of Birth</label>
        <input name="eight" type="txt" class="form-control" id="inputZip" value="<?php echo $row['cuDateofBirth'] ?>">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-3">
        <label for="inputCity">Sex</label>
        <input name="nine" type="text" class="form-control" id="inputCity" value="<?php echo $row['cuSex'] ?>">
        </div>

        <div class="form-group col-md-3">
        <label for="inputCity">Nationality</label>
        <input name="ten" type="text" class="form-control" id="inputCity" value="<?php echo $row['cuNationality'] ?>">
        </div>
        
        <div class="form-group col-md-3">
        <label for="inputZip">Present Address</label>
        <input name="eleven" type="txt" class="form-control" id="inputZip" value="<?php echo $row['cuPresentAddress'] ?>">
        </div>

        <div class="form-group col-md-3">
        <label for="inputZip">Mobile</label>
        <input name="twelve" type="txt" class="form-control" id="inputZip" value="<?php echo $row['cuMobile'] ?>">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-3">
        <label for="inputCity">Tel#</label>
        <input name="thirteen" type="text" class="form-control" id="inputCity" value="<?php echo $row['cuTels'] ?>">
        </div>

        <div class="form-group col-md-3">
        <label for="inputCity">Permanent Address</label>
        <input name="fourteen" type="text" class="form-control" id="inputCity" value="<?php echo $row['cuPermanentAddress'] ?>">
        </div>
        
        <div class="form-group col-md-3">
        <label for="inputZip">Tel</label>
        <input name="fifteen" type="txt" class="form-control" id="inputZip" value="<?php echo $row['cuTel'] ?>">
        </div>

        <div class="form-group col-md-3">
        <label for="inputZip">Email ID</label>
        <input name="sixteen" type="email" class="form-control" id="inputZip" value="<?php echo $row['cuEmailId'] ?>">
        </div>
    </div>
    
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4">Occupation</label>
        <input type="txt" name="seventeen" class="form-control" id="inputEmail4" value="<?php echo $row['cuOccupation'] ?>">
        </div>

        <div class="form-group col-md-6">
        <label for="inputPassword4">E-Tin#</label>
        <input type="txt" name="eighteen" class="form-control" id="inputPassword4" value="<?php echo $row['cuEtin'] ?>">
        </div>
    </div>

    <!-- Thirs Section -->
    <p class="catagori">Joint Account Holder</p>
    <p class="hrr"></p>
    <div class="form-row">
        <div class="form-group col-md-3">
        <label for="inputCity">Name of the Joint Acc Holder</label>
        <input name="nineteen" type="text" class="form-control" id="inputCity" value="<?php echo $row['cuNameHolder'] ?>">
        </div>

        <div class="form-group col-md-3">
        <label for="inputCity">Father Name</label>
        <input name="twenty" type="text" class="form-control" id="inputCity" value="<?php echo $row['cuJointFatherName'] ?>">
        </div>
        
        <div class="form-group col-md-3">
        <label for="inputZip">Mother Name</label>
        <input name="twenty_one" type="txt" class="form-control" id="inputZip" value="<?php echo $row['cuJointMotherName'] ?>">
        </div>

        <div class="form-group col-md-3">
        <label for="inputZip">Date of Birth</label>
        <input name="twenty_two" type="txt" class="form-control" id="inputZip" value="<?php echo $row['cuJointDateofBirth'] ?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
        <label for="inputCity">Sex</label>
        <input name="twenty_three" type="text" class="form-control" id="inputCity" value="<?php echo $row['cuJointSex'] ?>">
        </div>

        <div class="form-group col-md-3">
        <label for="inputCity">Nationality</label>
        <input name="twenty_four" type="text" class="form-control" id="inputCity" value="<?php echo $row['cuJointNationality'] ?>">
        </div>
        
        <div class="form-group col-md-3">
        <label for="inputZip">Present Address</label>
        <input name="twenty_five" type="txt" class="form-control" id="inputZip" value="<?php echo $row['cuJointPresentAddress'] ?>">
        </div>

        <div class="form-group col-md-3">
        <label for="inputZip">Mobile</label>
        <input name="twenty_six" type="txt" class="form-control" id="inputZip" value="<?php echo $row['cuJointMobile'] ?>">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-3">
        <label for="inputCity">Tel#</label>
        <input name="twenty_seven" type="text" class="form-control" id="inputCity" value="<?php echo $row['cuJointTels'] ?>">
        </div>

        <div class="form-group col-md-3">
        <label for="inputCity">Permanent Address</label>
        <input name="twenty_eight" type="text" class="form-control" id="inputCity" value="<?php echo $row['cuJointPermanentAddress'] ?>">
        </div>
        
        <div class="form-group col-md-3">
        <label for="inputZip">Tel</label>
        <input name="twenty_nine" type="txt" class="form-control" id="inputZip" value="<?php echo $row['cuJointTel'] ?>">
        </div>

        <div class="form-group col-md-3">
        <label for="inputZip">Email ID</label>
        <input name="thirty" type="email" class="form-control" id="inputZip" value="<?php echo $row['cuJointEmailId'] ?>">
        </div>
    </div>
    
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4">Occupation</label>
        <input type="txt" name="thirty_one" class="form-control" id="inputEmail4" value="<?php echo $row['cuJointOccupation'] ?>">
        </div>

        <div class="form-group col-md-6">
        <label for="inputPassword4">E-Tin#</label>
        <input type="txt" name="thirty_two" class="form-control" id="inputPassword4" value="<?php echo $row['cuJointEtin'] ?>">
        </div>
    </div>


    <!-- Fourt Section -->
    <p class="catagori">Authorized Persion Information</p>
    <p class="hrr"></p>
    <div class="form-row">
        <div class="form-group col-md-4">
        <label for="inputCity">Name of</label>
        <input name="thirty_three" type="text" class="form-control" id="inputCity" value="<?php echo $row['cuAuthorizedName'] ?>">
        </div>

        <div class="form-group col-md-4">
        <label for="inputCity">Father Name</label>
        <input name="thirty_four" type="text" class="form-control" id="inputCity" value="<?php echo $row['cuAuthorizedFatherName'] ?>">
        </div>
        
        <div class="form-group col-md-4">
        <label for="inputZip">Date of Birth</label>
        <input name="thirty_five" type="txt" class="form-control" id="inputZip" value="<?php echo $row['cuAuthorizedDateofBirth'] ?>">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-3">
        <label for="inputCity">Sex</label>
        <input name="thirty_six" type="text" class="form-control" id="inputCity" value="<?php echo $row['cuAuthorizedSex'] ?>">
        </div>

        <div class="form-group col-md-3">
        <label for="inputCity">Nationality</label>
        <input name="thirty_seven" type="text" class="form-control" id="inputCity" value="<?php echo $row['cuAuthorizedNationality'] ?>">
        </div>
        
        <div class="form-group col-md-3">
        <label for="inputZip">Present Address</label>
        <input name="thirty_eight" type="txt" class="form-control" id="inputZip" value="<?php echo $row['cuAuthorizedPresentAddress'] ?>">
        </div>

        <div class="form-group col-md-3">
        <label for="inputZip">Mobile</label>
        <input name="thirty_nine" type="txt" class="form-control" id="inputZip" value="<?php echo $row['cuAuthorizedMobile'] ?>">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-3">
        <label for="inputCity">Tel#</label>
        <input name="forty" type="text" class="form-control" id="inputCity" value="<?php echo $row['cuAuthorizedTels'] ?>">
        </div>

        <div class="form-group col-md-3">
        <label for="inputCity">Permanent Address</label>
        <input name="forty_one" type="text" class="form-control" id="inputCity" value="<?php echo $row['cuAuthorizedPermanentAddress'] ?>">
        </div>
        
        <div class="form-group col-md-3">
        <label for="inputZip">Tel</label>
        <input name="forty_two" type="txt" class="form-control" id="inputZip" value="<?php echo $row['cuAuthorizedTel'] ?>">
        </div>

        <div class="form-group col-md-3">
        <label for="inputZip">Email ID</label>
        <input name="forty_three" type="email" class="form-control" id="inputZip" value="<?php echo $row['cuAuthorizedEmailId'] ?>">
        </div>
    </div>
    
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4">Occupation</label>
        <input type="txt" name="forty_four" class="form-control" id="inputEmail4" value="<?php echo $row['cuAuthorizedOccupation'] ?>">
        </div>

        <div class="form-group col-md-6">
        <label for="inputPassword4">E-Tin#</label>
        <input type="txt" name="forty_five" class="form-control" id="inputPassword4" value="<?php echo $row['cuAuthorizedEtin'] ?>">
        </div>
    </div>

    <p class="hrr"></p>
    <div class="form-row">
        <div class="form-group col-md-3">
        <label for="inputCity">Bank Name</label>
        <input name="forty_six" type="text" class="form-control" id="inputCity" value="<?php echo $row['cuBankName'] ?>">
        </div>

        <div class="form-group col-md-3">
        <label for="inputCity">Branch Name</label>
        <input name="forty_seven" type="text" class="form-control" id="inputCity" value="<?php echo $row['cuBranchName'] ?>">
        </div>
        
        <div class="form-group col-md-3">
        <label for="inputZip">Account No</label>
        <input name="forty_eight" type="txt" class="form-control" id="inputZip" value="<?php echo $row['cuAccountNo'] ?>">
        </div>

        <div class="form-group col-md-3">
        <label for="inputZip">Routing No</label>
        <input name="forty_nine" type="txt" class="form-control" id="inputZip" value="<?php echo $row['cuRoutingNo'] ?>">
        </div>
    </div>            
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php
}
?>
        <div class="bg-black py-2">
            <?php
            include('adminFooter.php');
            ?>
        </div>

        <!-- Add Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>

    </html>


    <!-- Bootstrap CDN JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>