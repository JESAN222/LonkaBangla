<?php
session_start();
$email = $_SESSION['email'];
if (empty($_SESSION['email'])) {
    header("Location:http://localhost/user_management/index.php");
}
include('connection.php');
$recv = $_REQUEST['id'];
$sql = "SELECT * FROM `bo_account` WHERE `id`=$recv";
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

        <div class="container mt-1 pt-1 mb-1 pb-1">

            <h3 class="my-4 text-center">LankaBangla Securities Form 2 </h3>
            <hr> 
            <form action="http://localhost/user_management/Pages/Admin/UpdatedTow.php?id=<?php echo $row['Id']; ?>" method="POST">
            <!-- First section -->
                <p class="catagori">Name of the CDBL Participant</p>
                <p class="hrr"></p>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Application:</label>
                    <input type="txt" name="boApplication" class="form-control" id="inputEmail4" value="<?php echo $row['boApplication'] ?>">
                    </div>

                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Date:</label>
                    <input type="txt" name="boDate" class="form-control" id="inputPassword4" value="<?php echo $row['boDate'] ?>">
                    </div>
                </div>

                <div class="form-row">

                    <div class="form-group col-md-4">
                    <label for="inputCity">CDBL Participent ID</label>
                    <input name="boCDBLParticipentId" type="text" class="form-control" id="inputCity" value="<?php echo $row['boCDBLParticipentId'] ?>">
                    </div>

                    <div class="form-group col-md-4">
                    <label for="inputCity">BO ID</label>
                    <input name="boBoId" type="text" class="form-control" id="inputCity" value="<?php echo $row['boBoId'] ?>">
                    </div>
                    
                    <div class="form-group col-md-4">
                    <label for="inputZip">Date Accoutn Opened</label>
                    <input name="boDateAccoutnOpened" type="text" class="form-control" id="inputZip" value="<?php echo $row['boDateAccoutnOpened'] ?>">
                    </div>
                </div>
                

                <!-- 3rd section -->
                <p class="catagori">1 First Application</p>
                <p class="hrr"></p>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Name  in full of Account:</label>
                    <input name="boNameAccount" type="txt" class="form-control" id="inputEmail4" value="<?php echo $row['boNameAccount'] ?>">
                    </div>

                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Title Mr/MRS/Ms:</label>
                    <input name="boTitleMr" type="txt" class="form-control" id="inputPassword4" value="<?php echo $row['boTitleMr'] ?>">
                    </div>
                </div>

                <div class="form-row">

                    <div class="form-group col-md-4">
                    <label for="inputCity">Name of Contact Persion</label>
                    <input name="boNameContactPersion" type="text" class="form-control" id="inputCity" value="<?php echo $row['boNameContactPersion'] ?>">
                    </div>

                    <div class="form-group col-md-4">
                    <label for="inputCity">Gender</label>
                    <input name="boGender" type="text" class="form-control" id="inputCity" value="<?php echo $row['boGender'] ?>">
                    </div>
                    
                    <div class="form-group col-md-4">
                    <label for="inputZip">Occupation</label>
                    <input name="boOccupation" type="text" class="form-control" id="inputZip" value="<?php echo $row['boOccupation'] ?>">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Father's / Husband Name:</label>
                    <input name="boFatherOrHusbandName" type="txt" class="form-control" id="inputEmail4" value="<?php echo $row['boFatherOrHusbandName'] ?>">
                    </div>

                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Mother Name:</label>
                    <input name="boMotherName" type="txt" class="form-control" id="inputPassword4" value="<?php echo $row['boMotherName'] ?>">
                    </div>
                </div>

                <p class="catagori">2 Contact Details</p>
                <p class="hrr"></p>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputCity">Address</label>
                    <input name="boAddress" type="text" class="form-control" id="inputCity" value="<?php echo $row['boAddress'] ?>">
                    </div>

                    <div class="form-group col-md-4">
                    <label for="inputCity">City</label>
                    <input name="boCity" type="text" class="form-control" id="inputCity" value="<?php echo $row['boCity'] ?>">
                    </div>
                    
                    <div class="form-group col-md-4">
                    <label for="inputZip">Post Code</label>
                    <input name="boPostCode" type="text" class="form-control" id="inputZip" value="<?php echo $row['boPostCode'] ?>">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputCity">State</label>
                    <input name="boState" type="text" class="form-control" id="inputCity" value="<?php echo $row['boState'] ?>">
                    </div>

                    <div class="form-group col-md-4">
                    <label for="inputCity">Country</label>
                    <input name="boCountry" type="text" class="form-control" id="inputCity" value="<?php echo $row['boCountry'] ?>">
                    </div>
                    
                    <div class="form-group col-md-4">
                    <label for="inputZip">Telephone</label>
                    <input name="boTelephone" type="text" class="form-control" id="inputZip" value="<?php echo $row['boTelephone'] ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputCity">Mobile</label>
                    <input name="boMobile" type="text" class="form-control" id="inputCity" value="<?php echo $row['boMobile'] ?>">
                    </div>

                    <div class="form-group col-md-4">
                    <label for="inputCity">Fax</label>
                    <input name="boFax" type="text" class="form-control" id="inputCity" value="<?php echo $row['boFax'] ?>">
                    </div>
                    
                    <div class="form-group col-md-4">
                    <label for="inputZip">Email</label>
                    <input name="boEmail" type="email" class="form-control" id="inputZip" value="<?php echo $row['boEmail'] ?>">
                    </div>
                </div>


                <p class="catagori">3 Passport Details</p>
                <p class="hrr"></p>
                <div class="form-row">
                    <div class="form-group col-md-3">
                    <label for="inputCity">Passport No</label>
                    <input name="boPassportNo" type="text" class="form-control" id="inputCity" value="<?php echo $row['boPassportNo'] ?>">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputCity">Issue Place</label>
                    <input name="boIssuePlace" type="text" class="form-control" id="inputCity" value="<?php echo $row['boIssuePlace'] ?>">
                    </div>
                    
                    <div class="form-group col-md-3">
                    <label for="inputZip">Issue Date</label>
                    <input name="boIssueDate" type="txt" class="form-control" id="inputZip" value="<?php echo $row['boIssueDate'] ?>">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputZip">Expire Date</label>
                    <input name="boExpireDate" type="txt" class="form-control" id="inputZip" value="<?php echo $row['boExpireDate'] ?>">
                    </div>
                </div>


                <p class="catagori">4 Bank Details</p>
                <p class="hrr"></p>
                <div class="form-row">
                    <div class="form-group col-md-3">
                    <label for="inputCity">Bank Name</label>
                    <input name="boBankName" type="text" class="form-control" id="inputCity" value="<?php echo $row['boBankName'] ?>">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputCity">Branch Name</label>
                    <input name="boBranchName" type="text" class="form-control" id="inputCity" value="<?php echo $row['boBranchName'] ?>">
                    </div>
                    
                    <div class="form-group col-md-3">
                    <label for="inputZip">Account No</label>
                    <input name="boAccountNo" type="txt" class="form-control" id="inputZip" value="<?php echo $row['boAccountNo'] ?>">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputZip">Routing No</label>
                    <input name="boRoutingNo" type="txt" class="form-control" id="inputZip" value="<?php echo $row['boRoutingNo'] ?>">
                    </div>
                </div>
                

             <div class="form-row">

             <div class="form-group col-md-3">
                <label for="inputZip">Electronic Divident </label>
                <?php 
                $chkk1 = "";
                $chkk2 = "";
                if($row['boElectronicDivident'] == "Yes")
                {
                    $chkk1 = "checked";
                }
                else{
                    $chkk2 = "checked";
                }
                  ?>
                <div class="form-check form-check-inline">
                <input name="boElectronicDivident" class="form-check-input" type="checkbox" id="inlineCheckbox1" <?php echo $chkk1; ?> value="Yes">
                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                <input name="boElectronicDivident" class="form-check-input" type="checkbox" id="inlineCheckbox2" <?php echo $chkk2; ?> value="No">
                <label class="form-check-label" for="inlineCheckbox2">No</label>
                </div>
                </div>

                <?php 
                $chkk3 = "";
                $chkk4 = "";
                if($row['boTexExemption'] == "Yes")
                {
                    $chkk3 = "checked";
                }
                else{
                    $chkk4 = "checked";
                }
                  ?>
                <div class="form-group col-md-3">
                <label for="inputZip">Tex Exemption  </label>
                <div class="form-check form-check-inline">
                <input name="boTexExemption" class="form-check-input" type="checkbox" id="inlineCheckbox1" <?php echo $chkk3; ?> value="Yes">
                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                <input name="boTexExemption" class="form-check-input" type="checkbox" id="inlineCheckbox2" <?php echo $chkk4; ?> value="No">
                <label class="form-check-label" for="inlineCheckbox2">No</label>
                </div>
                </div>
                <p>Tin/TAX ID   </p>
                <div class="form-group col-md-3">
                <input name="boTinTAXId" type="txt" class="form-control" id="inputZip" value="<?php echo $row['boTinTAXId'] ?>">
                </div>
             </div>


             <p class="catagori">5 Other Information</p>
             <p class="hrr"></p>
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="inputCity">Nationality</label>
                <input name="boNationality" type="text" class="form-control" id="inputCity" value="<?php echo $row['boNationality'] ?>">
                </div>

                <div class="form-group col-md-4">
                <label for="inputCity">Date of Birt</label>
                <input name="boDateofBirt" type="text" class="form-control" id="inputCity" value="<?php echo $row['boDateofBirt'] ?>">
                </div>
                
                <div class="form-group col-md-4">
                <label for="inputZip">Internal Ref</label>
                <input name="boInternalRef" type="text" class="form-control" id="inputZip" value="<?php echo $row['boInternalRef'] ?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="inputCity">Company</label>
                <input name="boCompany" type="text" class="form-control" id="inputCity" value="<?php echo $row['boCompany'] ?>">
                </div>

                <div class="form-group col-md-4">
                <label for="inputCity">Date of Registration</label>
                <input name="boDateofRegistration" type="text" class="form-control" id="inputCity" value="<?php echo $row['boDateofRegistration'] ?>">
                </div>
                
                <div class="form-group col-md-4">
                <label for="inputZip">Registration No</label>
                <input name="boRegistrationNo" type="text" class="form-control" id="inputZip" value="<?php echo $row['boRegistrationNo'] ?>">
                </div>
            </div>



            <p class="catagori">6 Joint Application (Second Account Holder) </p>
            <p class="hrr"></p>
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="inputCity">Name in Full</label>
                <input name="boNameInFull" type="text" class="form-control" id="inputCity" value="<?php echo $row['boNameInFull'] ?>">
                </div>

                <div class="form-group col-md-4">
                <label for="inputCity">Name of Account Holder</label>
                <input name="boNameAccountHolder" type="text" class="form-control" id="inputCity" value="<?php echo $row['boNameAccountHolder'] ?>">
                </div>
                
                <div class="form-group col-md-4">
                <label for="inputZip">Mr/Mrs / Ms</label>
                <input name="boMrMrsMs" type="text" class="form-control" id="inputZip" value="<?php echo $row['boMrMrsMs'] ?>">
                </div>
            </div>
            
                <button type="submit" name="submit" class="btn btn-primary">Update</button>
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