<!DOCTYPE html>
<html lang="en">

<head>

    <title>Form one</title>
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
    .container.mt-5.pt-4.mb-5.pb-5 {
    margin-top: -37px !important;
    }
</style>
<body>



    <!DOCTYPE html>
    <html>

    <head>
        <title>Customer</title>
        <!-- Add Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>

        <div class="">
        <?php include('../User/userNavbar.php') ?>
        </div>

        <div class="container mt-5 pt-4 mb-5 pb-5">

            <h3 class="my-4 text-center">Customer Form</h3>
            <hr>
            <form action="http://localhost/user_management/Pages/user/FormOneSub.php" method="POST">
            <!-- First section -->
                <p class="catagori">Customer Account Information</p>
                <p class="hrr"></p>
                
                <div class="form-row">

                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Date:</label>
                    <input type="txt" required name="cuDate" class="form-control" id="inputEmail4" placeholder="Date">
                    </div>

                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Account Type:</label>
                    <input type="txt" required name="cuAccountType" class="form-control" id="inputPassword4" placeholder="Account Type">
                    </div>
                   </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Clinet Code:</label>
                    <input type="txt" required name="cuClientCode" class="form-control" id="inputEmail4" placeholder="Clinet Code">
                    </div>

                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Link Code:</label>
                    <input type="txt" required name="cuLinkCode" class="form-control" id="inputPassword4" placeholder="Link Code">
                    </div>
            </div>



                <!-- Two section -->
                <p class="catagori">First Account Holder</p>
                <p class="hrr"></p>
                <div class="form-row">
                    <div class="form-group col-md-3">
                    <label for="inputCity">Name of the customer</label>
                    <input required name="cuNameCustomer" type="text" class="form-control" id="inputCity" placeholder="Name of the customer">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputCity">Father Name</label>
                    <input required name="cuFatherName" type="text" class="form-control" id="inputCity" placeholder="Father Name">
                    </div>
                    
                    <div class="form-group col-md-3">
                    <label for="inputZip">Mother Name</label>
                    <input required name="cuMotherName" type="txt" class="form-control" id="inputZip" placeholder="Mother Name">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputZip">Date of Birth</label>
                    <input required name="cuDateofBirth" type="txt" class="form-control" id="inputZip" placeholder="Date of Birth">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                    <label for="inputCity">Sex</label>
                    <input required name="cuSex" type="text" class="form-control" id="inputCity" placeholder="Sex">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputCity">Nationality</label>
                    <input required name="cuNationality" type="text" class="form-control" id="inputCity" placeholder="Nationality">
                    </div>
                    
                    <div class="form-group col-md-3">
                    <label for="inputZip">Present Address</label>
                    <input required name="cuPresentAddress" type="txt" class="form-control" id="inputZip" placeholder="Present Address">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputZip">Mobile</label>
                    <input required name="cuMobile" type="txt" class="form-control" id="inputZip" placeholder="Mobile">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                    <label for="inputCity">Tel#</label>
                    <input required name="cuTels" type="text" class="form-control" id="inputCity" placeholder="Tel#">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputCity">Permanent Address</label>
                    <input required name="cuPermanentAddress" type="text" class="form-control" id="inputCity" placeholder="Permanent Address">
                    </div>
                    
                    <div class="form-group col-md-3">
                    <label for="inputZip">Tel</label>
                    <input required name="cuTel" type="txt" class="form-control" id="inputZip" placeholder="Tel">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputZip">Email ID</label>
                    <input required name="cuEmailId" type="email" class="form-control" id="inputZip" placeholder="Email ID">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Occupation</label>
                    <input type="txt" required name="cuOccupation" class="form-control" id="inputEmail4" placeholder="Occupation">
                    </div>

                    <div class="form-group col-md-6">
                    <label for="inputPassword4">E-Tin#</label>
                    <input type="txt" required name="cuEtin" class="form-control" id="inputPassword4" placeholder="E-Tin#">
                    </div>
                </div>

                <!-- Thirs Section -->
                <p class="catagori">Joint Account Holder</p>
                <p class="hrr"></p>
                <div class="form-row">
                    <div class="form-group col-md-3">
                    <label for="inputCity">Name of the Joint Acc Holder</label>
                    <input required name="cuNameHolder" type="text" class="form-control" id="inputCity" placeholder="Name of the Joint Acc Holder">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputCity">Father Name</label>
                    <input required name="cuJointFatherName" type="text" class="form-control" id="inputCity" placeholder="Father Name">
                    </div>
                    
                    <div class="form-group col-md-3">
                    <label for="inputZip">Mother Name</label>
                    <input required name="cuJointMotherName" type="txt" class="form-control" id="inputZip" placeholder="Mother Name">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputZip">Date of Birth</label>
                    <input required name="cuJointDateofBirth" type="txt" class="form-control" id="inputZip" placeholder="Date of Birth">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                    <label for="inputCity">Sex</label>
                    <input required name="cuJointSex" type="text" class="form-control" id="inputCity" placeholder="Sex">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputCity">Nationality</label>
                    <input required name="cuJointNationality" type="text" class="form-control" id="inputCity" placeholder="Nationality">
                    </div>
                    
                    <div class="form-group col-md-3">
                    <label for="inputZip">Present Address</label>
                    <input required name="cuJointPresentAddress" type="txt" class="form-control" id="inputZip" placeholder="Present Address">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputZip">Mobile</label>
                    <input required name="cuJointMobile" type="txt" class="form-control" id="inputZip" placeholder="Mobile">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                    <label for="inputCity">Tel#</label>
                    <input required name="cuJointTels" type="text" class="form-control" id="inputCity" placeholder="Tel#">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputCity">Permanent Address</label>
                    <input required name="cuJointPermanentAddress" type="text" class="form-control" id="inputCity" placeholder="Permanent Address">
                    </div>
                    
                    <div class="form-group col-md-3">
                    <label for="inputZip">Tel</label>
                    <input required name="cuJointTel" type="txt" class="form-control" id="inputZip" placeholder="Tel">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputZip">Email ID</label>
                    <input required name="cuJointEmailId" type="email" class="form-control" id="inputZip" placeholder="Email ID">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Occupation</label>
                    <input type="txt" required name="cuJointOccupation" class="form-control" id="inputEmail4" placeholder="Occupation">
                    </div>

                    <div class="form-group col-md-6">
                    <label for="inputPassword4">E-Tin#</label>
                    <input type="txt" required name="cuJointEtin" class="form-control" id="inputPassword4" placeholder="E-Tin#">
                    </div>
                </div>


                <!-- Fourt Section -->
                <p class="catagori">Authorized Persion Information</p>
                <p class="hrr"></p>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputCity">Name of</label>
                    <input required name="cuAuthorizedName" type="text" class="form-control" id="inputCity" placeholder="Name of the Joint Acc Holder">
                    </div>

                    <div class="form-group col-md-4">
                    <label for="inputCity">Father Name</label>
                    <input required name="cuAuthorizedFatherName" type="text" class="form-control" id="inputCity" placeholder="Father Name">
                    </div>
                    
                    <div class="form-group col-md-4">
                    <label for="inputZip">Date of Birth</label>
                    <input required name="cuAuthorizedDateofBirth" type="txt" class="form-control" id="inputZip" placeholder="Date of Birth">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                    <label for="inputCity">Sex</label>
                    <input required name="cuAuthorizedSex" type="text" class="form-control" id="inputCity" placeholder="Sex">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputCity">Nationality</label>
                    <input required name="cuAuthorizedNationality" type="text" class="form-control" id="inputCity" placeholder="Nationality">
                    </div>
                    
                    <div class="form-group col-md-3">
                    <label for="inputZip">Present Address</label>
                    <input required name="cuAuthorizedPresentAddress" type="txt" class="form-control" id="inputZip" placeholder="Present Address">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputZip">Mobile</label>
                    <input required name="cuAuthorizedMobile" type="txt" class="form-control" id="inputZip" placeholder="Mobile">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                    <label for="inputCity">Tel#</label>
                    <input required name="cuAuthorizedTels" type="text" class="form-control" id="inputCity" placeholder="Tel#">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputCity">Permanent Address</label>
                    <input required name="cuAuthorizedPermanentAddress" type="text" class="form-control" id="inputCity" placeholder="Permanent Address">
                    </div>
                    
                    <div class="form-group col-md-3">
                    <label for="inputZip">Tel</label>
                    <input required name="cuAuthorizedTel" type="txt" class="form-control" id="inputZip" placeholder="Tel">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputZip">Email ID</label>
                    <input required name="cuAuthorizedEmailId" type="email" class="form-control" id="inputZip" placeholder="Email ID">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Occupation</label>
                    <input type="txt" required name="cuAuthorizedOccupation" class="form-control" id="inputEmail4" placeholder="Occupation">
                    </div>

                    <div class="form-group col-md-6">
                    <label for="inputPassword4">E-Tin#</label>
                    <input type="txt" required name="cuAuthorizedEtin" class="form-control" id="inputPassword4" placeholder="E-Tin#">
                    </div>
                </div>

                <p class="hrr"></p>
                <div class="form-row">
                    <div class="form-group col-md-3">
                    <label for="inputCity">Bank Name</label>
                    <input required required name="cuBankName" type="text" class="form-control" id="inputCity" placeholder="Bank Name">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputCity">Branch Name</label>
                    <input required name="cuBranchName" type="text" class="form-control" id="inputCity" placeholder="Branch Name">
                    </div>
                    
                    <div class="form-group col-md-3">
                    <label for="inputZip">Account No</label>
                    <input required required name="cuAccountNo" type="txt" class="form-control" id="inputZip" placeholder="Account No">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputZip">Routing No</label>
                    <input required name="cuRoutingNo" type="txt" class="form-control" id="inputZip" placeholder="Routing No">
                    </div>
                </div>            
                <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>


        <div class="bg-black py-2">
            <?php
            include('userFooter.php');
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